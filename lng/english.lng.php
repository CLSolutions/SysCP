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
 * @author     Florian Lippert <flo@syscp.org>
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package    Language
 * @version    $Id$
 */

/**
 * Global
 */

$lng['translator'] = '';
$lng['panel']['edit'] = 'edit';
$lng['panel']['delete'] = 'delete';
$lng['panel']['create'] = 'create';
$lng['panel']['save'] = 'save';
$lng['panel']['yes'] = 'yes';
$lng['panel']['no'] = 'no';
$lng['panel']['emptyfornochanges'] = 'empty for no changes';
$lng['panel']['emptyfordefault'] = 'empty for defaults';
$lng['panel']['path'] = 'Path';
$lng['panel']['toggle'] = 'Toggle';
$lng['panel']['next'] = 'next';
$lng['panel']['dirsmissing'] = 'Can not find or read the directory!';

/**
 * Login
 */

$lng['login']['username'] = 'Username';
$lng['login']['password'] = 'Password';
$lng['login']['language'] = 'Language';
$lng['login']['login'] = 'Login';
$lng['login']['logout'] = 'Logout';
$lng['login']['profile_lng'] = 'Profile language';

/**
 * Customer
 */

$lng['customer']['documentroot'] = 'Home directory';
$lng['customer']['name'] = 'Name';
$lng['customer']['firstname'] = 'First name';
$lng['customer']['company'] = 'Company';
$lng['customer']['street'] = 'Street';
$lng['customer']['zipcode'] = 'Zipcode';
$lng['customer']['city'] = 'City';
$lng['customer']['phone'] = 'Phone';
$lng['customer']['fax'] = 'Fax';
$lng['customer']['email'] = 'Email';
$lng['customer']['customernumber'] = 'Customer ID';
$lng['customer']['diskspace'] = 'Webspace (MB)';
$lng['customer']['traffic'] = 'Traffic (GB)';
$lng['customer']['mysqls'] = 'MySQL-Databases';
$lng['customer']['emails'] = 'E-mail-Addresses';
$lng['customer']['accounts'] = 'E-mail-Accounts';
$lng['customer']['forwarders'] = 'E-mail-Forwarders';
$lng['customer']['ftps'] = 'FTP-Accounts';
$lng['customer']['subdomains'] = 'Sub-Domain';
$lng['customer']['domains'] = 'Domain';
$lng['customer']['unlimited'] = 'unlimited';

/**
 * Customermenue
 */

$lng['menue']['main']['main'] = 'Main';
$lng['menue']['main']['changepassword'] = 'Change password';
$lng['menue']['main']['changelanguage'] = 'Change language';
$lng['menue']['email']['email'] = 'E-mail';
$lng['menue']['email']['emails'] = 'Addresses';
$lng['menue']['email']['webmail'] = 'WebMail';
$lng['menue']['mysql']['mysql'] = 'MySQL';
$lng['menue']['mysql']['databases'] = 'Databases';
$lng['menue']['mysql']['phpmyadmin'] = 'phpMyAdmin';
$lng['menue']['domains']['domains'] = 'Domains';
$lng['menue']['domains']['settings'] = 'Settings';
$lng['menue']['ftp']['ftp'] = 'FTP';
$lng['menue']['ftp']['accounts'] = 'Accounts';
$lng['menue']['ftp']['webftp'] = 'WebFTP';
$lng['menue']['extras']['extras'] = 'Extras';
$lng['menue']['extras']['directoryprotection'] = 'Directory protection';
$lng['menue']['extras']['pathoptions'] = 'path options';

/**
 * Index
 */

$lng['index']['customerdetails'] = 'Customer Details';
$lng['index']['accountdetails'] = 'Account Details';

/**
 * Change Password
 */

$lng['changepassword']['old_password'] = 'Old password';
$lng['changepassword']['new_password'] = 'New password';
$lng['changepassword']['new_password_confirm'] = 'New password (confirm)';
$lng['changepassword']['new_password_ifnotempty'] = 'New password (empty = no change)';
$lng['changepassword']['also_change_ftp'] = ' also change password of the main FTP account';

/**
 * Domains
 */

$lng['domains']['description'] = 'Here you can create (sub-)domains and change their paths.<br />The system will need some time to apply the new settings after every change.';
$lng['domains']['domainsettings'] = 'Domain settings';
$lng['domains']['domainname'] = 'Domain name';
$lng['domains']['subdomain_add'] = 'Create subdomain';
$lng['domains']['subdomain_edit'] = 'Edit (sub)domain';
$lng['domains']['wildcarddomain'] = 'Create as wildcarddomain?';
$lng['domains']['aliasdomain'] = 'Alias for domain';
$lng['domains']['noaliasdomain'] = 'No alias domain';

/**
 * E-mails
 */

$lng['emails']['description'] = 'Here you can create and change your e-mail addresses.<br />An account is like your letterbox in front of your house. If someone sends you an email, it will be dropped into the account.<br /><br />To download your emails use the following settings in your mailprogram: (The data in <i>italics</i> has to be changed to the equivalents you typed in!)<br />Hostname: <b><i>Domainname</i></b><br />Username: <b><i>Account name / e-mail address</i></b><br />Password: <b><i>the password you\'ve chosen</i></b>';
$lng['emails']['emailaddress'] = 'E-mail-address';
$lng['emails']['emails_add'] = 'Create e-mail-address';
$lng['emails']['emails_edit'] = 'Edit e-mail-address';
$lng['emails']['catchall'] = 'Catchall';
$lng['emails']['iscatchall'] = 'Define as catchall-address?';
$lng['emails']['account'] = 'Account';
$lng['emails']['account_add'] = 'Create account';
$lng['emails']['account_delete'] = 'Delete account';
$lng['emails']['from'] = 'Source';
$lng['emails']['to'] = 'Destination';
$lng['emails']['forwarders'] = 'Forwarders';
$lng['emails']['forwarder_add'] = 'Create forwarder';

/**
 * FTP
 */

$lng['ftp']['description'] = 'Here you can create and change your FTP accounts.<br />The changes are made instantly and the accounts can be used immediately.';
$lng['ftp']['account_add'] = 'Create Account';

/**
 * MySQL
 */

$lng['mysql']['databasename'] = 'user/database name';
$lng['mysql']['databasedescription'] = 'database description';
$lng['mysql']['database_create'] = 'Create database';

/**
 * Extras
 */

$lng['extras']['description'] = 'Here you can add some extras, for example directory protection.<br />The system will need some time to apply the new settings after every change.';
$lng['extras']['directoryprotection_add'] = 'Add directory protection';
$lng['extras']['view_directory'] = 'display directory content';
$lng['extras']['pathoptions_add'] = 'add path options';
$lng['extras']['directory_browsing'] = 'directory content browsing';
$lng['extras']['pathoptions_edit'] = 'edit path options';
$lng['extras']['error404path'] = '404';
$lng['extras']['error403path'] = '403';
$lng['extras']['error500path'] = '500';
$lng['extras']['error401path'] = '401';
$lng['extras']['errordocument404path'] = 'URL to ErrorDocument 404';
$lng['extras']['errordocument403path'] = 'URL to ErrorDocument 403';
$lng['extras']['errordocument500path'] = 'URL to ErrorDocument 500';
$lng['extras']['errordocument401path'] = 'URL to ErrorDocument 401';

/**
 * Errors
 */

$lng['error']['error'] = 'Error';
$lng['error']['directorymustexist'] = 'The directory %s must exist. Please create it with your FTP client.';
$lng['error']['filemustexist'] = 'The file %s must exist.';
$lng['error']['allresourcesused'] = 'You have already used all of your resources.';
$lng['error']['domains_cantdeletemaindomain'] = 'You cannot delete a domain which is used as an email-domain.';
$lng['error']['domains_canteditdomain'] = 'You cannot edit this domain. It has been disabled by the admin.';
$lng['error']['domains_cantdeletedomainwithemail'] = 'You cannot delete a domain which is used as an email-domain. Delete all email addresses first.';
$lng['error']['firstdeleteallsubdomains'] = 'You have to delete all Subdomains first before you can create a wildcard domain.';
$lng['error']['youhavealreadyacatchallforthisdomain'] = 'You have already defined a catchall for this domain.';
$lng['error']['ftp_cantdeletemainaccount'] = 'You cannot delete your main FTP account';
$lng['error']['login'] = 'The username or password you typed in is wrong. Please try it again!';
$lng['error']['login_blocked'] = 'This account has been suspended because of too many login errors. <br />Please try again in ' . $settings['login']['deactivatetime'] . ' seconds.';
$lng['error']['notallreqfieldsorerrors'] = 'You have not filled in all or filled in some fields incorrectly.';
$lng['error']['oldpasswordnotcorrect'] = 'The old password is not correct.';
$lng['error']['youcantallocatemorethanyouhave'] = 'You cannot allocate more resources than you own for yourself.';
$lng['error']['mustbeurl'] = 'You have not typed a valid or complete url (e.g. http://somedomain.com/error404.htm)';
$lng['error']['invalidpath'] = 'You have not chosen a valid url (maybe problems with the dirlisting?)';
$lng['error']['stringisempty'] = 'Missing Input in Field';
$lng['error']['stringiswrong'] = 'Wrong Input in Field';
$lng['error']['myloginname'] = '\'' . $lng['login']['username'] . '\'';
$lng['error']['mypassword'] = '\'' . $lng['login']['password'] . '\'';
$lng['error']['oldpassword'] = '\'' . $lng['changepassword']['old_password'] . '\'';
$lng['error']['newpassword'] = '\'' . $lng['changepassword']['new_password'] . '\'';
$lng['error']['newpasswordconfirm'] = '\'' . $lng['changepassword']['new_password_confirm'] . '\'';
$lng['error']['newpasswordconfirmerror'] = 'New password and confirmation does not match';
$lng['error']['myname'] = '\'' . $lng['customer']['name'] . '\'';
$lng['error']['myfirstname'] = '\'' . $lng['customer']['firstname'] . '\'';
$lng['error']['emailadd'] = '\'' . $lng['customer']['email'] . '\'';
$lng['error']['mydomain'] = '\'Domain\'';
$lng['error']['mydocumentroot'] = '\'Documentroot\'';
$lng['error']['loginnameexists'] = 'Login-Name %s already exists';
$lng['error']['emailiswrong'] = 'E-mail-Address %s contains invalid characters or is incomplete';
$lng['error']['loginnameiswrong'] = 'Login-Name %s contains invalid characters';
$lng['error']['userpathcombinationdupe'] = 'Combination of Username and Path already exists';
$lng['error']['patherror'] = 'General Error! path cannot be empty';
$lng['error']['errordocpathdupe'] = 'Option for path %s already exists';
$lng['error']['adduserfirst'] = 'Please create a customer first';
$lng['error']['domainalreadyexists'] = 'The domain %s is already assigned to a customer';
$lng['error']['nolanguageselect'] = 'No language selected.';
$lng['error']['nosubjectcreate'] = 'You must define a topic for this mail template.';
$lng['error']['nomailbodycreate'] = 'You must define a Mail-Text for this mail template.';
$lng['error']['templatenotfound'] = 'Template was not found.';
$lng['error']['alltemplatesdefined'] = 'You cant define more templates, all languages are supported already.';
$lng['error']['wwwnotallowed'] = 'www is not allowed for subdomains.';
$lng['error']['subdomainiswrong'] = 'The subdomain %s contains invalid characters.';
$lng['error']['domaincantbeempty'] = 'The domain-name can not be empty.';
$lng['error']['domainexistalready'] = 'The domain %s already exists.';
$lng['error']['domainisaliasorothercustomer'] = 'The selected alias domain is either itself an alias domain or belongs to another customer.';
$lng['error']['emailexistalready'] = 'The e-mail-Address %s already exists.';
$lng['error']['maindomainnonexist'] = 'The main-domain %s does not exist.';
$lng['error']['destinationnonexist'] = 'Please create your forwarder in the field \'Destination\'.';
$lng['error']['destinationalreadyexistasmail'] = 'The forwarder to %s already exists as active EMail-Address.';
$lng['error']['destinationalreadyexist'] = 'You have already defined a forwarder to %s .';
$lng['error']['destinationiswrong'] = 'The forwarder %s contains invalid character(s) or is incomplete.';
$lng['error']['domainname'] = $lng['domains']['domainname'];

/**
 * Questions
 */

$lng['question']['question'] = 'Security question';
$lng['question']['admin_customer_reallydelete'] = 'Do you really want to delete the customer %s? This cannot be undone!';
$lng['question']['admin_domain_reallydelete'] = 'Do you really want to delete the domain %s?';
$lng['question']['admin_domain_reallydisablesecuritysetting'] = 'Do you really want to deactivate these Security settings (OpenBasedir and/or SafeMode)?';
$lng['question']['admin_admin_reallydelete'] = 'Do you really want to delete the admin %s? Every customer and domain will be reassigned to your account.';
$lng['question']['admin_template_reallydelete'] = 'Do you really want to delete the template \'%s\'?';
$lng['question']['domains_reallydelete'] = 'Do you really want to delete the domain %s?';
$lng['question']['email_reallydelete'] = 'Do you really want to delete the email-address %s?';
$lng['question']['email_reallydelete_account'] = 'Do you really want to delete the email-account of %s?';
$lng['question']['email_reallydelete_forwarder'] = 'Do you really want to delete the forwarder %s?';
$lng['question']['extras_reallydelete'] = 'Do you really want to delete the directory protection for %s?';
$lng['question']['extras_reallydelete_pathoptions'] = 'Do you really want to delete the path options for %s?';
$lng['question']['ftp_reallydelete'] = 'Do you really want to delete the FTP account %s?';
$lng['question']['mysql_reallydelete'] = 'Do you really want to delete the database %s? This cannot be undone!';
$lng['question']['admin_configs_reallyrebuild'] = 'Do you really want to rebuild your apache and bind config files?';

/**
 * Mails
 */

$lng['mails']['pop_success']['mailbody'] = 'Hello,\n\nyour Mail account {EMAIL}\nwas set up successfully.\n\nThis is an automatically created\ne-mail, please do not answer!\n\nYours sincerely, the SysCP-Team';
$lng['mails']['pop_success']['subject'] = 'Mail account set up successfully';
$lng['mails']['createcustomer']['mailbody'] = 'Hello {FIRSTNAME} {NAME},\n\nhere is your account information:\n\nUsername: {USERNAME}\nPassword: {PASSWORD}\n\nThank you,\nthe SysCP-Team';
$lng['mails']['createcustomer']['subject'] = 'Account information';

/**
 * Admin
 */

$lng['admin']['overview'] = 'Overview';
$lng['admin']['ressourcedetails'] = 'Used resources';
$lng['admin']['systemdetails'] = 'System Details';
$lng['admin']['syscpdetails'] = 'SysCP Details';
$lng['admin']['installedversion'] = 'Installed version';
$lng['admin']['latestversion'] = 'Latest version';
$lng['admin']['lookfornewversion']['clickhere'] = 'search via webservice';
$lng['admin']['lookfornewversion']['error'] = 'Error while reading';
$lng['admin']['resources'] = 'Resources';
$lng['admin']['customer'] = 'Customer';
$lng['admin']['customers'] = 'Customers';
$lng['admin']['customer_add'] = 'Create customer';
$lng['admin']['customer_edit'] = 'Edit customer';
$lng['admin']['domains'] = 'Domains';
$lng['admin']['domain_add'] = 'Create domain';
$lng['admin']['domain_edit'] = 'Edit domain';
$lng['admin']['subdomainforemail'] = 'Subdomains as emaildomains';
$lng['admin']['admin'] = 'Admin';
$lng['admin']['admins'] = 'Admins';
$lng['admin']['admin_add'] = 'Create admin';
$lng['admin']['admin_edit'] = 'Edit admin';
$lng['admin']['customers_see_all'] = 'Can see all customers?';
$lng['admin']['domains_see_all'] = 'Can see all domains?';
$lng['admin']['change_serversettings'] = 'Can change server settings?';
$lng['admin']['server'] = 'Server';
$lng['admin']['serversettings'] = 'Settings';
$lng['admin']['rebuildconf'] = 'Rebuild Config Files';
$lng['admin']['stdsubdomain'] = 'Standard subdomain';
$lng['admin']['stdsubdomain_add'] = 'Create standard subdomain';
$lng['admin']['phpenabled'] = 'PHP enabled';
$lng['admin']['deactivated'] = 'Deactivated';
$lng['admin']['deactivated_user'] = 'Deactivate User';
$lng['admin']['sendpassword'] = 'Send password';
$lng['admin']['ownvhostsettings'] = 'Own vHost-Settings';
$lng['admin']['configfiles']['serverconfiguration'] = 'Configuration';
$lng['admin']['configfiles']['files'] = '<b>Configfiles:</b> Please change the following files or create them with<br />the following content if they do not exist.<br /><b>Please Note:</b> The MySQL-password has not been replaced for security reasons.<br />Please replace &quot;MYSQL_PASSWORD&quot; on your own. If you forgot your MySQL-password<br />you\'ll find it in &quot;lib/userdata.inc.php&quot;.';
$lng['admin']['configfiles']['commands'] = '<b>Commands:</b> Please execute the following commands in a shell.';
$lng['admin']['configfiles']['restart'] = '<b>Restart:</b> Please execute the following commands in a shell in order to reload the new configuration.';
$lng['admin']['templates']['templates'] = 'E-Mail-templates';
$lng['admin']['templates']['template_add'] = 'Add template';
$lng['admin']['templates']['template_edit'] = 'Edit template';
$lng['admin']['templates']['action'] = 'Action';
$lng['admin']['templates']['email'] = 'E-Mail- &amp; Filetemplates';
$lng['admin']['templates']['subject'] = 'Subject';
$lng['admin']['templates']['mailbody'] = 'Mail body';
$lng['admin']['templates']['createcustomer'] = 'Welcome mail for new customers';
$lng['admin']['templates']['pop_success'] = 'Welcome mail for new email accounts';
$lng['admin']['templates']['template_replace_vars'] = 'Variables to be replaced in the template:';
$lng['admin']['templates']['FIRSTNAME'] = 'Replaced with the customers firstname.';
$lng['admin']['templates']['NAME'] = 'Replaced with the customers name.';
$lng['admin']['templates']['USERNAME'] = 'Replaced with the customers account username.';
$lng['admin']['templates']['PASSWORD'] = 'Replaced with the customers account password.';
$lng['admin']['templates']['EMAIL'] = 'Replaced with the address of the POP3/IMAP account.';
$lng['admin']['webserver'] = 'Webserver';

/**
 * Serversettings
 */

$lng['serversettings']['session_timeout']['title'] = 'Session Timeout';
$lng['serversettings']['session_timeout']['description'] = 'How long does a user have to be inactive before a session gets invalid (seconds)?';
$lng['serversettings']['accountprefix']['title'] = 'Customer prefix';
$lng['serversettings']['accountprefix']['description'] = 'Which prefix should customer accounts have?';
$lng['serversettings']['mysqlprefix']['title'] = 'SQL Prefix';
$lng['serversettings']['mysqlprefix']['description'] = 'Which prefix should mysql accounts have?';
$lng['serversettings']['ftpprefix']['title'] = 'FTP Prefix';
$lng['serversettings']['ftpprefix']['description'] = 'Which prefix should ftp accounts have?';
$lng['serversettings']['documentroot_prefix']['title'] = 'Home directory';
$lng['serversettings']['documentroot_prefix']['description'] = 'Where should all home directories be stored?';
$lng['serversettings']['logfiles_directory']['title'] = 'Logfiles directory';
$lng['serversettings']['logfiles_directory']['description'] = 'Where should all log files be stored?';
$lng['serversettings']['ipaddress']['title'] = 'IP-Address';
$lng['serversettings']['ipaddress']['description'] = 'What\'s the IP-address of this server?';
$lng['serversettings']['hostname']['title'] = 'Hostname';
$lng['serversettings']['hostname']['description'] = 'What\'s the Hostname of this server?';
$lng['serversettings']['apachereload_command']['title'] = 'Apache reload command';
$lng['serversettings']['apachereload_command']['description'] = 'What\'s the apache command to reload apache configfiles?';
$lng['serversettings']['bindconf_directory']['title'] = 'Bind config directory';
$lng['serversettings']['bindconf_directory']['description'] = 'Where should bind configfiles be saved?';
$lng['serversettings']['bindreload_command']['title'] = 'Bind reload command';
$lng['serversettings']['bindreload_command']['description'] = 'What\'s the bind command to reload bind configfiles?';
$lng['serversettings']['binddefaultzone']['title'] = 'Bind default zone';
$lng['serversettings']['binddefaultzone']['description'] = 'What\'s the name of the default zone?';
$lng['serversettings']['vmail_uid']['title'] = 'Mails-UID';
$lng['serversettings']['vmail_uid']['description'] = 'Which UserID should mails have?';
$lng['serversettings']['vmail_gid']['title'] = 'Mails-GID';
$lng['serversettings']['vmail_gid']['description'] = 'Which GroupID should mails have?';
$lng['serversettings']['vmail_homedir']['title'] = 'Mails-Homedir';
$lng['serversettings']['vmail_homedir']['description'] = 'Where should all mails be stored?';
$lng['serversettings']['adminmail']['title'] = 'Sender';
$lng['serversettings']['adminmail']['description'] = 'What\'s the sender address for emails sent from the Panel?';
$lng['serversettings']['phpmyadmin_url']['title'] = 'phpMyAdmin URL';
$lng['serversettings']['phpmyadmin_url']['description'] = 'What\'s the URL to phpMyAdmin? (has to start with http(s)://)';
$lng['serversettings']['webmail_url']['title'] = 'WebMail URL';
$lng['serversettings']['webmail_url']['description'] = 'What\'s the URL to WebMail? (has to start with http(s)://)';
$lng['serversettings']['webftp_url']['title'] = 'WebFTP URL';
$lng['serversettings']['webftp_url']['description'] = 'What\'s the URL to  WebFTP? (has to start with http(s)://)';
$lng['serversettings']['language']['description'] = 'What\'s your standard server language?';
$lng['serversettings']['maxloginattempts']['title'] = 'Max Login Attempts';
$lng['serversettings']['maxloginattempts']['description'] = 'Maximum login attempts after which the account gets deactivated.';
$lng['serversettings']['deactivatetime']['title'] = 'Deactivate Time';
$lng['serversettings']['deactivatetime']['description'] = 'Time (sec.) an account gets deactivated after too many login tries.';
$lng['serversettings']['pathedit']['title'] = 'Type of path input';
$lng['serversettings']['pathedit']['description'] = 'Should a path be selected by a dropdown menu or by an input field?';
$lng['serversettings']['nameservers']['title'] = 'Nameservers';
$lng['serversettings']['nameservers']['description'] = 'A comma separated list containing the hostnames of all nameservers. The first one will be the primary one.';
$lng['serversettings']['mxservers']['title'] = 'MX servers';
$lng['serversettings']['mxservers']['description'] = 'A comma seperated list containing a pair of a number and a hostname separated by whitespace (e.g. \'10 mx.example.com\') containing the mx servers.';

/**
 * CHANGED BETWEEN 1.2.12 and 1.2.13
 */

$lng['mysql']['description'] = 'Here you can create and change your MySQL-Databases.<br />The changes are made instantly and the database can be used immediately.<br />At the menu on the left side you find the tool phpMyAdmin with which you can easily administer your database.<br /><br />To use your databases in your own php-scripts use the following settings: (The data in <i>italics</i> have to be changed into the equivalents you typed in!)<br />Hostname: <b><SQL_HOST></b><br />Username: <b><i>Databasename</i></b><br />Password: <b><i>the password you\'ve chosen</i></b><br />Database: <b><i>Databasename</i></b>';

/**
 * ADDED BETWEEN 1.2.12 and 1.2.13
 */

$lng['admin']['cronlastrun'] = 'Last generating of configfiles';
$lng['serversettings']['paging']['title'] = 'Entries per page';
$lng['serversettings']['paging']['description'] = 'How many entries shall be shown on one page? (0 = disable paging)';
$lng['error']['ipstillhasdomains'] = 'The IP/Port combination you want to delete still has domains assigned to it, please reassign those to other IP/Port combinations before deleting this IP/Port combination.';
$lng['error']['cantdeletedefaultip'] = 'You cannot delete the default reseller IP/Port combination, please make another IP/Port combination default for resellers before deleting this IP/Port combination.';
$lng['error']['cantdeletesystemip'] = 'You cannot delete the last system IP, either create a new IP/Port combination for the system IP or change the system IP.';
$lng['error']['myipaddress'] = '\'IP\'';
$lng['error']['myport'] = '\'Port\'';
$lng['error']['myipdefault'] = 'You need to select an IP/Port combination that should become default.';
$lng['error']['myipnotdouble'] = 'This IP/Port combination already exists.';
$lng['error']['admin_domain_emailsystemhostname'] = 'Sorry. You can not use the Server Hostname as email domain';
$lng['question']['admin_ip_reallydelete'] = 'Do you really want to delete the IP address %s?';
$lng['admin']['ipsandports']['ipsandports'] = 'IPs and Ports';
$lng['admin']['ipsandports']['add'] = 'Add IP/Port';
$lng['admin']['ipsandports']['edit'] = 'Edit IP/Port';
$lng['admin']['ipsandports']['ipandport'] = 'IP/Port';
$lng['admin']['ipsandports']['ip'] = 'IP';
$lng['admin']['ipsandports']['port'] = 'Port';

// ADDED IN 1.2.13-rc3

$lng['error']['cantchangesystemip'] = 'You cannot change the last system IP, either create another new IP/Port combination for the system IP or change the system IP.';
$lng['question']['admin_domain_reallydocrootoutofcustomerroot'] = 'Are you sure, you want the document root for this domain, not being within the customerroot of the customer?';

// ADDED IN 1.2.14-rc1

$lng['admin']['memorylimitdisabled'] = 'Disabled';
$lng['domain']['openbasedirpath'] = 'OpenBasedir-path';
$lng['domain']['docroot'] = 'Path from field above';
$lng['domain']['homedir'] = 'Home directory';
$lng['admin']['valuemandatory'] = 'This value is mandatory';
$lng['admin']['valuemandatorycompany'] = 'Either &quot;name&quot; and &quot;firstname&quot; or &quot;company&quot; must be filled';
$lng['menue']['main']['username'] = 'Logged in as: ';
$lng['panel']['urloverridespath'] = 'URL (overrides path)';
$lng['panel']['pathorurl'] = 'Path or URL';
$lng['error']['sessiontimeoutiswrong'] = 'Only numerical &quot;Session Timeout&quot; is allowed.';
$lng['error']['maxloginattemptsiswrong'] = 'Only numerical &quot;Max Login Attempts&quot; are allowed.';
$lng['error']['deactivatetimiswrong'] = 'Only numerical &quot;Deactivate Time&quot; is allowed.';
$lng['error']['accountprefixiswrong'] = 'The &quot;Customerprefix&quot; is wrong.';
$lng['error']['mysqlprefixiswrong'] = 'The &quot;SQL Prefix&quot; is wrong.';
$lng['error']['ftpprefixiswrong'] = 'The &quot;FTP Prefix&quot; is wrong.';
$lng['error']['ipiswrong'] = 'The &quot;IP-Address&quot; is wrong. Only a valid IP-address is allowed.';
$lng['error']['vmailuidiswrong'] = 'The &quot;Mails-uid&quot; is wrong. Only a numerical UID is allowed.';
$lng['error']['vmailgidiswrong'] = 'The &quot;Mails-gid&quot; is wrong. Only a numerical GID is allowed.';
$lng['error']['adminmailiswrong'] = 'The &quot;Sender-address&quot; is wrong. Only a valid email-address is allowed.';
$lng['error']['pagingiswrong'] = 'The &quot;Entries per Page&quot;-value is wrong. Only numerical characters are allowed.';
$lng['error']['phpmyadminiswrong'] = 'The phpMyAdmin-link is not a valid link.';
$lng['error']['webmailiswrong'] = 'The WebMail-link is not a valid link.';
$lng['error']['webftpiswrong'] = 'The WebFTP-link is not a valid link.';
$lng['domains']['hasaliasdomains'] = 'Has alias domain(s)';
$lng['serversettings']['defaultip']['title'] = 'Default IP/Port';
$lng['serversettings']['defaultip']['description'] = 'What\'s the default IP/Port combination?';
$lng['domains']['statstics'] = 'Usage Statistics';
$lng['panel']['ascending'] = 'ascending';
$lng['panel']['decending'] = 'decending';
$lng['panel']['search'] = 'Search';
$lng['panel']['used'] = 'used';

// ADDED IN 1.2.14-rc3

$lng['panel']['translator'] = 'Translator';

// ADDED IN 1.2.14-rc4

$lng['error']['stringformaterror'] = 'The value for the field &quot;%s&quot; is not in the expected format.';

// ADDED IN 1.2.15-rc1

$lng['admin']['serversoftware'] = 'Serversoftware';
$lng['admin']['phpversion'] = 'PHP-Version';
$lng['admin']['phpmemorylimit'] = 'PHP-Memory-Limit';
$lng['admin']['mysqlserverversion'] = 'MySQL Server Version';
$lng['admin']['mysqlclientversion'] = 'MySQL Client Version';
$lng['admin']['webserverinterface'] = 'Webserver Interface';
$lng['domains']['isassigneddomain'] = 'Is assigned domain';
$lng['serversettings']['phpappendopenbasedir']['title'] = 'Paths to append to OpenBasedir';
$lng['serversettings']['phpappendopenbasedir']['description'] = 'These paths (separated by colons) will be added to the OpenBasedir-statement in every vhost-container.';

// CHANGED IN 1.2.15-rc1

$lng['error']['loginnameissystemaccount'] = 'You cannot create accounts which are similar to systemaccounts (as for example begin with &quot;%s&quot;). Please enter another accountname.';
$lng['error']['youcantdeleteyourself'] = 'You cannot delete yourself for security reasons.';
$lng['error']['youcanteditallfieldsofyourself'] = 'Note: You cannot edit all fields of your own account for security reasons.';

// ADDED IN 1.2.16-svn1

$lng['serversettings']['natsorting']['title'] = 'Use natural human sorting in list view';
$lng['serversettings']['natsorting']['description'] = 'Sorts lists as web1 -> web2 -> web11 instead of web1 -> web11 -> web2.';

// ADDED IN 1.2.16-svn2

$lng['serversettings']['deactivateddocroot']['title'] = 'Docroot for deactivated users';
$lng['serversettings']['deactivateddocroot']['description'] = 'When a user is deactivated this path is used as his docroot. Leave empty for not creating a vhost at all.';

// ADDED IN 1.2.16-svn4

$lng['panel']['reset'] = 'discard changes';
$lng['admin']['accountsettings'] = 'Account settings';
$lng['admin']['panelsettings'] = 'Panel settings';
$lng['admin']['systemsettings'] = 'System settings';
$lng['admin']['webserversettings'] = 'Webserver settings';
$lng['admin']['mailserversettings'] = 'Mailserver settings';
$lng['admin']['nameserversettings'] = 'Nameserver settings';
$lng['admin']['updatecounters'] = 'Recalculate resource usage';
$lng['question']['admin_counters_reallyupdate'] = 'Do you really want to recalculate resource usage?';
$lng['panel']['pathDescription'] = 'If the directory doesn\'t exist, it will be created automatically.';

// ADDED IN 1.2.16-svn6

$lng['mails']['trafficninetypercent']['mailbody'] = 'Dear {NAME},\n\nYou used {TRAFFICUSED} MB of your available {TRAFFIC} MB of traffic.\nThis are more than 90%.\n\nYours sincerely, the SysCP-Team';
$lng['mails']['trafficninetypercent']['subject'] = 'Reaching your trafficlimit';
$lng['admin']['templates']['trafficninetypercent'] = 'Notification mail for customers when ninety percent of traffic is exhausted';
$lng['admin']['templates']['TRAFFIC'] = 'Replaced with the traffic, which was assigned to the customer.';
$lng['admin']['templates']['TRAFFICUSED'] = 'Replaced with the traffic, which was exhausted by the customer.';

// ADDED IN 1.2.16-svn7

$lng['admin']['subcanemaildomain']['never'] = 'Never';
$lng['admin']['subcanemaildomain']['choosableno'] = 'Choosable, default no';
$lng['admin']['subcanemaildomain']['choosableyes'] = 'Choosable, default yes';
$lng['admin']['subcanemaildomain']['always'] = 'Always';
$lng['changepassword']['also_change_webalizer'] = ' also change password of the webalizer statistics';

// ADDED IN 1.2.16-svn8

$lng['serversettings']['mailpwcleartext']['title'] = 'Also save passwords of mail accounts unencrypted in database';
$lng['serversettings']['mailpwcleartext']['description'] = 'If this is set to yes, all passwords will also be saved unencrypted (clearext, plain readable for everyone with database access) in the mail_users-table. Only activate this if you really need it!';
$lng['serversettings']['mailpwcleartext']['removelink'] = 'Click here to wipe all unencrypted passwords from the table.';
$lng['question']['admin_cleartextmailpws_reallywipe'] = 'Do you really want to wipe all unencrypted mail account passwords from the table mail_users? This cannot be reverted!';
$lng['admin']['configfiles']['overview'] = 'Overview';
$lng['admin']['configfiles']['wizard'] = 'Wizard';
$lng['admin']['configfiles']['distribution'] = 'Distribution';
$lng['admin']['configfiles']['service'] = 'Service';
$lng['admin']['configfiles']['daemon'] = 'Daemon';
$lng['admin']['configfiles']['http'] = 'Webserver (HTTP)';
$lng['admin']['configfiles']['dns'] = 'Nameserver (DNS)';
$lng['admin']['configfiles']['mail'] = 'Mailserver (IMAP/POP3)';
$lng['admin']['configfiles']['smtp'] = 'Mailserver (SMTP)';
$lng['admin']['configfiles']['ftp'] = 'FTP-Server';
$lng['admin']['configfiles']['etc'] = 'Others (System)';
$lng['admin']['configfiles']['choosedistribution'] = '-- Choose a distribution --';
$lng['admin']['configfiles']['chooseservice'] = '-- Choose a service --';
$lng['admin']['configfiles']['choosedaemon'] = '-- Choose a daemon --';
$lng['admin']['trafficlastrun'] = 'Last traffic calculation';

// ADDED IN 1.2.16-svn10

$lng['serversettings']['ftpdomain']['title'] = 'FTP accounts @domain';
$lng['serversettings']['ftpdomain']['description'] = 'Customers can create Ftp accounts user@customerdomain?';
$lng['panel']['back'] = 'Back';

// ADDED IN 1.2.16-svn12

$lng['serversettings']['mod_log_sql']['title'] = 'Temporary save logs in the database';
$lng['serversettings']['mod_log_sql']['description'] = 'Use <a href="http://www.outoforder.cc/projects/apache/mod_log_sql/" title="mod_log_sql">mod_log_sql</a> to save webrequests temporarily<br /><b>This needs a special <a href="http://files.syscp.org/docs/mod_log_sql/" title="mod_log_sql - documentation">apache-configuration</a>!</b>';
$lng['serversettings']['mod_fcgid']['title'] = 'Include PHP via mod_fcgid/suexec';
$lng['serversettings']['mod_fcgid']['description'] = 'Use mod_fcgid/suexec/libnss_mysql to run PHP with the corresponding useraccount.<br/><b>This needs a special Apache configuration. All following options are only valid if the module is enabled.</b>';
$lng['serversettings']['sendalternativemail']['title'] = 'Use alternative email-address';
$lng['serversettings']['sendalternativemail']['description'] = 'Send the password-email to a different address during email-account-creation';
$lng['emails']['alternative_emailaddress'] = 'Alternative e-mail-address';
$lng['mails']['pop_success_alternative']['mailbody'] = 'Hello,\n\nyour Mail account {EMAIL}\nwas set up successfully.\nYour password is {PASSWORD}.\n\nThis is an automatically created\ne-mail, please do not answer!\n\nYours sincerely, the SysCP-Team';
$lng['mails']['pop_success_alternative']['subject'] = 'Mail account set up successfully';
$lng['admin']['templates']['pop_success_alternative'] = 'Welcome mail for new email accounts sent to alternative address';
$lng['admin']['templates']['EMAIL_PASSWORD'] = 'Replaced with the POP3/IMAP account password.';

// ADDED IN 1.2.16-svn13

$lng['error']['documentrootexists'] = 'The directory &quot;%s&quot; already exists for this customer. Please remove this before adding the customer again.';

// ADDED IN 1.2.16-svn14

$lng['serversettings']['apacheconf_vhost']['title'] = 'Apache vhost configuration file/dirname';
$lng['serversettings']['apacheconf_vhost']['description'] = 'Where should the vhost configuration be stored? You could either specify a file (all vhosts in one file) or directory (each vhost in his own file) here.';
$lng['serversettings']['apacheconf_diroptions']['title'] = 'Apache diroptions configuration file/dirname';
$lng['serversettings']['apacheconf_diroptions']['description'] = 'Where should the diroptions configuration be stored? You could either specify a file (all diroptions in one file) or directory (each diroption in his own file) here.';
$lng['serversettings']['apacheconf_htpasswddir']['title'] = 'Apache htpasswd dirname';
$lng['serversettings']['apacheconf_htpasswddir']['description'] = 'Where should the htpasswd files for directory protection be stored?';

// ADDED IN 1.2.16-svn15

$lng['error']['formtokencompromised'] = 'The request seems to be compromised. For securityreasons you were logged out.';
$lng['serversettings']['mysql_access_host']['title'] = 'MySQL-Access-Hosts';
$lng['serversettings']['mysql_access_host']['description'] = 'A comma separated list of hosts from which users should be allowed to connect to the MySQL-Server.';

// ADDED IN 1.2.18-svn1

$lng['admin']['ipsandports']['create_listen_statement'] = 'Create Listen statement';
$lng['admin']['ipsandports']['create_namevirtualhost_statement'] = 'Create NameVirtualHost statement';
$lng['admin']['ipsandports']['create_vhostcontainer'] = 'Create vHost-Container';
$lng['admin']['ipsandports']['create_vhostcontainer_servername_statement'] = 'Create ServerName statement in vHost-Container';

// ADDED IN 1.2.18-svn2

$lng['admin']['webalizersettings'] = 'Webalizer settings';
$lng['admin']['webalizer']['normal'] = 'Normal';
$lng['admin']['webalizer']['quiet'] = 'Quiet';
$lng['admin']['webalizer']['veryquiet'] = 'No output';
$lng['serversettings']['webalizer_quiet']['title'] = 'Webalizer output';
$lng['serversettings']['webalizer_quiet']['description'] = 'Verbosity of the webalizer-program';

// ADDED IN 1.2.18-svn3

$lng['ticket']['admin_email'] = 'root@localhost';
$lng['ticket']['noreply_email'] = 'tickets@syscp';
$lng['admin']['ticketsystem'] = 'Support-tickets';
$lng['menue']['ticket']['ticket'] = 'Support tickets';
$lng['menue']['ticket']['categories'] = 'Support categories';
$lng['menue']['ticket']['archive'] = 'Ticket-archive';
$lng['ticket']['description'] = 'Here you can send help-requests to your responsible administrator.<br />Notifications will be sent via e-mail.';
$lng['ticket']['ticket_new'] = 'Open a new ticket';
$lng['ticket']['ticket_reply'] = 'Answer ticket';
$lng['ticket']['ticket_reopen'] = 'Reopen ticket';
$lng['ticket']['ticket_newcateory'] = 'Create new category';
$lng['ticket']['ticket_editcateory'] = 'Edit category';
$lng['ticket']['ticket_view'] = 'View ticketcourse';
$lng['ticket']['ticketcount'] = 'Tickets';
$lng['ticket']['ticket_answers'] = 'Replies';
$lng['ticket']['lastchange'] = 'Last action';
$lng['ticket']['subject'] = 'Subject';
$lng['ticket']['status'] = 'Status';
$lng['ticket']['lastreplier'] = 'Last replier';
$lng['ticket']['priority'] = 'Priority';
$lng['ticket']['low'] = '<span class="ticket_low">Low</span>';
$lng['ticket']['normal'] = '<span class="ticket_normal">Normal</span>';
$lng['ticket']['high'] = '<span class="ticket_high">High</span>';
$lng['ticket']['unf_low'] = 'Low';
$lng['ticket']['unf_normal'] = 'Normal';
$lng['ticket']['unf_high'] = 'High';
$lng['ticket']['lastchange'] = 'Last change';
$lng['ticket']['lastchange_from'] = 'From date (dd.mm.yyyy)';
$lng['ticket']['lastchange_to'] = 'To date (dd.mm.yyyy)';
$lng['ticket']['category'] = 'Category';
$lng['ticket']['no_cat'] = 'None';
$lng['ticket']['message'] = 'Message';
$lng['ticket']['show'] = 'View';
$lng['ticket']['answer'] = 'Answer';
$lng['ticket']['close'] = 'Close';
$lng['ticket']['reopen'] = 'Re-open';
$lng['ticket']['archive'] = 'Archive';
$lng['ticket']['ticket_delete'] = 'Delete ticket';
$lng['ticket']['lastarchived'] = 'Recently archived tickets';
$lng['ticket']['archivedtime'] = 'Archived';
$lng['ticket']['open'] = 'Open';
$lng['ticket']['wait_reply'] = 'Waiting for reply';
$lng['ticket']['replied'] = 'Replied';
$lng['ticket']['closed'] = 'Closed';
$lng['ticket']['staff'] = 'Staff';
$lng['ticket']['customer'] = 'Customer';
$lng['ticket']['old_tickets'] = 'Ticket messages';
$lng['ticket']['search'] = 'Search archive';
$lng['ticket']['nocustomer'] = 'No choice';
$lng['ticket']['archivesearch'] = 'Archive searchresults';
$lng['ticket']['noresults'] = 'No tickets found';
$lng['ticket']['notmorethanxopentickets'] = 'Due to spam-protection you cannot have more than %s open tickets';
$lng['ticket']['supportstatus'] = 'Support-Status';
$lng['ticket']['supportavailable'] = '<span class="ticket_low">Our support engineers are available and ready to assist.</span>';
$lng['ticket']['supportnotavailable'] = '<span class="ticket_high">Our support engineers are currently not available</span>';
$lng['admin']['templates']['ticket'] = 'Notification-mails for support-tickets';
$lng['admin']['templates']['SUBJECT'] = 'Replaced with the support-ticket subject';
$lng['admin']['templates']['new_ticket_for_customer'] = 'Customer-information that the ticket has been sent';
$lng['admin']['templates']['new_ticket_by_customer'] = 'Admin-notification for a ticket opened by a customer';
$lng['admin']['templates']['new_reply_ticket_by_customer'] = 'Admin-notification for a ticket-reply by a customer';
$lng['admin']['templates']['new_ticket_by_staff'] = 'Customer-notification for a ticket opened by a staff';
$lng['admin']['templates']['new_reply_ticket_by_staff'] = 'Customer-notification for a ticket-reply by a staff';
$lng['mails']['new_ticket_for_customer']['mailbody'] = 'Hello {FIRSTNAME} {NAME},\n\nyour support-ticket with the subject "{SUBJECT}" has been sent.\n\nYou will be notified when your ticket has been answered.\n\nThank you,\nthe SysCP-Team';
$lng['mails']['new_ticket_for_customer']['subject'] = 'Your support ticket has been sent';
$lng['mails']['new_ticket_by_customer']['mailbody'] = 'Hello admin,\n\na new support-ticket with the subject "{SUBJECT}" has been submitted.\n\nPlease login to open the ticket.\n\nThank you,\nthe SysCP-Team';
$lng['mails']['new_ticket_by_customer']['subject'] = 'New support ticket submitted';
$lng['mails']['new_reply_ticket_by_customer']['mailbody'] = 'Hello admin,\n\nthe support-ticket "{SUBJECT}" has been answered by a customer.\n\nPlease login to open the ticket.\n\nThank you,\nthe SysCP-Team';
$lng['mails']['new_reply_ticket_by_customer']['subject'] = 'New reply to support ticket';
$lng['mails']['new_ticket_by_staff']['mailbody'] = 'Hello {FIRSTNAME} {NAME},\n\na support-ticket with the subject "{SUBJECT}" has been opened for you.\n\nPlease login to open the ticket.\n\nThank you,\nthe SysCP-Team';
$lng['mails']['new_ticket_by_staff']['subject'] = 'New support ticket submitted';
$lng['mails']['new_reply_ticket_by_staff']['mailbody'] = 'Hello {FIRSTNAME} {NAME},\n\nthe support-ticket with the subject "{SUBJECT}" has been answered by our staff.\n\nPlease login to view the ticket.\n\nThank you,\nthe SysCP-Team';
$lng['mails']['new_reply_ticket_by_staff']['subject'] = 'New reply to support ticket';
$lng['question']['ticket_reallyclose'] = 'Do you really want to close the ticket "%s"?';
$lng['question']['ticket_reallydelete'] = 'Do you really want to delete the ticket "%s"?';
$lng['question']['ticket_reallydeletecat'] = 'Do you really want to delete the category "%s"?';
$lng['question']['ticket_reallyarchive'] = 'Do you really want to move the ticket "%s" to the archive?';
$lng['error']['mysubject'] = '\'' . $lng['ticket']['subject'] . '\'';
$lng['error']['mymessage'] = '\'' . $lng['ticket']['message'] . '\'';
$lng['error']['mycategory'] = '\'' . $lng['ticket']['category'] . '\'';
$lng['error']['nomoreticketsavailable'] = 'You have used all your available tickets. Please contact your administrator.';
$lng['error']['nocustomerforticket'] = 'Cannot create tickets without customers';
$lng['error']['categoryhastickets'] = 'The category still has tickets in it.<br />Please delete the tickets to delete the category';
$lng['error']['notmorethanxopentickets'] = $lng['ticket']['notmorethanxopentickets'];
$lng['admin']['ticketsettings'] = 'Support-Ticket settings';
$lng['admin']['archivelastrun'] = 'Last ticket archiving';
$lng['serversettings']['ticket']['noreply_email'] = 'No-reply e-mail address';
$lng['serversettings']['ticket']['noreply_email_desc'] = 'The sender-address for support-ticket, mostly something like no-reply@domain.tld';
$lng['serversettings']['ticket']['worktime_begin'] = 'Begin support-time (hh:mm)';
$lng['serversettings']['ticket']['worktime_begin_desc'] = 'Start-time when support is available';
$lng['serversettings']['ticket']['worktime_end'] = 'End support-time (hh:mm)';
$lng['serversettings']['ticket']['worktime_end_desc'] = 'End-time when support is available';
$lng['serversettings']['ticket']['worktime_sat'] = 'Support available on saturdays?';
$lng['serversettings']['ticket']['worktime_sun'] = 'Support available on sundays?';
$lng['serversettings']['ticket']['worktime_all'] = 'No time limit for support';
$lng['serversettings']['ticket']['worktime_all_desc'] = 'If "Yes" the options for start- and endtime will be overwritten';
$lng['serversettings']['ticket']['archiving_days'] = 'After how many days should closed tickets be archived?';
$lng['customer']['tickets'] = 'Support-tickets';

// ADDED IN 1.2.18-svn4

$lng['admin']['domain_nocustomeraddingavailable'] = 'It\'s not possible to add a domain currently. You first need to add at least one customer.';
$lng['serversettings']['ticket']['enable'] = 'Enable ticketsystem';
$lng['serversettings']['ticket']['concurrentlyopen'] = 'How many tickets shall be able to be opened at one time?';
$lng['error']['norepymailiswrong'] = 'The &quot;Noreply-address&quot; is wrong. Only a valid email-address is allowed.';
$lng['error']['tadminmailiswrong'] = 'The &quot;Ticketadmin-address&quot; is wrong. Only a valid email-address is allowed.';
$lng['ticket']['awaitingticketreply'] = 'You have %s unanswered support-ticket(s)';

// ADDED IN 1.2.18-svn5

$lng['serversettings']['ticket']['noreply_name'] = 'Ticket e-mail sendername';

// ADDED IN 1.2.19-svn1

$lng['serversettings']['mod_fcgid']['configdir'] = 'Configuration directory';
$lng['serversettings']['mod_fcgid']['configdir_desc'] = 'Where should all fcgid-configuration files be stored? If you don\'t use a self compiled suexec binary, which is the normal situation, this path must be under /var/www/';
$lng['serversettings']['mod_fcgid']['tmpdir'] = 'Temp directory';

// ADDED IN 1.2.19-svn3

$lng['serversettings']['ticket']['reset_cycle'] = 'Reset used tickets cycle';
$lng['serversettings']['ticket']['reset_cycle_desc'] = 'Reset the customers used ticket counter to 0 in the chosen cycle';
$lng['admin']['tickets']['daily'] = 'Daily';
$lng['admin']['tickets']['weekly'] = 'Weekly';
$lng['admin']['tickets']['monthly'] = 'Monthly';
$lng['admin']['tickets']['yearly'] = 'Yearly';
$lng['error']['ticketresetcycleiswrong'] = 'The cycle for ticket-resets has to be "daily", "weekly", "monthly" or "yearly".';

// ADDED IN 1.2.19-svn4

$lng['menue']['traffic']['traffic'] = 'Traffic';
$lng['menue']['traffic']['current'] = 'Current Month';
$lng['traffic']['month'] = "Month";
$lng['traffic']['day'] = "Day";
$lng['traffic']['months'][1] = "January";
$lng['traffic']['months'][2] = "February";
$lng['traffic']['months'][3] = "March";
$lng['traffic']['months'][4] = "April";
$lng['traffic']['months'][5] = "May";
$lng['traffic']['months'][6] = "June";
$lng['traffic']['months'][7] = "July";
$lng['traffic']['months'][8] = "August";
$lng['traffic']['months'][9] = "September";
$lng['traffic']['months'][10] = "October";
$lng['traffic']['months'][11] = "November";
$lng['traffic']['months'][12] = "December";
$lng['traffic']['mb'] = "Traffic (MB)";
$lng['traffic']['distribution'] = '<font color="#019522">FTP</font> | <font color="#0000FF">HTTP</font> | <font color="#800000">Mail</font>';
$lng['traffic']['sumhttp'] = 'Summation HTTP-Traffic in';
$lng['traffic']['sumftp'] = 'Summation FTP-Traffic in';
$lng['traffic']['summail'] = 'Summation Mail-Traffic in';

// ADDED IN 1.2.19-svn4.5

$lng['serversettings']['no_robots']['title'] = 'Allow searchengine-robots to index your SysCP';

// ADDED IN 1.2.19-svn6

$lng['admin']['loggersettings'] = 'Log settings';
$lng['serversettings']['logger']['enable'] = 'Logging enabled/disabled';
$lng['serversettings']['logger']['severity'] = 'Logging level';
$lng['admin']['logger']['normal'] = 'normal';
$lng['admin']['logger']['paranoid'] = 'paranoid';
$lng['serversettings']['logger']['types'] = 'Log-type(s)';
$lng['serversettings']['logger']['types_desc'] = 'Specify logtypes seperated by comma.<br />Available logtypes are: syslog, file, mysql';
$lng['serversettings']['logger']['logfile'] = 'Logfile path including filename';
$lng['error']['logerror'] = 'Log-Error: %s';
$lng['serversettings']['logger']['logcron'] = 'Log cronjobs (one run)';
$lng['question']['logger_reallytruncate'] = 'Do you really want to truncate the table &quot;%s&quot;?';
$lng['admin']['loggersystem'] = 'System-logging';
$lng['menue']['logger']['logger'] = 'System-logging';
$lng['logger']['date'] = 'Date';
$lng['logger']['type'] = 'Type';
$lng['logger']['action'] = 'Action';
$lng['logger']['user'] = 'User';
$lng['logger']['truncate'] = 'Empty log';

// ADDED IN 1.2.19-svn7

$lng['serversettings']['ssl']['use_ssl'] = 'Use SSL';
$lng['serversettings']['ssl']['ssl_cert_file'] = 'Where is the Certificate located';
$lng['serversettings']['ssl']['openssl_cnf'] = 'Defaults for creating the Cert file';
$lng['panel']['reseller'] = 'reseller';
$lng['panel']['admin'] = 'admin';
$lng['panel']['customer'] = 'customer/s';
$lng['error']['nomessagetosend'] = 'You did not enter a message.';
$lng['error']['noreceipientsgiven'] = 'You did not specify any receipient';
$lng['admin']['emaildomain'] = 'Emaildomain';
$lng['admin']['email_only'] = 'Only email?';
$lng['admin']['wwwserveralias'] = 'Add a &quot;www.&quot; ServerAlias';
$lng['admin']['ipsandports']['enable_ssl'] = 'Is this an SSL Port?';
$lng['admin']['ipsandports']['ssl_cert_file'] = 'Path to the SSL Certificate';
$lng['panel']['send'] = 'send';
$lng['admin']['subject'] = 'Subject';
$lng['admin']['receipient'] = 'Recipient';
$lng['admin']['message'] = 'Write a Message';
$lng['admin']['text'] = 'Message';
$lng['menu']['message'] = 'Messages';
$lng['error']['errorsendingmail'] = 'The message to &quot;%s&quot; failed';
$lng['error']['cannotreaddir'] = 'Unable to read directory &quot;%s&quot;';
$lng['message']['success'] = 'Successfully sent message to %s recipients';
$lng['message']['noreceipients'] = 'No e-mail has been sent because there are no recipients in the database';
$lng['admin']['sslsettings'] = 'SSL settings';
$lng['cronjobs']['notyetrun'] = 'Not yet run';
$lng['install']['servername_should_be_fqdn'] = 'The servername should be a FQDN and not an IP address';
$lng['serversettings']['default_vhostconf']['title'] = 'Default vhost-settings';
$lng['serversettings']['default_vhostconf']['description'] = 'The content of this field will be included into every domain vhost container directly. Attention: The code won\'t be checked for any errors. If it contains errors, apache might ot start again!';
$lng['error']['invalidip'] = 'Invalid IP address: %s';
$lng['serversettings']['decimal_places'] = 'Number of decimal places in traffic/webspace output';

// ADDED IN 1.2.19-svn8

$lng['admin']['dkimsettings'] = 'DomainKey settings';
$lng['dkim']['dkim_prefix']['title'] = 'Prefix';
$lng['dkim']['dkim_prefix']['description'] = 'Please specify the path to the DKIM RSA-files as well as to the configuration files for the Milter-plugin';
$lng['dkim']['dkim_domains']['title'] = 'Domains filename';
$lng['dkim']['dkim_domains']['description'] = '<em>Filename</em> of the DKIM Domains parameter specified in the dkim-milter configuration';
$lng['dkim']['dkim_dkimkeys']['title'] = 'KeyList filename';
$lng['dkim']['dkim_dkimkeys']['description'] = '<em>Filename</em> of the  DKIM KeyList parameter specified in the dkim-milter configuration';
$lng['dkim']['dkimrestart_command']['title'] = 'Milter restart command';
$lng['dkim']['dkimrestart_command']['description'] = 'Please specify the restart command for the DKIM milter service';

// ADDED IN 1.2.19-svn9

$lng['admin']['caneditphpsettings'] = 'Can change php-related domain settings?';

// ADDED IN 1.2.19-svn12

$lng['admin']['allips'] = 'All IP\'s';
$lng['panel']['nosslipsavailable'] = 'There are currently no ssl ip/port combinations for this server';
$lng['ticket']['by'] = 'by';
$lng['dkim']['use_dkim']['title'] = 'Activate DKIM support?';
$lng['dkim']['use_dkim']['description'] = 'Would you like to use the Domain Keys (DKIM) system?';
$lng['error']['invalidmysqlhost'] = 'Invalid MySQL host address: %s';
$lng['error']['cannotuseawstatsandwebalizeratonetime'] = 'You cannot enable Webalizer and Awstats at the same time, please chose one of them';
$lng['serversettings']['webalizer_enabled'] = 'Enable webalizer statistics';
$lng['serversettings']['awstats_enabled'] = 'Enable awstats statistics';
$lng['admin']['awstatssettings'] = 'Awstats settings';
$lng['serversettings']['awstats_domain_file']['title'] = 'Awstats domainfiles directory';
$lng['serversettings']['awstats_model_file']['title'] = 'Awstats model file';

// ADDED IN 1.2.19-svn16

$lng['admin']['domain_dns_settings'] = 'Domain dns settings';
$lng['dns']['destinationip'] = 'Domain IP';
$lng['dns']['standardip'] = 'Server standard IP';
$lng['dns']['a_record'] = 'A-Record (IPv6 optional)';
$lng['dns']['cname_record'] = 'CNAME-Record';
$lng['dns']['mxrecords'] = 'Define MX records';
$lng['dns']['standardmx'] = 'Server tandard MX record';
$lng['dns']['mxconfig'] = 'Custom MX records';
$lng['dns']['priority10'] = 'Priority 10';
$lng['dns']['priority20'] = 'Priority 20';
$lng['dns']['txtrecords'] = 'Define TXT records';
$lng['dns']['txtexample'] = 'Example (SPF-entry):<br />v=spf1 ip4:xxx.xxx.xx.0/23 -all';
$lng['serversettings']['selfdns']['title'] = 'Customer domain dns settings';
$lng['serversettings']['selfdnscustomer']['title'] = 'Allow customers to edit domain dns settings';
$lng['admin']['activated'] = 'Activated';
$lng['admin']['statisticsettings'] = 'Statistic settings';
$lng['admin']['or'] = 'or';

// ADDED IN 1.2.19-svn17

$lng['serversettings']['unix_names']['title'] = 'Use UNIX compatible usernames';
$lng['serversettings']['unix_names']['description'] = 'Allows you to use <strong>-</strong> and <strong>_</strong> in usernames if <strong>No</strong>';
$lng['error']['cannotwritetologfile'] = 'Cannot open logfile %s for writing';
$lng['admin']['sysload'] = 'System load';
$lng['admin']['noloadavailable'] = 'not available';
$lng['admin']['nouptimeavailable'] = 'not available';
$lng['panel']['backtooverview'] = 'Back to overview';
$lng['admin']['nosubject'] = '(No Subject)';
$lng['admin']['configfiles']['statistics'] = 'Statistics';
$lng['login']['forgotpwd'] = 'Forgot your password?';
$lng['login']['presend'] = 'Reset password';
$lng['login']['email'] = 'E-mail address';
$lng['login']['remind'] = 'Reset my password';
$lng['login']['usernotfound'] = 'User not found!';
$lng['pwdreminder']['subject'] = 'SysCP - Password reset';
$lng['pwdreminder']['body'] = 'Hello %s,\n\nyour syscp password has been reset!\nThe new password is: %p\n\nThank you,\nthe SysCP-Team';
$lng['pwdreminder']['success'] = 'Password reset successfully.<br />You now should receive an email with your new password.';

// ADDED IN 1.2.19-svn18

$lng['serversettings']['allow_preset'] = 'Allow password reset by customers';
$lng['pwdreminder']['notallowed'] = 'Password reset is deactivated';

// ADDED IN 1.2.19-svn20

$lng['serversettings']['awstats_path']['title'] = 'Path to awstats cgi-bin folder';
$lng['serversettings']['awstats_path']['description'] = 'e.g. /usr/share/webapps/awstats/6.1/webroot/cgi-bin/';
$lng['serversettings']['awstats_updateall_command']['title'] = 'Path to &quot;awstats_updateall.pl&quot;';
$lng['serversettings']['awstats_updateall_command']['description'] = 'e.g. /usr/bin/awstats_updateall.pl';

// ADDED IN 1.2.19-svn21

$lng['customer']['title'] = 'Title';
$lng['customer']['country'] = 'Country';
$lng['panel']['dateformat'] = 'YYYY-MM-DD';
$lng['panel']['dateformat_function'] = 'Y-m-d';

// Y = Year, m = Month, d = Day

$lng['panel']['timeformat_function'] = 'H:i:s';

// H = Hour, i = Minute, s = Second

$lng['panel']['default'] = 'Default';
$lng['panel']['never'] = 'Never';
$lng['panel']['active'] = 'Active';
$lng['panel']['please_choose'] = 'Please choose';
$lng['panel']['intervalfee_type']['y'] = 'Years';
$lng['panel']['intervalfee_type']['m'] = 'Months';
$lng['panel']['intervalfee_type']['d'] = 'Days';
$lng['panel']['intervalfee_type_one']['y'] = 'Year';
$lng['panel']['intervalfee_type_one']['m'] = 'Month';
$lng['panel']['intervalfee_type_one']['d'] = 'Day';
$lng['panel']['service_still_active'] = 'Service still active';
$lng['panel']['allow_modifications'] = 'Allow modifications';
$lng['domains']['add_date'] = 'Added to SysCP';
$lng['domains']['registration_date'] = 'Added at registry';
$lng['domains']['topleveldomain'] = 'Top-Level-Domain';
$lng['admin']['accountdata'] = 'Account Data';
$lng['admin']['contactdata'] = 'Contact Data';
$lng['admin']['servicedata'] = 'Service Data';
$lng['admin']['billingdata'] = 'Billing Data';
$lng['admin']['invoicedata'] = 'Invoice Data';
$lng['admin']['customer_categories_once'] = 'Include Setup Fees of Customers';
$lng['admin']['customer_categories_period'] = 'Include Interval Fees of Customers';
$lng['customer']['taxid'] = 'Tax ID';
$lng['customer']['calc_tax'] = 'Calculate Tax';
$lng['customer']['create_contract'] = 'Create contract';
$lng['customer']['contract_date'] = 'Contract date';
$lng['customer']['contract_number'] = 'Contract description/number';
$lng['customer']['additional_service_description'] = 'Additional service description';
$lng['customer']['contract_details'] = 'Contract details';
$lng['customer']['included_domains'] = 'Included domains';
$lng['customer']['additional_traffic'] = 'Additional traffic';
$lng['customer']['additional_diskspace'] = 'Additional webspace';
$lng['customer']['term_of_payment'] = 'Term of payment (days)';
$lng['customer']['payment_every'] = 'Payment every';
$lng['customer']['payment_method'] = 'Payment method';
$lng['customer']['payment_methods'][CONST_BILLING_PAYMENTMETHOD_BANKTRANSFER] = 'Bank Transfer';
$lng['customer']['payment_methods'][CONST_BILLING_PAYMENTMETHOD_DEBITCARD] = 'Debit Card';
$lng['customer']['bankaccount_holder'] = 'Bankaccount holder';
$lng['customer']['bankaccount_number'] = 'Bankaccount number';
$lng['customer']['bankaccount_blz'] = 'Bankaccount banknumber';
$lng['customer']['bankaccount_bank'] = 'Bankaccount bankname';
$lng['service']['quantity'] = 'Quantity';
$lng['service']['interval_fee'] = 'Interval fee';
$lng['service']['interval_length'] = 'Interval length';
$lng['service']['interval_payment'] = 'Interval payment';
$lng['service']['interval_payment_prepaid'] = 'Prepaid';
$lng['service']['interval_payment_postpaid'] = 'Postpaid';
$lng['service']['setup_fee'] = 'Setup fee';
$lng['service']['active'] = 'Service active';
$lng['service']['start_date'] = 'Active since';
$lng['service']['end_date'] = 'Inactive since';
$lng['service']['lastinvoiced_date'] = 'Last invoiced';
$lng['service']['valid_from'] = 'Valid from';
$lng['service']['valid_to'] = 'Valid to';
$lng['invoice']['invoicenumbertemplate'] = 'H-{year}/{number}';
$lng['invoice']['sender'] = '';
$lng['invoice']['invoice'] = 'Invoice';
$lng['invoice']['cancellation'] = 'Cancellation Invoice';
$lng['invoice']['reminder'] = 'Reminder';
$lng['invoice']['preview'] = 'Preview';
$lng['invoice']['dateheader'] = 'City, %s';
$lng['invoice']['number'] = 'Invoice number';
$lng['invoice']['contract_number'] = 'Contract number';
$lng['invoice']['contract_details'] = 'Contract details';
$lng['invoice']['contract_details_template'] = 'Hostingpaket gem. Hostingvertrag vom %s mit %s MB Webspace, %s ' . chr(128) . ' pro %s GB Zusatzwebspace, %s GB Traffic, %s ' . chr(128) . ' pro %s GB Zusatztraffic; %s Inklusivdomains; Abrechnungsintervall %s %s.';
$lng['invoice']['period'] = 'Invoice period';
$lng['invoice']['header'][0] = 'Pos.';
$lng['invoice']['header'][1] = 'Description';
$lng['invoice']['header'][2] = 'Period';
$lng['invoice']['header'][3] = 'Net [' . chr(128) . ']';
$lng['invoice']['header'][4] = 'Tax [' . chr(128) . ']';
$lng['invoice']['header'][5] = '%';
$lng['invoice']['header'][6] = 'Total [' . chr(128) . ']';
$lng['invoice']['subtotal'] = 'Subtotal';
$lng['invoice']['tax'] = 'Tax (%s%%)';
$lng['invoice']['credit_note'] = 'Credit Note';
$lng['invoice']['total'] = 'Total';
$lng['invoice']['payment_methods'][0] = 'Rechnungsbetrag zahlbar innerhalb von %s Tagen.' . "\n" . 'Da uns noch keine Lastschrift-Einzugserm&auml;chtigung von Ihnen vorliegt, bitten wir Sie die Rechnung per &Uuml;berweisung auf unser Konto zu begleichen. Falls auch Sie am Lastschriftverfahren teilnehmen m&ouml;chten, f&uuml;llen Sie bitte das angef&uuml;gte Formular aus und senden Sie es per Post an uns zur&uuml;ck.';
$lng['invoice']['payment_methods'][1] = 'Der Rechnungsbetrag wird in den n&auml;chsten %s Tagen von Ihrem Konto bei der %s, Kontonummer %s, BLZ %s per Lastschrift eingezogen.';
$lng['invoice']['tax_text']['line'] = 'USt-IdNr. %s: %s' . "\n";
$lng['invoice']['tax_text']['client'] = 'des Kunden';
$lng['invoice']['state'] = 'state';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_INVOICED] = 'invoiced';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_SENT] = 'sent';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_PAID] = 'paid';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_CANCELLED_NO_REINVOICE] = 'cancelled (no reinvoice)';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_CANCELLED_REINVOICE_WITHOUT_CREDIT_NOTE] = 'cancelled (reinvoice, without credit note)';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_CANCELLED_REINVOICE_WITH_CREDIT_NOTE] = 'cancelled (reinvoiced, with credit note)';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_CANCELLED_REINVOICED] = 'cancelled (reinvoiced)';
$lng['invoice']['state_change'] = 'last state change';
$lng['invoice']['change_state'] = 'Change Invoice State';
$lng['invoice']['total_fee'] = 'w/o tax';
$lng['invoice']['total_fee_taxed'] = 'Total';
$lng['invoice']['fix'] = 'Fix Invoice';
$lng['invoice']['pdf'] = 'Create PDF';
$lng['invoice']['create_reminder'] = 'Create Reminder';
$lng['invoice']['changelog'] = 'Changelog';
$lng['invoice']['deleted_line'] = 'The line was deleted.';
$lng['invoice']['original_value'] = 'Original value';
$lng['invoice']['page_footer'] = 'page %s of %s';
$lng['billing']['billing'] = 'Billing';
$lng['billing']['invoices'] = 'Invoices';
$lng['billing']['invoices_admin'] = 'Invoices (Admins)';
$lng['billing']['openinvoices'] = 'Open Invoices';
$lng['billing']['openinvoices_admin'] = 'Open Invoices (Admins)';
$lng['billing']['cacheinvoicefees'] = 'Update list/fees';
$lng['billing']['invoice'] = 'Invoice';
$lng['billing']['invoice_date'] = 'Invoice date';
$lng['billing']['invoice_fee'] = 'Invoice fee';
$lng['billing']['preview'] = 'Preview';
$lng['billing']['caption'] = 'Caption';
$lng['billing']['number'] = 'Invoice number';
$lng['billing']['caption_setup'] = 'Caption for Setup Fee';
$lng['billing']['caption_interval'] = 'Caption for Interval Fee';
$lng['billing']['template'] = 'Template';
$lng['billing']['interval'] = 'Interval';
$lng['billing']['other'] = 'Other Services';
$lng['billing']['other_add'] = 'Add Other Service';
$lng['billing']['other_edit'] = 'Edit Other Service';
$lng['billing']['taxclassesnrates'] = 'Tax Classes and Rates';
$lng['billing']['taxclass'] = 'Taxclass';
$lng['billing']['taxrate'] = 'Taxrate';
$lng['billing']['taxrate_add'] = 'Add Taxrate';
$lng['billing']['taxrate_edit'] = 'Edit Taxrate';
$lng['billing']['domains_templates'] = 'Domain Templates';
$lng['billing']['domains_templates_add'] = 'Add Domain Template';
$lng['billing']['domains_templates_edit'] = 'Edit Domain Template';
$lng['billing']['other_templates'] = 'Other Service Templates';
$lng['billing']['other_templates_add'] = 'Add Other Service Template';
$lng['billing']['other_templates_edit'] = 'Edit Other Service Template';
$lng['billing']['categories']['hosting_caption'] = 'Hosting';
$lng['billing']['categories']['hosting_rowcaption_setup'] = 'Hosting contract - Setup Fee';
$lng['billing']['categories']['hosting_rowcaption_interval'] = 'Hosting contract';
$lng['billing']['categories']['hosting_rowcaption_setup_withloginname'] = 'Hosting contract ({loginname}) - Setup Fee';
$lng['billing']['categories']['hosting_rowcaption_interval_withloginname'] = 'Hosting contract ({loginname})';
$lng['billing']['categories']['domains_caption'] = 'Domains';
$lng['billing']['categories']['domains_rowcaption_setup'] = 'Domain {domain} - Setup Fee';
$lng['billing']['categories']['domains_rowcaption_interval'] = 'Domain {domain}';
$lng['billing']['categories']['traffic_caption'] = 'Traffic';
$lng['billing']['categories']['traffic_rowcaption_setup'] = $lng['billing']['categories']['traffic_rowcaption_interval'] = 'Traffic used: {traffic_total}/{traffic_included} GB';
$lng['billing']['categories']['traffic_rowcaption_setup_unlimited'] = $lng['billing']['categories']['traffic_rowcaption_interval_unlimited'] = 'Traffic used: {traffic_total}/' . $lng['customer']['unlimited'] . ' GB';
$lng['billing']['categories']['other_caption'] = 'Other';
$lng['billing']['categories']['other_rowcaption_setup'] = $lng['billing']['categories']['other_rowcaption_interval'] = 'Other';
$lng['billing']['categories']['diskspace_caption'] = 'Webspace';
$lng['billing']['categories']['diskspace_rowcaption_setup'] = $lng['billing']['categories']['diskspace_rowcaption_interval'] = 'Webspace used: {diskspace_total}/{diskspace_included} GB';
$lng['billing']['categories']['diskspace_rowcaption_setup_unlimited'] = $lng['billing']['categories']['diskspace_rowcaption_interval_unlimited'] = 'Webspace used: {diskspace_total}/' . $lng['customer']['unlimited'] . ' GB';
$lng['question']['billing_invoice_row_reallydelete'] = 'Do you really want to delete this invoice line item?';
$lng['question']['billing_invoice_row_reallyreset'] = 'Do you really want to discard all changes made in this invoice?';
$lng['question']['billing_invoice_row_reallyreset_key'] = 'Do you really want to discard the changes made in this line?';
$lng['question']['billing_domains_template_reallydelete'] = 'Do you really want to delete the template for %s?';
$lng['question']['billing_other_template_reallydelete'] = 'Do you really want to delete the template for %s?';
$lng['question']['billing_other_service_reallydelete'] = 'Do you really want to delete this service?';
$lng['question']['billing_taxrate_reallydelete'] = 'Do you really want to delete this taxrate?';

// ADDED IN 1.2.19-svn22

$lng['serversettings']['allow_preset_desc'] = 'Customers can reset their password and a new passwort will be sent to their e-mail address';
$lng['serversettings']['allow_preset_admin'] = 'Allow password reset by admins';
$lng['serversettings']['allow_preset_admin_desc'] = 'Admins/reseller can reset their password and a new passwort will be sent to their e-mail address';

// ADDED IN 1.2.19-svn23

$lng['admin']['edit_billingdata'] = 'Can edit billing data?';
$lng['error']['service_still_active'] = 'Service still active.';

// ADDED IN 1.2.19-svn23

$lng['admin']['billingsettings'] = 'Billing settings';
$lng['serversettings']['billing']['activate_billing']['title'] = 'Activate billing';
$lng['serversettings']['billing']['activate_billing']['description'] = 'Here you can activate/deactivate the billing system globally.';
$lng['serversettings']['billing']['highlight_inactive']['title'] = 'Highlight inaktive billing';
$lng['serversettings']['billing']['highlight_inactive']['description'] = 'Should rows, whose billing is not active, be highlighted?';
$lng['serversettings']['billing']['invoicenumber_count']['title'] = 'Current invoice number';
$lng['serversettings']['billing']['invoicenumber_count']['description'] = 'This is the number of fixed invoices. Changes could result in an argue with your accountant.';

// ADDED IN 1.2.19-svn25
$lng['emails']['quota'] = 'Quota';
$lng['emails']['noquota'] = 'No quota';
$lng['emails']['updatequota'] = 'Update Quota';
$lng['serversettings']['mail_quota']['title'] = 'Mailbox-quota';
$lng['serversettings']['mail_quota']['description'] = 'The default quota for a new created mailboxes.';
$lng['serversettings']['mail_quota_enabled']['title'] = 'Use mailbox-quota for customers';
$lng['serversettings']['mail_quota_enabled']['description'] = 'Activate to use quotas on mailboxes. Default is <b>No</b> since this requires a special setup.';
$lng['serversettings']['mail_quota_enabled']['removelink'] = 'Click here to wipe all quotas for mail accounts.';
$lng['serversettings']['mail_quota_enabled']['enforcelink'] = 'Click here to enforce default quota to all User mail accounts.';
$lng['question']['admin_quotas_reallywipe'] = 'Do you really want to wipe all quotas on table mail_users? This cannot be reverted!';
$lng['question']['admin_quotas_reallyenforce'] = 'Do you really want to enforce the default quota to all Users? This cannot be reverted!';
$lng['error']['vmailquotawrong'] = 'The quotasize must be positiv number.';
$lng['customer']['email_quota'] = 'E-mail quota';
$lng['customer']['email_imap'] = 'E-mail IMAP';
$lng['customer']['email_pop3'] = 'E-mail POP3';
$lng['customer']['mail_quota'] = 'Mailquota';
$lng['panel']['megabyte'] = 'MegaByte';
$lng['panel']['not_supported'] = 'Not supported in: ';
$lng['emails']['quota_edit'] = 'Change E-Mail Quota';
$lng['error']['allocatetoomuchquota'] = 'You try to allocate %s MB ' . $lng['emails']['quota'] .', but you have not enough left.';

// Autoresponder module

$lng['menue']['email']['autoresponder'] = 'Autoresponder';
$lng['autoresponder']['active'] = 'Active';
$lng['autoresponder']['autoresponder_add'] = 'Add autoresponder';
$lng['autoresponder']['autoresponder_edit'] = 'Edit autoresponder';
$lng['autoresponder']['autoresponder_new'] = 'Create new autoresponder';
$lng['autoresponder']['subject'] = 'Subject';
$lng['autoresponder']['message'] = 'Message';
$lng['autoresponder']['account'] = 'Account';
$lng['autoresponder']['sender'] = 'Sender';
$lng['question']['autoresponderdelete'] = 'Do you really want to delete the autoresponder?';
$lng['error']['noemailaccount'] = 'There can be two reasons why you cannot create a new autoresponder: You need at least one email account to create a new autoresponder. Secondly it can be possible that all accounts already have an autoresponder configured.';
$lng['error']['missingfields'] = 'Not all needed fields were field out.';
$lng['error']['accountnotexisting'] = 'The given email account doesn\'t exists.';
$lng['error']['autoresponderalreadyexists'] = 'There is already an autoresponder configured for this account.';
$lng['error']['invalidautoresponder'] = 'The given account is invalid.';
$lng['serversettings']['autoresponder_active']['title'] = 'Use autoresponder module';
$lng['serversettings']['autoresponder_active']['description'] = 'Do you want to use the autoresponder module? Therefore an extra cronjob must be set up.';
$lng['invoice']['active'] = 'Billing active';
$lng['admin']['security_settings'] = 'Security Options';
$lng['admin']['know_what_youre_doing'] = 'Change only, if you know what you\'re doing!';
$lng['admin']['show_version_login']['title'] = 'Show SysCP version on login';
$lng['admin']['show_version_login']['description'] = 'Show the SysCP version in the footer on the login page';
$lng['admin']['show_version_footer']['title'] = 'Show SysCP version in footer';
$lng['admin']['show_version_footer']['description'] = 'Show the SysCP version in the footer on the rest of the pages';
$lng['admin']['syscp_graphic']['title'] = 'Header graphic for SysCP';
$lng['admin']['syscp_graphic']['description'] = 'What graphic should be shown in the header';

//improved syscp

$lng['menue']['phpsettings']['maintitle'] = 'PHP Configurations';
$lng['admin']['phpsettings']['title'] = 'PHP Configuration';
$lng['admin']['phpsettings']['description'] = 'Short description';
$lng['admin']['phpsettings']['actions'] = 'Actions';
$lng['admin']['phpsettings']['activedomains'] = 'In use for domain(s)';
$lng['admin']['phpsettings']['notused'] = 'Configuration not in use';
$lng['admin']['misc'] = 'Miscellaneous';
$lng['admin']['phpsettings']['editsettings'] = 'Change PHP settings';
$lng['admin']['phpsettings']['addsettings'] = 'Create new PHP settings';
$lng['admin']['phpsettings']['viewsettings'] = 'View PHP settings';
$lng['admin']['phpsettings']['phpinisettings'] = 'php.ini settings';
$lng['error']['nopermissionsorinvalidid'] = 'You don\'t have enough permissions to change this settings or a invalid id was given.';
$lng['panel']['view'] = 'view';
$lng['question']['phpsetting_reallydelete'] = 'Do you really want to delete this settings? All domains which use this settings currently will be changed to the default config.';
$lng['admin']['phpsettings']['addnew'] = 'Create new settings';
$lng['error']['phpsettingidwrong'] = 'A PHP Configuration with this id doesn\'t exists';
$lng['error']['descriptioninvalid'] = 'The description is too short, too long or contains illegal characters.';
$lng['error']['info'] = 'Info';
$lng['admin']['phpconfig']['template_replace_vars'] = 'Variables that will be replaced in the configs';
$lng['admin']['phpconfig']['safe_mode'] = 'Will be replaced with the safe_mode setting of the domain.';
$lng['admin']['phpconfig']['pear_dir'] = 'Will be replaced with the global setting for the pear directory.';
$lng['admin']['phpconfig']['open_basedir'] = 'Will be replaced with the open_basedir setting of the domain.';
$lng['admin']['phpconfig']['tmp_dir'] = 'Will be replaced with the temporary directory of the domain.';
$lng['admin']['phpconfig']['open_basedir_global'] = 'Will be replaced with the global value of the path which will be attached to the open_basedir.';
$lng['admin']['phpconfig']['customer_email'] = 'Will be replaced with the e-mail address of the customer who owns this domain.';
$lng['admin']['phpconfig']['admin_email'] = 'Will be replaced with e-mail address of the admin who owns this domain.';
$lng['admin']['phpconfig']['domain'] = 'Will be replaced with the domain.';
$lng['admin']['phpconfig']['customer'] = 'Will be replaced with the loginname of the customer who owns this domain.';
$lng['admin']['phpconfig']['admin'] = 'Will be replaced with the loginname of the admin who owns this domain.';
$lng['login']['backtologin'] = 'Back to login';
$lng['serversettings']['mod_fcgid']['starter'] = 'Processes per Domain';
$lng['serversettings']['mod_fcgid']['starter_desc'] = 'How many processes should be started/allowed per domain? The value 0 is recommended cause PHP will then manage the amount of processes itself very efficient.';
$lng['serversettings']['mod_fcgid']['wrapper'] = 'Wrapper in Vhosts';
$lng['serversettings']['mod_fcgid']['wrapper_desc'] = 'How should the wrapper be included in the Vhosts';
$lng['serversettings']['mod_fcgid']['tmpdir_desc'] = 'Where should the temp directories be stored';
$lng['serversettings']['mod_fcgid']['peardir'] = 'Global PEAR directories';
$lng['serversettings']['mod_fcgid']['peardir_desc'] = 'Which global PEAR directories should be replaced in every php.ini config? Different directories must be separated by a colon.';

//improved syscp 2

$lng['admin']['templates']['index_html'] = 'index file for newly created customerdirectories';
$lng['admin']['templates']['SERVERNAME'] = 'Replaced with the servername.';
$lng['admin']['templates']['CUSTOMER'] = 'Replaced with the loginname of the customer.';
$lng['admin']['templates']['ADMIN'] = 'Replaced with the loginname of the admin.';
$lng['admin']['templates']['CUSTOMER_EMAIL'] = 'Replaced with the e-mail address of the customer.';
$lng['admin']['templates']['ADMIN_EMAIL'] = 'Replaced with the e-mail address of the admin.';
$lng['admin']['templates']['filetemplates'] = 'Filetemplates';
$lng['admin']['templates']['filecontent'] = 'Filecontent';
$lng['error']['filecontentnotset'] = 'The file cannot be empty!';
$lng['serversettings']['index_file_extension']['description'] = 'Which fileextension should be used for the index file in newly created customer directories? This fileextension will be used, if you or one of your admins has created its own index filetemplate.';
$lng['serversettings']['index_file_extension']['title'] = 'Fileextension for index file in newly created customer directories';
$lng['error']['index_file_extension'] = 'The fileextension for the index file must be between 1 and 6 characters long. The extension can only contain characters like a-z, A-Z and 0-9';
$lng['admin']['expert_settings'] = 'Expert settings!';
$lng['admin']['mod_fcgid_starter']['title'] = 'PHP Processes for this domain (empty for default value)';

//added with aps installer

$lng['admin']['aps'] = 'APS Installer';
$lng['customer']['aps'] = 'APS Installer';
$lng['aps']['scan'] = 'Scan for new packages';
$lng['aps']['upload'] = 'Upload new packages';
$lng['aps']['managepackages'] = 'Manage Packages';
$lng['aps']['manageinstances'] = 'Manage Instances';
$lng['aps']['overview'] = 'Package overview';
$lng['aps']['status'] = 'My Packages';
$lng['aps']['search'] = 'Search for Packages';
$lng['aps']['upload_description'] = 'Please select the APS Installer zipfiles to install them in the system.';
$lng['aps']['search_description'] = 'Name, Description, Keyword, Version';
$lng['aps']['detail'] = 'More information';
$lng['aps']['install'] = 'Install package';
$lng['aps']['data'] = 'Data';
$lng['aps']['version'] = 'Version';
$lng['aps']['homepage'] = 'Homepage';
$lng['aps']['installed_size'] = 'Size after Installation';
$lng['aps']['categories'] = 'Categories';
$lng['aps']['languages'] = 'Languages';
$lng['aps']['long_description'] = 'Long description';
$lng['aps']['configscript'] = 'Configurationscript';
$lng['aps']['changelog'] = 'Changelog';
$lng['aps']['license'] = 'License';
$lng['aps']['license_link'] = 'Link to License';
$lng['aps']['screenshots'] = 'Screenshots';
$lng['aps']['back'] = 'Back to overview';
$lng['aps']['install_wizard'] = 'Installationwizard...';
$lng['aps']['wizard_error'] = 'Your input contains invalid data. Please correct yourself to continue the installation.';
$lng['aps']['basic_settings'] = 'Basic settings';
$lng['aps']['application_location'] = 'Installation location';
$lng['aps']['application_location_description'] = 'Location where the application will be installed.';
$lng['aps']['no_domains'] = 'No domains found';
$lng['aps']['database_password'] = 'Database password';
$lng['aps']['database_password_description'] = 'Password which should be used for the new created database.';
$lng['aps']['license_agreement'] = 'Agreement';
$lng['aps']['cancel_install'] = 'Abort Installation';
$lng['aps']['notazipfile'] = 'The uploaded file is not a zipfile.';
$lng['aps']['filetoobig'] = 'The file is too big.';
$lng['aps']['filenotcomplete'] = 'The file wasn\'t uploaded completely.';
$lng['aps']['phperror'] = 'There occured a PHP internal error. The PHP upload errorcode is #';
$lng['aps']['moveproblem'] = 'The script failed to move the uploaded file into the destination directory. Please ensure that all permissions are set correctly.';
$lng['aps']['uploaderrors'] = '<strong>Errors for the file <em>%s</em></strong><br/><ul>%s</ul>';
$lng['aps']['nospecialchars'] = 'Special characters are not allowed in the search term!';
$lng['aps']['noitemsfound'] = 'No Packages were found!';
$lng['aps']['nopackagesinstalled'] = 'You haven\'t installed any package yet which could be shown.';
$lng['aps']['instance_install'] = 'Package Installation pending';
$lng['aps']['instance_task_active'] = 'Installation running at this moment';
$lng['aps']['instance_success'] = 'Package is installed/was installed successfully';
$lng['aps']['instance_error'] = 'Package isn\'t installed - there occured some errors on the Installation';
$lng['aps']['instance_uninstall'] = 'Package Uninstallation pending';
$lng['aps']['unknown_status'] = 'Error - Unknown value';
$lng['aps']['currentstatus'] = 'Current status';
$lng['aps']['activetasks'] = 'Current tasks';
$lng['aps']['task_install'] = 'Installation pending';
$lng['aps']['task_remove'] = 'Uninstallation pending';
$lng['aps']['task_reconfigure'] = 'Reconfiguration pending';
$lng['aps']['task_upgrade'] = 'Update/Upgrade pending';
$lng['aps']['no_task'] = 'No tasks pending';
$lng['aps']['applicationlinks'] = 'Application links';
$lng['aps']['mainsite'] = 'Main site';
$lng['aps']['uninstall'] = 'Uninstall Package';
$lng['aps']['reconfigure'] = 'Change settings';
$lng['aps']['erroronnewinstance'] = '<strong>This Package cannot be installed.</strong><br/><br/>Please go back to the Package overview and start a new Installation.';
$lng['aps']['successonnewinstance'] = '<strong><em>%s</em> will be installed now.</strong><br/><br/>Go back to "My Packages" and wait until the Installation has finished. This can take some time.';
$lng['aps']['php_misc_handler'] = 'PHP - Misc - There is no support for other file extensions than .php for the PHP Parser.';
$lng['aps']['php_misc_directoryhandler'] = 'PHP - Misc - There is no support for per directory disabled PHP Handlers.';
$lng['aps']['asp_net'] = 'ASP.NET - Package not supported.';
$lng['aps']['cgi'] = 'CGI - Package not supported.';
$lng['aps']['php_extension'] = 'PHP - Extension "%s" missing.';
$lng['aps']['php_function'] = 'PHP - Function "%s" missing.';
$lng['aps']['php_configuration'] = 'PHP - Configuration - Current "%s" setting not supported by Package.';
$lng['aps']['php_configuration_post_max_size'] = 'PHP - Configuration - "post_max_size" value too low.';
$lng['aps']['php_configuration_memory_limit'] = 'PHP - Configuration - "memory_limit" value too low.';
$lng['aps']['php_configuration_max_execution_time'] = 'PHP - Configuration - "max_execution_time" value too low.';
$lng['aps']['php_general_old'] = 'PHP - General - PHP Version too old.';
$lng['aps']['php_general_new'] = 'PHP - General - PHP Version too new.';
$lng['aps']['db_mysql_support'] = 'Database - The Package needs another database engine than MySQL.';
$lng['aps']['db_mysql_version'] = 'Database - MySQL Server too old.';
$lng['aps']['webserver_module'] = 'Webserver - Module "%s" missing.';
$lng['aps']['webserver_fcgid'] = 'Webserver - This Package requires additional modules from the Webserver. In your FastCGI/mod_fcgid environment the function "apache_get_modules" doesn\'t exist. The Package cannot be installed because the APS Installer is unable to verify if this modules are installed.';
$lng['aps']['webserver_htaccess'] = 'Webserver - This Package requires that .htaccess files are parsed by the Webserver. The Package cannot be installed because the APS Installer is unable to determine if this is enabled.';
$lng['aps']['misc_configscript'] = 'Misc - Die Sprache des Konfigurationsskriptes wird nicht unterst&uuml;tzt.';
$lng['aps']['misc_charset'] = 'Misc - In the current Installer version its not possibel to validate formfields from the wizard against a specific charset. The Package cannot be installed.';
$lng['aps']['misc_version_already_installed'] = 'Same version of Package already installed.';
$lng['aps']['misc_only_newer_versions'] = 'For security reasons only newer Package versions can be installed on the system than them which are already installed.';
$lng['aps']['erroronscan'] = '<strong>Errors for <em>%s</em></strong><ul>%s</ul>';
$lng['aps']['invalidzipfile'] = '<strong>Errors for <em>%s</em></strong><br/><ul><li>This is not a valid APS zipfile!</li></ul>';
$lng['aps']['successpackageupdate'] = '<strong><em>%s</em> successfully installed as a Package update</strong>';
$lng['aps']['successpackageinstall'] = '<strong><em>%s</em> successfully installed as a new Package</strong>';
$lng['aps']['class_zip_missing'] = 'SimpleXML Class, exec function or ZIP Functions missing or not enabled! For further information about this problem look into the handbook for this module.';
$lng['aps']['dir_permissions'] = 'The PHP/Webserver process must be able to write in the directory /var/www/syscp/temp/ and /var/www/syscp/packages/';
$lng['aps']['initerror'] = '<strong>There are some problems with this module:</strong><ul>%s</ul>Fix this problems, otherwise the module cannot be used!';
$lng['aps']['iderror'] = 'Wrong id specified!';
$lng['aps']['nopacketsforinstallation'] = 'There are no packages to install.';
$lng['aps']['nopackagestoinstall'] = 'There are no packages to view or install.';
$lng['aps']['nodomains'] = 'Select a domain from the list. If there is none, the Package cannot be installed!';
$lng['aps']['wrongpath'] = 'Either this path contains invalid characters or there is another application installed already.';
$lng['aps']['dbpassword'] = 'Specify a password with a minimum lenght of 8 characters.';
$lng['aps']['error_text'] = 'Specify a text without special characters.';
$lng['aps']['error_email'] = 'Specify a valid e-mail address.';
$lng['aps']['error_domain'] = 'Specify a valid URL like http://www.example.com/';
$lng['aps']['error_integer'] = 'Specify a numeric value (Integer-Format) e.g. <em>5</em> or <em>7</em>.';
$lng['aps']['error_float'] = 'Specify a numeric value (Float-Format) e.g. <em>5,2432</em> or <em>7,5346</em>.';
$lng['aps']['error_password'] = 'Specify a password.';
$lng['aps']['error_license'] = 'Yes, I have the license and will abide by its terms.';
$lng['aps']['error_licensenoaccept'] = 'You must accept the license to install this application.';
$lng['aps']['stopinstall'] = 'Abort Installation';
$lng['aps']['installstopped'] = 'The Installation of this Packages was aborted successfully.';
$lng['aps']['installstoperror'] = 'The Installation cannot be aborted anymore cause installation has started already. If you like to uninstall the Package, wait until the Installation has finished and then go to "My Packages" to trigger a Uninstallation.';
$lng['aps']['waitfortask'] = 'There are no actions to select. Wait until all tasks have finished.';
$lng['aps']['removetaskexisting'] = '<strong>There is already a task for Uninstallation.</strong><br/><br/>Please go back to "My Packages" and wait until the Uninstallation has finished.';
$lng['aps']['packagewillberemoved'] = '<strong>The Package will be uninstalled now.</strong><br/><br/>Please go back to "My Packages" and wait until the Uninstallation has finished.';
$lng['question']['reallywanttoremove'] = '<strong>Do you really want to uninstall this Package?</strong><br/><br/>All database contents and files will be erased. Be sure to make a manual backup of a files you need for any further usage!<br/><br/>';
$lng['aps']['searchoneresult'] = '%s Package found';
$lng['aps']['searchmultiresult'] = '%s Packages found';
$lng['question']['reallywanttostop'] = 'Do you really want to abort the Installation of this Package?<br/><br/>';
$lng['aps']['packagenameandversion'] = 'Packagename &amp; Version';
$lng['aps']['package_locked'] = 'Enabled';
$lng['aps']['package_enabled'] = 'Locked';
$lng['aps']['lock'] = 'Lock';
$lng['aps']['unlock'] = 'Enable';
$lng['aps']['remove'] = 'Remove';
$lng['aps']['allpackages'] = 'All Packages';
$lng['question']['reallyremovepackages'] = '<strong>Do you really want to delete this packages?</strong><br/><br/>Packages with dependencies can only be remove if the corresponding Instances have been removed!<br/><br/>';
$lng['aps']['nopackagesinsystem'] = 'There were no packages installed in the system which could be managed.';
$lng['aps']['packagenameandstatus'] = 'Packagename &amp; Status';
$lng['aps']['activate_aps']['title'] = 'Enable APS Installer';
$lng['aps']['activate_aps']['description'] = 'Here the APS Installer can be enabled and disabled globaly.';
$lng['aps']['packages_per_page']['title'] = 'Packages per page';
$lng['aps']['packages_per_page']['description'] = 'How many packages should be displayed per page for customers?';
$lng['aps']['upload_fields']['title'] = 'Uploadfields per page';
$lng['aps']['upload_fields']['description'] = 'How many uploadfields should be displayed on the page to install new packages in the system?';
$lng['aps']['exceptions']['title'] = 'Exceptions for Package validation';
$lng['aps']['exceptions']['description'] = 'Some packages need special configuration parameters or modules. The Installer cannot always determine if this options/extensions are available. For this reason you can now define exceptions that packages can be installed in the system. Do only select options which match your real configuration setup. For further information about this problem look into the handbook for this module.';
$lng['aps']['settings_php_extensions'] = 'PHP-Extensions';
$lng['aps']['settings_php_configuration'] = 'PHP-Configuration';
$lng['aps']['settings_webserver_modules'] = 'Webserver modules';
$lng['aps']['settings_webserver_misc'] = 'Webserver miscellaneous';
$lng['aps']['specialoptions'] = 'Special options';
$lng['aps']['removeunused'] = 'Remove unused packages';
$lng['aps']['enablenewest'] = 'Enabled newest version of package, lock others';
$lng['aps']['installations'] = 'Installations';
$lng['aps']['statistics'] = 'Statistics';
$lng['aps']['numerofpackagesinstalled'] = '%s Packages installed<br/>';
$lng['aps']['numerofpackagesenabled'] = '%s Packages enabled<br/>';
$lng['aps']['numerofpackageslocked'] = '%s Packages locked<br/>';
$lng['aps']['numerofinstances'] = '%s Instances installed<br/>';
$lng['question']['reallydoaction'] = '<strong>Do you really want to execute the selected actions?</strong><br/><br/>Data which can be lost by continuing, cannot be restored later.<br/><br/>';
$lng['aps']['linktolicense'] = 'Link to license';
$lng['aps']['initerror_customer'] = 'There is currently a problem with this SysCP extension. Contact your administrator for further information.';
$lng['aps']['numerofinstances'] = '%s Installations at all<br/>';
$lng['aps']['numerofinstancessuccess'] = '%s successful Installations<br/>';
$lng['aps']['numerofinstanceserror'] = '%s failed Installations<br/>';
$lng['aps']['numerofinstancesaction'] = '%s planed Installations/Uninstallations';
$lng['aps']['downloadallpackages'] = 'Download all packages from distributionserver';
$lng['aps']['updateallpackages'] = 'Update all packages by distributionserver';
$lng['aps']['downloadtaskexists'] = 'There is already an task for the download of all packages. Please wait until this task has finished.';
$lng['aps']['downloadtaskinserted'] = 'A task for the download of all packages has been created. This can take up to several minutes.';
$lng['aps']['updatetaskexists'] = 'There is already an task for the update of all packages. Please wait until this task has finished.';
$lng['aps']['updatetaskinserted'] = 'A task for the update of all packages has been created. This can take up to several minutes.';
$lng['aps']['canmanagepackages'] = 'Can manage APS packages';
$lng['aps']['numberofapspackages'] = 'Amount of APS installations';
$lng['aps']['allpackagesused'] = '<strong>Error</strong><br/><br/>You have already reached the number of installable APS applications.';
$lng['aps']['noinstancesexisting'] = 'There are currently no instances which could be managed. There must be installed at least one application by a customer.';

$lng['error']['customerdoesntexist'] = 'The customer you have chosen doesn\'t exist.';
$lng['error']['admindoesntexist'] = 'The admin you have chosen doesn\'t exist.';

// ADDED IN 1.2.19-svn37

$lng['serversettings']['system_realtime_port']['title'] = 'Port for realtime SysCP';
$lng['serversettings']['system_realtime_port']['description'] = 'SysCP connects to this port at localhost everytime a new cron task is scheduled. If value is 0 (zero), this feature ist deactivated.<br />See also: <a href="https://wiki.syscp.org/contrib/realtime">Make SysCP work in realtime (SysCP Wiki)</a>';
$lng['serversettings']['session_allow_multiple_login']['title'] = 'Allow multiple login';
$lng['serversettings']['session_allow_multiple_login']['description'] = 'If activated a user could login multiple times.';
$lng['serversettings']['panel_allow_domain_change_admin']['title'] = 'Allow moving domains between admins';
$lng['serversettings']['panel_allow_domain_change_admin']['description'] = 'If activated you can change the admin of a domain at domainsettings.<br /><b>Attention:</b> If a customer isn\'t assigned to the same admin as the domain, the admin can see every other domain of that customer!';
$lng['serversettings']['panel_allow_domain_change_customer']['title'] = 'Allow moving domains between customers';
$lng['serversettings']['panel_allow_domain_change_customer']['description'] = 'If activated you can change the customer of a domain at domainsettings.<br /><b>Attention:</b> SysCP won\'t change any paths. This could render a domain unusable!';
$lng['domains']['associated_with_domain'] = 'Associated';
$lng['domains']['aliasdomains'] = 'Aliasdomains';

$lng['error']['ipportdoesntexist'] = 'The ip/port combination you have chosen doesn\'t exist.';

// ADDED IN 1.2.19-svn38

$lng['admin']['phpserversettings'] = 'PHP Settings';
$lng['admin']['phpsettings']['binary'] = 'PHP Binary';
$lng['admin']['phpsettings']['file_extensions'] = 'File extensions';
$lng['admin']['phpsettings']['file_extensions_note'] = '(without dot, separated by spaces)';
$lng['admin']['mod_fcgid_maxrequests']['title'] = 'Maximum php requests for this domain (empty for default value)';
$lng['serversettings']['mod_fcgid']['maxrequests'] = 'Maximum Requests per Domain';
$lng['serversettings']['mod_fcgid']['maxrequests_desc'] = 'How many requests should be allowed per domain?';

?>