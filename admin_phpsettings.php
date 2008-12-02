<?php

/**
 * This file is part of the SysCP project.
 * Copyright (c) 2003-2008 the SysCP Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @copyright	(c) the authors
 * @author		Sven Skrabal <info@nexpa.de>
 * @author		Florian Lippert <flo@syscp.org>
 * @license		GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package		Panel
 * @version		$Id$
 * @todo
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

if($page == 'overview')
{
	if($action == '')
	{
		$tablecontent = '';
		$result = $db->query("SELECT * FROM `" . TABLE_PANEL_PHPCONFIGS . "`");

		while($row = $db->fetch_array($result))
		{
			$domainresult = false;

			if((int)$userinfo['domains_see_all'] == 0)
			{
				$domainresult = $db->query("SELECT * FROM `" . TABLE_PANEL_DOMAINS . "` WHERE `adminid` = " . (int)$userinfo['userid'] . " AND `phpsettingid` = " . (int)$row['id']);
			}
			else
			{
				$domainresult = $db->query("SELECT * FROM `" . TABLE_PANEL_DOMAINS . "` WHERE `phpsettingid` = " . (int)$row['id']);
			}

			$domains = '';

			if($db->num_rows($domainresult) > 0)
			{
				while($row2 = $db->fetch_array($domainresult))
				{
					$domains.= $row2['domain'] . '<br/>';
				}
			}
			else
			{
				$domains = $lng['admin']['phpsettings']['notused'];
			}

			eval("\$tablecontent.=\"" . getTemplate("phpconfig/overview_overview") . "\";");
		}

		$log->logAction(ADM_ACTION, LOG_INFO, "php.ini setting overview has been viewed by '" . $userinfo['loginname'] . "'");
		eval("echo \"" . getTemplate("phpconfig/overview") . "\";");
	}

	if($action == 'add')
	{
		if((int)$userinfo['change_serversettings'] == 1)
		{
			if(isset($_POST['send'])
			   && $_POST['send'] == 'send')
			{
				$description = validate($_POST['description'], 'description');
				$binary = makeCorrectFile(validate($_POST['binary'], 'binary'));
				$file_extensions = validate($_POST['file_extensions'], 'file_extensions', '/^[a-zA-Z0-9\s]*$/');
				$phpsettings = validate(str_replace("\r\n", "\n", $_POST['phpsettings']), 'phpsettings', '/^[^\0]*$/');
				$mod_fcgid_starter = validate($_POST['mod_fcgid_starter'], 'mod_fcgid_starter', '/^[0-9]*$/', '', array('-1', ''));
				$mod_fcgid_maxrequests = validate($_POST['mod_fcgid_maxrequests'], 'mod_fcgid_maxrequests', '/^[0-9]*$/', '', array('-1', ''));

				if(strlen($description) == 0
				   || strlen($description) > 50)
				{
					standard_error('descriptioninvalid');
				}

				$db->query("INSERT INTO `" . TABLE_PANEL_PHPCONFIGS . "` SET `description` = '" . $db->escape($description) . "', `binary` = '" . $db->escape($binary) . "', `file_extensions` = '" . $db->escape($file_extensions) . "', `mod_fcgid_starter` = '" . $db->escape($mod_fcgid_starter) . "', `mod_fcgid_maxrequests` = '" . $db->escape($mod_fcgid_maxrequests) . "', `phpsettings` = '" . $db->escape($phpsettings) . "'");
				inserttask('1');
				$log->logAction(ADM_ACTION, LOG_INFO, "php.ini setting with description '" . $value . "' has been created by '" . $userinfo['loginname'] . "'");
				redirectTo($filename, Array('page' => $page, 's' => $s));
			}
			else
			{
				$result = $db->query_first("SELECT * FROM `" . TABLE_PANEL_PHPCONFIGS . "` WHERE `id` = 1");
				eval("echo \"" . getTemplate("phpconfig/overview_add") . "\";");
			}
		}
		else
		{
			standard_error('nopermissionsorinvalidid');
		}
	}

	if($action == 'delete')
	{
		$result = $db->query_first("SELECT * FROM `" . TABLE_PANEL_PHPCONFIGS . "` WHERE `id` = " . (int)$id);

		if($result['id'] != 0
		   && $result['id'] == $id
		   && (int)$userinfo['change_serversettings'] == 1
		   && $id != 1)
		{
			if(isset($_POST['send'])
			   && $_POST['send'] == 'send')
			{
				$db->query("UPDATE `" . TABLE_PANEL_DOMAINS . "` SET `phpsettingid` = 1 WHERE `phpsettingid` = " . (int)$id);
				$db->query("DELETE FROM `" . TABLE_PANEL_PHPCONFIGS . "` WHERE `id` = " . (int)$id);
				inserttask('1');
				$log->logAction(ADM_ACTION, LOG_INFO, "php.ini setting with id #" . (int)$id . " has been deleted by '" . $userinfo['loginname'] . "'");
				redirectTo($filename, Array('page' => $page, 's' => $s));
			}
			else
			{
				ask_yesno('phpsetting_reallydelete', $filename, array('id' => $id, 'page' => $page, 'action' => $action), $result['description']);
			}
		}
		else
		{
			standard_error('nopermissionsorinvalidid');
		}
	}

	if($action == 'edit')
	{
		$result = $db->query_first("SELECT * FROM `" . TABLE_PANEL_PHPCONFIGS . "` WHERE `id` = " . (int)$id);

		if($result['id'] != 0
		   && $result['id'] == $id
		   && (int)$userinfo['change_serversettings'] == 1)
		{
			if(isset($_POST['send'])
			   && $_POST['send'] == 'send')
			{
				$description = validate($_POST['description'], 'description');
				$binary = makeCorrectFile(validate($_POST['binary'], 'binary'));
				$file_extensions = validate($_POST['file_extensions'], 'file_extensions', '/^[a-zA-Z0-9\s]*$/');
				$phpsettings = validate(str_replace("\r\n", "\n", $_POST['phpsettings']), 'phpsettings', '/^[^\0]*$/');
				$mod_fcgid_starter = validate($_POST['mod_fcgid_starter'], 'mod_fcgid_starter', '/^[0-9]*$/', '', array('-1', ''));
				$mod_fcgid_maxrequests = validate($_POST['mod_fcgid_maxrequests'], 'mod_fcgid_maxrequests', '/^[0-9]*$/', '', array('-1', ''));

				if(strlen($description) == 0
				   || strlen($description) > 50)
				{
					standard_error('descriptioninvalid');
				}

				$db->query("UPDATE `" . TABLE_PANEL_PHPCONFIGS . "` SET `description` = '" . $db->escape($description) . "', `binary` = '" . $db->escape($binary) . "', `file_extensions` = '" . $db->escape($file_extensions) . "', `mod_fcgid_starter` = '" . $db->escape($mod_fcgid_starter) . "', `mod_fcgid_maxrequests` = '" . $db->escape($mod_fcgid_maxrequests) . "', `phpsettings` = '" . $db->escape($phpsettings) . "' WHERE `id` = " . (int)$id);
				inserttask('1');
				$log->logAction(ADM_ACTION, LOG_INFO, "php.ini setting with description '" . $description . "' has been changed by '" . $userinfo['loginname'] . "'");
				redirectTo($filename, Array('page' => $page, 's' => $s));
			}
			else
			{
				eval("echo \"" . getTemplate("phpconfig/overview_edit") . "\";");
			}
		}
		else
		{
			standard_error('nopermissionsorinvalidid');
		}
	}
}

?>
