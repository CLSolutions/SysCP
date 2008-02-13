<?php

/**
 * This file is part of the SysCP project.
 * Copyright (c) 2003-2008 the SysCP Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Tobias Friebel <TobyF@web.de>
 * @author     microft <microft@chimera.ch>
 * @author     falzo <falzo@despammed.com>
 * @author     Florian Aders <florian.aders@syscp.org>
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package    Panel
 * @version    $Id$
 * @since      File available since Release 1.2.20
 */

define('AREA', 'customer');

/**
 * Include our init.php, which manages Sessions, Language etc.
 */

require ("./lib/init.php");
$traffic = '';
$month = null;
$year = null;

if(isset($_POST['month'])
   && isset($_POST['year']))
{
	$month = intval($_POST['month']);
	$year = intval($_POST['year']);
}
elseif(isset($_GET['month'])
       && isset($_GET['year']))
{
	$month = intval($_GET['month']);
	$year = intval($_GET['year']);
}
elseif(isset($_GET['page'])
       && $_GET['page'] == "current")
{
	if(date('d') != '01')
	{
		$month = date('m');
		$year = date('Y');
	}
	else
	{
		if(date('m') == '01')
		{
			$month = 12;
			$year = date('Y')-1;
		}
		else
		{
			$month = date('m')-1;
			$year = date('Y');
		}
	}
}

if(!is_null($month)
   && !is_null($year))
{
	$traf['byte'] = 0;
	$result = $db->query("SELECT MAX(`http`), MAX(`ftp_up`+`ftp_down`), MAX(`mail`)
	                     FROM `" . TABLE_PANEL_TRAFFIC . "`
	                     WHERE `customerid`='" . $userinfo['customerid'] . "'
	                     AND `month` = '" . $month . "'
	                     AND `year` = '" . $year . "'");
	rsort($row = mysql_fetch_row($result));
	$traf['max'] = $row[0];
	$result = $db->query("SELECT
                                SUM(`http`) as 'http', SUM(`ftp_up`) AS 'ftp_up', SUM(`ftp_down`) as 'ftp_down', SUM(`mail`) as 'mail',
                                `day`, `month`, `year`
                             FROM `" . TABLE_PANEL_TRAFFIC . "`
	                     WHERE `customerid`='" . $userinfo['customerid'] . "'
	                     AND `month` = '" . $month . "' AND `year` = '" . $year . "'
	                     GROUP BY `day` ORDER BY `day` ASC");
	$traffic_complete['http'] = 0;
	$traffic_complete['ftp'] = 0;
	$traffic_complete['mail'] = 0;

	while($row = $db->fetch_array($result))
	{
		$http = $row['http'];
		$ftp = $row['ftp_up']+$row['ftp_down'];
		$mail = $row['mail'];
		$traf['byte'] = $http+$ftp+$mail;
		$traffic_complete['http']+= $http;
		$traffic_complete['ftp']+= $ftp;
		$traffic_complete['mail']+= $mail;
		$traf['day'] = $row['day'];
		$traf['ftptext'] = bcdiv($row['ftp_up'], 1024, 2) . " MB up/ " . bcdiv($row['ftp_down'], 1024, 2) . " MB down (FTP)";
		$traf['httptext'] = bcdiv($http, 1024, 2) . " MB (HTTP)";
		$traf['mailtext'] = bcdiv($mail, 1024, 2) . " MB (Mail)";

		if($traf['byte'] != 0
		   && $traf['max'] != 0)
		{
			$proz = $traf['max']/100;
			$traf['http'] = round($http/$proz, 0);
			$traf['ftp'] = round($ftp/$proz, 0);
			$traf['mail'] = round($mail/$proz, 0);

			if($traf['http'] == 0)
			{
				$traf['http'] = 1;
			}

			if($traf['ftp'] == 0)
			{
				$traf['ftp'] = 1;
			}

			if($traf['mail'] == 0)
			{
				$traf['mail'] = 1;
			}
		}
		else
		{
			$traf['http'] = 0;
			$traf['ftp'] = 0;
			$traf['mail'] = 0;
		}

		$traf['byte'] = bcdiv($traf['byte'], 1024, 4);
		eval("\$traffic.=\"" . getTemplate("traffic/traffic_month") . "\";");
		$show = $lng['traffic']['months'][intval($row['month'])] . " " . $row['year'];
	}

	$traffic_complete['http'] = bcdiv($traffic_complete['http'], 1024, 2);
	$traffic_complete['ftp'] = bcdiv($traffic_complete['ftp'], 1024, 2);
	$traffic_complete['mail'] = bcdiv($traffic_complete['mail'], 1024, 2);
	eval("echo \"" . getTemplate("traffic/traffic_details") . "\";");
}
else
{
	$result = $db->query("(SELECT SUM(`http`) as sum FROM `" . TABLE_PANEL_TRAFFIC . "`
	                      WHERE `customerid` = '" . $userinfo['customerid'] . "'
	                      GROUP BY CONCAT(`year`,`month`) ORDER BY CONCAT(`year`,`month`) DESC LIMIT 12)   UNION
	                      (SELECT SUM(`ftp_up`+`ftp_down`) FROM `" . TABLE_PANEL_TRAFFIC . "`
	                      WHERE `customerid` = '" . $userinfo['customerid'] . "'
	                      GROUP BY CONCAT(`year`,`month`) ORDER BY CONCAT(`year`,`month`) DESC LIMIT 12) UNION
	                      (SELECT SUM(`mail`) FROM `" . TABLE_PANEL_TRAFFIC . "`
	                      WHERE `customerid` = '" . $userinfo['customerid'] . "'
	                      GROUP BY CONCAT(`year`,`month`) ORDER BY CONCAT(`year`,`month`) DESC LIMIT 12) ORDER BY sum DESC LIMIT 1");
	$row = $db->fetch_array($result);
	$traf['max'] = $row['sum'];
	$result = $db->query("SELECT `month`, `year`, SUM(`http`) AS http, SUM(`ftp_up`) AS ftp_up, SUM(`ftp_down`) AS ftp_down, SUM(`mail`) AS mail
	                     FROM `" . TABLE_PANEL_TRAFFIC . "` WHERE `customerid` = '" . $userinfo['customerid'] . "'
	                     GROUP BY CONCAT(`year`,`month`) ORDER BY CONCAT(`year`,`month`) DESC LIMIT 12");
	$traffic_complete['http'] = 0;
	$traffic_complete['ftp'] = 0;
	$traffic_complete['mail'] = 0;

	while($row = $db->fetch_array($result))
	{
		$http = $row['http'];
		$ftp_up = $row['ftp_up'];
		$ftp_down = $row['ftp_down'];
		$mail = $row['mail'];
		$traffic_complete['http']+= $http;
		$traffic_complete['ftp']+= $ftp_up+$ftp_down;
		$traffic_complete['mail']+= $mail;
		$traf['month'] = $row['month'];
		$traf['year'] = $row['year'];
		$traf['monthname'] = $lng['traffic']['months'][intval($row['month'])] . " " . $row['year'];
		$traf['byte'] = $http+$ftp_up+$ftp_down+$mail;
		$traf['ftptext'] = bcdiv($ftp_up, 1024*1024, 4) . " GB up/ " . bcdiv($ftp_down, 1024*1024, 4) . " GB down (FTP)";
		$traf['httptext'] = bcdiv($http, 1024*1024, 4) . " GB (HTTP)";
		$traf['mailtext'] = bcdiv($mail, 1024*1024, 4) . " GB (Mail)";

		if($traf['max'] != 0)
		{
			$proz = $traf['max']/100;
			$traf['ftp'] = round(($ftp_up+$ftp_down)/$proz, 0);
			$traf['http'] = round($http/$proz, 0);
			$traf['mail'] = round($mail/$proz, 0);

			if($traf['http'] == 0)
			{
				$traf['http'] = 1;
			}

			if($traf['ftp'] == 0)
			{
				$traf['ftp'] = 1;
			}

			if($traf['mail'] == 0)
			{
				$traf['mail'] = 1;
			}
		}
		else
		{
			$traf['ftp'] = 0;
			$traf['http'] = 0;
			$traf['mail'] = 0;
		}

		$traf['byte'] = bcadd($traf['byte']/(1024*1024), 0.0000, 4);
		eval("\$traffic.=\"" . getTemplate("traffic/traffic_traffic") . "\";");
	}

	$traffic_complete['http'] = bcdiv($traffic_complete['http'], 1024*1024, 2);
	$traffic_complete['ftp'] = bcdiv($traffic_complete['ftp'], 1024*1024, 2);
	$traffic_complete['mail'] = bcdiv($traffic_complete['mail'], 1024*1024, 2);
	eval("echo \"" . getTemplate("traffic/traffic") . "\";");
}

?>