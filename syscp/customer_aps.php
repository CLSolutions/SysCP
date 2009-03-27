<?php

/**
 * This file is part of the SysCP project.
 * Copyright (c) 2003-2009 the SysCP Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @copyright	(c) the authors
 * @author		Sven Skrabal <info@nexpa.de>
 * @license		GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package		Panel
 * @version		$Id$
 * @todo
 */

// Required code

define('AREA', 'customer');
require ("./lib/init.php");
require ("./lib/class_apsparser.php");
$Id = 0;

if(isset($_GET['id']))$Id = (int)$_GET['id'];

if(isset($_POST['id']))$Id = (int)$_POST['id'];
eval("echo \"" . getTemplate("aps/header") . "\";");
$Aps = new ApsParser($userinfo, $settings, $db);
$Aps->MainHandler($action);
eval("echo \"" . getTemplate("aps/footer") . "\";");

?>