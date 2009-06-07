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

function saveForm($fielddata, $newfieldvalue)
{
	$returnvalue = '';
	if(is_array($fielddata) && isset($fielddata['save_method']) && $fielddata['save_method'] != '' && function_exists($fielddata['save_method']))
	{
		$returnvalue = call_user_func($fielddata['save_method'], $fielddata, $newfieldvalue);
	}
	elseif(is_array($fielddata) && !isset($fielddata['save_method']))
	{
		$returnvalue = true;
	}
	else
	{
		$returnvalue = false;
	}
	return $returnvalue;
}
