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
 * Checks whether it is a valid ip
 *
 * @return mixed 	ip address on success, standard_error on failure
 */

function validate_ip($ip, $return_bool = false, $lng = 'invalidip')
{
	if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === FALSE
	   && filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === FALSE
	   && filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_RES_RANGE) === FALSE)
	{
		if($return_bool)
		{
			return false;
		}
		else
		{
			standard_error($lng, $ip);
			exit;
		}
	}
	else
	{
		return $ip;
	}
}
