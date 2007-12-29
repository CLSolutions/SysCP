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
 * @author     Florian Aders <eleras@syscp.org>
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package    System
 * @version    $Id$
 */

$db->close();
fwrite($debugHandler, 'Closing database connection' . "\n");

if($keepLockFile === true)
{
	fwrite($debugHandler, '=== Keep lockfile because of exception ===');
}

fclose($debugHandler);

if($keepLockFile === false
   && $cronscriptDebug === false)
{
	unlink($lockfile);
}

