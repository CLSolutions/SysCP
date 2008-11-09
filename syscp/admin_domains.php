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

if($page == 'domains'
   || $page == 'overview')
{
	// Load taxclasses if billing is activated

	if($settings['billing']['activate_billing'] == '1')
	{
		$taxclasses = array(
			'0' => $lng['panel']['default']
		);
		$taxclasses_option = makeoption($lng['panel']['default'], 0, 0, true);
		$taxclasses_result = $db->query('SELECT `classid`, `classname` FROM `' . TABLE_BILLING_TAXCLASSES . '` ');

		while($taxclasses_row = $db->fetch_array($taxclasses_result))
		{
			$taxclasses[$taxclasses_row['classid']] = $taxclasses_row['classname'];
			$taxclasses_option.= makeoption($taxclasses_row['classname'], $taxclasses_row['classid']);
		}
	}

	// Let's see how many customers we have

	$countcustomers = $db->query_first("SELECT COUNT(`customerid`) as `countcustomers` FROM `" . TABLE_PANEL_CUSTOMERS . "` " . ($userinfo['customers_see_all'] ? '' : " WHERE `adminid` = '" . (int)$userinfo['adminid'] . "' ") . "");
	$countcustomers = (int)$countcustomers['countcustomers'];

	if($action == '')
	{
		$log->logAction(ADM_ACTION, LOG_NOTICE, "viewed admin_domains");
		$fields = array(
			'd.domain' => $lng['domains']['domainname'],
			'ip.ip' => $lng['admin']['ipsandports']['ip'],
			'ip.port' => $lng['admin']['ipsandports']['port'],
			'c.name' => $lng['customer']['name'],
			'c.firstname' => $lng['customer']['firstname'],
			'c.company' => $lng['customer']['company'],
			'c.loginname' => $lng['login']['username'],
			'd.aliasdomain' => $lng['domains']['aliasdomain']
		);
		$paging = new paging($userinfo, $db, TABLE_PANEL_DOMAINS, $fields, $settings['panel']['paging'], $settings['panel']['natsorting']);
		$domains = '';
		$result = $db->query("SELECT `d`.*, CONCAT(`ip`.`ip`,':',`ip`.`port`) AS `ipandport`, `c`.`loginname`, `c`.`name`, `c`.`firstname`, `c`.`company`, `c`.`standardsubdomain`, `ad`.`id` AS `aliasdomainid`, `ad`.`domain` AS `aliasdomain`, `da`.`id` AS `domainaliasid`, `da`.`domain` AS `domainalias`, `ip`.`id` AS `ipid`, `ip`.`ip`, `ip`.`port` " . "FROM `" . TABLE_PANEL_DOMAINS . "` `d` " . "LEFT JOIN `" . TABLE_PANEL_CUSTOMERS . "` `c` USING(`customerid`) " . "LEFT JOIN `" . TABLE_PANEL_DOMAINS . "` `ad` ON `d`.`aliasdomain`=`ad`.`id` " . "LEFT JOIN `" . TABLE_PANEL_DOMAINS . "` `da` ON `da`.`aliasdomain`=`d`.`id` " . "LEFT JOIN `" . TABLE_PANEL_IPSANDPORTS . "` `ip` ON (`d`.`ipandport` = `ip`.`id`) " . "WHERE `d`.`parentdomainid`='0' " . ($userinfo['customers_see_all'] ? '' : " AND `d`.`adminid` = '" . (int)$userinfo['adminid'] . "' ") . " " . $paging->getSqlWhere(true) . " " . $paging->getSqlOrderBy() . " " . $paging->getSqlLimit());
		$paging->setEntries($db->num_rows($result));
		$sortcode = $paging->getHtmlSortCode($lng);
		$arrowcode = $paging->getHtmlArrowCode($filename . '?page=' . $page . '&s=' . $s);
		$searchcode = $paging->getHtmlSearchCode($lng);
		$pagingcode = $paging->getHtmlPagingCode($filename . '?page=' . $page . '&s=' . $s);
		$domain_array = array();

		while($row = $db->fetch_array($result))
		{
			$row['domain'] = $idna_convert->decode($row['domain']);
			$row['aliasdomain'] = $idna_convert->decode($row['aliasdomain']);
			$row['domainalias'] = $idna_convert->decode($row['domainalias']);

			if(filter_var($row['ip'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === FALSE)
			{
				$row['ipandport'] = '[' . $row['ip'] . ']:' . $row['port'];
			}

			$domain_array[$row['domain']] = $row;
		}

		/**
		 * We need ksort/krsort here to make sure idna-domains are also sorted correctly
		 */

		if($paging->sortfield == 'd.domain'
		   && $paging->sortorder == 'asc')
		{
			ksort($domain_array);
		}
		elseif($paging->sortfield == 'd.domain'
		       && $paging->sortorder == 'desc')
		{
			krsort($domain_array);
		}

		$i = 0;
		$count = 0;
		foreach($domain_array as $row)
		{
			if($paging->checkDisplay($i))
			{
				$enable_billing_data_edit = ($row['servicestart_date'] == '0000-00-00' || ($row['interval_payment'] == CONST_BILLING_INTERVALPAYMENT_PREPAID && calculateDayDifference(time(), $row['lastinvoiced_date']) >= 0));
				$highlight_row = ($row['service_active'] != '1' && $settings['billing']['activate_billing'] == '1' && $settings['billing']['highlight_inactive'] == '1');
				$row = htmlentities_array($row);
				eval("\$domains.=\"" . getTemplate("domains/domains_domain") . "\";");
				$count++;
			}

			$i++;
		}

		// Display the list

		eval("echo \"" . getTemplate("domains/domains") . "\";");
	}
	elseif($action == 'delete'
	       && $id != 0)
	{
		/*
		$result = $db->query_first("SELECT `d`.`id`, `d`.`domain`, `d`.`customerid`, `d`.`documentroot`, `d`.`isemaildomain`, `d`.`zonefile` FROM `" . TABLE_PANEL_DOMAINS . "` `d`, `" . TABLE_PANEL_CUSTOMERS . "` `c` WHERE `d`.`id`='" . (int)$id . "' AND `d`.`id` <> `c`.`standardsubdomain`" . ($userinfo['customers_see_all'] ? '' : " AND `d`.`adminid` = '" . (int)$userinfo['adminid'] . "' "));
		*/

		$result = $db->query_first("SELECT `id`, `customerid`, `domain`,`servicestart_date`, `interval_payment`, `lastinvoiced_date` FROM `" . TABLE_PANEL_DOMAINS . "` WHERE `id`='" . (int)$id . "'");
		$alias_check = $db->query_first('SELECT COUNT(`id`) AS `count` FROM `' . TABLE_PANEL_DOMAINS . '` WHERE `aliasdomain`=\'' . (int)$id . '\'');

		if($result['domain'] != ''
		   && $alias_check['count'] == 0)
		{
			$enable_billing_data_edit = ($result['servicestart_date'] == '0000-00-00' || ($result['interval_payment'] == CONST_BILLING_INTERVALPAYMENT_PREPAID && calculateDayDifference(time(), $result['lastinvoiced_date']) >= 0));

			if($enable_billing_data_edit !== true)
			{
				standard_error('service_still_active');
				exit;
			}

			if(isset($_POST['send'])
			   && $_POST['send'] == 'send')
			{
				$query = 'SELECT `id` FROM `' . TABLE_PANEL_DOMAINS . '` WHERE (`id`="' . (int)$id . '" OR `parentdomainid`="' . (int)$id . '")  AND  `isemaildomain`="1"';
				$subResult = $db->query($query);
				$idString = array();

				while($subRow = $db->fetch_array($subResult))
				{
					$idString[] = '`domainid` = "' . (int)$subRow['id'] . '"';
				}

				$idString = implode(' OR ', $idString);

				if($idString != '')
				{
					$query = 'DELETE FROM `' . TABLE_MAIL_USERS . '` WHERE ' . $idString;
					$db->query($query);
					$query = 'DELETE FROM `' . TABLE_MAIL_VIRTUAL . '` WHERE ' . $idString;
					$db->query($query);
					$log->logAction(ADM_ACTION, LOG_NOTICE, "deleted domain/s from mail-tables");
				}

				$db->query("DELETE FROM `" . TABLE_PANEL_DOMAINS . "` WHERE `id`='" . (int)$id . "' OR `parentdomainid`='" . (int)$result['id'] . "'");
				$deleted_domains = (int)$db->affected_rows();
				$db->query("UPDATE `" . TABLE_PANEL_CUSTOMERS . "` SET `subdomains_used` = `subdomains_used` - " . (int)($deleted_domains - 1) . " WHERE `customerid` = '" . (int)$result['customerid'] . "'");
				$db->query("UPDATE `" . TABLE_PANEL_ADMINS . "` SET `domains_used` = `domains_used` - 1 WHERE `adminid` = '" . (int)$userinfo['adminid'] . "'");
				$db->query('UPDATE `' . TABLE_PANEL_CUSTOMERS . '` SET `standardsubdomain`=\'0\' WHERE `standardsubdomain`=\'' . (int)$result['id'] . '\' AND `customerid`=\'' . (int)$result['customerid'] . '\'');
				$log->logAction(ADM_ACTION, LOG_INFO, "deleted domain/subdomains (#" . $result['id'] . ")");
				updateCounters();
				inserttask('1');
				inserttask('4');
				redirectTo($filename, Array(
					'page' => $page,
					's' => $s
				));
			}
			else
			{
				ask_yesno('admin_domain_reallydelete', $filename, array(
					'id' => $id,
					'page' => $page,
					'action' => $action
				), $idna_convert->decode($result['domain']));
			}
		}
	}
	elseif($action == 'add')
	{
		if($userinfo['domains_used'] < $userinfo['domains']
		   || $userinfo['domains'] == '-1')
		{
			if(isset($_POST['send'])
			   && $_POST['send'] == 'send')
			{
				if($_POST['domain'] == $settings['system']['hostname'])
				{
					standard_error('admin_domain_emailsystemhostname');
					exit;
				}

				$domain = $idna_convert->encode(preg_replace(Array(
					'/\:(\d)+$/',
					'/^https?\:\/\//'
				), '', validate($_POST['domain'], 'domain')));
				$subcanemaildomain = intval($_POST['subcanemaildomain']);
				$isemaildomain = intval($_POST['isemaildomain']);
				$email_only = intval($_POST['email_only']);
				$wwwserveralias = intval($_POST['wwwserveralias']);
				$speciallogfile = intval($_POST['speciallogfile']);
				$aliasdomain = intval($_POST['alias']);
				$customerid = intval($_POST['customerid']);
				$customer = $db->query_first("SELECT * FROM `" . TABLE_PANEL_CUSTOMERS . "` WHERE `customerid`='" . (int)$customerid . "' " . ($userinfo['customers_see_all'] ? '' : " AND `adminid` = '" . (int)$userinfo['adminid'] . "' ") . " ");
				if(empty($customer) || $customer['customerid'] != $customerid)
				{
					standard_error('customerdoesntexist');
				}

				if($userinfo['customers_see_all'] == '1')
				{
					$adminid = intval($_POST['adminid']);
					$admin = $db->query_first("SELECT * FROM `" . TABLE_PANEL_ADMINS . "` WHERE `adminid`='" . (int)$adminid . "' AND ( `domains_used` < `domains` OR `domains` = '-1' )");
					if(empty($admin) || $admin['adminid'] != $adminid)
					{
						standard_error('admindoesntexist');
					}
				}
				else
				{
					$adminid = $userinfo['adminid'];
					$admin = $userinfo;
				}

				$documentroot = $customer['documentroot'];
				$registration_date = validate($_POST['registration_date'], 'registration_date', '/^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/', '', array('0000-00-00', '0', ''));

				if($userinfo['edit_billingdata'] == '1'
				   && $settings['billing']['activate_billing'] == '1')
				{
					$interval_fee = doubleval(str_replace(',', '.', $_POST['interval_fee']));
					$interval_length = intval($_POST['interval_length']);
					$interval_type = (in_array($_POST['interval_type'], getIntervalTypes('array')) ? $_POST['interval_type'] : 'y');
					$setup_fee = doubleval(str_replace(',', '.', $_POST['setup_fee']));
					$service_active = intval($_POST['service_active']);
					$interval_payment = intval($_POST['interval_payment']);
				}
				else
				{
					$interval_fee = 0;
					$interval_length = 0;
					$interval_type = 'y';
					$setup_fee = 0;
					$service_active = 0;
					$interval_payment = 0;
				}

				if(isset($_POST['taxclass'])
				   && intval($_POST['taxclass']) != 0
				   && isset($taxclasses[$_POST['taxclass']]))
				{
					$taxclass = $_POST['taxclass'];
				}
				else
				{
					$taxclass = '0';
				}

				if($service_active == 1
				   && isset($_POST['servicestart_date']))
				{
					$servicestart_date = validate($_POST['servicestart_date'], html_entity_decode($lng['service']['start_date']), '/^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/', '', array('0000-00-00', '0', ''));
				}

				if($userinfo['change_serversettings'] == '1')
				{
					$isbinddomain = intval($_POST['isbinddomain']);
					$caneditdomain = intval($_POST['caneditdomain']);
					$zonefile = validate($_POST['zonefile'], 'zonefile');

					if(isset($_POST['dkim']))
					{
						$dkim = intval($_POST['dkim']);
					}
					else
					{
						$dkim = '1';
					}

					$specialsettings = validate(str_replace("\r\n", "\n", $_POST['specialsettings']), 'specialsettings', '/^[^\0]*$/');

					validate($_POST['documentroot'], 'documentroot');

					if(isset($_POST['documentroot'])
					   && $_POST['documentroot'] != '')
					{
						if(substr($_POST['documentroot'], 0, 1) != '/'
						   && !preg_match('/^https?\:\/\//', $_POST['documentroot']))
						{
							$documentroot.= '/' . $_POST['documentroot'];
						}
						else
						{
							$documentroot = $_POST['documentroot'];
						}
					}
				}
				else
				{
					$isbinddomain = '1';
					$caneditdomain = '1';
					$zonefile = '';
					$dkim = '1';
					$specialsettings = '';
				}

				if($userinfo['caneditphpsettings'] == '1' || $userinfo['change_serversettings'] == '1')
				{
					$openbasedir = intval($_POST['openbasedir']);
					$safemode = intval($_POST['safemode']);

					if((int)$settings['system']['mod_fcgid'] == 1)
					{
						$phpsettingid = (int)$_POST['phpsettingid'];
						$phpsettingid_check = $db->query_first("SELECT * FROM `" . TABLE_PANEL_PHPCONFIGS . "` WHERE `id` = " . (int)$phpsettingid);
						if(!isset($phpsettingid_check['id'])
						   || $phpsettingid_check['id'] == '0'
						   || $phpsettingid_check['id'] != $phpsettingid)
						{
							standard_error('phpsettingidwrong');
						}
						$mod_fcgid_starter = validate($_POST['mod_fcgid_starter'], 'mod_fcgid_starter', '/^[0-9]*$/', '', array('-1', ''));
						$mod_fcgid_maxrequests = validate($_POST['mod_fcgid_maxrequests'], 'mod_fcgid_maxrequests', '/^[0-9]*$/', '', array('-1', ''));
					}
					else
					{
						$phpsettingid = '1';
						$mod_fcgid_starter = '-1';
						$mod_fcgid_maxrequests = '-1';
					}
				}
				else
				{
					$openbasedir = '1';
					$safemode = '1';
					$phpsettingid = '1';
					$mod_fcgid_starter = '-1';
					$mod_fcgid_maxrequests = '-1';
				}

				if($userinfo['ip'] != "-1")
				{
					$admin_ip = $db->query_first("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `id`='" . (int)$userinfo['ip'] . "' ORDER BY `ip`, `port` ASC");
					$additional_ip_condition = ' AND `ip` = \'' . $admin_ip['ip'] . '\' ';
				}
				else
				{
					$additional_ip_condition = '';
				}

				$ipandport = intval($_POST['ipandport']);
				$ipandport_check = $db->query_first("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `id` = '" . $db->escape($ipandport) . "' AND `ssl` = '0'" . $additional_ip_condition);

				if(!isset($ipandport_check['id'])
				   || $ipandport_check['id'] == '0'
				   || $ipandport_check['id'] != $ipandport)
				{
					standard_error('ipportdoesntexist');
				}

				if($settings['system']['use_ssl'] == "1"
				   && isset($_POST['ssl'])
				   && isset($_POST['ssl_redirect'])
				   && isset($_POST['ssl_ipandport'])
				   && $_POST['ssl'] != '0')
				{
					$ssl = (int)$_POST['ssl'];
					$ssl_redirect = (int)$_POST['ssl_redirect'];
					$ssl_ipandport = (int)$_POST['ssl_ipandport'];
					$ssl_ipandport_check = $db->query_first("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `id` = '" . $db->escape($ssl_ipandport) . "' AND `ssl` = '1'" . $additional_ip_condition);
					if(!isset($ssl_ipandport_check['id'])
					   || $ssl_ipandport_check['id'] == '0'
					   || $ssl_ipandport_check['id'] != $ssl_ipandport)
					{
						standard_error('ipportdoesntexist');
					}
				}
				else
				{
					$ssl = 0;
					$ssl_redirect = 0;
					$ssl_ipandport = 0;
				}

				if(!preg_match('/^https?\:\/\//', $documentroot))
				{
					$documentroot = makeCorrectDir($documentroot);
				}

				$domain_check = $db->query_first("SELECT `id`, `domain` FROM `" . TABLE_PANEL_DOMAINS . "` WHERE `domain` = '" . $db->escape(strtolower($domain)) . "'");
				$aliasdomain_check = array(
					'id' => 0
				);

				if($aliasdomain != 0)
				{
					$aliasdomain_check = $db->query_first('SELECT `id` FROM `' . TABLE_PANEL_DOMAINS . '` `d`,`' . TABLE_PANEL_CUSTOMERS . '` `c` WHERE `d`.`customerid`=\'' . (int)$customerid . '\' AND `d`.`aliasdomain` IS NULL AND `d`.`id`<>`c`.`standardsubdomain` AND `c`.`customerid`=\'' . (int)$customerid . '\' AND `d`.`id`=\'' . (int)$aliasdomain . '\'');
				}

				if($openbasedir != '1')
				{
					$openbasedir = '0';
				}

				if($safemode != '1')
				{
					$safemode = '0';
				}

				if($speciallogfile != '1')
				{
					$speciallogfile = '0';
				}

				if($isbinddomain != '1')
				{
					$isbinddomain = '0';
				}

				if($isemaildomain != '1')
				{
					$isemaildomain = '0';
				}

				if($email_only == '1')
				{
					$isemaildomain = '1';
				}
				else
				{
					$email_only = '0';
				}

				if($subcanemaildomain != '1'
				   && $subcanemaildomain != '2'
				   && $subcanemaildomain != '3')
				{
					$subcanemaildomain = '0';
				}

				if($dkim != '1')
				{
					$dkim = '0';
				}

				if($wwwserveralias != '1')
				{
					$wwwserveralias = '0';
				}

				if($caneditdomain != '1')
				{
					$caneditdomain = '0';
				}

				if($service_active == 1)
				{
					$service_active = '1';

					if(!isset($servicestart_date)
					   || $servicestart_date == '0000-00-00')
					{
						$servicestart_date = date('Y-m-d');
					}
				}
				else
				{
					$service_active = '0';
					$servicestart_date = '0000-00-00';
				}

				if($interval_payment != '1')
				{
					$interval_payment = '0';
				}

				if($domain == '')
				{
					standard_error(array(
						'stringisempty',
						'mydomain'
					));
				}
				elseif(!validateDomain($domain))
				{
					standard_error(array(
						'stringiswrong',
						'mydomain'
					));
				}
				elseif($documentroot == '')
				{
					standard_error(array(
						'stringisempty',
						'mydocumentroot'
					));
				}
				elseif($customerid == 0)
				{
					standard_error('adduserfirst');
				}
				elseif(strtolower($domain_check['domain']) == strtolower($domain))
				{
					standard_error('domainalreadyexists', $idna_convert->decode($domain));
				}
				elseif($aliasdomain_check['id'] != $aliasdomain)
				{
					standard_error('domainisaliasorothercustomer');
				}
				else
				{
					$params = array(
						'page' => $page,
						'action' => $action,
						'domain' => $domain,
						'customerid' => $customerid,
						'adminid' => $adminid,
						'documentroot' => $documentroot,
						'alias' => $aliasdomain,
						'isbinddomain' => $isbinddomain,
						'isemaildomain' => $isemaildomain,
						'email_only' => $email_only,
						'subcanemaildomain' => $subcanemaildomain,
						'caneditdomain' => $caneditdomain,
						'zonefile' => $zonefile,
						'dkim' => $dkim,
						'speciallogfile' => $speciallogfile,
						'wwwserveralias' => $wwwserveralias,
						'ipandport' => $ipandport,
						'ssl' => $ssl,
						'ssl_redirect' => $ssl_redirect,
						'ssl_ipandport' => $ssl_ipandport,
						'openbasedir' => $openbasedir,
						'safemode' => $safemode,
						'phpsettingid' => $phpsettingid,
						'mod_fcgid_starter' => $mod_fcgid_starter,
						'mod_fcgid_maxrequests' => $mod_fcgid_maxrequests,
						'specialsettings' => $specialsettings,
						'registration_date' => $registration_date,
						'interval_fee' => $interval_fee,
						'interval_length' => $interval_length,
						'interval_type' => $interval_type,
						'interval_payment' => $interval_payment,
						'setup_fee' => $setup_fee,
						'servicestart_date' => $servicestart_date,
						'service_active' => $service_active,
					);
					$security_questions = array(
						'reallydisablesecuritysetting' => (($openbasedir == '0' || $safemode == '0') && $userinfo['change_serversettings'] == '1'),
						'reallydocrootoutofcustomerroot' => (substr($documentroot, 0, strlen($customer['documentroot'])) != $customer['documentroot'] && !preg_match('/^https?\:\/\//', $documentroot))
					);
					foreach($security_questions as $question_name => $question_launch)
					{
						if($question_launch !== false)
						{
							$params[$question_name] = $question_name;

							if(!isset($_POST[$question_name])
							   || $_POST[$question_name] != $question_name)
							{
								ask_yesno('admin_domain_' . $question_name, $filename, $params);
								exit;
							}
						}
					}

					$db->query("INSERT INTO `" . TABLE_PANEL_DOMAINS . "` (`domain`, `customerid`, `adminid`, `documentroot`, `ipandport`,`aliasdomain`, `zonefile`, `dkim`, `wwwserveralias`, `isbinddomain`, `isemaildomain`, `email_only`, `subcanemaildomain`, `caneditdomain`, `openbasedir`, `safemode`,`speciallogfile`, `specialsettings`, `ssl`, `ssl_redirect`, `ssl_ipandport`, `add_date`, `registration_date`, `interval_fee`, `interval_length`, `interval_type`, `interval_payment`, `setup_fee`, `taxclass`, `service_active`, `servicestart_date`, `phpsettingid`, `mod_fcgid_starter`, `mod_fcgid_maxrequests`) VALUES ('" . $db->escape($domain) . "', '" . (int)$customerid . "', '" . (int)$adminid . "', '" . $db->escape($documentroot) . "', '" . $db->escape($ipandport) . "', " . (($aliasdomain != 0) ? '\'' . $db->escape($aliasdomain) . '\'' : 'NULL') . ", '" . $db->escape($zonefile) . "', '" . $db->escape($dkim) . "', '" . $db->escape($wwwserveralias) . "', '" . $db->escape($isbinddomain) . "', '" . $db->escape($isemaildomain) . "', '" . $db->escape($email_only) . "', '" . $db->escape($subcanemaildomain) . "', '" . $db->escape($caneditdomain) . "', '" . $db->escape($openbasedir) . "', '" . $db->escape($safemode) . "', '" . $db->escape($speciallogfile) . "', '" . $db->escape($specialsettings) . "', '" . $ssl . "', '" . $ssl_redirect . "' , '" . $ssl_ipandport . "', '" . $db->escape(time()) . "', '" . $db->escape($registration_date) . "', '" . $db->escape($interval_fee) . "', '" . $db->escape($interval_length) . "', '" . $db->escape($interval_type) . "', '" . $db->escape($interval_payment) . "', '" . $db->escape($setup_fee) . "', '" . $db->escape($taxclass) . "', '" . $db->escape($service_active) . "', '" . $db->escape($servicestart_date) . "', '" . (int)$phpsettindid . "', '" . (int)$mod_fcgid_starter . "', '" . (int)$mod_fcgid_maxrequests . "')");
					$domainid = $db->insert_id();
					$db->query("UPDATE `" . TABLE_PANEL_ADMINS . "` SET `domains_used` = `domains_used` + 1 WHERE `adminid` = '" . (int)$adminid . "'");
					$log->logAction(ADM_ACTION, LOG_INFO, "added domain '" . $domain . "'");
					inserttask('1');
					inserttask('4');
					redirectTo($filename, Array(
						'page' => $page,
						's' => $s
					));
				}
			}
			else
			{
				$customers = makeoption($lng['panel']['please_choose'], 0, 0, true);
				$result_customers = $db->query("SELECT `customerid`, `loginname`, `name`, `firstname`, `company` FROM `" . TABLE_PANEL_CUSTOMERS . "` " . ($userinfo['customers_see_all'] ? '' : " WHERE `adminid` = '" . (int)$userinfo['adminid'] . "' ") . " ORDER BY `name` ASC");

				while($row_customer = $db->fetch_array($result_customers))
				{
					if($row_customer['company'] == '')
					{
						$customers.= makeoption($row_customer['name'] . ', ' . $row_customer['firstname'] . ' (' . $row_customer['loginname'] . ')', $row_customer['customerid']);
					}
					else
					{
						if($row_customer['name'] != ''
						   && $row_customer['firstname'] != '')
						{
							$customers.= makeoption($row_customer['name'] . ', ' . $row_customer['firstname'] . ' | ' . $row_customer['company'] . ' (' . $row_customer['loginname'] . ')', $row_customer['customerid']);
						}
						else
						{
							$customers.= makeoption($row_customer['company'] . ' (' . $row_customer['loginname'] . ')', $row_customer['customerid']);
						}
					}
				}

				$admins = '';

				if($userinfo['customers_see_all'] == '1')
				{
					$result_admins = $db->query("SELECT `adminid`, `loginname`, `name`, `firstname`, `company` FROM `" . TABLE_PANEL_ADMINS . "` WHERE `domains_used` < `domains` OR `domains` = '-1' ORDER BY `name` ASC");

					while($row_admin = $db->fetch_array($result_admins))
					{
						if($row_admin['company'] == '')
						{
							$admins.= makeoption($row_admin['name'] . ', ' . $row_admin['firstname'] . ' (' . $row_admin['loginname'] . ')', $row_admin['adminid'], $userinfo['adminid']);
						}
						else
						{
							if($row_admin['name'] != ''
							   && $row_admin['firstname'] != '')
							{
								$admins.= makeoption($row_admin['name'] . ', ' . $row_admin['firstname'] . ' | ' . $row_admin['company'] . ' (' . $row_admin['loginname'] . ')', $row_admin['adminid'], $userinfo['adminid']);
							}
							else
							{
								$admins.= makeoption($row_admin['company'] . ' (' . $row_admin['loginname'] . ')', $row_admin['adminid'], $userinfo['adminid']);
							}
						}
					}
				}

				if($userinfo['ip'] == "-1")
				{
					$result_ipsandports = $db->query("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `ssl`='0' ORDER BY `ip`, `port` ASC");
					$result_ssl_ipsandports = $db->query("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `ssl`='1' ORDER BY `ip`, `port` ASC");
				}
				else
				{
					$admin_ip = $db->query_first("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `id`='" . (int)$userinfo['ip'] . "' ORDER BY `ip`, `port` ASC");
					$result_ipsandports = $db->query("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `ssl`='0' AND `ip`='" . $admin_ip['ip'] . "' ORDER BY `ip`, `port` ASC");
					$result_ssl_ipsandports = $db->query("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `ssl`='1' AND `ip`='" . $admin_ip['ip'] . "' ORDER BY `ip`, `port` ASC");
				}

				$ipsandports = '';

				while($row_ipandport = $db->fetch_array($result_ipsandports))
				{
					if(filter_var($row_ipandport['ip'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === FALSE)
					{
						$row_ipandport['ip'] = '[' . $row_ipandport['ip'] . ']';
					}

					$ipsandports.= makeoption($row_ipandport['ip'] . ':' . $row_ipandport['port'], $row_ipandport['id']);
				}

				$ssl_ipsandports = '';

				while($row_ssl_ipandport = $db->fetch_array($result_ssl_ipsandports))
				{
					if(filter_var($row_ssl_ipandport['ip'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === FALSE)
					{
						$row_ssl_ipandport['ip'] = '[' . $row_ssl_ipandport['ip'] . ']';
					}

					$ssl_ipsandports.= makeoption($row_ssl_ipandport['ip'] . ':' . $row_ssl_ipandport['port'], $row_ssl_ipandport['id'], $settings['system']['defaultip']);
				}

				$ssl = makeyesno('ssl', '1', '0', $result['ssl']);
				$ssl_redirect = makeyesno('ssl_redirect', '1', '0', $result['ssl_redirect']);
				$standardsubdomains = array();
				$result_standardsubdomains = $db->query('SELECT `id` FROM `' . TABLE_PANEL_DOMAINS . '` `d`, `' . TABLE_PANEL_CUSTOMERS . '` `c` WHERE `d`.`id`=`c`.`standardsubdomain`');

				while($row_standardsubdomain = $db->fetch_array($result_standardsubdomains))
				{
					$standardsubdomains[] = $db->escape($row_standardsubdomain['id']);
				}

				if(count($standardsubdomains) > 0)
				{
					$standardsubdomains = 'AND `d`.`id` NOT IN (' . join(',', $standardsubdomains) . ') ';
				}
				else
				{
					$standardsubdomains = '';
				}

				$domains = makeoption($lng['domains']['noaliasdomain'], 0, NULL, true);
				$result_domains = $db->query("SELECT `d`.`id`, `d`.`domain`, `c`.`loginname` FROM `" . TABLE_PANEL_DOMAINS . "` `d`, `" . TABLE_PANEL_CUSTOMERS . "` `c` WHERE `d`.`aliasdomain` IS NULL AND `d`.`parentdomainid`=0 " . $standardsubdomains . ($userinfo['customers_see_all'] ? '' : " AND `d`.`adminid` = '" . (int)$userinfo['adminid'] . "'") . " AND `d`.`customerid`=`c`.`customerid` ORDER BY `loginname`, `domain` ASC");

				while($row_domain = $db->fetch_array($result_domains))
				{
					$domains.= makeoption($idna_convert->decode($row_domain['domain']) . ' (' . $row_domain['loginname'] . ')', $row_domain['id']);
				}

				$phpconfigs = '';
				$configs = $db->query("SELECT * FROM `" . TABLE_PANEL_PHPCONFIGS . "`");

				while($row = $db->fetch_array($configs))
				{
					$phpconfigs.= makeoption($row['description'], $row['id'], '1', true, true);
				}

				$isbinddomain = makeyesno('isbinddomain', '1', '0', '1');
				$isemaildomain = makeyesno('isemaildomain', '1', '0', '1');
				$email_only = makeyesno('email_only', '1', '0', '0');
				$subcanemaildomain = makeoption($lng['admin']['subcanemaildomain']['never'], '0', '0', true, true) . makeoption($lng['admin']['subcanemaildomain']['choosableno'], '1', '0', true, true) . makeoption($lng['admin']['subcanemaildomain']['choosableyes'], '2', '0', true, true) . makeoption($lng['admin']['subcanemaildomain']['always'], '3', '0', true, true);
				$dkim = makeyesno('dkim', '1', '0', '1');
				$wwwserveralias = makeyesno('wwwserveralias', '1', '0', '1');
				$caneditdomain = makeyesno('caneditdomain', '1', '0', '1');
				$openbasedir = makeyesno('openbasedir', '1', '0', '1');
				$safemode = makeyesno('safemode', '1', '0', '1');
				$speciallogfile = makeyesno('speciallogfile', '1', '0', '0');
				$add_date = date('Y-m-d');

				if($settings['billing']['activate_billing'] == '1')
				{
					$interval_type = getIntervalTypes('option', 'y');
					$service_active = makeyesno('service_active', '1', '0', '0');
					$interval_payment = makeoption($lng['service']['interval_payment_prepaid'], '0', '0', true) . makeoption($lng['service']['interval_payment_postpaid'], '1', '0', true);
				}

				eval("echo \"" . getTemplate("domains/domains_add") . "\";");
			}
		}
	}
	elseif($action == 'edit'
	       && $id != 0)
	{
		$result = $db->query_first("SELECT `d`.`id`, `d`.`domain`, `d`.`customerid`, `d`.`adminid`, `d`.`email_only`, `d`.`documentroot`, `d`.`ssl`, `d`.`ssl_redirect`, `d`.`ssl_ipandport`,`d`.`ipandport`, `d`.`aliasdomain`, `d`.`isbinddomain`, `d`.`isemaildomain`, `d`.`subcanemaildomain`, `d`.`dkim`, `d`.`caneditdomain`, `d`.`zonefile`, `d`.`wwwserveralias`, `d`.`openbasedir`, `d`.`safemode`, `d`.`speciallogfile`, `d`.`specialsettings`, `d`.`add_date`, `d`.`registration_date`, `d`.`interval_fee`, `d`.`interval_length`, `d`.`interval_type`, `d`.`interval_payment`, `d`.`setup_fee`, `d`.`taxclass`, `d`.`service_active`, `d`.`servicestart_date`, `d`.`serviceend_date`, `d`.`lastinvoiced_date`, `c`.`loginname`, `c`.`name`, `c`.`firstname`, `c`.`company`, `d`.`phpsettingid`, `d`.`mod_fcgid_starter`, `d`.`mod_fcgid_maxrequests` " . "FROM `" . TABLE_PANEL_DOMAINS . "` `d` " . "LEFT JOIN `" . TABLE_PANEL_CUSTOMERS . "` `c` USING(`customerid`) " . "WHERE `d`.`parentdomainid`='0' AND `d`.`id`='" . (int)$id . "'" . ($userinfo['customers_see_all'] ? '' : " AND `d`.`adminid` = '" . (int)$userinfo['adminid'] . "' "));

		if($result['domain'] != '')
		{
			$subdomains = $db->query_first('SELECT COUNT(`id`) AS count FROM `' . TABLE_PANEL_DOMAINS . '` WHERE `parentdomainid`=\'' . (int)$result['id'] . '\'');
			$subdomains = $subdomains['count'];
			$alias_check = $db->query_first('SELECT COUNT(`id`) AS count FROM `' . TABLE_PANEL_DOMAINS . '` WHERE `aliasdomain`=\'' . (int)$result['id'] . '\'');
			$alias_check = $alias_check['count'];
			$domain_emails_result = $db->query('SELECT `email`, `email_full`, `destination`, `popaccountid` AS `number_email_forwarders` FROM `' . TABLE_MAIL_VIRTUAL . '` WHERE `customerid` = "' . (int)$result['customerid'] . '" AND `domainid` = "' . (int)$result['id'] . '" ');
			$emails = $db->num_rows($domain_emails_result);
			$email_forwarders = 0;
			$email_accounts = 0;

			while($domain_emails_row = $db->fetch_array($domain_emails_result))
			{
				if($domain_emails_row['destination'] != '')
				{
					$domain_emails_row['destination'] = explode(' ', makeCorrectDestination($domain_emails_row['destination']));
					$email_forwarders+= count($domain_emails_row['destination']);

					if(in_array($domain_emails_row['email_full'], $domain_emails_row['destination']))
					{
						$email_forwarders-= 1;
						$email_accounts++;
					}
				}
			}

			$override_billing_data_edit = (isset($_GET['override_billing_data_edit']) && $_GET['override_billing_data_edit'] == '1') || (isset($_POST['override_billing_data_edit']) && $_POST['override_billing_data_edit'] == '1');
			$enable_billing_data_edit = ($result['servicestart_date'] == '0000-00-00' || ($result['interval_payment'] == CONST_BILLING_INTERVALPAYMENT_PREPAID && calculateDayDifference(time(), $result['lastinvoiced_date']) >= 0) || $override_billing_data_edit === true);

			if(isset($_POST['send'])
			   && $_POST['send'] == 'send')
			{
				$customer = $customer_old = $db->query_first("SELECT * FROM " . TABLE_PANEL_CUSTOMERS . " WHERE `customerid`='" . (int)$result['customerid'] . "'");
				if(isset($_POST['customerid']) && ($customerid = intval($_POST['customerid'])) != $result['customerid'] && $settings['panel']['allow_domain_change_customer'] == '1')
				{
					$customer = $db->query_first("SELECT * FROM `" . TABLE_PANEL_CUSTOMERS . "` WHERE `customerid`='" . (int)$customerid . "' AND (`subdomains_used` + " . (int)$subdomains . " <= `subdomains` OR `subdomains` = '-1' ) AND (`emails_used` + " . (int)$emails . " <= `emails` OR `emails` = '-1' ) AND (`email_forwarders_used` + " . (int)$email_forwarders . " <= `email_forwarders` OR `email_forwarders` = '-1' ) AND (`email_accounts_used` + " . (int)$email_accounts . " <= `email_accounts` OR `email_accounts` = '-1' ) " . ($userinfo['customers_see_all'] ? '' : " AND `adminid` = '" . (int)$userinfo['adminid'] . "' ") . " ");
					if(empty($customer) || $customer['customerid'] != $customerid)
					{
						standard_error('customerdoesntexist');
					}
				}
				else
				{
					$customerid = $result['customerid'];
				}

				$admin = $admin_old = $db->query_first("SELECT * FROM `" . TABLE_PANEL_ADMINS . "` WHERE `adminid`='" . (int)$result['adminid'] . "' ");
				if($userinfo['customers_see_all'] == '1')
				{
					if(isset($_POST['adminid']) && ($adminid = intval($_POST['adminid'])) != $result['adminid'] && $settings['panel']['allow_domain_change_admin'] == '1')
					{
						$admin = $db->query_first("SELECT * FROM `" . TABLE_PANEL_ADMINS . "` WHERE `adminid`='" . (int)$adminid . "' AND ( `domains_used` < `domains` OR `domains` = '-1' )");
						if(empty($admin) || $admin['adminid'] != $adminid)
						{
							standard_error('admindoesntexist');
						}
					}
					else
					{
						$adminid = $result['adminid'];
					}
				}
				else
				{
					$adminid = $result['adminid'];
				}

				$aliasdomain = intval($_POST['alias']);
				$isemaildomain = intval($_POST['isemaildomain']);
				$email_only = intval($_POST['email_only']);
				$subcanemaildomain = intval($_POST['subcanemaildomain']);
				$caneditdomain = intval($_POST['caneditdomain']);
				$wwwserveralias = intval($_POST['wwwserveralias']);
				$registration_date = validate($_POST['registration_date'], 'registration_date', '/^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/', '', array('0000-00-00', '0', ''));

				if($userinfo['edit_billingdata'] == '1'
				   && $settings['billing']['activate_billing'] == '1')
				{
					$service_active = intval($_POST['service_active']);
					$interval_payment = intval($_POST['interval_payment']);
				}
				else
				{
					$service_active = $result['service_active'];
					$interval_payment = $result['interval_payment'];
				}

				if($enable_billing_data_edit === true
				   && $userinfo['edit_billingdata'] == '1'
				   && $settings['billing']['activate_billing'] == '1')
				{
					$interval_fee = doubleval(str_replace(',', '.', $_POST['interval_fee']));
					$interval_length = intval($_POST['interval_length']);
					$interval_type = (in_array($_POST['interval_type'], getIntervalTypes('array')) ? $_POST['interval_type'] : 'y');
					$setup_fee = doubleval(str_replace(',', '.', $_POST['setup_fee']));

					if(isset($_POST['taxclass'])
					   && intval($_POST['taxclass']) != 0
					   && isset($taxclasses[$_POST['taxclass']]))
					{
						$taxclass = $_POST['taxclass'];
					}
					else
					{
						$taxclass = '0';
					}

					if($result['service_active'] == 0
					   && $service_active == 0)
					{
						$servicestart_date = $result['servicestart_date'];
					}
					else
					{
						$servicestart_date = validate($_POST['servicestart_date'], html_entity_decode($lng['service']['start_date']), '/^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/', '', array('0000-00-00', '0', ''));
					}

					$serviceend_date = $result['serviceend_date'];
				}
				else
				{
					$interval_fee = $result['interval_fee'];
					$interval_length = $result['interval_length'];
					$interval_type = $result['interval_type'];
					$setup_fee = $result['setup_fee'];
					$taxclass = $result['taxclass'];
					$servicestart_date = $result['servicestart_date'];
					$serviceend_date = $result['serviceend_date'];
				}

				if($userinfo['change_serversettings'] == '1')
				{
					$isbinddomain = intval($_POST['isbinddomain']);
					$zonefile = validate($_POST['zonefile'], 'zonefile');

					if($settings['dkim']['use_dkim'] == '1')
					{
						$dkim = intval($_POST['dkim']);
					}
					else
					{
						$dkim = $result['dkim'];
					}

					$specialsettings = validate(str_replace("\r\n", "\n", $_POST['specialsettings']), 'specialsettings', '/^[^\0]*$/');
					$documentroot = validate($_POST['documentroot'], 'documentroot');

					if($documentroot == '')
					{
						$documentroot = $customer['documentroot'];
					}
				}
				else
				{
					$isbinddomain = $result['isbinddomain'];
					$zonefile = $result['zonefile'];
					$dkim = $result['dkim'];
					$specialsettings = $result['specialsettings'];
					$documentroot = $result['documentroot'];
				}

				if($userinfo['caneditphpsettings'] == '1' || $userinfo['change_serversettings'] == '1')
				{
					$openbasedir = intval($_POST['openbasedir']);
					$safemode = intval($_POST['safemode']);

					if((int)$settings['system']['mod_fcgid'] == 1)
					{
						$phpsettingid = (int)$_POST['phpsettingid'];
						$phpsettingid_check = $db->query_first("SELECT * FROM `" . TABLE_PANEL_PHPCONFIGS . "` WHERE `id` = " . (int)$phpsettingid);
						if(!isset($phpsettingid_check['id'])
						   || $phpsettingid_check['id'] == '0'
						   || $phpsettingid_check['id'] != $phpsettingid)
						{
							standard_error('phpsettingidwrong');
						}
						$mod_fcgid_starter = validate($_POST['mod_fcgid_starter'], 'mod_fcgid_starter', '/^[0-9]*$/', '', array('-1', ''));
						$mod_fcgid_maxrequests = validate($_POST['mod_fcgid_maxrequests'], 'mod_fcgid_maxrequests', '/^[0-9]*$/', '', array('-1', ''));
					}
					else
					{
						$phpsettingid = $result['phpsettingid'];
						$mod_fcgid_starter = $result['mod_fcgid_starter'];
						$mod_fcgid_maxrequests = $result['mod_fcgid_maxrequests'];
					}
				}
				else
				{
					$openbasedir = $result['openbasedir'];
					$safemode = $result['safemode'];
					$phpsettingid = $result['phpsettingid'];
					$mod_fcgid_starter = $result['mod_fcgid_starter'];
					$mod_fcgid_maxrequests = $result['mod_fcgid_maxrequests'];
				}

				if($userinfo['ip'] != "-1")
				{
					$admin_ip = $db->query_first("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `id`='" . (int)$userinfo['ip'] . "' ORDER BY `ip`, `port` ASC");
					$additional_ip_condition = ' AND `ip` = \'' . $admin_ip['ip'] . '\' ';
				}
				else
				{
					$additional_ip_condition = '';
				}

				$ipandport = intval($_POST['ipandport']);
				$ipandport_check = $db->query_first("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `id` = '" . $db->escape($ipandport) . "' AND `ssl` = '0'" . $additional_ip_condition);

				if(!isset($ipandport_check['id'])
				   || $ipandport_check['id'] == '0'
				   || $ipandport_check['id'] != $ipandport)
				{
					standard_error('ipportdoesntexist');
				}

				if($settings['system']['use_ssl'] == "1"
				   && isset($_POST['ssl'])
				   && isset($_POST['ssl_redirect'])
				   && isset($_POST['ssl_ipandport'])
				   && $_POST['ssl'] != '0')
				{
					$ssl = (int)$_POST['ssl'];
					$ssl_redirect = (int)$_POST['ssl_redirect'];
					$ssl_ipandport = (int)$_POST['ssl_ipandport'];
					$ssl_ipandport_check = $db->query_first("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `id` = '" . $db->escape($ssl_ipandport) . "' AND `ssl` = '1'" . $additional_ip_condition);
					if(!isset($ssl_ipandport_check['id'])
					   || $ssl_ipandport_check['id'] == '0'
					   || $ssl_ipandport_check['id'] != $ssl_ipandport)
					{
						standard_error('ipportdoesntexist');
					}
				}
				else
				{
					$ssl = 0;
					$ssl_redirect = 0;
					$ssl_ipandport = 0;
				}

				if(!preg_match('/^https?\:\/\//', $documentroot))
				{
					$documentroot = makeCorrectDir($documentroot);
				}

				if($openbasedir != '1')
				{
					$openbasedir = '0';
				}

				if($safemode != '1')
				{
					$safemode = '0';
				}

				if($isbinddomain != '1')
				{
					$isbinddomain = '0';
				}

				if($isemaildomain != '1')
				{
					$isemaildomain = '0';
				}

				if($email_only == '1')
				{
					$isemaildomain = '1';
				}
				else
				{
					$email_only = '0';
				}

				if($subcanemaildomain != '1'
				   && $subcanemaildomain != '2'
				   && $subcanemaildomain != '3')
				{
					$subcanemaildomain = '0';
				}

				if($dkim != '1')
				{
					$dkim = '0';
				}

				if($caneditdomain != '1')
				{
					$caneditdomain = '0';
				}

				if($interval_payment != '1')
				{
					$interval_payment = '0';
				}

				$aliasdomain_check = array(
					'id' => 0
				);

				if($aliasdomain != 0)
				{
					$aliasdomain_check = $db->query_first('SELECT `id` FROM `' . TABLE_PANEL_DOMAINS . '` `d`,`' . TABLE_PANEL_CUSTOMERS . '` `c` WHERE `d`.`customerid`=\'' . (int)$result['customerid'] . '\' AND `d`.`aliasdomain` IS NULL AND `d`.`id`<>`c`.`standardsubdomain` AND `c`.`customerid`=\'' . (int)$result['customerid'] . '\' AND `d`.`id`=\'' . (int)$aliasdomain . '\'');
				}

				if($aliasdomain_check['id'] != $aliasdomain)
				{
					standard_error('domainisaliasorothercustomer');
				}

				$params = array(
					'id' => $id,
					'page' => $page,
					'action' => $action,
					'customerid' => $customerid,
					'adminid' => $adminid,
					'documentroot' => $documentroot,
					'alias' => $aliasdomain,
					'isbinddomain' => $isbinddomain,
					'isemaildomain' => $isemaildomain,
					'email_only' => $email_only,
					'subcanemaildomain' => $subcanemaildomain,
					'caneditdomain' => $caneditdomain,
					'zonefile' => $zonefile,
					'dkim' => $dkim,
					'wwwserveralias' => $wwwserveralias,
					'ipandport' => $ipandport,
					'ssl' => $ssl,
					'ssl_redirect' => $ssl_redirect,
					'ssl_ipandport' => $ssl_ipandport,
					'openbasedir' => $openbasedir,
					'safemode' => $safemode,
					'phpsettingid' => $phpsettingid,
					'mod_fcgid_starter' => $mod_fcgid_starter,
					'mod_fcgid_maxrequests' => $mod_fcgid_maxrequests,
					'specialsettings' => $specialsettings,
					'registration_date' => $registration_date,
					'interval_fee' => $interval_fee,
					'interval_length' => $interval_length,
					'interval_type' => $interval_type,
					'interval_payment' => $interval_payment,
					'setup_fee' => $setup_fee,
					'servicestart_date' => $servicestart_date,
					'service_active' => $service_active,
				);

				if(isset($_POST['enable_billing_data_edit']))
				{
					$params['enable_billing_data_edit'] = '1';
				}

				$security_questions = array(
					'reallydisablesecuritysetting' => (($openbasedir == '0' || $safemode == '0') && $userinfo['change_serversettings'] == '1'),
					'reallydocrootoutofcustomerroot' => (substr($documentroot, 0, strlen($customer['documentroot'])) != $customer['documentroot'] && !preg_match('/^https?\:\/\//', $documentroot))
				);
				foreach($security_questions as $question_name => $question_launch)
				{
					if($question_launch !== false)
					{
						$params[$question_name] = $question_name;

						if(!isset($_POST[$question_name])
						   || $_POST[$question_name] != $question_name)
						{
							ask_yesno('admin_domain_' . $question_name, $filename, $params);
							exit;
						}
					}
				}

				if($service_active == 1)
				{
					// Check whether service is already started

					$service_active = '1';

					if(($result['servicestart_date'] == '0000-00-00')
					   && ($servicestart_date == '0000-00-00' || $servicestart_date == '0' || $servicestart_date == ''))
					{
						// We are starting the service now.

						$servicestart_date = date('Y-m-d');
					}

					// Check whether service has previously ended

					if($result['serviceend_date'] != '0000-00-00')
					{
						// We are continuing the service.

						$serviceend_date = '0000-00-00';
					}
				}
				else
				{
					$service_active = '0';

					// Check whether service has started and hasn't yet ended

					if(($result['servicestart_date'] != '0000-00-00')
					   && ($result['serviceend_date'] == '0000-00-00'))
					{
						// We are ending the service now.

						$serviceend_date = date('Y-m-d');

						// We don't need to set servicestart_date to 0 because the billing module will do this after the final invoice
					}
				}

				if($documentroot != $result['documentroot']
				   || $ipandport != $result['ipandport']
				   || $ssl != $result['ssl']
				   || $ssl_redirect != $result['ssl_redirect']
				   || $ssl_ipandport != $result['ssl_ipandport']
				   || $wwwserveralias != $result['wwwserveralias']
				   || $openbasedir != $result['openbasedir']
				   || $safemode != $result['safemode']
				   || $phpsettingid != $result['phpsettingid']
				   || $mod_fcgid_starter != $result['mod_fcgid_starter']
				   || $mod_fcgid_maxrequests != $result['mod_fcgid_maxrequests']
				   || $specialsettings != $result['specialsettings']
				   || $aliasdomain != $result['aliasdomain'])
				{
					inserttask('1');
				}

				if($isbinddomain != $result['isbinddomain']
				   || $zonefile != $result['zonefile']
				   || $dkim != $result['dkim']
				   || $ipandport != $result['ipandport'])
				{
					inserttask('4');
				}

				if($isemaildomain == '0'
				   && $result['isemaildomain'] == '1')
				{
					$db->query("DELETE FROM `" . TABLE_MAIL_USERS . "` WHERE `domainid`='" . (int)$id . "' ");
					$db->query("DELETE FROM `" . TABLE_MAIL_VIRTUAL . "` WHERE `domainid`='" . (int)$id . "' ");
					$log->logAction(ADM_ACTION, LOG_NOTICE, "deleted domain #" . $id . " from mail-tables");
				}

				$updatechildren = '';

				if($subcanemaildomain == '0'
				   && $result['subcanemaildomain'] != '0')
				{
					$updatechildren = ', `isemaildomain`=\'0\' ';
				}
				elseif($subcanemaildomain == '3'
				       && $result['subcanemaildomain'] != '3')
				{
					$updatechildren = ', `isemaildomain`=\'1\' ';
				}

				if($customerid != $result['customerid'] && $settings['panel']['allow_domain_change_customer'] == '1')
				{
					$db->query("UPDATE `" . TABLE_MAIL_USERS . "` SET `customerid` = '" . (int)$customerid . "' WHERE `domainid` = '" . (int)$result['id']. "' ");
					$db->query("UPDATE `" . TABLE_MAIL_VIRTUAL . "` SET `customerid` = '" . (int)$customerid . "' WHERE `domainid` = '" . (int)$result['id']. "' ");
					$db->query("UPDATE `" . TABLE_PANEL_CUSTOMERS . "` SET `subdomains_used` = `subdomains_used` + '" . (int)$subdomains . "', `emails_used` = `emails_used` + '" . (int)$emails . "', `email_forwarders_used` = `email_forwarders_used` + '" . (int)$email_forwarders . "', `email_accounts_used` = `email_accounts_used` + '" . (int)$email_accounts . "' WHERE `customerid` = '" . (int)$customerid . "' ");
					$db->query("UPDATE `" . TABLE_PANEL_CUSTOMERS . "` SET `subdomains_used` = `subdomains_used` - '" . (int)$subdomains . "', `emails_used` = `emails_used` - '" . (int)$emails . "', `email_forwarders_used` = `email_forwarders_used` - '" . (int)$email_forwarders . "', `email_accounts_used` = `email_accounts_used` - '" . (int)$email_accounts . "' WHERE `customerid` = '" . (int)$result['customerid'] . "' ");
				}

				if($adminid != $result['adminid'] && $settings['panel']['allow_domain_change_admin'] == '1')
				{
					$db->query("UPDATE `" . TABLE_PANEL_ADMINS . "` SET `domains_used` = `domains_used` + 1 WHERE `adminid` = '" . (int)$adminid . "' ");
					$db->query("UPDATE `" . TABLE_PANEL_ADMINS . "` SET `domains_used` = `domains_used` - 1 WHERE `adminid` = '" . (int)$result['adminid'] . "' ");
				}

				$result = $db->query("UPDATE `" . TABLE_PANEL_DOMAINS . "` SET `customerid` = '" . (int)$customerid . "', `adminid` = '" . (int)$adminid . "', `documentroot`='" . $db->escape($documentroot) . "', `ipandport`='" . $db->escape($ipandport) . "', `ssl`='" . (int)$ssl . "', `ssl_redirect`='" . (int)$ssl_redirect . "', `ssl_ipandport`='" . (int)$ssl_ipandport . "', `aliasdomain`=" . (($aliasdomain != 0 && $alias_check == 0) ? '\'' . $db->escape($aliasdomain) . '\'' : 'NULL') . ", `isbinddomain`='" . $db->escape($isbinddomain) . "', `isemaildomain`='" . $db->escape($isemaildomain) . "', `email_only`='" . $db->escape($email_only) . "', `subcanemaildomain`='" . $db->escape($subcanemaildomain) . "', `dkim`='" . $db->escape($dkim) . "', `caneditdomain`='" . $db->escape($caneditdomain) . "', `zonefile`='" . $db->escape($zonefile) . "', `wwwserveralias`='" . $db->escape($wwwserveralias) . "', `openbasedir`='" . $db->escape($openbasedir) . "', `safemode`='" . $db->escape($safemode) . "', `phpsettingid`='" . $db->escape($phpsettingid) . "', `mod_fcgid_starter`='" . $db->escape($mod_fcgid_starter) . "', `mod_fcgid_maxrequests`='" . $db->escape($mod_fcgid_maxrequests) . "', `specialsettings`='" . $db->escape($specialsettings) . "', `registration_date`='" . $db->escape($registration_date) . "', `interval_fee`='" . $db->escape($interval_fee) . "', `interval_length`='" . $db->escape($interval_length) . "', `interval_type`='" . $db->escape($interval_type) . "', `interval_payment`='" . $db->escape($interval_payment) . "', `setup_fee`='" . $db->escape($setup_fee) . "', `taxclass`='" . $db->escape($taxclass) . "', `service_active`='" . $db->escape($service_active) . "', `servicestart_date`='" . $db->escape($servicestart_date) . "', `serviceend_date`='" . $db->escape($serviceend_date) . "' WHERE `id`='" . (int)$id . "'");
				$result = $db->query("UPDATE `" . TABLE_PANEL_DOMAINS . "` SET `customerid` = '" . (int)$customerid . "', `adminid` = '" . (int)$adminid . "', `ipandport`='" . $db->escape($ipandport) . "', `openbasedir`='" . $db->escape($openbasedir) . "', `safemode`='" . $db->escape($safemode) . "', `phpsettingid`='" . $db->escape($phpsettingid) . "', `mod_fcgid_starter`='" . $db->escape($mod_fcgid_starter) . "', `mod_fcgid_maxrequests`='" . $db->escape($mod_fcgid_maxrequests) . "', `specialsettings`='" . $db->escape($specialsettings) . "'" . $updatechildren . " WHERE `parentdomainid`='" . (int)$id . "'");

				$log->logAction(ADM_ACTION, LOG_INFO, "edited domain #" . $id);
				$redirect_props = Array(
					'page' => $page,
					's' => $s
				);

				if(isset($_POST['enable_billing_data_edit']))
				{
					$redirect_props['action'] = $action;
					$redirect_props['id'] = $id;
					$redirect_props['override_billing_data_edit'] = '1';
				}

				redirectTo($filename, $redirect_props);
			}
			else
			{
				if($settings['panel']['allow_domain_change_customer'] == '1')
				{
					$customers = '';
					$result_customers = $db->query("SELECT `customerid`, `loginname`, `name`, `firstname`, `company` FROM `" . TABLE_PANEL_CUSTOMERS . "` WHERE ( (`subdomains_used` + " . (int)$subdomains . " <= `subdomains` OR `subdomains` = '-1' ) AND (`emails_used` + " . (int)$emails . " <= `emails` OR `emails` = '-1' ) AND (`email_forwarders_used` + " . (int)$email_forwarders . " <= `email_forwarders` OR `email_forwarders` = '-1' ) AND (`email_accounts_used` + " . (int)$email_accounts . " <= `email_accounts` OR `email_accounts` = '-1' ) " . ($userinfo['customers_see_all'] ? '' : " AND `adminid` = '" . (int)$userinfo['adminid'] . "' ") . ") OR `customerid` = '" . (int)$result['customerid'] . "' ORDER BY `name` ASC");

					while($row_customer = $db->fetch_array($result_customers))
					{
						if($row_customer['company'] == '')
						{
							$customers.= makeoption($row_customer['name'] . ', ' . $row_customer['firstname'] . ' (' . $row_customer['loginname'] . ')', $row_customer['customerid'], $result['customerid']);
						}
						else
						{
							if($row_customer['name'] != ''
							   && $row_customer['firstname'] != '')
							{
								$customers.= makeoption($row_customer['name'] . ', ' . $row_customer['firstname'] . ' | ' . $row_customer['company'] . ' (' . $row_customer['loginname'] . ')', $row_customer['customerid'], $result['customerid']);
							}
							else
							{
								$customers.= makeoption($row_customer['company'] . ' (' . $row_customer['loginname'] . ')', $row_customer['customerid'], $result['customerid']);
							}
						}
					}
				}
				else
				{
					$customer = $db->query_first("SELECT `customerid`, `loginname`, `name`, `firstname`, `company` FROM `" . TABLE_PANEL_CUSTOMERS . "` WHERE `customerid` = '" . (int)$result['customerid'] . "'");
					if($customer['company'] == '')
					{
						$result['customername'] = $customer['name'] . ', ' . $customer['firstname'] . ' (' . $customer['loginname'] . ')';
					}
					else
					{
						if($customer['name'] != ''
						   && $customer['firstname'] != '')
						{
							$result['customername'] = $customer['name'] . ', ' . $customer['firstname'] . ' | ' . $customer['company'] . ' (' . $customer['loginname'] . ')';
						}
						else
						{
							$result['customername'] = $customer['company'] . ' (' . $customer['loginname'] . ')';
						}
					}
				}

				if($userinfo['customers_see_all'] == '1')
				{
					if($settings['panel']['allow_domain_change_admin'] == '1')
					{
						$admins = '';
						$result_admins = $db->query("SELECT `adminid`, `loginname`, `name`, `firstname`, `company` FROM `" . TABLE_PANEL_ADMINS . "` WHERE (`domains_used` < `domains` OR `domains` = '-1') OR `adminid` = '" . (int)$result['adminid'] . "' ORDER BY `name` ASC");

						while($row_admin = $db->fetch_array($result_admins))
						{
							if($row_admin['company'] == '')
							{
								$admins.= makeoption($row_admin['name'] . ', ' . $row_admin['firstname'] . ' (' . $row_admin['loginname'] . ')', $row_admin['adminid'], $result['adminid']);
							}
							else
							{
								if($row_admin['name'] != ''
								   && $row_admin['firstname'] != '')
								{
									$admins.= makeoption($row_admin['name'] . ', ' . $row_admin['firstname'] . ' | ' . $row_admin['company'] . ' (' . $row_admin['loginname'] . ')', $row_admin['adminid'], $result['adminid']);
								}
								else
								{
									$admins.= makeoption($row_admin['company'] . ' (' . $row_admin['loginname'] . ')', $row_admin['adminid'], $result['adminid']);
								}
							}
						}
					}
					else
					{
						$admin = $db->query_first("SELECT `adminid`, `loginname`, `name`, `firstname`, `company` FROM `" . TABLE_PANEL_ADMINS . "` WHERE `adminid` = '" . (int)$result['adminid'] . "'");
						if($admin['company'] == '')
						{
							$result['adminname'] = $admin['name'] . ', ' . $admin['firstname'] . ' (' . $admin['loginname'] . ')';
						}
						else
						{
							if($admin['name'] != ''
							   && $admin['firstname'] != '')
							{
								$result['adminname'] = $admin['name'] . ', ' . $admin['firstname'] . ' | ' . $admin['company'] . ' (' . $admin['loginname'] . ')';
							}
							else
							{
								$result['adminname'] = $admin['company'] . ' (' . $admin['loginname'] . ')';
							}
						}
					}
				}

				$result['domain'] = $idna_convert->decode($result['domain']);
				$domains = makeoption($lng['domains']['noaliasdomain'], 0, NULL, true);
				$result_domains = $db->query("SELECT `d`.`id`, `d`.`domain`  FROM `" . TABLE_PANEL_DOMAINS . "` `d`, `" . TABLE_PANEL_CUSTOMERS . "` `c` WHERE `d`.`aliasdomain` IS NULL AND `d`.`parentdomainid`=0 AND `d`.`id`<>'" . (int)$result['id'] . "' AND `c`.`standardsubdomain`<>`d`.`id` AND `d`.`customerid`='" . (int)$result['customerid'] . "' AND `c`.`customerid`=`d`.`customerid` ORDER BY `d`.`domain` ASC");

				while($row_domain = $db->fetch_array($result_domains))
				{
					$domains.= makeoption($idna_convert->decode($row_domain['domain']), $row_domain['id'], $result['aliasdomain']);
				}

				if($userinfo['ip'] == "-1")
				{
					$result_ipsandports = $db->query("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `ssl`='0' ORDER BY `ip`, `port` ASC");
					$result_ssl_ipsandports = $db->query("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `ssl`='1' ORDER BY `ip`, `port` ASC");
				}
				else
				{
					$admin_ip = $db->query_first("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `id`='" . (int)$userinfo['ip'] . "' ORDER BY `ip`, `port` ASC");
					$result_ipsandports = $db->query("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `ssl`='0' AND `ip`='" . $admin_ip['ip'] . "' ORDER BY `ip`, `port` ASC");
					$result_ssl_ipsandports = $db->query("SELECT `id`, `ip`, `port` FROM `" . TABLE_PANEL_IPSANDPORTS . "` WHERE `ssl`='1' AND `ip`='" . $admin_ip['ip'] . "' ORDER BY `ip`, `port` ASC");
				}

				$ipsandports = '';

				while($row_ipandport = $db->fetch_array($result_ipsandports))
				{
					if(filter_var($row_ipandport['ip'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === FALSE)
					{
						$row_ipandport['ip'] = '[' . $row_ipandport['ip'] . ']';
					}

					$ipsandports.= makeoption($row_ipandport['ip'] . ':' . $row_ipandport['port'], $row_ipandport['id'], $result['ipandport']);
				}

				$ssl_ipsandports = '';

				while($row_ssl_ipandport = $db->fetch_array($result_ssl_ipsandports))
				{
					if(filter_var($row_ssl_ipandport['ip'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === FALSE)
					{
						$row_ssl_ipandport['ip'] = '[' . $row_ssl_ipandport['ip'] . ']';
					}

					$ssl_ipsandports.= makeoption($row_ssl_ipandport['ip'] . ':' . $row_ssl_ipandport['port'], $row_ssl_ipandport['id'], $result['ssl_ipandport']);
				}

				$result['specialsettings'] = $result['specialsettings'];
				$isbinddomain = makeyesno('isbinddomain', '1', '0', $result['isbinddomain']);
				$wwwserveralias = makeyesno('wwwserveralias', '1', '0', $result['wwwserveralias']);
				$isemaildomain = makeyesno('isemaildomain', '1', '0', $result['isemaildomain']);
				$email_only = makeyesno('email_only', '1', '0', $result['email_only']);
				$ssl = makeyesno('ssl', '1', '0', $result['ssl']);
				$ssl_redirect = makeyesno('ssl_redirect', '1', '0', $result['ssl_redirect']);
				$subcanemaildomain = makeoption($lng['admin']['subcanemaildomain']['never'], '0', $result['subcanemaildomain'], true, true);
				$subcanemaildomain.= makeoption($lng['admin']['subcanemaildomain']['choosableno'], '1', $result['subcanemaildomain'], true, true);
				$subcanemaildomain.= makeoption($lng['admin']['subcanemaildomain']['choosableyes'], '2', $result['subcanemaildomain'], true, true);
				$subcanemaildomain.= makeoption($lng['admin']['subcanemaildomain']['always'], '3', $result['subcanemaildomain'], true, true);
				$dkim = makeyesno('dkim', '1', '0', $result['dkim']);
				$caneditdomain = makeyesno('caneditdomain', '1', '0', $result['caneditdomain']);
				$openbasedir = makeyesno('openbasedir', '1', '0', $result['openbasedir']);
				$safemode = makeyesno('safemode', '1', '0', $result['safemode']);
				$speciallogfile = ($result['speciallogfile'] == 1 ? $lng['panel']['yes'] : $lng['panel']['no']);
				$result['add_date'] = date('Y-m-d', $result['add_date']);

				if($settings['billing']['activate_billing'] == '1')
				{
					$interval_type = getIntervalTypes('option', $result['interval_type']);
					$service_active = ($result['service_active'] == '0' ? $lng['panel']['no'] : '') . ($result['service_active'] == '1' ? $lng['panel']['yes'] : '');
					$service_active_options = makeyesno('service_active', '1', '0', $result['service_active']);
					$interval_payment = ($result['interval_payment'] == '0' ? $lng['service']['interval_payment_prepaid'] : '') . ($result['interval_payment'] == '1' ? $lng['service']['interval_payment_postpaid'] : '');
					$interval_payment_options = makeoption($lng['service']['interval_payment_prepaid'], '0', $result['interval_payment'], true) . makeoption($lng['service']['interval_payment_postpaid'], '1', $result['interval_payment'], true);
					$taxclasses_option = '';
					foreach($taxclasses as $classid => $classname)
					{
						$taxclasses_option.= makeoption($classname, $classid, $result['taxclass']);
					}
				}

				$phpconfigs = '';
				$phpconfigs_result = $db->query("SELECT * FROM `" . TABLE_PANEL_PHPCONFIGS . "`");

				while($phpconfigs_row = $db->fetch_array($phpconfigs_result))
				{
					$phpconfigs.= makeoption($phpconfigs_row['description'], $phpconfigs_row['id'], $result['phpsettingid'], true, true);
				}

				$result = htmlentities_array($result);
				eval("echo \"" . getTemplate("domains/domains_edit") . "\";");
			}
		}
	}
}

?>
