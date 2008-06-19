<?php

/**
 * Support-Tickets - Customer
 *
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. This program is distributed in the
 * hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * @copyright  (c) the authors
 * @author     Michael Kaufmann <mkaufmann@nutime.de>
 * @license    http://www.gnu.org/licenses/gpl.txt
 * @package    Panel
 * @version    CVS: $Id:$
 * @link       http://www.nutime.de/
 * @since      File available since Release 1.2.18
 */

define('AREA', 'customer');

/**
 * Include our init.php, which manages Sessions, Language etc.
 */

require ("./lib/init.php");

if(isset($_POST['id']))
{
	$id = intval($_POST['id']);
}
elseif(isset($_GET['id']))
{
	$id = intval($_GET['id']);
}

if($page == 'overview')
{
	$log->logAction(USR_ACTION, LOG_NOTICE, "viewed customer_tickets");
	eval("echo \"" . getTemplate("ticket/ticket") . "\";");
}
elseif($page == 'tickets')
{
	if($action == '')
	{
		$log->logAction(USR_ACTION, LOG_NOTICE, "viewed customer_tickets::tickets");
		$fields = array(
			'status' => $lng['ticket']['status'],
			'priority' => $lng['ticket']['priority'],
			'lastchange' => $lng['ticket']['lastchange'],
			'ticket_answers' => $lng['ticket']['ticket_answers'],
			'subject' => $lng['ticket']['subject'],
			'lastreplier' => $lng['ticket']['lastreplier']
		);
		$paging = new paging($userinfo, $db, TABLE_PANEL_TICKETS, $fields, $settings['panel']['paging'], $settings['panel']['natsorting']);
		$paging->sortfield = 'lastchange';
		$paging->sortorder = 'desc';
		$result = $db->query('SELECT `main`.`id`, (SELECT COUNT(`sub`.`id`) FROM `' . TABLE_PANEL_TICKETS . '` `sub` WHERE `sub`.`answerto` = `main`.`id`) as `ticket_answers`, `main`.`lastchange`, `main`.`subject`, `main`.`status`, `main`.`lastreplier`, `main`.`priority` FROM `' . TABLE_PANEL_TICKETS . '` as `main` WHERE `main`.`answerto` = "0" AND `archived` = "0" AND `customerid`="' . (int)$userinfo['customerid'] . '" AND `adminid`="' . (int)$userinfo['adminid'] . '" ' . $paging->getSqlWhere(true) . " " . $paging->getSqlOrderBy() . " " . $paging->getSqlLimit());
		$paging->setEntries($db->num_rows($result));
		$sortcode = $paging->getHtmlSortCode($lng);
		$arrowcode = $paging->getHtmlArrowCode($filename . '?page=' . $page . '&s=' . $s);
		$searchcode = $paging->getHtmlSearchCode($lng);
		$pagingcode = $paging->getHtmlPagingCode($filename . '?page=' . $page . '&s=' . $s);
		$i = 0;
		$count = 0;
		$tickets = '';
		$tickets_count = 0;

		while($row = $db->fetch_array($result))
		{
			if($paging->checkDisplay($i))
			{
				$tickets_count++;
				$row = htmlentities_array($row);
				$row['lastchange'] = date("d.m.y H:i", $row['lastchange']);

				if($row['status'] >= 0
				   && $row['status'] <= 2)
				{
					$reopen = 0;
				}
				else
				{
					$reopen = 1;
				}

				$row['status'] = ticket::getStatusText($lng, $row['status']);
				$row['priority'] = ticket::getPriorityText($lng, $row['priority']);

				if($row['lastreplier'] == '1')
				{
					$row['lastreplier'] = $lng['ticket']['staff'];
					$cananswer = 1;
				}
				else
				{
					$row['lastreplier'] = $lng['ticket']['customer'];
					$cananswer = 0;
				}

				if(strlen($row['subject']) > 20)
				{
					$row['subject'] = substr($row['subject'], 0, 17) . '...';
				}

				eval("\$tickets.=\"" . getTemplate("ticket/tickets_tickets") . "\";");
				$count++;
			}

			$i++;
		}

		$supportavailable = 0;
		$time = date("Hi", time());
		$day = date("w", time());
		$start = substr($settings['ticket']['worktime_begin'], 0, 2) . substr($settings['ticket']['worktime_begin'], 3, 2);
		$end = substr($settings['ticket']['worktime_end'], 0, 2) . substr($settings['ticket']['worktime_end'], 3, 2);

		if($time >= $start
		   && $time <= $end)
		{
			$supportavailable = 1;
		}

		if($settings['ticket']['worktime_sat'] == "0"
		   && $day == "6")
		{
			$supportavailable = 0;
		}

		if($settings['ticket']['worktime_sun'] == "0"
		   && $day == "0")
		{
			$supportavailable = 0;
		}

		if($settings['ticket']['worktime_all'] == "1")
		{
			$supportavailable = 1;
		}

		$ticketsopen = 0;
		$opentickets = $db->query_first('SELECT COUNT(`id`) as `count` FROM `' . TABLE_PANEL_TICKETS . '`
                                         WHERE `customerid` = "' . $userinfo['customerid'] . '"
                                         AND `answerto` = "0"
                                         AND (`status` = "0" OR `status` = "1" OR `status` = "2")');

		if($settings['ticket']['concurrently_open'] != -1
		   && $settings['ticket']['concurrently_open'] != '')
		{
			$notmorethanxopentickets = strtr($lng['ticket']['notmorethanxopentickets'], array(
				'%s' => $settings['ticket']['concurrently_open']
			));
		}
		else
		{
			$notmorethanxopentickets = '';
		}

		$ticketsopen = (int)$opentickets['count'];
		eval("echo \"" . getTemplate("ticket/tickets") . "\";");
	}
	elseif($action == 'new')
	{
		if($userinfo['tickets_used'] < $userinfo['tickets']
		   || $userinfo['tickets'] == '-1')
		{
			if(isset($_POST['send'])
			   && $_POST['send'] == 'send')
			{
				$newticket = ticket::getInstanceOf($userinfo, $db, $settings, -1);
				$newticket->Set('subject', validate($_POST['subject'], 'subject'), true, false);
				$newticket->Set('priority', validate($_POST['priority'], 'priority'), true, false);
				$newticket->Set('category', validate($_POST['category'], 'category'), true, false);
				$newticket->Set('customer', (int)$userinfo['customerid'], true, false);
				$newticket->Set('admin', (int)$userinfo['adminid'], true, false);
				$newticket->Set('message', validate(str_replace("\r\n", "\n", $_POST['message']), 'message', '/^[^\0]*$/'), true, false);

				if($newticket->Get('subject') == null)
				{
					standard_error(array(
						'stringisempty',
						'mysubject'
					));
				}
				elseif($newticket->Get('message') == null)
				{
					standard_error(array(
						'stringisempty',
						'mymessage'
					));
				}
				else
				{
					$now = time();
					$newticket->Set('dt', $now, true, true);
					$newticket->Set('lastchange', $now, true, true);
					$newticket->Set('ip', $_SERVER['REMOTE_ADDR'], true, true);
					$newticket->Set('status', '0', true, true);
					$newticket->Set('lastreplier', '0', true, true);
					$newticket->Set('by', '0', true, true);
					$newticket->Insert();
					$log->logAction(USR_ACTION, LOG_NOTICE, "opened support-ticket '" . $newticket->Get('subject') . "'");
					$db->query('UPDATE `' . TABLE_PANEL_CUSTOMERS . '`
                          SET `tickets_used`=`tickets_used`+1 WHERE `customerid`="' . (int)$userinfo['customerid'] . '"');

					// Customer mail

					$newticket->sendMail((int)$userinfo['customerid'], 'new_ticket_for_customer_subject', $lng['mails']['new_ticket_for_customer']['subject'], 'new_ticket_for_customer_mailbody', $lng['mails']['new_ticket_for_customer']['mailbody']);

					// Admin mail

					$newticket->sendMail(-1, 'new_ticket_by_customer_subject', $lng['mails']['new_ticket_by_customer']['subject'], 'new_ticket_by_customer_mailbody', $lng['mails']['new_ticket_by_customer']['mailbody']);
					redirectTo($filename, Array(
						'page' => $page,
						's' => $s
					));
				}
			}
			else
			{
				$categories = '';
				$result = $db->query_first('SELECT `id`, `name` FROM `' . TABLE_PANEL_TICKET_CATS . '` ORDER BY `name` ASC');

				if(isset($result['name'])
				   && $result['name'] != '')
				{
					$result2 = $db->query('SELECT `id`, `name` FROM `' . TABLE_PANEL_TICKET_CATS . '` ORDER BY `name` ASC');

					while($row = $db->fetch_array($result2))
					{
						$categories.= makeoption($row['name'], $row['id']);
					}
				}
				else
				{
					$categories = makeoption($lng['ticket']['no_cat'], '0');
				}

				$priorities = makeoption($lng['ticket']['unf_high'], '1');
				$priorities.= makeoption($lng['ticket']['unf_normal'], '2');
				$priorities.= makeoption($lng['ticket']['unf_low'], '3');
				$ticketsopen = 0;
				$opentickets = $db->query_first('SELECT COUNT(`id`) as `count` FROM `' . TABLE_PANEL_TICKETS . '`
                                           WHERE `customerid` = "' . $userinfo['customerid'] . '"
                                           AND `answerto` = "0"
                                           AND (`status` = "0" OR `status` = "1" OR `status` = "2")');

				if($settings['ticket']['concurrently_open'] != -1
				   && $settings['ticket']['concurrently_open'] != '')
				{
					$notmorethanxopentickets = strtr($lng['ticket']['notmorethanxopentickets'], array(
						'%s' => $settings['ticket']['concurrently_open']
					));
				}
				else
				{
					$notmorethanxopentickets = '';
				}

				$ticketsopen = (int)$opentickets['count'];
				eval("echo \"" . getTemplate("ticket/tickets_new") . "\";");
			}
		}
		else
		{
			standard_error('nomoreticketsavailable');
		}
	}
	elseif($action == 'answer'
	       && $id != 0)
	{
		if(isset($_POST['send'])
		   && $_POST['send'] == 'send')
		{
			$replyticket = ticket::getInstanceOf($userinfo, $db, $settings, -1);
			$replyticket->Set('subject', validate($_POST['subject'], 'subject'), true, false);
			$replyticket->Set('priority', validate($_POST['priority'], 'priority'), true, false);
			$replyticket->Set('message', validate(str_replace("\r\n", "\n", $_POST['message']), 'message', '/^[^\0]*$/'), true, false);

			if($replyticket->Get('message') == null)
			{
				standard_error(array(
					'stringisempty',
					'mymessage'
				));
			}
			else
			{
				$now = time();
				$replyticket->Set('customerid', (int)$userinfo['customerid'], true, true);
				$replyticket->Set('lastchange', $now, true, true);
				$replyticket->Set('ip', $_SERVER['REMOTE_ADDR'], true, true);
				$replyticket->Set('status', '1', true, true);
				$replyticket->Set('answerto', (int)$id, true, false);
				$replyticket->Set('by', '0', true, true);
				$replyticket->Insert();

				// Update priority if changed

				$mainticket = ticket::getInstanceOf($userinfo, $db, $settings, (int)$id);

				if($replyticket->Get('priority') != $mainticket->Get('priority'))
				{
					$mainticket->Set('priority', $replyticket->Get('priority'), true);
				}

				$mainticket->Set('lastchange', $now);
				$mainticket->Set('lastreplier', '0');
				$mainticket->Set('status', '1');
				$mainticket->Update();
				$log->logAction(USR_ACTION, LOG_NOTICE, "answered support-ticket '" . $mainticket->Get('subject') . "'");
				$mainticket->sendMail(-1, 'new_reply_ticket_by_customer_subject', $lng['mails']['new_reply_ticket_by_customer']['subject'], 'new_reply_ticket_by_customer_mailbody', $lng['mails']['new_reply_ticket_by_customer']['mailbody']);
				redirectTo($filename, Array(
					'page' => $page,
					's' => $s
				));
			}
		}
		else
		{
			$ticket_replies = '';
			$mainticket = ticket::getInstanceOf($userinfo, $db, $settings, (int)$id);
			$lastchange = date("d.m.Y H:i\h", $mainticket->Get('lastchange'));
			$status = ticket::getStatusText($lng, $mainticket->Get('status'));

			if($mainticket->Get('status') >= 0
			   && $mainticket->Get('status') <= 2)
			{
				$isclosed = 0;
			}
			else
			{
				$isclosed = 1;
			}

			if($mainticket->Get('by') == '1')
			{
				$by = $lng['ticket']['staff'];
			}
			else
			{
				$by = $lng['ticket']['customer'];
			}

			$subject = $mainticket->Get('subject');
			$message = $mainticket->Get('message');
			eval("\$ticket_replies.=\"" . getTemplate("ticket/tickets_tickets_main") . "\";");
			$result = $db->query('SELECT `name` FROM `' . TABLE_PANEL_TICKET_CATS . '`
                                WHERE `id`="' . (int)$mainticket->Get('category') . '"');
			$row = $db->fetch_array($result);
			$andere = $db->query('SELECT * FROM `' . TABLE_PANEL_TICKETS . '` WHERE `answerto`="' . (int)$id . '" ORDER BY `lastchange` DESC');

			while($row2 = $db->fetch_array($andere))
			{
				$subticket = ticket::getInstanceOf($userinfo, $db, $settings, (int)$row2['id']);
				$lastchange = date("d.m.Y H:i\h", $subticket->Get('lastchange'));

				if($subticket->Get('by') == '1')
				{
					$by = $lng['ticket']['staff'];
				}
				else
				{
					$by = $lng['ticket']['customer'];
				}

				$subject = $subticket->Get('subject');
				$message = $subticket->Get('message');
				eval("\$ticket_replies.=\"" . getTemplate("ticket/tickets_tickets_list") . "\";");
			}

			$priorities = makeoption($lng['ticket']['high'], '1', $mainticket->Get('priority'), true, true);
			$priorities.= makeoption($lng['ticket']['normal'], '2', $mainticket->Get('priority'), true, true);
			$priorities.= makeoption($lng['ticket']['low'], '3', $mainticket->Get('priority'), true, true);
			$subject = $mainticket->Get('subject');
			$ticket_replies_count = $db->num_rows($andere)+1;

			// don't forget the main-ticket!

			eval("echo \"" . getTemplate("ticket/tickets_reply") . "\";");
		}
	}
	elseif($action == 'close'
	       && $id != 0)
	{
		if(isset($_POST['send'])
		   && $_POST['send'] == 'send')
		{
			$now = time();
			$mainticket = ticket::getInstanceOf($userinfo, $db, $settings, (int)$id);
			$mainticket->Set('lastchange', $now, true, true);
			$mainticket->Set('lastreplier', '0', true, true);
			$mainticket->Set('status', '3', true, true);
			$mainticket->Update();
			$log->logAction(USR_ACTION, LOG_NOTICE, "closed support-ticket '" . $mainticket->Get('subject') . "'");
			redirectTo($filename, Array(
				'page' => $page,
				's' => $s
			));
		}
		else
		{
			$mainticket = ticket::getInstanceOf($userinfo, $db, $settings, (int)$id);
			ask_yesno('ticket_reallyclose', $filename, array(
				'id' => $id,
				'page' => $page,
				'action' => $action
			), $mainticket->Get('subject'));
		}
	}
	elseif($action == 'reopen'
	       && $id != 0)
	{
		$ticketsopen = 0;
		$opentickets = $db->query_first('SELECT COUNT(`id`) as `count` FROM `' . TABLE_PANEL_TICKETS . '`
                                       WHERE `customerid` = "' . $userinfo['customerid'] . '"
                                       AND `answerto` = "0"
                                       AND (`status` = "0" OR `status` = "1" OR `status` = "2")');
		$ticketsopen = (int)$opentickets['count'];

		if($ticketsopen > $settings['ticket']['concurrently_open']
		   && $settings['ticket']['concurrently_open'] != -1
		   && $settings['ticket']['concurrently_open'] != '')
		{
			standard_error('notmorethanxopentickets', $settings['ticket']['concurrently_open']);
		}

		$now = time();
		$mainticket = ticket::getInstanceOf($userinfo, $db, $settings, (int)$id);
		$mainticket->Set('lastchange', $now, true, true);
		$mainticket->Set('lastreplier', '0', true, true);
		$mainticket->Set('status', '0', true, true);
		$mainticket->Update();
		$log->logAction(USR_ACTION, LOG_NOTICE, "reopened support-ticket '" . $mainticket->Get('subject') . "'");
		redirectTo($filename, Array(
			'page' => $page,
			's' => $s
		));
	}
}

?>
