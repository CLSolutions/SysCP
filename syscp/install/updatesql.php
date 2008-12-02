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
 * @package    System
 * @version    $Id$
 */

/**
 * Includes the Usersettings eg. MySQL-Username/Passwort etc.
 */

require ('../lib/userdata.inc.php');

/**
 * Includes the MySQL-Tabledefinitions etc.
 */

require ('../lib/tables.inc.php');

/**
 * Inlcudes the MySQL-Connection-Class
 */

require ('../lib/class_mysqldb.php');
$db = new db($sql['host'], $sql['user'], $sql['password'], $sql['db']);
unset($sql['password']);
unset($db->password);
$result = $db->query("SELECT `settinggroup`, `varname`, `value` FROM `" . TABLE_PANEL_SETTINGS . "`");

while($row = $db->fetch_array($result))
{
	$settings[$row['settinggroup']][$row['varname']] = $row['value'];
}

unset($row);
unset($result);

/**
 * Inlcudes the Functions
 */

require ('../lib/functions.php');

/**
 * Includes Logger-Classes
 */

require ('../lib/abstract/abstract_class_logger.php');
require ('../lib/class_syslogger.php');
require ('../lib/class_filelogger.php');
require ('../lib/class_mysqllogger.php');

/**
 * Includes the SyscpLogger class
 */

require ('../lib/class_syscplogger.php');
$updatelog = SysCPLogger::getInstanceOf(array('loginname' => 'updater'), $db, $settings);

/**
 * First case: We are updating from a version < 1.0.10
 */

if(!isset($settings['panel']['version'])
   || (substr($settings['panel']['version'], 0, 3) == '1.0' && $settings['panel']['version'] != '1.0.10'))
{
	$updatelog->logAction(ADM_ACTION, LOG_WARNING, "Updating from 1.0 to 1.0.10");
	include_once ('./updates/1.0/update_1.0_1.0.10.inc.php');
}

/**
 * Second case: We are updating from version = 1.0.10
 */

if($settings['panel']['version'] == '1.0.10')
{
	$updatelog->logAction(ADM_ACTION, LOG_WARNING, "Updating from 1.0.10 to 1.2-beta1");
	include_once ('./updates/1.0/update_1.0.10_1.2-beta1.inc.php');
}

/**
 * Third case: We are updating from a version > 1.2-beta1
 */

if(substr($settings['panel']['version'], 0, 3) == '1.2')
{
	$updatelog->logAction(ADM_ACTION, LOG_WARNING, "Updating from 1.2-beta1 to 1.2.19");
	include_once ('./updates/1.2/update_1.2-beta1_1.2.19.inc.php');
}

/**
 * 4th case: We are updating from 1.2.19 to 1.2.20 (prolly the last from the 1.2.x series)
 */

if(substr($settings['panel']['version'], 0, 6) == '1.2.19')
{
	$updatelog->logAction(ADM_ACTION, LOG_WARNING, "Updating from 1.2.19 to 1.4");
	include_once ('./updates/1.2/update_1.2.19_1.4.inc.php');
}

/**
 * 5th case: We are updating from a version >= 1.4
 */

if(substr($settings['panel']['version'], 0, 3) == '1.4')
{
	$updatelog->logAction(ADM_ACTION, LOG_WARNING, "Updating from 1.4");
	include_once ('./updates/1.4/update_1.4.inc.php');
}

updateCounters();
inserttask('1');
@chmod('../lib/userdata.inc.php', 0440);
header('Location: ../index.php');

?>