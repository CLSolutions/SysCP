<?php

/**
 * Implementation of the Application Packaging Standard from SwSoft/Parallels
 * http://apsstandard.com
 *
 * Copyright (c) 2003-2008 the SysCP Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @copyright	(c) the authors
 * @author		Sven Skrabal <info@nexpa.de>
 * @license		GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package		Cron
 * @version		$Id: class_apsupdater.php 2248 2008-10-07 17:41:22Z radiation $
 * @todo		logging
 *				install specific packages by name
 *				other solution than using url_fopen
 */

class ApsUpdater extends ApsParser
{
	private $settings = array();
	private $db = false;
	private $RequestDomain = '';
	private $RootUrl = '';
	private $RootDir = '';

	/**
	 * constructor of class. setup some basic variables needed by class
	 *
	 * @param	settings	array with the global settings from syscp
	 * @param	db			instance of the database class from syscp
	 */

	public function __construct($settings, $db)
	{
		$this->settings = $settings;
		$this->db = $db;
		$this->RequestDomain = 'apscatalog.com';
		$this->RootUrl = '/1/';
		$this->RootDir = dirname(dirname(__FILE__)) . '/';
	}

	/**
	 * Main function of class which handles all around the update mechanism
	 */

	public function UpdateHandler()
	{
		chdir($this->RootDir);
		$Result = $this->db->query('SELECT * FROM `' . TABLE_APS_TASKS . '` WHERE `Task` IN (' . TASK_SYSTEM_UPDATE . ', ' . TASK_SYSTEM_DOWNLOAD . ')');

		//return if no task exists

		if($this->db->num_rows($Result) == 0)
		{
			return;
		}

		//query first task -> updater can only do one job within a run

		$Task = $this->db->fetch_array($Result);
		$this->db->query('DELETE FROM `' . TABLE_APS_TASKS . '` WHERE `Task` = ' . $Task['Task']);

		//fetch all vendors

		$Vendors = self::FetchSubUrls($this->RootUrl);
		foreach($Vendors as $Vendor)
		{
			//fetch all applications from vendors

			$Applications = self::FetchSubUrls($this->RootUrl . $Vendor);
			foreach($Applications as $Application)
			{
				//get newest version of package which is already installed

				$CurrentVersion = '';
				$Result = $this->db->query('SELECT * FROM `' . TABLE_APS_PACKAGES . '` WHERE `Name` = "' . $this->db->escape(substr($Application, 0, -1)) . '"');

				while($Row = $this->db->fetch_array($Result))
				{
					if(version_compare($Row['Version'] . '-' . $Row['Release'], $CurrentVersion) == 1)
					{
						$CurrentVersion = $Row['Version'] . '-' . $Row['Release'];
					}
				}

				if($this->db->num_rows($Result) != 0)
				{
					//package already installed in system, search for newer version

					if($Task['Task'] != TASK_SYSTEM_UPDATE)continue;

					//fetch different versions of application from distribution server

					$NewerVersion = '';
					$Versions = self::FetchSubUrls($this->RootUrl . $Vendor . $Application);
					foreach($Versions as $Version)
					{
						$OnlineVersion = substr($Version, 0, -1);

						//is package newer than current version?

						if(version_compare($OnlineVersion, $CurrentVersion) == 1)
						{
							//is new package newer than another one found before?

							if(version_compare($OnlineVersion, $NewerVersion) == 1)
							{
								$NewerVersion = $OnlineVersion;
							}
						}
					}

					if($NewerVersion != '')
					{
						//download package as an update

						self::DownloadPackage($this->RootUrl . $Vendor . $Application . $NewerVersion, substr($Application, 0, -1), $NewerVersion);
						continue;
					}
				}
				else
				{
					if($Task['Task'] != TASK_SYSTEM_DOWNLOAD)continue;

					//new packages

					$NewVersion = '';
					$Versions = self::FetchSubUrls($this->RootUrl . $Vendor . $Application);
					foreach($Versions as $Version)
					{
						$OnlineVersion = substr($Version, 0, -1);

						//is package newer than another one found before?

						if(version_compare($OnlineVersion, $NewVersion) == 1)
						{
							$NewVersion = $OnlineVersion;
						}
					}

					if($NewVersion != '')
					{
						//download package as a new one

						self::DownloadPackage($this->RootUrl . $Vendor . $Application . $NewVersion, substr($Application, 0, -1), $NewVersion);
						continue;
					}
				}
			}
		}
	}

	/**
	 * download a package from the distribution server and move the downloaded file in the temporary directory
	 *
	 * @param	url				url to download
	 * @param	application		string identifying the application name
	 * @param	version			string identifying the application version
	 * @return	success true/error false
	 */

	private function DownloadPackage($Url, $Application, $Version)
	{
		$Downloads = self::FetchSubUrls($Url . '/');

		//make url valid

		$Url = str_replace(' ', '%20', $Url);

		//get content from website url

		$Content = @file_get_contents('http://' . $this->RequestDomain . $Url . '.aps' . $Downloads[0]);

		if($Content != false)
		{
			//open file to write contents on disk

			$FileHandle = fopen($this->RootDir . 'temp/' . $Application . '-' . $Version . '.app.zip', 'wb');

			if($FileHandle == true)
			{
				//write results to disk

				fwrite($FileHandle, $Content);
				fclose($FileHandle);

				//set right permissions
				chmod($this->RootDir . 'temp/' . $Application . '-' . $Version . '.app.zip', 0664);

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

	/**
	 * fetch html content of distribution server and parse all information
	 *
	 * @param	requestdomain	domain to aps-/mirrorserver with package api
	 * @param	url				url to fetch sub links from
	 * @return	error false/success array with relative sub links
	 */

	private function FetchSubUrls($Url)
	{
		$Return = array();

		//make url valid

		$Url = str_replace(' ', '%20', $Url);

		//get content from website url

		$Content = @file('http://' . $this->RequestDomain . $Url);

		if($Content != false)
		{
			foreach($Content as $Temp)
			{
				//skip empty lines

				if($Temp != "\r\n"
				   && $Temp != "\r"
				   && $Temp != "\n"
				   && $Temp != "")
				{
					//remove unwanted characters

					$Temp = trim($Temp);

					//grep URLs which match defined format

					if(preg_match("/^<a href=\"(.+)\".+class=\"(vendor|application|version|packager)\"/", $Temp, $Matches))
					{
						if(!in_array(urldecode($Matches[1]), $Return))$Return[] = urldecode($Matches[1]);
					}
				}
			}

			return $Return;
		}
		else
		{
			return false;
		}
	}
}

?>