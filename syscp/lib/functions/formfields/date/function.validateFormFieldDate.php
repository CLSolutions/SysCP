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
 * @version    $Id: function.validateFormFieldInt.php 2724 2009-06-07 14:18:02Z flo $
 */

function validateFormFieldDate($fieldname, $fielddata, $newfieldvalue)
{
	if($newfieldvalue == '0000-00-00' || preg_match('/^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/', $newfieldvalue))
	{
		$returnvalue = true;
	}
	else
	{
		$returnvalue = false;
	}
	
	return $returnvalue;
}
