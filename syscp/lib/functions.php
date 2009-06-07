<?php

/**
 * This file is part of the SysCP project.
 * Copyright (c) 2003-2009 the SysCP Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Florian Lippert <flo@syscp.org>
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package    Functions
 * @version    $Id$
 */

$libdirname = dirname(__FILE__);

includeFunctions($libdirname . '/functions/');

function includeFunctions($dirname)
{
	$dirhandle = opendir($dirname);
	while(false !== ($filename = readdir($dirhandle)))
	{
		if($filename != '.' && $filename != '..' && $filename != '')
		{
			if((substr($filename, 0, 9) == 'function.' || substr($filename, 0, 9) == 'constant.') && substr($filename, -4 ) == '.php')
			{
				include($dirname . $filename);
			}

			if(is_dir($dirname . $filename))
			{
				includeFunctions($dirname . $filename . '/');
			}
		}
	}
	closedir($dirhandle);
}

function __autoload($classname)
{
	global $libdirname;
	findIncludeClass($libdirname . '/classes/', $classname);
}

function findIncludeClass($dirname, $classname)
{
	$dirhandle = opendir($dirname);
	while(false !== ($filename = readdir($dirhandle)))
	{
		if($filename != '.' && $filename != '..' && $filename != '')
		{
			if($filename == 'class.' . $classname . '.php' || $filename == 'abstract.' . $classname . '.php')
			{
				include($dirname . $filename);
				return;
			}

			if(is_dir($dirname . $filename))
			{
				findIncludeClass($dirname . $filename . '/', $classname);
			}
		}
	}
	closedir($dirhandle);
}


function exportDetails($fielddata, $newfieldvalue)
{
	print_r($newfieldvalue);
}

