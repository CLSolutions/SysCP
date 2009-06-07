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

/**
 * Returns a double of the given value which isn't negative.
 * Returns -1 if the given value was -1.
 *
 * @param any The value
 * @return double The positive value
 * @author Florian Lippert <flo@syscp.org>
 */

function doubleval_ressource($the_value)
{
	$the_value = doubleval($the_value);

	if($the_value < 0
	   && $the_value != '-1')
	{
		$the_value*= - 1;
	}

	return $the_value;
}
