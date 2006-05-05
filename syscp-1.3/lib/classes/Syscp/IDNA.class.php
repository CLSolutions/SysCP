<?php
/**
 * This file is part of the SysCP project. 
 * Copyright (c) 2003-2006 the SysCP Project. 
 * 
 * For the full copyright and license information, please view the COPYING 
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 * 
 * @author     Michael D�rgner <michael@duergner.com>
 * @copyright  (c) the authors
 * @package    Org.Syscp.Core
 * @subpackage IDNA
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @version    $Id: class_idna_convert_wrapper.php 425 2006-03-18 09:48:20Z martin $
 */
 
/**
 * Inlcude the idna convert class we use. Assumes PEAR within include Path
 */
require_once 'Net/IDNA.php';

	/**
	 * Class for wrapping a specific idna conversion class and offering a standard interface
	 * 
	 * @author     Michael D�rgner <michael@duergner.com>
	 * @copyright  (c) the authors
	 * @package    Org.Syscp.Core
	 * @subpackage IDNA
	 */
	class Syscp_IDNA
	{
		/**
		 * Instanciated object of the IDNA converter
		 * 
		 * @var    Net_IDNA
		 * @access private
		 */
		var $idna_converter;

		/**
		 * Class constructor. Creates a new idna converter
		 * 
		 * @access public
		 * 
		 * @return Org_Syscp_Core_IDNA
		 */
		function __construct()
		{
			$this->idna_converter = Net_IDNA::getInstance();
//			$this->idna_converter = new idna_convert();
		}
		
		/**
		 * Encode a domain name, a email address or a list of one of both.
		 * 
		 * @access public 
		 * 
		 * @param  string  $to_encode  May be either a single domain name, 
		 *                             a single email address or a list of
		 *                             one seperated either by ',', ';' or
		 *                             ' '.
		 * 
		 * @return string  Returns either a single domain name, a single 
		 *                 email address or a list of one of both seperated 
		 *                 by the same string as the input.
		 */
		function encode($to_encode)
		{
			return $this->_do_action('encode',$to_encode);
		}
		
		/**
		 * Decode a domain name, a email address or a list of one of both.
		 * 
		 * @access public
		 * 
		 * @param  string  $to_decode  May be either a single domain name,
		 *                             a single email address or a list of
		 *                             one seperated either by ',', ';' or 
		 *                             ' '.
		 * 
		 * @return string  Returns either a single domain name, a single
		 *                 email address or a list of one of both seperated
		 *                 by the same string as the input.
		 */
		function decode($to_decode)
		{
			return $this->_do_action('decode',$to_decode);
		}
		
		/**
		 * Do the real de- or encoding. First checks if a list is submitted and seperates it. Afterwards sends 
		 * each entry to the idna converter to do the converting.
		 * 
		 * @access private 
		 * 
		 * @param  string  May be either 'decode' or 'encode'.
		 * @param  string  The string to de- or endcode.
		 * 
		 * @return string  The input string after being processed. 
		 */
		function _do_action($action, $string)
		{
			$string = trim($string);
			if(strpos($string,',') !== false)
			{
				$strings = explode(',',$string);
				$sepchar = ',';
			}
			elseif(strpos($string,';') !== false)
			{
				$strings = explode(';',$string);
				$sepchar = ';';
			}
			elseif(strpos($string,' ') !== false)
			{
				$strings = explode(' ',$string);
				$sepchar = ' ';
			}
			else
			{
				$strings = array($string);
				$sepchar = '';
			}
			
			for($i = 0; $i < count($strings); $i++)
			{
				if(strpos($strings[$i],'@') !== false)
				{
					$split = explode('@',$strings[$i]);
					$localpart = $split[0];
					$domain = $split[1];
					$email = true;
				}
				else
				{
					$domain = $strings[$i];
					$email = false;
				}
				if(strlen($domain) !== 0)
				{
					$domain = utf8_decode($this->idna_converter->$action(utf8_encode($domain.'.none')));
					$domain = substr($domain, 0, strlen($domain)-5);
				}
				if($email)
				{
					$strings[$i] = $localpart . '@' . $domain;
				}
				else
				{
					$strings[$i] = $domain;
				}
			}
			
			return implode($sepchar,$strings);
		}
	}
?>
