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
 * Returns whether a URL is in a correct format or not
 *
 * @param string URL to be tested
 * @return bool
 * @author Christian Hoffmann
 *
 */

function validateUrl($url)
{
	if(strtolower(substr($url, 0, 7)) != "http://"
	   && strtolower(substr($url, 0, 8)) != "https://")
	{
		$url = 'http://' . $url;
	}

	if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED) !== false)
	{
		return true;
	}
	else
	{
		if(strtolower(substr($url, 0, 7)) == "http://"
		   || strtolower(substr($url, 0, 8)) == "https://")
		{
			if(strtolower(substr($url, 0, 7)) == "http://")
			{
				$ip = strtolower(substr($url, 7));
			}

			if(strtolower(substr($url, 0, 8)) == "https://")
			{
				$ip = strtolower(substr($url, 8));
			}

			$ip = substr($ip, 0, strpos($ip, '/'));

			if(validate_ip($ip, true) !== false)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
}
