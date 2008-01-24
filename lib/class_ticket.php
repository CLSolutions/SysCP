<?php

/**
 * Support-Tickets - Ticket-Class
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
 * @package    Functions
 * @version    CVS: $Id:$
 * @link       http://www.nutime.de/
 * @since      File available since Release 1.2.18
 */

class ticket
{
	/**
	 * Userinfo
	 * @var array
	 */

	private $userinfo = array();

	/**
	 * Database handler
	 * @var db
	 */

	private $db = false;

	/**
	 * Settings array
	 * @var settings
	 */

	private $settings = array();

	/**
	 * Ticket ID
	 * @var tid
	 */

	private $tid = -1;

	/**
	 * Ticket Data Array
	 * @var t_data
	 */

	private $t_data = array();

	/**
	 * Ticket-Object-Array
	 * @var tickets
	 */

	static private $tickets = array();

	/**
	 * Class constructor.
	 *
	 * @param array userinfo
	 * @param resource database
	 * @param array settings
	 * @param int ticket id
	 */

	private function __construct($userinfo, $db, $settings, $tid = -1)
	{
		$this->userinfo = $userinfo;
		$this->db = $db;
		$this->settings = $settings;
		$this->tid = $tid;

		// initialize data array

		$this->initData();

		// read data from database

		$this->readData();
	}

	/**
	 * Singleton ftw ;-)
	 *
	 * @param int ticket id
	 */

	static public function getInstanceOf($_usernfo, $_db, $_settings, $_tid)
	{
		if(!isset(self::$tickets[$_tid]))
		{
			self::$tickets[$_tid] = new ticket($_usernfo, $_db, $_settings, $_tid);
		}

		return self::$tickets[$_tid];
	}

	/**
	 * Initialize data-array
	 */

	private function initData()
	{
		$this->Set('customer', 0, true, true);
		$this->Set('subject', '', true, true);
		$this->Set('category', '0', true, true);
		$this->Set('priority', '2', true, true);
		$this->Set('message', '', true, true);
		$this->Set('dt', 0, true, true);
		$this->Set('lastchange', 0, true, true);
		$this->Set('ip', '', true, true);
		$this->Set('status', '0', true, true);
		$this->Set('lastreplier', '0', true, true);
		$this->Set('by', '0', true, true);
		$this->Set('answerto', '0', true, true);
		$this->Set('archived', '0', true, true);
	}

	/**
	 * Read ticket data from database.
	 */

	private function readData()
	{
		if(isset($this->tid)
		   && $this->tid != -1)
		{
			$_ticket = $this->db->query_first('SELECT * FROM `' . TABLE_PANEL_TICKETS . '` WHERE `id` = "' . $this->tid . '"');
			$this->Set('customer', $_ticket['customerid'], true, false);
			$this->Set('subject', $_ticket['subject'], true, false);
			$this->Set('category', $_ticket['category'], true, false);
			$this->Set('priority', $_ticket['priority'], true, false);
			$this->Set('message', $_ticket['message'], true, false);
			$this->Set('dt', $_ticket['dt'], true, false);
			$this->Set('lastchange', $_ticket['lastchange'], true, false);
			$this->Set('ip', $_ticket['ip'], true, false);
			$this->Set('status', $_ticket['status'], true, false);
			$this->Set('lastreplier', $_ticket['lastreplier'], true, false);
			$this->Set('by', $_ticket['by'], true, false);
			$this->Set('answerto', $_ticket['answerto'], true, false);
			$this->Set('archived', $_ticket['archived'], true, false);
		}
	}

	/**
	 * Insert data to database
	 */

	public function Insert()
	{
		$this->db->query("INSERT INTO `" . TABLE_PANEL_TICKETS . "` 
                (`customerid`,  
                 `category`, 
                 `priority`, 
                 `subject`, 
                 `message`, 
                 `dt`, 
                 `lastchange`, 
                 `ip`, 
                 `status`, 
                 `lastreplier`, 
                 `by`,
                 `answerto`) 
                  VALUES 
                  ('" . (int)$this->Get('customer') . "', 
                   '" . (int)$this->Get('category') . "', 
                   '" . (int)$this->Get('priority') . "', 
                   '" . $this->db->escape($this->Get('subject')) . "', 
                   '" . $this->db->escape($this->Get('message')) . "', 
                   '" . (int)$this->Get('dt') . "', 
                   '" . (int)$this->Get('lastchange') . "', 
                   '" . $this->db->escape($this->Get('ip')) . "', 
                   '" . (int)$this->Get('status') . "',
                   '" . (int)$this->Get('lastreplier') . "',
                   '" . (int)$this->Get('by') . "',
                   '" . (int)$this->Get('answerto') . "');");
		$this->tid = $this->db->insert_id();
		return true;
	}

	/**
	 * Update data in database
	 */

	public function Update()
	{
		// Update "main" ticket

		$this->db->query('UPDATE `' . TABLE_PANEL_TICKETS . '` SET   
                `priority` = "' . (int)$this->Get('priority') . '",  
                `lastchange` = "' . (int)$this->Get('lastchange') . '", 
                `status` = "' . (int)$this->Get('status') . '", 
                `lastreplier` = "' . (int)$this->Get('lastreplier') . '"
                WHERE `id` = "' . (int)$this->tid . '";');
		return true;
	}

	/**
	 * Moves a ticket to the archive
	 */

	public function Archive()
	{
		// Update "main" ticket

		$this->db->query('UPDATE `' . TABLE_PANEL_TICKETS . '` SET `archived` = "1" WHERE `id` = "' . (int)$this->tid . '";');

		// Update "answers" to ticket

		$this->db->query('UPDATE `' . TABLE_PANEL_TICKETS . '` SET `archived` = "1" WHERE `answerto` = "' . (int)$this->tid . '";');
		return true;
	}

	/**
	 * Remove ticket from database
	 */

	public function Delete()
	{
		// Delete "main" ticket

		$this->db->query('DELETE FROM `' . TABLE_PANEL_TICKETS . '` WHERE `id` = "' . (int)$this->tid . '";');

		// Delete "answers" to ticket"

		$this->db->query('DELETE FROM `' . TABLE_PANEL_TICKETS . '` WHERE `answerto` = "' . (int)$this->tid . '";');
		return true;
	}

	/**
	 * Mail notifications
	 */

	public function sendMail($customerid = -1, $template_subject = null, $default_subject = null, $template_body = null, $default_body = null)
	{
		// Some checks are to be made here in the future

		if($customerid != -1)
		{
			// Get e-mail message for customer

			$usr = $this->db->query_first('SELECT `name`, `firstname`, `email` 
                               FROM `' . TABLE_PANEL_CUSTOMERS . '` 
                               WHERE `customerid` = "' . (int)$customerid . '"');
			$replace_arr = array(
				'FIRSTNAME' => $usr['firstname'],
				'NAME' => $usr['name'],
				'SUBJECT' => $this->Get('subject', true)
			);
		}
		else
		{
			$replace_arr = array(
				'SUBJECT' => $this->Get('subject', true)
			);
		}

		$result = $this->db->query_first('SELECT `value` FROM `' . TABLE_PANEL_TEMPLATES . '` 
                                WHERE `adminid`=\'' . (int)$this->userinfo['adminid'] . '\' 
                                AND `language`=\'' . $this->db->escape($this->userinfo['def_language']) . '\' 
                                AND `templategroup`=\'mails\' 
                                AND `varname`=\'' . $template_subject . '\'');
		$mail_subject = html_entity_decode(replace_variables((($result['value'] != '') ? $result['value'] : $default_subject), $replace_arr));
		$result = $this->db->query_first('SELECT `value` FROM `' . TABLE_PANEL_TEMPLATES . '` 
                                WHERE `adminid`=\'' . (int)$this->userinfo['adminid'] . '\' 
                                AND `language`=\'' . $this->db->escape($this->userinfo['def_language']) . '\' 
                                AND `templategroup`=\'mails\' 
                                AND `varname`=\'' . $template_body . '\'');
		$mail_body = html_entity_decode(replace_variables((($result['value'] != '') ? $result['value'] : $default_body), $replace_arr));

		if($customerid != -1)
		{
			mail(buildValidMailFrom($usr['firstname'] . ' ' . $usr['name'], $usr['email']), $mail_subject, $mail_body, 'From: ' . buildValidMailFrom('SysCP Support Ticket', $this->settings['ticket']['noreply_email']));
		}
		else
		{
			mail(buildValidMailFrom('SysCP Supporter', $this->settings['ticket']['admin_email']), $mail_subject, $mail_body, 'From: ' . buildValidMailFrom('SysCP Support Ticket', $this->settings['ticket']['noreply_email']));
		}
	}

	/**
	 * Add a support-categories
	 */

	static public function addCategory($_db, $_category = null)
	{
		if($_category != null
		   && $_category != '')
		{
			$_db->query('INSERT INTO `' . TABLE_PANEL_TICKET_CATS . '` (`name`) VALUES ("' . $_db->escape($_category) . '")');
			return true;
		}

		return false;
	}

	/**
	 * Edit a support-categories
	 */

	static public function editCategory($_db, $_category = null, $_id = 0)
	{
		if($_category != null
		   && $_category != ''
		   && $_id != 0)
		{
			$_db->query('UPDATE `' . TABLE_PANEL_TICKET_CATS . '` SET `name` = "' . $_db->escape($_category) . '" 
                   WHERE `id` = "' . (int)$_id . '"');
			return true;
		}

		return false;
	}

	/**
	 * Delete a support-categories
	 */

	static public function deleteCategory($_db, $_id = 0)
	{
		if($_id != 0)
		{
			$result = $_db->query_first('SELECT COUNT(`id`) as `numtickets` FROM `' . TABLE_PANEL_TICKETS . '` 
                                   WHERE `category` = "' . (int)$_id . '"');

			if($result['numtickets'] == "0")
			{
				$_db->query('DELETE FROM `' . TABLE_PANEL_TICKET_CATS . '` WHERE `id` = "' . (int)$_id . '"');
				return true;
			}
			else
			{
				return false;
			}
		}

		return false;
	}

	/**
	 * Return a support-category-name
	 */

	static public function getCategoryName($_db, $_id = 0)
	{
		if($_id != 0)
		{
			$category = $_db->query_first('SELECT `name` FROM `' . TABLE_PANEL_TICKET_CATS . '` WHERE `id` = "' . (int)$_id . '"');
			return $category['name'];
		}

		return null;
	}

	/**
	 * returns the last x archived tickets
	 */

	static public function getLastArchived($_db, $_num = 10)
	{
		if($_num > 0)
		{
			$archived = array();
			$counter = 0;
			$result = $_db->query('SELECT *, 
                              (SELECT COUNT(`sub`.`id`) 
                                FROM `' . TABLE_PANEL_TICKETS . '` `sub` 
                                WHERE `sub`.`answerto` = `main`.`id`) as `ticket_answers`  
                             FROM `' . TABLE_PANEL_TICKETS . '` `main` 
                             WHERE `main`.`answerto` = "0" AND `main`.`archived` = "1" 
                             ORDER BY `main`.`lastchange` DESC LIMIT 0, ' . (int)$_num);

			while($row = $_db->fetch_array($result))
			{
				$archived[$counter]['id'] = $row['id'];
				$archived[$counter]['customerid'] = $row['customerid'];
				$archived[$counter]['lastreplier'] = $row['lastreplier'];
				$archived[$counter]['ticket_answers'] = $row['ticket_answers'];
				$archived[$counter]['category'] = $row['category'];
				$archived[$counter]['priority'] = $row['priority'];
				$archived[$counter]['subject'] = $row['subject'];
				$archived[$counter]['message'] = $row['message'];
				$archived[$counter]['dt'] = $row['dt'];
				$archived[$counter]['lastchange'] = $row['lastchange'];
				$archived[$counter]['status'] = $row['status'];
				$archived[$counter]['by'] = $row['by'];
				$counter++;
			}

			if(isset($archived[0]['id']))
			{
				return $archived;
			}
			else
			{
				return false;
			}
		}
	}

	/**
	 * Returns a sql-statement to search the archive
	 */

	static public function getArchiveSearchStatement($subject = NULL, $priority = NULL, $fromdate = NULL, $todate = NULL, $message = NULL, $customer = -1, $categories = NULL)
	{
		$query = 'SELECT `main`.*, 
                (SELECT COUNT(`sub`.`id`) FROM `' . TABLE_PANEL_TICKETS . '` `sub` 
                 WHERE `sub`.`answerto` = `main`.`id`) as `ticket_answers` 
              FROM `' . TABLE_PANEL_TICKETS . '` `main` 
              WHERE `main`.`archived` = "1" AND `main`.`answerto` = "0" ';

		if($subject != NULL
		   && $subject != '')
		{
			$query.= 'AND `main`.`subject` LIKE "%' . $subject . '%" ';
		}

		if($priority != NULL
		   && isset($priority[0])
		   && $priority[0] != '')
		{
			if(isset($priority[1])
			   && $priority[1] != '')
			{
				if(isset($priority[2])
				   && $priority[2] != '')
				{
					$query.= 'AND (`main`.`priority` = "1" 
                     OR `main`.`priority` = "2" 
                     OR `main`.`priority` = "3") ';
				}
				else
				{
					$query.= 'AND (`main`.`priority` = "1" 
                     OR `main`.`priority` = "2") ';
				}
			}
			elseif(isset($priority[2])
			       && $priority[2] != '')
			{
				$query.= 'AND (`main`.`priority` = "1" 
                     OR `main`.`priority` = "3") ';
			}
			else
			{
				$query.= 'AND `main`.`priority` = "1" ';
			}
		}
		elseif($priority != NULL
		       && isset($priority[1])
		       && $priority[1] != '')
		{
			if(isset($priority[2])
			   && $priority[2] != '')
			{
				$query.= 'AND (`main`.`priority` = "2" 
                     OR `main`.`priority` = "3") ';
			}
			else
			{
				$query.= 'AND `main`.`priority` = "2" ';
			}
		}
		elseif($priority != NULL)
		{
			if(isset($priority[3])
			   && $priority[3] != '')
			{
				$query.= 'AND `main`.`priority` = "3" ';
			}
		}

		if($fromdate != NULL
		   && $fromdate > 0)
		{
			$query.= 'AND `main`.`lastchange` > "' . $fromdate . '" ';
		}

		if($todate != NULL
		   && $todate > 0)
		{
			$query.= 'AND `main`.`lastchange` < "' . $todate . '" ';
		}

		if($message != NULL
		   && $message != '')
		{
			$query.= 'AND `main`.`message` LIKE "%' . $message . '%" ';
		}

		if($customer != -1)
		{
			$query.= 'AND `main`.`customerid` = "' . $customer . '" ';
		}

		if($categories != NULL)
		{
			if($categories[0] != '')
			{
				$query.= 'AND (';
			}

			foreach($categories as $catid)
			{
				if(isset($catid)
				   && $catid > 0)
				{
					$query.= '`main`.`category` = "' . $catid . '" OR ';
				}
			}

			if($categories[0] != '')
			{
				$query = substr($query, 0, strlen($query)-3);
				$query.= ') ';
			}
		}

		return $query;
	}

	/**
	 * Get statustext by status-no
	 */

	static public function getStatusText($_lng, $_status = 0)
	{
		switch($_status)
		{
		case 0:
			return $_lng['ticket']['open'];
			break;
		case 1:
			return $_lng['ticket']['wait_reply'];
			break;
		case 2:
			return $_lng['ticket']['replied'];
			break;
		default:
			return $_lng['ticket']['closed'];
			break;
		}
	}

	/**
	 * Get prioritytext by priority-no
	 */

	static public function getPriorityText($_lng, $_priority = 0)
	{
		switch($_priority)
		{
		case 1:
			return $_lng['ticket']['high'];
			break;
		case 2:
			return $_lng['ticket']['normal'];
			break;
		default:
			return $_lng['ticket']['low'];
			break;
		}
	}

	/**
	 * Get a data-var
	 */

	public function Get($_var = '', $_vartrusted = false)
	{
		if($_var != '')
		{
			if(!$_vartrusted)
			{
				$_var = htmlspecialchars($_var);
			}

			if(isset($this->t_data[$_var]))
			{
				return $this->t_data[$_var];
			}
			else
			{
				return null;
			}
		}
	}

	/**
	 * Set a data-var
	 */

	public function Set($_var = '', $_value = '', $_vartrusted = false, $_valuetrusted = false)
	{
		if($_var != ''
		   && $_value != '')
		{
			if(!$_vartrusted)
			{
				$_var = htmlspecialchars($_var);
			}

			if(!$_valuetrusted)
			{
				$_value = htmlspecialchars($_value);
			}

			$this->t_data[$_var] = $_value;
		}
	}
}

?>
