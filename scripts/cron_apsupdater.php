<?php

/**
 * Implementation of the Application Packaging Standard from SwSoft/Parallels
 * http://apsstandard.com
 *
 * Copyright (c) 2003-2008 the SysCP Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @copyright	(c) the authors
 * @author		Sven Skrabal <info@nexpa.de>
 * @license		GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package		Cron
 * @version		$Id$
 * @todo
 */

$needrootdb = false;
require (dirname(__FILE__) . '/../lib/cron_init.php');
require (dirname(__FILE__) . '/../lib/class_apsparser.php');
require (dirname(__FILE__) . '/../lib/class_apsupdater.php');
$Aps = new ApsUpdater($db);
$Aps->UpdateHandler();
require (dirname(__FILE__) . '/../lib/cron_shutdown.php');

?>