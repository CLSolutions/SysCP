<?php

/**
 * This file is part of the SysCP project.
 * Copyright (c) 2003-2008 the SysCP Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Florian Lippert <flo@syscp.org>
 * @author     Martin Burchert <eremit@syscp.org>
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package    System
 * @version    $Id$
 */

/*
 * This script creates the php.ini's used by mod_suPHP+php-cgi
 */

if(@php_sapi_name() != 'cli'
   && @php_sapi_name() != 'cgi'
   && @php_sapi_name() != 'cgi-fcgi')
{
	die('This script only works in the shell.');
}

class lighttpd
{
	private $db = false;
	private $logger = false;
	private $debugHandler = false;
	private $settings = array();

	//	protected

	public $needed_htpasswds = array();
	public $auth_backend_loaded = false;
	public $htpasswd_files = array();
	public $mod_accesslog_loaded = "0";
	protected $lighttpd_data = array();

	function __construct($db, $logger, $debugHandler, $settings)
	{
		$this->db = $db;
		$this->logger = $logger;
		$this->debugHandler = $debugHandler;
		$this->settings = $settings;
	}

	public function reload()
	{
		fwrite($this->debugHandler, '   lighttpd::reload: reloading lighttpd' . "\n");
		$this->logger->logAction(CRON_ACTION, LOG_INFO, 'reloading apache');
		safe_exec($this->settings['system']['apachereload_command']);
	}

	public function createIpPort()
	{
		$query = "SELECT `id`, `ip`, `port`, `listen_statement`, `namevirtualhost_statement`, `vhostcontainer`, " . " `vhostcontainer_servername_statement`, `specialsettings`, `ssl`, `ssl_cert` " . " FROM `" . TABLE_PANEL_IPSANDPORTS . "` ORDER BY `ip` ASC, `port` ASC";
		$result_ipsandports = $this->db->query($query);

		while($row_ipsandports = $this->db->fetch_array($result_ipsandports))
		{
			if(filter_var($row_ipsandports['ip'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4))
			{
				$ip = $row_ipsandports['ip'];
				$port = $row_ipsandports['port'];
			}
			else
			{
				$ip = '[' . $row_ipsandports['ip'] . ']';
				$port = $row_ipsandports['port'];
			}

			fwrite($this->debugHandler, '  lighttpd::createIpPort: creating ip/port settings for  ' . $ip . ":" . $port . "\n");
			$this->logger->logAction(CRON_ACTION, LOG_INFO, 'creating ip/port settings for  ' . $ip . ":" . $port);
			$vhost_filename = makeCorrectFile($this->settings['system']['apacheconf_vhost'] . '/10_syscp_ipandport_' . trim(str_replace(':', '.', $row_ipsandports['ip']), '.') . '.' . $row_ipsandports['port'] . '.conf');
			$this->lighttpd_data[$vhost_filename].= '$SERVER["socket"] == "' . $ip . ':' . $port . '" {' . "\n";

			if($row_ipsandports['listen_statement'] == '1')
			{
				$this->lighttpd_data[$vhost_filename].= 'server.port = ' . $port . "\n";
				$this->lighttpd_data[$vhost_filename].= 'server.bind = "' . $ip . '"' . "\n";
			}

			if($row_ipsandports['ssl'] == '1')
			{
				$this->lighttpd_data[$vhost_filename].= 'ssl.engine = "enable"' . "\n";
				$this->lighttpd_data[$vhost_filename].= 'ssl.pemfile = "' . $row_ipsandports['ssl_cert'] . '"' . "\n";
			}

			$this->createLighttpdHosts($row_ipsandports['ip'], $row_ipsandports['port'], $row_ipsandports['ssl'], $vhost_filename);
			$this->lighttpd_data[$vhost_filename].= $this->needed_htpasswds[$row_ipsandports['id']] . "\n";
			$this->lighttpd_data[$vhost_filename].= '}' . "\n";
		}
	}

	protected function create_htaccess($domain)
	{
		$needed_htpasswds = array();
		$htpasswd_query = "SELECT * FROM " . TABLE_PANEL_HTPASSWDS . " WHERE `path` LIKE '" . $domain['documentroot'] . "%'";
		$result_htpasswds = $this->db->query($htpasswd_query);

		while($row_htpasswds = $this->db->fetch_array($result_htpasswds))
		{
			$filename = $row_htpasswds['customerid'] . '-' . md5($row_htpasswds['path']) . '.htpasswd';

			if(!in_array($row_htpasswds['path'], $needed_htpasswds))
			{
				if(empty($needed_htpasswds))
				{
					$auth_backend_loaded[$domain['ipandport']] = 'yes';

					if(!$this->auth_backend_loaded)
					{
						$htaccess_text.= '  auth.backend = "htpasswd"' . "\n";
					}

					$htaccess_text.= '  auth.backend.htpasswd.userfile = "' . makeCorrectDir($this->settings['system']['apacheconf_htpasswddir'] . '/' . $filename) . '"' . "\n";
					$htaccess_text.= '  auth.require = ( ' . "\n";
				}
				else
				{
					$htaccess_text.= '  ,' . "\n";
				}

				if(!strstr($this->needed_htpasswds[$filename], $row_htpasswds['username'] . ':' . $row_htpasswds['password']))
				{
					$this->needed_htpasswds[$filename].= $row_htpasswds['username'] . ':' . $row_htpasswds['password'] . "\n";
				}

				$needed_htpasswds[] = $row_htpasswds['path'];
				$htaccess_path = substr($row_htpasswds['path'], strlen($domain['documentroot']) - 1);
				$htaccess_text.= '    "' . makeCorrectDir($htaccess_path) . '" =>' . "\n";
				$htaccess_text.= '    (' . "\n";
				$htaccess_text.= '       "method"  => "basic",' . "\n";
				$htaccess_text.= '       "realm"   => "Restricted Area",' . "\n";
				$htaccess_text.= '       "require" => "user=' . $row_htpasswds[username] . '"' . "\n";
				$htaccess_text.= '    )' . "\n";
			}
		}

		if(strlen(trim($htaccess_text)) > 0)
		{
			$htaccess_text.= '  )' . "\n";
		}
		return $htaccess_text;
	}

	function createVirtualHosts()
	{
	}

	function createFileDirOptions()
	{
	}

	protected function createLighttpdHosts($ip, $port, $ssl, $vhost_filename)
	{
		$query = "SELECT * FROM " . TABLE_PANEL_IPSANDPORTS . " WHERE `ip`='" . $ip . "' AND `port`='" . $port . "'";
		$ipandport = $this->db->query_first($query);

		if($ssl == '0')
		{
			$query2 = "SELECT `d`.`id`, `d`.`domain`, `d`.`customerid`, `d`.`documentroot`, `d`.`ssl`, " . "`d`.`parentdomainid`, `d`.`ipandport`, `d`.`ssl_ipandport`, `d`.`ssl_redirect`, " . "`d`.`isemaildomain`, `d`.`iswildcarddomain`, `d`.`wwwserveralias`, `d`.`openbasedir`, `d`.`openbasedir_path`, " . "`d`.`safemode`, `d`.`speciallogfile`, `d`.`specialsettings`, `pd`.`domain` AS `parentdomain`, `c`.`loginname`, " . "`c`.`guid`, `c`.`email`, `c`.`documentroot` AS `customerroot`, `c`.`deactivated`, `c`.`phpenabled` AS `phpenabled` " . "FROM `" . TABLE_PANEL_DOMAINS . "` `d` LEFT JOIN `" . TABLE_PANEL_CUSTOMERS . "` `c` USING(`customerid`) " . "LEFT JOIN `" . TABLE_PANEL_DOMAINS . "` `pd` ON (`pd`.`id` = `d`.`parentdomainid`) " . "WHERE `d`.`ipandport`='" . $ipandport['id'] . "' " . "ORDER BY `d`.`iswildcarddomain`, `d`.`domain` ASC";
		}
		else
		{
			$query2.= "SELECT `d`.`id`, `d`.`domain`, `d`.`customerid`, `d`.`documentroot`, `d`.`ssl`, " . "`d`.`parentdomainid`, `d`.`ipandport`, `d`.`ssl_ipandport`, `d`.`ssl_redirect`, " . "`d`.`isemaildomain`, `d`.`iswildcarddomain`, `d`.`wwwserveralias`, `d`.`openbasedir`, `d`.`openbasedir_path`, " . "`d`.`safemode`, `d`.`speciallogfile`, `d`.`specialsettings`, `pd`.`domain` AS `parentdomain`, `c`.`loginname`, " . "`c`.`guid`, `c`.`email`, `c`.`documentroot` AS `customerroot`, `c`.`deactivated`, `c`.`phpenabled` AS `phpenabled` " . "FROM `" . TABLE_PANEL_DOMAINS . "` `d` LEFT JOIN `" . TABLE_PANEL_CUSTOMERS . "` `c` USING(`customerid`) " . "LEFT JOIN `" . TABLE_PANEL_DOMAINS . "` `pd` ON (`pd`.`id` = `d`.`parentdomainid`) " . "WHERE `d`.`ssl_ipandport`='" . $ipandport['id'] . "' " . "ORDER BY `d`.`iswildcarddomain`, `d`.`domain` ASC";
		}

		$result_domains = $this->db->query($query2);

		while($domain = $this->db->fetch_array($result_domains))
		{
			$query = "SELECT * FROM " . TABLE_PANEL_IPSANDPORTS . " WHERE `id`='" . $domain['ipandport'] . "'";
			$ipandport = $this->db->query_first($query);
			$domain['ip'] = $ipandport['ip'];
			$domain['port'] = $ipandport['port'];
			$domain['ssl_cert'] = $ipandport['ssl_cert'];

			if(!empty($this->lighttpd_data[$vhost_filename]))
			{
				if($ssl == '1')
				{
					$ssl_vhost = true;
				}
				else
				{
					$ssl_vhost = false;
				}

				$this->lighttpd_data[$vhost_filename].= $this->getVhostContent($domain, $ssl_vhost);
			}
		}
	}

	protected function getVhostContent($domain, $ssl_vhost = false)
	{
		if($ssl_vhost === true
		   && $domain['ssl'] != '1')
		{
			return '';
		}

		if($ssl_vhost === true
		   && $domain['ssl'] == '1')
		{
			$query = "SELECT * FROM " . TABLE_PANEL_IPSANDPORTS . " WHERE `id`='" . $domain['ssl_ipandport'] . "'";
		}
		else
		{
			$query = "SELECT * FROM " . TABLE_PANEL_IPSANDPORTS . " WHERE `id`='" . $domain['ipandport'] . "'";
		}

		$ipandport = $this->db->query_first($query);
		$domain['ip'] = $ipandport['ip'];
		$domain['port'] = $ipandport['port'];
		$domain['ssl_cert'] = $ipandport['ssl_cert'];

		if(filter_var($domain['ip'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4))
		{
			$ipport = $domain['ip'] . ':' . $domain['port'];
		}
		else
		{
			$ipport = '[' . $domain['ip'] . ']:' . $domain['port'];
		}

		$vhost_content.= $this->getServerNames($domain) . " {\n";
		$vhost_content.= $this->getWebroot($domain, $ssl_vhost);
		$vhost_content.= $this->create_htaccess($domain);
		$vhost_content.= $this->create_pathOptions($domain);
		$vhost_content.= $this->getLogFiles($domain);
		$vhost_content.= '}' . "\n";
		return $vhost_content;
	}

	protected function getLogFiles($domain)
	{
		$logfiles_text = '';

		if($this->settings['system']['mod_log_sql'] == 1)
		{
			// We are using mod_log_sql (http://www.outoforder.cc/projects/apache/mod_log_sql/)
			// TODO: See how we are able emulate the error_log
		}
		else
		{
			// The normal access/error - logging is enabled

			$filename = $this->settings['system']['logfiles_directory'] . $domain['loginname'] . $speciallogfile . '-error.log';

			if(!is_file($filename))
			{
				$ourFileHandle = fopen($filename, 'w') or die("can't open file");
				fclose($ourFileHandle);
			}

			chown($filename, $this->settings[system]['httpuser']);
			chgrp($filename, $this->settings[system]['httpgroup']);

			//access log

			$filename = $this->settings['system']['logfiles_directory'] . $domain['loginname'] . $speciallogfile . '-access.log';

			if(!is_file($filename))
			{
				$ourFileHandle = fopen($filename, 'w') or die("can't open file");
				fclose($ourFileHandle);
			}

			$logfiles_text.= '  accesslog.filename	= "' . $filename . '"' . "\n";
			chown($filename, $this->settings[system]['httpuser']);
			chgrp($filename, $this->settings[system]['httpgroup']);
		}

		return $logfiles_text;
	}

	protected function create_pathOptions($domain)
	{
		$query = "SELECT * FROM " . TABLE_PANEL_HTACCESS . " WHERE `path` LIKE '" . $domain['documentroot'] . "%'";
		$result = $this->db->query($query);

		while($row = $this->db->fetch_array($result))
		{
			if(!empty($row['error404path']))
			{
				$error_string.= '  server.error-handler-404 = "' . makeCorrectDir($row['documentroot'] . '/' . $row['error404path']) . '"' . "\n";
			}

			if($row['options_indexes'] != '0')
			{
				$path = makeCorrectDir(substr($row['path'], strlen($domain['documentroot']) - 1));

				// We need to remove the last slash, otherwise the regex wouldn't work

				$path = substr($path, 0, -1);
				$error_string.= '$HTTP["url"] =~ "^' . $path . '($|/)" {' . "\n";
				$error_string.= "\t" . 'dir-listing.activate = "enable"' . "\n";
				$error_string.= '}' . "\n";
			}
		}

		return $error_string;
	}

	protected function getDirOptions($domain)
	{
		$query = "SELECT * FROM " . TABLE_PANEL_HTPASSWDS . " WHERE `customerid`='" . $domain[customerid] . "'";
		$result = $this->db->query($query);

		while($row_htpasswds = $this->db->fetch_array($result))
		{
			if($auth_backend_loaded[$domain['ipandport']] != 'yes'
			   && $auth_backend_loaded[$domain['ssl_ipandport']] != 'yes')
			{
				$filename = $domain['customerid'] . '.htpasswd';

				if($this->auth_backend_loaded[$domain['ipandport']] != 'yes')
				{
					$auth_backend_loaded[$domain['ipandport']] = 'yes';
					$diroption_text.= 'auth.backend = "htpasswd"' . "\n";
					$diroption_text.= 'auth.backend.htpasswd.userfile = "' . $this->settings['system']['apacheconf_htpasswddir'] . '/' . $filename . '"' . "\n";
					$this->needed_htpasswds[$filename] = $row_htpasswds['username'] . ':' . $row_htpasswds['password'] . "\n";
					$diroption_text.= 'auth.require = ( ' . "\n";
					$previous_domain_id = '1';
				}
				elseif($this->auth_backend_loaded[$domain['ssl_ipandport']] != 'yes')
				{
					$auth_backend_loaded[$domain['ssl_ipandport']] = 'yes';
					$diroption_text.= 'auth.backend= "htpasswd"' . "\n";
					$diroption_text.= 'auth.backend.htpasswd.userfile = "' . $this->settings['system']['apacheconf_htpasswddir'] . '/' . $filename . '"' . "\n";
					$this->needed_htpasswds[$filename] = $row_htpasswds['username'] . ':' . $row_htpasswds['password'] . "\n";
					$diroption_text.= 'auth.require = ( ' . "\n";
					$previous_domain_id = '1';
				}
			}

			$diroption_text.= '"' . $row_htpasswds['path'] . '" =>' . "\n";
			$diroption_text.= '(' . "\n";
			$diroption_text.= '   "method"  => "basic",' . "\n";
			$diroption_text.= '   "realm"   => "Restricted Area",' . "\n";
			$diroption_text.= '   "require" => "user=' . $row_htpasswds['username'] . '"' . "\n";
			$diroption_text.= ')' . "\n";

			if($this->auth_backend_loaded[$domain['ssl_ipandport']] == 'yes')
			{
				$this->needed_htpasswds[$domain['ssl_ipandport']].= $diroption_text;
			}

			if($this->auth_backend_loaded[$domain['ipandport']] != 'yes')
			{
				$this->needed_htpasswds[$domain['ipandport']].= $diroption_text;
			}
		}

		return '  auth.backend.htpasswd.userfile = "' . $this->settings['system']['apacheconf_htpasswddir'] . '/' . $filename . '"' . "\n";
	}

	protected function getServerNames($domain)
	{
		$server_string = array();
		$domain_name = ereg_replace('\.', '\.', $domain['domain']);

		if($domain['iswildcarddomain'] == '1')
		{
			$server_string[] = '(^|\.)' . $domain_name . '$';
		}
		else
		{
			if($domain['wwwserveralias'] == '1')
			{
				$server_string[] = '^(www\.|)' . $domain_name . '$';
			}
			else
			{
			}
		}

		$alias_domains = $this->db->query('SELECT `domain`, `iswildcarddomain`, `wwwserveralias` FROM `' . TABLE_PANEL_DOMAINS . '` WHERE `aliasdomain`=\'' . $domain['id'] . '\'');

		while(($alias_domain = $this->db->fetch_array($alias_domains)) !== false)
		{
			$alias_domain_name = ereg_replace('\.', '\.', $alias_domain['domain']);

			if($alias_domain['iswildcarddomain'] == '1')
			{
				$server_string[] = '(^|\.)' . $alias_domain_name . '$';
			}
			else
			{
				if($alias_domain['wwwserveralias'] == '1')
				{
					$server_string[] = '^(www.)?' . $alias_domain_name;
				}
				else
				{
					$server_string[] = $alias_domain_name;
				}
			}
		}

		for ($i = 0;$i < sizeof($server_string);$i++)
		{
			$data = $server_string[$i];

			if(sizeof($server_string) > 1)
			{
				if($i == 0)
				{
					$servernames_text = '(' . $data . '|';
				}
				elseif(sizeof($server_string) - 1 == $i)
				{
					$servernames_text.= $data . ')';
				}
				else
				{
					$servernames_text.= $data . '|';
				}
			}
			else
			{
				$servernames_text = $data;
			}
		}

		unset($data);
		$servernames_text = '$HTTP["host"] =~ "' . $servernames_text . '"';
		return $servernames_text;
	}

	protected function getWebroot($domain, $ssl)
	{
		$webroot_text = '';

		if($domain['deactivated'] == '1'
		   && $this->settings['system']['deactivateddocroot'] != '')
		{
			$webroot_text.= '  # Using docroot for deactivated users...' . "\n";
			$webroot_text.= '  server.document-root = "' . $this->settings['system']['deactivateddocroot'] . "\"\n";
		}
		else
		{
			if($ssl === false
			   && $domain['ssl_redirect'] == '1')
			{
				$webroot_text.= '  url.redirect = ( "^/(.*)" => "https://' . $domain['domain'] . '/$1" )' . "\n";
			}
			elseif(preg_match("#^https?://#i", $domain['documentroot']))
			{
				$webroot_text.= '  url.redirect = ( "^/(.*)" => "' . $domain['documentroot'] . '/$1" )' . "\n";
			}
			else
			{
				$webroot_text.= '  server.document-root = "' . makeCorrectDir($domain['documentroot']) . "\"\n";
			}
		}

		return $webroot_text;
	}

	public function writeConfigs()
	{
		fwrite($this->debugHandler, '  lighttpd::writeConfigs: rebuilding ' . $this->settings['system']['apacheconf_vhost'] . "\n");
		$this->logger->logAction(CRON_ACTION, LOG_INFO, "rebuilding " . $this->settings['system']['apacheconf_vhost']);

		if(!isConfigDir($this->settings['system']['apacheconf_vhost']))
		{
			// Save one big file

			foreach($this->lighttpd_data as $vhosts_filename => $vhost_content)
			{
				$vhosts_file.= $vhost_content . "\n\n";
			}

			$vhosts_filename = $this->settings['system']['apacheconf_vhost'];

			// Apply header

			$vhosts_file = '# ' . basename($vhosts_filename) . "\n" . '# Created ' . date('d.m.Y H:i') . "\n" . '# Do NOT manually edit this file, all changes will be deleted after the next domain change at the panel.' . "\n" . "\n" . $vhosts_file;
			$vhosts_file_handler = fopen($vhosts_filename, 'w');
			fwrite($vhosts_file_handler, $vhosts_file);
			fclose($vhosts_file_handler);
		}
		else
		{
			if(!file_exists($this->settings['system']['apacheconf_vhost']))
			{
				fwrite($this->debugHandler, '  lighttpd::writeConfigs: mkdir ' . escapeshellarg(makeCorrectDir($this->settings['system']['apacheconf_vhost'])) . "\n");
				$this->logger->logAction(CRON_ACTION, LOG_NOTICE, 'mkdir ' . escapeshellarg(makeCorrectDir($this->settings['system']['apacheconf_vhost'])));
				safe_exec('mkdir ' . escapeshellarg(makeCorrectDir($this->settings['system']['apacheconf_vhost'])));
			}

			// Write a single file for every vhost

			foreach($this->lighttpd_data as $vhosts_filename => $vhosts_file)
			{
				$this->known_filenames[] = basename($vhosts_filename);

				// Apply header

				$vhosts_file = '# ' . basename($vhosts_filename) . "\n" . '# Created ' . date('d.m.Y H:i') . "\n" . '# Do NOT manually edit this file, all changes will be deleted after the next domain change at the panel.' . "\n" . "\n" . $vhosts_file;

				if(!empty($vhosts_filename))
				{
					$vhosts_file_handler = fopen($vhosts_filename, 'w');
					fwrite($vhosts_file_handler, $vhosts_file);
					fclose($vhosts_file_handler);
				}
			}

			$this->wipeOutOldConfigs();
		}

		// Write the diroptions

		if(isConfigDir($this->settings['system']['apacheconf_htpasswddir']))
		{
			foreach($this->needed_htpasswds as $key => $data)
			{
				if(!is_dir($this->settings['system']['apacheconf_htpasswddir']))
				{
					mkdir($this->settings['system']['apacheconf_htpasswddir']);
				}

				$filename = $this->settings['system']['apacheconf_htpasswddir'] . '/' . $key;
				$htpasswd_handler = fopen($filename, 'w');
				fwrite($htpasswd_handler, $data);
				fclose($htpasswd_handler);
			}
		}
	}

	private function wipeOutOldConfigs()
	{
		fwrite($this->debugHandler, '  apache::wipeOutOldConfigs: cleaning ' . $this->settings['system']['apacheconf_vhost'] . "\n");
		$this->logger->logAction(CRON_ACTION, LOG_INFO, "cleaning " . $this->settings['system']['apacheconf_vhost']);

		if(isConfigDir($this->settings['system']['apacheconf_vhost'])
		   && file_exists($this->settings['system']['apacheconf_vhost'])
		   && is_dir($this->settings['system']['apacheconf_vhost']))
		{
			$vhost_file_dirhandle = opendir($this->settings['system']['apacheconf_vhost']);

			while(false !== ($vhost_filename = readdir($vhost_file_dirhandle)))
			{
				if($vhost_filename != '.'
				   && $vhost_filename != '..'
				   && !in_array($vhost_filename, $this->known_filenames)
				   && preg_match('/^(10|20|30)_syscp_ipandport_(.+)\.conf$/', $vhost_filename)
				   && file_exists(makeCorrectFile($this->settings['system']['apacheconf_vhost'] . '/' . $vhost_filename)))
				{
					fwrite($this->debugHandler, '  apache::wipeOutOldConfigs: unlinking ' . $vhost_filename . "\n");
					$this->logger->logAction(CRON_ACTION, LOG_NOTICE, 'unlinking ' . $vhost_filename);
					unlink(makeCorrectFile($this->settings['system']['apacheconf_vhost'] . '/' . $vhost_filename));
				}
			}
		}
	}
}

?>
