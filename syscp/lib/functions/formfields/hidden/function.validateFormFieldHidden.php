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

function validateFormFieldHidden($fieldname, $fielddata, $newfieldvalue)
{
	if($newfieldvalue === $fielddata['value'])
	{
		return true;
	}
	else
	{
		// TODO: Throw some error that actually makes sense - false would just throw unknown error
		return false;
	}
}
