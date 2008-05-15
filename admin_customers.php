<?php

/**
 * This file is part of the SysCP project.
 * Copyright (c) 2003-2007 the SysCP Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Florian Lippert <flo@syscp.org>
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package    Panel
 * @version    $Id$
 */

define('AREA', 'admin');

/**
 * Include our init.php, which manages Sessions, Language etc.
 */

require ("./lib/init.php");

if(isset($_POST['id']))
{
	$id = intval($_POST['id']);
}
elseif(isset($_GET['id']))
{
	$id = intval($_GET['id']);
}

if($page == 'customers'
   && $userinfo['customers'] != '0')
{
	if($action == '')
	{
		$log->logAction(ADM_ACTION, LOG_NOTICE, "viewed admin_customers");
		$fields = array(
			'c.loginname' => $lng['login']['username'],
			'a.loginname' => $lng['admin']['admin'],
			'c.name' => $lng['customer']['name'],
			'c.firstname' => $lng['customer']['firstname'],
			'c.company' => $lng['customer']['company'],
			'c.diskspace' => $lng['customer']['diskspace'],
			'c.diskspace_used' => $lng['customer']['diskspace'] . ' (' . $lng['panel']['used'] . ')',
			'c.traffic' => $lng['customer']['traffic'],
			'c.traffic_used' => $lng['customer']['traffic'] . ' (' . $lng['panel']['used'] . ')',
			'c.mysqls' => $lng['customer']['mysqls'],
			'c.mysqls_used' => $lng['customer']['mysqls'] . ' (' . $lng['panel']['used'] . ')',
			'c.ftps' => $lng['customer']['ftps'],
			'c.ftps_used' => $lng['customer']['ftps'] . ' (' . $lng['panel']['used'] . ')',
			'c.subdomains' => $lng['customer']['subdomains'],
			'c.subdomains_used' => $lng['customer']['subdomains'] . ' (' . $lng['panel']['used'] . ')',
			'c.emails' => $lng['customer']['emails'],
			'c.emails_used' => $lng['customer']['emails'] . ' (' . $lng['panel']['used'] . ')',
			'c.email_accounts' => $lng['customer']['accounts'],
			'c.email_accounts_used' => $lng['customer']['accounts'] . ' (' . $lng['panel']['used'] . ')',
			'c.email_forwarders' => $lng['customer']['forwarders'],
			'c.email_forwarders_used' => $lng['customer']['forwarders'] . ' (' . $lng['panel']['used'] . ')',
			'c.email_quota' => $lng['customer']['email_quota'],
			'c.email_quota_used' => $lng['customer']['email_quota'] . ' (' . $lng['panel']['used'] . ')',
			'c.deactivated' => $lng['admin']['deactivated'],
			'c.phpenabled' => $lng['admin']['phpenabled']
		);

		if($settings['ticket']['enabled'] == 1)
		{
			$fields['c.tickets'] = $lng['customer']['tickets'];
			$fields['c.tickets_used'] = $lng['customer']['tickets'] . ' (' . $lng['panel']['used'] . ')';
		}

		$paging = new paging($userinfo, $db, TABLE_PANEL_CUSTOMERS, $fields, $settings['panel']['paging'], $settings['panel']['natsorting']);
		$customers = '';
		$result = $db->query("SELECT `c`.`customerid`, `c`.`loginname`, `c`.`name`, `c`.`firstname`, `c`.`company`, `c`.`diskspace`, `c`.`diskspace_used`, `c`.`traffic`, `c`.`traffic_used`, `c`.`mysqls`, `c`.`mysqls_used`, `c`.`emails`, `c`.`emails_used`, `c`.`email_accounts`, `c`.`email_accounts_used`, `c`.`deactivated`, `c`.`ftps`, `c`.`ftps_used`, `c`.`tickets`, `c`.`tickets_used`, `c`.`subdomains`, `c`.`subdomains_used`, `c`.`email_forwarders`, `c`.`email_forwarders_used`, `c`.`standardsubdomain`, `a`.`loginname` AS `adminname` " . "FROM `" . TABLE_PANEL_CUSTOMERS . "` `c`, `" . TABLE_PANEL_ADMINS . "` `a` " . "WHERE " . ($userinfo['customers_see_all'] ? '' : " `c`.`adminid` = '" . (int)$userinfo['adminid'] . "' AND ") . "`c`.`adminid`=`a`.`adminid` " . $paging->getSqlWhere(true) . " " . $paging->getSqlOrderBy() . " " . $paging->getSqlLimit());
		$paging->setEntries($db->num_rows($result));
		$sortcode = $paging->getHtmlSortCode($lng, true);
		$arrowcode = $paging->getHtmlArrowCode($filename . '?page=' . $page . '&s=' . $s);
		$searchcode = $paging->getHtmlSearchCode($lng);
		$pagingcode = $paging->getHtmlPagingCode($filename . '?page=' . $page . '&s=' . $s);
		$i = 0;
		$count = 0;

		while($row = $db->fetch_array($result))
		{
			if($paging->checkDisplay($i))
			{
				$domains = $db->query_first("SELECT COUNT(`id`) AS `domains` " . "FROM `" . TABLE_PANEL_DOMAINS . "` " . "WHERE `customerid`='" . (int)$row['customerid'] . "' AND `parentdomainid`='0' ");
				$row['domains'] = intval($domains['domains']);
				$row['traffic_used'] = round($row['traffic_used']/(1024*1024), $settings['panel']['decimal_places']);
				$row['traffic'] = round($row['traffic']/(1024*1024), $settings['panel']['decimal_places']);
				$row['diskspace_used'] = round($row['diskspace_used']/1024, $settings['panel']['decimal_places']);
				$row['diskspace'] = round($row['diskspace']/1024, $settings['panel']['decimal_places']);
				$row = str_replace_array('-1', 'UL', $row, 'diskspace traffic mysqls emails email_accounts email_forwarders ftps tickets subdomains');
				$row = htmlentities_array($row);
				eval("\$customers.=\"" . getTemplate("customers/customers_customer") . "\";");
				$count++;
			}

			$i++;
		}

		eval("echo \"" . getTemplate("customers/customers") . "\";");
	}
	elseif($action == 'su'
	       && $id != 0)
	{
		$result = $db->query_first("SELECT * FROM `" . TABLE_PANEL_CUSTOMERS . "` WHERE `customerid`='" . (int)$id . "' " . ($userinfo['customers_see_all'] ? '' : " AND `adminid` = '" . (int)$userinfo['adminid'] . "' "));
		$destination_user = $result['loginname'];

		if($destination_user != '')
		{
			$result = $db->query_first("SELECT * FROM `" . TABLE_PANEL_SESSIONS . "` WHERE `userid`='" . (int)$userinfo['userid'] . "'");
			$s = md5(uniqid(microtime(), 1));
			$db->query("INSERT INTO `" . TABLE_PANEL_SESSIONS . "` (`hash`, `userid`, `ipaddress`, `useragent`, `lastactivity`, `language`, `adminsession`) VALUES ('" . $db->escape($s) . "', '" . (int)$id . "', '" . $db->escape($result['ipaddress']) . "', '" . $db->escape($result['useragent']) . "', '" . time() . "', '" . $db->escape($result['language']) . "', '0')");
			$log->logAction(ADM_ACTION, LOG_INFO, "switched user and is now '" . $destination_user . "'");
			redirectTo('customer_index.php', Array(
				's' => $s
			));
		}
		else
		{
			redirectTo('index.php', Array(
				'action' => 'login'
			));
		}
	}
	elseif($action == 'delete'
	       && $id != 0)
	{
		$result = $db->query_first("SELECT * FROM `" . TABLE_PANEL_CUSTOMERS . "` WHERE `customerid`='" . (int)$id . "' " . ($userinfo['customers_see_all'] ? '' : " AND `adminid` = '" . $db->escape($userinfo['adminid']) . "' "));

		if($result['loginname'] != '')
		{
			if(isset($_POST['send'])
			   && $_POST['send'] == 'send')
			{
				$databases = $db->query("SELECT * FROM " . TABLE_PANEL_DATABASES . " WHERE customerid='" . (int)$id . "'");
				$db_root = new db($sql['host'], $sql['root_user'], $sql['root_password'], '');
				unset($db_root->password);

				while($row_database = $db->fetch_array($databases))
				{
					foreach(explode(',', $settings['system']['mysql_access_host']) as $mysql_access_host)
					{
						$mysql_access_host = trim($mysql_access_host);
						$db_root->query('REVOKE ALL PRIVILEGES ON * . * FROM `' . $db_root->escape($row_database['databasename']) . '`@`' . $db_root->escape($mysql_access_host) . '`');
						$db_root->query('REVOKE ALL PRIVILEGES ON `' . str_replace('_', '\_', $db_root->escape($row_database['databasename'])) . '` . * FROM `' . $db_root->escape($row_database['databasename']) . '`@`' . $db_root->escape($mysql_access_host) . '`');
						$db_root->query('DELETE FROM `mysql`.`user` WHERE `User` = "' . $db_root->escape($row_database['databasename']) . '" AND `Host` = "' . $db_root->escape($mysql_access_host) . '"');
					}

					$db_root->query('DROP DATABASE IF EXISTS `' . $db_root->escape($row_database['databasename']) . '`');
				}

				$db_root->query('FLUSH PRIVILEGES;');
				$db_root->close();
				$db->query("DELETE FROM `" . TABLE_PANEL_CUSTOMERS . "` WHERE `customerid`='" . (int)$id . "'");
				$db->query("DELETE FROM `" . TABLE_PANEL_DATABASES . "` WHERE `customerid`='" . (int)$id . "'");
				$db->query("DELETE FROM `" . TABLE_PANEL_DOMAINS . "` WHERE `customerid`='" . (int)$id . "'");
				$domains_deleted = $db->affected_rows();
				$db->query("DELETE FROM `" . TABLE_PANEL_HTPASSWDS . "` WHERE `customerid`='" . (int)$id . "'");
				$db->query("DELETE FROM `" . TABLE_PANEL_SESSIONS . "` WHERE `userid`='" . (int)$id . "' AND `adminsession` = '0'");
				$db->query("DELETE FROM `" . TABLE_PANEL_TRAFFIC . "` WHERE `customerid`='" . (int)$id . "'");
				$db->query("DELETE FROM `" . TABLE_MAIL_USERS . "` WHERE `customerid`='" . (int)$id . "'");
				$db->query("DELETE FROM `" . TABLE_MAIL_VIRTUAL . "` WHERE `customerid`='" . (int)$id . "'");
				$db->query("DELETE FROM `" . TABLE_FTP_GROUPS . "` WHERE `customerid`='" . (int)$id . "'");
				$db->query("DELETE FROM `" . TABLE_FTP_USERS . "` WHERE `customerid`='" . (int)$id . "'");
				$admin_update_query = "UPDATE `" . TABLE_PANEL_ADMINS . "` SET `customers_used` = `customers_used` - 1 ";
				$admin_update_query.= ", `domains_used` = `domains_used` - 0" . (int)($domains_deleted-$result['subdomains_used']);

				if($result['mysqls'] != '-1')
				{
					$admin_update_query.= ", `mysqls_used` = `mysqls_used` - 0" . (int)$result['mysqls'];
				}

				if($result['emails'] != '-1')
				{
					$admin_update_query.= ", `emails_used` = `emails_used` - 0" . (int)$result['emails'];
				}

				if($result['email_accounts'] != '-1')
				{
					$admin_update_query.= ", `email_accounts_used` = `email_accounts_used` - 0" . (int)$result['email_accounts'];
				}

				if($result['email_forwarders'] != '-1')
				{
					$admin_update_query.= ", `email_forwarders_used` = `email_forwarders_used` - 0" . (int)$result['email_forwarders'];
				}

				if($result['email_quota'] != '-1')
				{
					$admin_update_query.= ", `email_quota_used` = `email_quota_used` - 0" . (int)$result['email_quota'];
				}

				if($result['subdomains'] != '-1')
				{
					$admin_update_query.= ", `subdomains_used` = `subdomains_used` - 0" . (int)$result['subdomains'];
				}

				if($result['ftps'] != '-1')
				{
					$admin_update_query.= ", `ftps_used` = `ftps_used` - 0" . (int)$result['ftps'];
				}

				if($result['tickets'] != '-1')
				{
					$admin_update_query.= ", `tickets_used` = `tickets_used` - 0" . (int)$result['tickets'];
				}

				if(($result['diskspace']/1024) != '-1')
				{
					$admin_update_query.= ", `diskspace_used` = `diskspace_used` - 0" . (int)$result['diskspace'];
				}

				$admin_update_query.= " WHERE `adminid` = '" . (int)$result['adminid'] . "'";
				$db->query($admin_update_query);
				$log->logAction(ADM_ACTION, LOG_INFO, "deleted user '" . $result['loginname'] . "'");
				inserttask('1');
				inserttask('4');
				redirectTo($filename, Array(
					'page' => $page,
					's' => $s
				));
			}
			else
			{
				ask_yesno('admin_customer_reallydelete', $filename, array(
					'id' => $id,
					'page' => $page,
					'action' => $action
				), $result['loginname']);
			}
		}
	}
	elseif($action == 'add')
	{
		if($userinfo['customers_used'] < $userinfo['customers']
		   || $userinfo['customers'] == '-1')
		{
			if(isset($_POST['send'])
			   && $_POST['send'] == 'send')
			{
				$name = validate($_POST['name'], 'name');
				$firstname = validate($_POST['firstname'], 'first name');
				$company = validate($_POST['company'], 'company');
				$street = validate($_POST['street'], 'street');
				$zipcode = validate($_POST['zipcode'], 'zipcode', '/^[0-9 \-A-Z]*$/');
				$city = validate($_POST['city'], 'city');
				$phone = validate($_POST['phone'], 'phone', '/^[0-9\- \+]*$/');
				$fax = validate($_POST['fax'], 'fax', '/^[0-9\- \+]*$/');
				$email = $idna_convert->encode(validate($_POST['email'], 'email'));
				$customernumber = validate($_POST['customernumber'], 'customer number', '/^[A-Za-z0-9 \-]*$/Di');
				$def_language = validate($_POST['def_language'], 'default language');
				$diskspace = intval_ressource($_POST['diskspace']);
				$traffic = doubleval_ressource($_POST['traffic']);
				$subdomains = intval_ressource($_POST['subdomains']);
				$emails = intval_ressource($_POST['emails']);
				$email_accounts = intval_ressource($_POST['email_accounts']);
				$email_forwarders = intval_ressource($_POST['email_forwarders']);
				$email_quota = intval_ressource($_POST['email_quota']);
				$email_imap = intval_ressource($_POST['email_imap']);
				$email_pop3 = intval_ressource($_POST['email_pop3']);
				$ftps = intval_ressource($_POST['ftps']);
				$tickets = ($settings['ticket']['enabled'] == 1 ? intval_ressource($_POST['tickets']) : 0);
				$mysqls = intval_ressource($_POST['mysqls']);
				$createstdsubdomain = intval($_POST['createstdsubdomain']);
				$password = validate($_POST['customer_password'], 'password');
				$sendpassword = intval($_POST['sendpassword']);
				$phpenabled = intval($_POST['phpenabled']);
				$diskspace = $diskspace*1024;
				$traffic = $traffic*1024*1024;

				if(((($userinfo['diskspace_used']+$diskspace) > $userinfo['diskspace']) && ($userinfo['diskspace']/1024) != '-1')
				   || ((($userinfo['mysqls_used']+$mysqls) > $userinfo['mysqls']) && $userinfo['mysqls'] != '-1')
				   || ((($userinfo['emails_used']+$emails) > $userinfo['emails']) && $userinfo['emails'] != '-1')
				   || ((($userinfo['email_accounts_used']+$email_accounts) > $userinfo['email_accounts']) && $userinfo['email_accounts'] != '-1')
				   || ((($userinfo['email_forwarders_used']+$email_forwarders) > $userinfo['email_forwarders']) && $userinfo['email_forwarders'] != '-1')
				   || ((($userinfo['email_quota_used']+$email_quota) > $userinfo['email_quota']) && $userinfo['email_quota'] != '-1')
				   || ((($userinfo['ftps_used']+$ftps) > $userinfo['ftps']) && $userinfo['ftps'] != '-1')
				   || ((($userinfo['tickets_used']+$tickets) > $userinfo['tickets']) && $userinfo['tickets'] != '-1')
				   || ((($userinfo['subdomains_used']+$subdomains) > $userinfo['subdomains']) && $userinfo['subdomains'] != '-1')
				   || (($diskspace/1024) == '-1' && ($userinfo['diskspace']/1024) != '-1')
				   || ($mysqls == '-1' && $userinfo['mysqls'] != '-1')
				   || ($emails == '-1' && $userinfo['emails'] != '-1')
				   || ($email_accounts == '-1' && $userinfo['email_accounts'] != '-1')
				   || ($email_forwarders == '-1' && $userinfo['email_forwarders'] != '-1')
				   || ($email_quota == '-1' && $userinfo['email_quota'] != '-1')
				   || ($ftps == '-1' && $userinfo['ftps'] != '-1')
				   || ($tickets == '-1' && $userinfo['tickets'] != '-1')
				   || ($subdomains == '-1' && $userinfo['subdomains'] != '-1'))
				{
					standard_error('youcantallocatemorethanyouhave');
					exit;
				}

				// Either $name and $firstname or the $company must be inserted

				if($name == ''
				   && $company == '')
				{
					standard_error(array(
						'stringisempty',
						'myname'
					));
				}
				elseif($firstname == ''
				       && $company == '')
				{
					standard_error(array(
						'stringisempty',
						'myfirstname'
					));
				}
				elseif($email == '')
				{
					standard_error(array(
						'stringisempty',
						'emailadd'
					));
				}
				elseif(!validateEmail($email))
				{
					standard_error('emailiswrong', $email);
				}
				else
				{
					if(isset($_POST['loginname'])
					   && $_POST['loginname'] != '')
					{
						$accountnumber = intval($settings['system']['lastaccountnumber']);
						$loginname = validate($_POST['loginname'], 'loginname', '/^[a-z0-9\-_]+$/i');

						// Accounts which match systemaccounts are not allowed, filtering them

						if(preg_match('/^' . preg_quote($settings['customer']['accountprefix'], '/') . '([0-9]+)/', $loginname))
						{
							standard_error('loginnameissystemaccount', $settings['customer']['accountprefix']);
						}
					}
					else
					{
						$accountnumber = intval($settings['system']['lastaccountnumber'])+1;
						$loginname = $settings['customer']['accountprefix'] . $accountnumber;
					}

					// Check if the account already exists

					$loginname_check = $db->query_first("SELECT `loginname` FROM `" . TABLE_PANEL_CUSTOMERS . "` WHERE `loginname` = '" . $db->escape($loginname) . "'");
					$loginname_check_admin = $db->query_first("SELECT `loginname` FROM `" . TABLE_PANEL_ADMINS . "` WHERE `loginname` = '" . $db->escape($loginname) . "'");

					if(strtolower($loginname_check['loginname']) == strtolower($loginname)
					   || strtolower($loginname_check_admin['loginname']) == strtolower($loginname))
					{
						standard_error('loginnameexists', $loginname);
					}
					elseif(!validateUsername($loginname))
					{
						standard_error('loginnameiswrong', $loginname);
					}

					$guid = intval($settings['system']['lastguid'])+1;
					$documentroot = makeCorrectDir($settings['system']['documentroot_prefix'] . '/' . $loginname);

					if(file_exists($documentroot))
					{
						standard_error('documentrootexists', $documentroot);
					}

					if($createstdsubdomain != '1')
					{
						$createstdsubdomain = '0';
					}

					if($phpenabled != '0')
					{
						$phpenabled = '1';
					}

					if($password == '')
					{
						$password = substr(md5(uniqid(microtime(), 1)), 12, 6);
					}

					$result = $db->query("INSERT INTO `" . TABLE_PANEL_CUSTOMERS . "` " . "(`adminid`, `loginname`, `password`, `name`, `firstname`, `company`, `street`, `zipcode`, `city`, `phone`, `fax`, `email`, `customernumber`, `def_language`, `documentroot`, `guid`, `diskspace`, `traffic`, `subdomains`, `emails`, `email_accounts`, `email_forwarders`, `email_quota`, `ftps`, `tickets`, `mysqls`, `standardsubdomain`, `phpenabled`, `imap`, `pop3`) " . " VALUES ('" . (int)$userinfo['adminid'] . "', '" . $db->escape($loginname) . "', '" . md5($password) . "', '" . $db->escape($name) . "', '" . $db->escape($firstname) . "', '" . $db->escape($company) . "', '" . $db->escape($street) . "', '" . $db->escape($zipcode) . "', '" . $db->escape($city) . "', '" . $db->escape($phone) . "', '" . $db->escape($fax) . "', '" . $db->escape($email) . "', '" . $db->escape($customernumber) . "','" . $db->escape($def_language) . "', '" . $db->escape($documentroot) . "', '" . $db->escape($guid) . "', '" . $db->escape($diskspace) . "', '" . $db->escape($traffic) . "', '" . $db->escape($subdomains) . "', '" . $db->escape($emails) . "', '" . $db->escape($email_accounts) . "', '" . $db->escape($email_forwarders) . "', '" . $db->escape($email_quota) . "', '" . $db->escape($ftps) . "', '" . $db->escape($tickets) . "', '" . $db->escape($mysqls) . "', '0', '" . $db->escape($phpenabled) . "', '" . $db->escape($email_imap) . "', '" . $db->escape($email_pop3) . "')");
					$customerid = $db->insert_id();
					$admin_update_query = "UPDATE `" . TABLE_PANEL_ADMINS . "` SET `customers_used` = `customers_used` + 1";

					if($mysqls != '-1')
					{
						$admin_update_query.= ", `mysqls_used` = `mysqls_used` + 0" . (int)$mysqls;
					}

					if($emails != '-1')
					{
						$admin_update_query.= ", `emails_used` = `emails_used` + 0" . (int)$emails;
					}

					if($email_accounts != '-1')
					{
						$admin_update_query.= ", `email_accounts_used` = `email_accounts_used` + 0" . (int)$email_accounts;
					}

					if($email_forwarders != '-1')
					{
						$admin_update_query.= ", `email_forwarders_used` = `email_forwarders_used` + 0" . (int)$email_forwarders;
					}

					if($email_quota != '-1')
					{
						$admin_update_query.= ", `email_quota_used` = `email_quota_used` + 0" . (int)$email_quota;
					}

					if($subdomains != '-1')
					{
						$admin_update_query.= ", `subdomains_used` = `subdomains_used` + 0" . (int)$subdomains;
					}

					if($ftps != '-1')
					{
						$admin_update_query.= ", `ftps_used` = `ftps_used` + 0" . (int)$ftps;
					}

					if($tickets != '-1'
					   && $settings['ticket']['enabled'] == 1)
					{
						$admin_update_query.= ", `tickets_used` = `tickets_used` + 0" . (int)$tickets;
					}

					if(($diskspace/1024) != '-1')
					{
						$admin_update_query.= ", `diskspace_used` = `diskspace_used` + 0" . (int)$diskspace;
					}

					$admin_update_query.= " WHERE `adminid` = '" . (int)$userinfo['adminid'] . "'";
					$db->query($admin_update_query);
					$db->query("UPDATE `" . TABLE_PANEL_SETTINGS . "` " . "SET `value`='" . $db->escape($guid) . "' " . "WHERE `settinggroup`='system' AND `varname`='lastguid'");

					if($accountnumber != intval($settings['system']['lastaccountnumber']))
					{
						$db->query("UPDATE `" . TABLE_PANEL_SETTINGS . "` " . "SET `value`='" . $db->escape($accountnumber) . "' " . "WHERE `settinggroup`='system' AND `varname`='lastaccountnumber'");
					}

					$log->logAction(ADM_ACTION, LOG_INFO, "added user '" . $loginname . "'");
					inserttask('2', $loginname, $guid, $guid);

					// Add htpasswd for the webalizer stats

					$path = $documentroot . '/webalizer/';

					if(CRYPT_STD_DES == 1)
					{
						$saltfordescrypt = substr(md5(uniqid(microtime(), 1)), 4, 2);
						$htpasswdPassword = crypt($password, $saltfordescrypt);
					}
					else
					{
						$htpasswdPassword = crypt($password);
					}

					$db->query("INSERT INTO `" . TABLE_PANEL_HTPASSWDS . "` " . "(`customerid`, `username`, `password`, `path`) " . "VALUES ('" . (int)$customerid . "', '" . $db->escape($loginname) . "', '" . $db->escape($htpasswdPassword) . "', '" . $db->escape($path) . "')");
					$log->logAction(ADM_ACTION, LOG_NOTICE, "automatically added htpasswd for user '" . $loginname . "'");
					inserttask('3');
					$result = $db->query("INSERT INTO `" . TABLE_FTP_USERS . "` " . "(`customerid`, `username`, `password`, `homedir`, `login_enabled`, `uid`, `gid`) " . "VALUES ('" . (int)$customerid . "', '" . $db->escape($loginname) . "', ENCRYPT('" . $db->escape($password) . "'), '" . $db->escape($documentroot) . "/', 'y', '" . (int)$guid . "', '" . (int)$guid . "')");
					$result = $db->query("INSERT INTO `" . TABLE_FTP_GROUPS . "` " . "(`customerid`, `groupname`, `gid`, `members`) " . "VALUES ('" . (int)$customerid . "', '" . $db->escape($loginname) . "', '" . $db->escape($guid) . "', '" . $db->escape($loginname) . "')");
					$log->logAction(ADM_ACTION, LOG_NOTICE, "automatically added ftp-account for user '" . $loginname . "'");

					if($createstdsubdomain == '1')
					{
						$db->query("INSERT INTO `" . TABLE_PANEL_DOMAINS . "` " . "(`domain`, `customerid`, `adminid`, `parentdomainid`, `ipandport`, `documentroot`, `zonefile`, `isemaildomain`, `caneditdomain`, `openbasedir`, `safemode`, `speciallogfile`, `specialsettings`) " . "VALUES ('" . $db->escape($loginname . '.' . $settings['system']['hostname']) . "', '" . (int)$customerid . "', '" . (int)$userinfo['adminid'] . "', '-1', '" . $db->escape($settings['system']['defaultip']) . "', '" . $db->escape($documentroot) . "', '', '0', '0', '1', '1', '0', '')");
						$domainid = $db->insert_id();
						$db->query('UPDATE `' . TABLE_PANEL_CUSTOMERS . '` SET `standardsubdomain`=\'' . (int)$domainid . '\' WHERE `customerid`=\'' . (int)$customerid . '\'');
						$log->logAction(ADM_ACTION, LOG_NOTICE, "automatically added standardsubdomain for user '" . $loginname . "'");
						inserttask('1');
					}

					if($sendpassword == '1')
					{
						$replace_arr = array(
							'FIRSTNAME' => $firstname,
							'NAME' => $name,
							'USERNAME' => $loginname,
							'PASSWORD' => $password
						);

						// Get mail templates from database; the ones from 'admin' are fetched for fallback

						$result = $db->query_first('SELECT `value` FROM `' . TABLE_PANEL_TEMPLATES . '` WHERE `adminid`=\'' . (int)$userinfo['adminid'] . '\' AND `language`=\'' . $db->escape($def_language) . '\' AND `templategroup`=\'mails\' AND `varname`=\'createcustomer_subject\'');
						$mail_subject = html_entity_decode(replace_variables((($result['value'] != '') ? $result['value'] : $lng['mails']['createcustomer']['subject']), $replace_arr));
						$result = $db->query_first('SELECT `value` FROM `' . TABLE_PANEL_TEMPLATES . '` WHERE `adminid`=\'' . (int)$userinfo['adminid'] . '\' AND `language`=\'' . $db->escape($def_language) . '\' AND `templategroup`=\'mails\' AND `varname`=\'createcustomer_mailbody\'');
						$mail_body = html_entity_decode(replace_variables((($result['value'] != '') ? $result['value'] : $lng['mails']['createcustomer']['mailbody']), $replace_arr));
						$mail->From = $userinfo['email'];
						$mail->FromName = $userinfo['name'];
						$mail->Subject = $mail_subject;
						$mail->Body = $mail_body;
						$mail->AddAddress($email, $firstname . ' ' . $name);

						if(!$mail->Send())
						{
							if($mail->ErrorInfo != '')
							{
								$mailerr_msg = $mail->ErrorInfo;
							}
							else
							{
								$mailerr_msg = $email;
							}
							$log->logAction(ADM_ACTION, LOG_ERR, "Error sending mail: " . $mailerr_msg);
							standard_error('errorsendingmail', $email);
						}

						$mail->ClearAddresses();
						$log->logAction(ADM_ACTION, LOG_NOTICE, "automatically sent password to user '" . $loginname . "'");
					}

					redirectTo($filename, Array(
						'page' => $page,
						's' => $s
					));
				}
			}
			else
			{
				$language_options = '';

				while(list($language_file, $language_name) = each($languages))
				{
					$language_options.= makeoption($language_name, $language_file, $userinfo['def_language'], true);
				}

				$createstdsubdomain = makeyesno('createstdsubdomain', '1', '0', '1');
				$quota_type_option = makeQuotaOption();
				$email_imap = makeyesno('email_imap', '1', '0', '1');
				$email_pop3 = makeyesno('email_pop3', '1', '0', '1');
				$sendpassword = makeyesno('sendpassword', '1', '0', '1');
				$phpenabled = makeyesno('phpenabled', '1', '0', '1');
				eval("echo \"" . getTemplate("customers/customers_add") . "\";");
			}
		}
	}
	elseif($action == 'edit'
	       && $id != 0)
	{
		$result = $db->query_first("SELECT * FROM `" . TABLE_PANEL_CUSTOMERS . "` WHERE `customerid`='" . (int)$id . "' " . ($userinfo['customers_see_all'] ? '' : " AND `adminid` = '" . (int)$userinfo['adminid'] . "' "));

		if($result['loginname'] != '')
		{
			if(isset($_POST['send'])
			   && $_POST['send'] == 'send')
			{
				$name = validate($_POST['name'], 'name');
				$firstname = validate($_POST['firstname'], 'first name');
				$company = validate($_POST['company'], 'company');
				$street = validate($_POST['street'], 'street');
				$zipcode = validate($_POST['zipcode'], 'zipcode', '/^[0-9 \-A-Z]*$/');
				$city = validate($_POST['city'], 'city');
				$phone = validate($_POST['phone'], 'phone', '/^[0-9\- \+]*$/');
				$fax = validate($_POST['fax'], 'fax', '/^[0-9\- \+]*$/');
				$email = $idna_convert->encode(validate($_POST['email'], 'email'));
				$customernumber = validate($_POST['customernumber'], 'customer number', '/^[A-Za-z0-9 \-]*$/Di');
				$def_language = validate($_POST['def_language'], 'default language');
				$password = validate($_POST['customer_password'], 'new password');
				$diskspace = intval_ressource($_POST['diskspace']);
				$traffic = doubleval_ressource($_POST['traffic']);
				$subdomains = intval_ressource($_POST['subdomains']);
				$emails = intval_ressource($_POST['emails']);
				$email_accounts = intval_ressource($_POST['email_accounts']);
				$email_forwarders = intval_ressource($_POST['email_forwarders']);
				$email_quota = intval_ressource($_POST['email_quota']);
				$email_quota_type = validate($_POST['email_quota_type'], 'quota type');
				$email_imap = intval_ressource($_POST['email_imap']);
				$email_pop3 = intval_ressource($_POST['email_pop3']);
				$ftps = intval_ressource($_POST['ftps']);
				$tickets = ($settings['ticket']['enabled'] == 1 ? intval_ressource($_POST['tickets']) : 0);
				$mysqls = intval_ressource($_POST['mysqls']);
				$createstdsubdomain = intval($_POST['createstdsubdomain']);
				$deactivated = intval($_POST['deactivated']);
				$phpenabled = intval($_POST['phpenabled']);
				$email_quota = getQuotaInBytes($email_quota, $email_quota_type);
				$diskspace = $diskspace*1024;
				$traffic = $traffic*1024*1024;

				if(((($userinfo['diskspace_used']+$diskspace-$result['diskspace']) > $userinfo['diskspace']) && ($userinfo['diskspace']/1024) != '-1')
				   || ((($userinfo['mysqls_used']+$mysqls-$result['mysqls']) > $userinfo['mysqls']) && $userinfo['mysqls'] != '-1')
				   || ((($userinfo['emails_used']+$emails-$result['emails']) > $userinfo['emails']) && $userinfo['emails'] != '-1')
				   || ((($userinfo['email_accounts_used']+$email_accounts-$result['email_accounts']) > $userinfo['email_accounts']) && $userinfo['email_accounts'] != '-1')
				   || ((($userinfo['email_forwarders_used']+$email_forwarders-$result['email_forwarders']) > $userinfo['email_forwarders']) && $userinfo['email_forwarders'] != '-1')
				   || ((($userinfo['email_quota_used']+$email_quota-$result['email_quota']) > $userinfo['email_quota']) && $userinfo['email_quota'] != '-1')
				   || ((($userinfo['ftps_used']+$ftps-$result['ftps']) > $userinfo['ftps']) && $userinfo['ftps'] != '-1')
				   || ((($userinfo['tickets_used']+$tickets-$result['tickets']) > $userinfo['tickets']) && $userinfo['tickets'] != '-1')
				   || ((($userinfo['subdomains_used']+$subdomains-$result['subdomains']) > $userinfo['subdomains']) && $userinfo['subdomains'] != '-1')
				   || (($diskspace/1024) == '-1' && ($userinfo['diskspace']/1024) != '-1')
				   || ($mysqls == '-1' && $userinfo['mysqls'] != '-1')
				   || ($emails == '-1' && $userinfo['emails'] != '-1')
				   || ($email_accounts == '-1' && $userinfo['email_accounts'] != '-1')
				   || ($email_forwarders == '-1' && $userinfo['email_forwarders'] != '-1')
				   || ($email_quota == '-1' && $userinfo['email_quota'] != '-1')
				   || ($ftps == '-1' && $userinfo['ftps'] != '-1')
				   || ($tickets == '-1' && $userinfo['tickets'] != '-1')
				   || ($subdomains == '-1' && $userinfo['subdomains'] != '-1'))
				{
					standard_error('youcantallocatemorethanyouhave');
					exit;
				}

				// Either $name and $firstname or the $company must be inserted

				if($name == ''
				   && $company == '')
				{
					standard_error(array(
						'stringisempty',
						'myname'
					));
				}
				elseif($firstname == ''
				       && $company == '')
				{
					standard_error(array(
						'stringisempty',
						'myfirstname'
					));
				}
				elseif($email == '')
				{
					standard_error(array(
						'stringisempty',
						'emailadd'
					));
				}
				elseif(!validateEmail($email))
				{
					standard_error('emailiswrong', $email);
				}
				else
				{
					$updatepassword = '';

					if($password != '')
					{
						$updatepassword = "`password`='" . md5($password) . "', ";
					}

					if($createstdsubdomain != '1')
					{
						$createstdsubdomain = '0';
					}

					if($createstdsubdomain == '1'
					   && $result['standardsubdomain'] == '0')
					{
						$db->query("INSERT INTO `" . TABLE_PANEL_DOMAINS . "` " . "(`domain`, `customerid`, `adminid`, `parentdomainid`, `ipandport`, `documentroot`, `zonefile`, `isemaildomain`, `caneditdomain`, `openbasedir`, `safemode`, `speciallogfile`, `specialsettings`) " . "VALUES ('" . $db->escape($result['loginname'] . '.' . $settings['system']['hostname']) . "', '" . (int)$result['customerid'] . "', '" . (int)$userinfo['adminid'] . "', '-1', '" . $db->escape($settings['system']['defaultip']) . "', '" . $db->escape($result['documentroot']) . "', '', '0', '0', '1', '1', '0', '')");
						$domainid = $db->insert_id();
						$db->query('UPDATE `' . TABLE_PANEL_CUSTOMERS . '` SET `standardsubdomain`=\'' . (int)$domainid . '\' WHERE `customerid`=\'' . (int)$result['customerid'] . '\'');
						$log->logAction(ADM_ACTION, LOG_NOTICE, "automatically added standardsubdomain for user '" . $result['loginname'] . "'");
						inserttask('1');
					}

					if($createstdsubdomain == '0'
					   && $result['standardsubdomain'] != '0')
					{
						$db->query('DELETE FROM `' . TABLE_PANEL_DOMAINS . '` WHERE `id`=\'' . (int)$result['standardsubdomain'] . '\'');
						$db->query('UPDATE `' . TABLE_PANEL_CUSTOMERS . '` SET `standardsubdomain`=\'0\' WHERE `customerid`=\'' . (int)$result['customerid'] . '\'');
						$log->logAction(ADM_ACTION, LOG_NOTICE, "automatically deleted standardsubdomain for user '" . $result['loginname'] . "'");
						inserttask('1');
					}

					if($deactivated != '1')
					{
						$deactivated = '0';
					}

					if($phpenabled != '0')
					{
						$phpenabled = '1';
					}

					if($phpenabled != $result['phpenabled'])
					{
						inserttask('1');
					}

					if($deactivated != $result['deactivated'])
					{
						$db->query("UPDATE `" . TABLE_MAIL_USERS . "` SET `postfix`='" . (($deactivated) ? 'N' : 'Y') . ", `pop3`='" . (($deactivated) ? '0' : '1') . ", `imap`='" . (($deactivated) ? '0' : '1') . "' WHERE `customerid`='" . (int)$id . "'");
						$db->query("UPDATE `" . TABLE_FTP_USERS . "` SET `login_enabled`='" . (($deactivated) ? 'N' : 'Y') . "' WHERE `customerid`='" . (int)$id . "'");
						$db->query("UPDATE `" . TABLE_PANEL_DOMAINS . "` SET `deactivated`='" . (int)$deactivated . "' WHERE `customerid`='" . (int)$id . "'");
						$log->logAction(ADM_ACTION, LOG_INFO, "deactivated user '" . $result['loginname'] . "'");
						inserttask('1');
					}

					// Disable or enable POP3 Login for customers Mail Accounts

					if($email_pop3 != $result['pop3'])
					{
						$db->query("UPDATE `" . TABLE_MAIL_USERS . "` SET `pop3`='" . (int)$email_pop3 . "' WHERE `customerid`='" . (int)$id . "'");
					}

					// Disable or enable IMAP Login for customers Mail Accounts

					if($email_imap != $result['imap'])
					{
						$db->query("UPDATE `" . TABLE_MAIL_USERS . "` SET `imap`='" . (int)$email_imap . "' WHERE `customerid`='" . (int)$id . "'");
					}

					$db->query("UPDATE `" . TABLE_PANEL_CUSTOMERS . "` SET `name`='" . $db->escape($name) . "', `firstname`='" . $db->escape($firstname) . "', `company`='" . $db->escape($company) . "', `street`='" . $db->escape($street) . "', `zipcode`='" . $db->escape($zipcode) . "', `city`='" . $db->escape($city) . "', `phone`='" . $db->escape($phone) . "', `fax`='" . $db->escape($fax) . "', `email`='" . $db->escape($email) . "', `customernumber`='" . $db->escape($customernumber) . "', `def_language`='" . $db->escape($def_language) . "', $updatepassword `diskspace`='" . $db->escape($diskspace) . "', `traffic`='" . $db->escape($traffic) . "', `subdomains`='" . $db->escape($subdomains) . "', `emails`='" . $db->escape($emails) . "', `email_accounts` = '" . $db->escape($email_accounts) . "', `email_forwarders`='" . $db->escape($email_forwarders) . "', `ftps`='" . $db->escape($ftps) . "', `tickets`='" . $db->escape($tickets) . "', `mysqls`='" . $db->escape($mysqls) . "', `deactivated`='" . $db->escape($deactivated) . "', `phpenabled`='" . $db->escape($phpenabled) . "', `email_quota`='" . $db->escape($email_quota) . "', `imap`='" . $db->escape($email_imap) . "', `pop3`='" . $db->escape($email_pop3) . "' WHERE `customerid`='" . (int)$id . "'");
					$admin_update_query = "UPDATE `" . TABLE_PANEL_ADMINS . "` SET `customers_used` = `customers_used` ";

					if($mysqls != '-1'
					   || $result['mysqls'] != '-1')
					{
						$admin_update_query.= ", `mysqls_used` = `mysqls_used` ";

						if($mysqls != '-1')
						{
							$admin_update_query.= " + 0" . (int)$mysqls . " ";
						}

						if($result['mysqls'] != '-1')
						{
							$admin_update_query.= " - 0" . (int)$result['mysqls'] . " ";
						}
					}

					if($emails != '-1'
					   || $result['emails'] != '-1')
					{
						$admin_update_query.= ", `emails_used` = `emails_used` ";

						if($emails != '-1')
						{
							$admin_update_query.= " + 0" . (int)$emails . " ";
						}

						if($result['emails'] != '-1')
						{
							$admin_update_query.= " - 0" . (int)$result['emails'] . " ";
						}
					}

					if($email_accounts != '-1'
					   || $result['email_accounts'] != '-1')
					{
						$admin_update_query.= ", `email_accounts_used` = `email_accounts_used` ";

						if($email_accounts != '-1')
						{
							$admin_update_query.= " + 0" . (int)$email_accounts . " ";
						}

						if($result['email_accounts'] != '-1')
						{
							$admin_update_query.= " - 0" . (int)$result['email_accounts'] . " ";
						}
					}

					if($email_forwarders != '-1'
					   || $result['email_forwarders'] != '-1')
					{
						$admin_update_query.= ", `email_forwarders_used` = `email_forwarders_used` ";

						if($email_forwarders != '-1')
						{
							$admin_update_query.= " + 0" . (int)$email_forwarders . " ";
						}

						if($result['email_forwarders'] != '-1')
						{
							$admin_update_query.= " - 0" . (int)$result['email_forwarders'] . " ";
						}
					}

					if($email_quota != '-1'
					   || $result['email_quota'] != '-1')
					{
						$admin_update_query.= ", `email_quota_used` = `email_quota_used` ";

						if($email_quota != '-1')
						{
							$admin_update_query.= " + 0" . (int)$email_quota . " ";
						}

						if($result['email_quota'] != '-1')
						{
							$admin_update_query.= " - 0" . (int)$result['email_quota'] . " ";
						}
					}

					if($subdomains != '-1'
					   || $result['subdomains'] != '-1')
					{
						$admin_update_query.= ", `subdomains_used` = `subdomains_used` ";

						if($subdomains != '-1')
						{
							$admin_update_query.= " + 0" . (int)$subdomains . " ";
						}

						if($result['subdomains'] != '-1')
						{
							$admin_update_query.= " - 0" . (int)$result['subdomains'] . " ";
						}
					}

					if($ftps != '-1'
					   || $result['ftps'] != '-1')
					{
						$admin_update_query.= ", `ftps_used` = `ftps_used` ";

						if($ftps != '-1')
						{
							$admin_update_query.= " + 0" . (int)$ftps . " ";
						}

						if($result['ftps'] != '-1')
						{
							$admin_update_query.= " - 0" . (int)$result['ftps'] . " ";
						}
					}

					if($tickets != '-1'
					   || $result['tickets'] != '-1')
					{
						$admin_update_query.= ", `tickets_used` = `tickets_used` ";

						if($tickets != '-1')
						{
							$admin_update_query.= " + 0" . (int)$tickets . " ";
						}

						if($result['tickets'] != '-1')
						{
							$admin_update_query.= " - 0" . (int)$result['tickets'] . " ";
						}
					}

					if(($diskspace/1024) != '-1'
					   || ($result['diskspace']/1024) != '-1')
					{
						$admin_update_query.= ", `diskspace_used` = `diskspace_used` ";

						if(($diskspace/1024) != '-1')
						{
							$admin_update_query.= " + 0" . (int)$diskspace . " ";
						}

						if(($result['diskspace']/1024) != '-1')
						{
							$admin_update_query.= " - 0" . (int)$result['diskspace'] . " ";
						}
					}

					$admin_update_query.= " WHERE `adminid` = '" . (int)$result['adminid'] . "'";
					$db->query($admin_update_query);
					$log->logAction(ADM_ACTION, LOG_INFO, "edited user '" . $result['loginname'] . "'");
					redirectTo($filename, Array(
						'page' => $page,
						's' => $s
					));
				}
			}
			else
			{
				$language_options = '';

				while(list($language_file, $language_name) = each($languages))
				{
					$language_options.= makeoption($language_name, $language_file, $result['def_language'], true);
				}

				$result['traffic'] = round($result['traffic']/(1024*1024), $settings['panel']['decimal_places']);
				$result['diskspace'] = round($result['diskspace']/1024, $settings['panel']['decimal_places']);
				$result['email'] = $idna_convert->decode($result['email']);
				$createstdsubdomain = makeyesno('createstdsubdomain', '1', '0', (($result['standardsubdomain'] != '0') ? '1' : '0'));
				$phpenabled = makeyesno('phpenabled', '1', '0', $result['phpenabled']);
				$deactivated = makeyesno('deactivated', '1', '0', $result['deactivated']);
				$quota_type_option = makeQuotaOption(getQuotaType($result['email_quota']));
				$result['email_quota'] = getQuota($result['email_quota']);
				$email_imap = makeyesno('email_imap', '1', '0', $result['imap']);
				$email_pop3 = makeyesno('email_pop3', '1', '0', $result['pop3']);
				$result = htmlentities_array($result);
				eval("echo \"" . getTemplate("customers/customers_edit") . "\";");
			}
		}
	}
}

?>
