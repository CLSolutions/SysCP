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

function getIpPortCombinations()
{
	global $db;
	
	$query = 'SELECT `id`, `ip`, `port` FROM `' . TABLE_PANEL_IPSANDPORTS . '` ORDER BY `ip` ASC, `port` ASC';
	$result = $db->query($query);
	$system_ipaddress_array = array();

	while($row = $db->fetch_array($result))
	{
		if(filter_var($row['ip'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV6))
		{
				$row['ip'] = '[' . $row['ip'] . ']';
		}

		$system_ipaddress_array[$row['id']] = $row['ip'] . ':' . $row['port'];
	}
	
	return $system_ipaddress_array;
}
