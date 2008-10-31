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
$lng['panel']['edit'] = 'bearbeiten';
$lng['panel']['delete'] = 'l&ouml;schen';
$lng['panel']['create'] = 'anlegen';
$lng['panel']['save'] = 'Speichern';
$lng['panel']['yes'] = 'Ja';
$lng['panel']['no'] = 'Nein';
$lng['panel']['emptyfornochanges'] = 'leer f&uuml;r keine &Auml;nderung';
$lng['panel']['emptyfordefault'] = 'leer f&uuml;r Standardeinstellung';
$lng['panel']['path'] = 'Pfad';
$lng['panel']['toggle'] = 'Umschalten';
$lng['panel']['next'] = 'weiter';
$lng['panel']['dirsmissing'] = 'Verzeichnisse nicht verf&uuml;gbar oder lesbar';

/**
 * Login
 */

$lng['login']['username'] = 'Benutzername';
$lng['login']['password'] = 'Passwort';
$lng['login']['language'] = 'Sprache';
$lng['login']['login'] = 'Anmelden';
$lng['login']['logout'] = 'Abmelden';
$lng['login']['profile_lng'] = 'Profilsprache';

/**
 * Customer
 */

$lng['customer']['documentroot'] = 'Heimverzeichnis';
$lng['customer']['name'] = 'Name';
$lng['customer']['firstname'] = 'Vorname';
$lng['customer']['company'] = 'Firma';
$lng['customer']['street'] = 'Strasse';
$lng['customer']['zipcode'] = 'PLZ';
$lng['customer']['city'] = 'Ort';
$lng['customer']['phone'] = 'Telephon';
$lng['customer']['fax'] = 'Fax';
$lng['customer']['email'] = 'E-Mail';
$lng['customer']['customernumber'] = 'KundenNummer';
$lng['customer']['diskspace'] = 'Webspace (MB)';
$lng['customer']['traffic'] = 'Traffic (GB)';
$lng['customer']['mysqls'] = 'MySQL-Datenbanken';
$lng['customer']['emails'] = 'E-Mail-Adressen';
$lng['customer']['accounts'] = 'E-Mail-Konten';
$lng['customer']['forwarders'] = 'E-Mail-Weiterleitungen';
$lng['customer']['ftps'] = 'FTP-Konten';
$lng['customer']['subdomains'] = 'Sub-Domain(s)';
$lng['customer']['domains'] = 'Domain(s)';
$lng['customer']['unlimited'] = 'unbegrenzt';

/**
 * Customermenue
 */

$lng['menue']['main']['main'] = 'Allgemein';
$lng['menue']['main']['changepassword'] = 'Passwort &auml;ndern';
$lng['menue']['main']['changelanguage'] = 'Sprache &auml;ndern';
$lng['menue']['email']['email'] = 'E-Mail';
$lng['menue']['email']['emails'] = 'Adressen';
$lng['menue']['email']['webmail'] = 'WebMail';
$lng['menue']['mysql']['mysql'] = 'MySQL';
$lng['menue']['mysql']['databases'] = 'Datenbanken';
$lng['menue']['mysql']['phpmyadmin'] = 'phpMyAdmin';
$lng['menue']['domains']['domains'] = 'Domains';
$lng['menue']['domains']['settings'] = 'Einstellungen';
$lng['menue']['ftp']['ftp'] = 'FTP';
$lng['menue']['ftp']['accounts'] = 'Benutzerkonten';
$lng['menue']['ftp']['webftp'] = 'WebFTP';
$lng['menue']['extras']['extras'] = 'Extras';
$lng['menue']['extras']['directoryprotection'] = 'Verzeichnisschutz';
$lng['menue']['extras']['pathoptions'] = 'Pfadoptionen';

/**
 * Index
 */

$lng['index']['customerdetails'] = 'Kundendaten';
$lng['index']['accountdetails'] = 'Accountdaten';

/**
 * Change Password
 */

$lng['changepassword']['old_password'] = 'Altes Passwort';
$lng['changepassword']['new_password'] = 'Neues Passwort';
$lng['changepassword']['new_password_confirm'] = 'Neues Passwort (best&auml;tigen)';
$lng['changepassword']['new_password_ifnotempty'] = 'Neues Passwort (leer = nicht &auml;ndern)';
$lng['changepassword']['also_change_ftp'] = ' Auch Passwort vom Haupt-FTP-Zugang &auml;ndern';

/**
 * Domains
 */

$lng['domains']['description'] = 'Hier k&ouml;nnen Sie (Sub-)Domains erstellen und deren Pfade &auml;ndern.<br />Nach jeder &Auml;nderung braucht das System etwas Zeit um die Konfiguration neu einzulesen.';
$lng['domains']['domainsettings'] = 'Domaineinstellungen';
$lng['domains']['domainname'] = 'Domainname';
$lng['domains']['subdomain_add'] = 'Subdomain anlegen';
$lng['domains']['subdomain_edit'] = '(Sub-)Domain bearbeiten';
$lng['domains']['wildcarddomain'] = 'Als Wildcarddomain eintragen?';
$lng['domains']['aliasdomain'] = 'Alias f&uuml;r Domain';
$lng['domains']['noaliasdomain'] = 'Keine Aliasdomain';

/**
 * eMails
 */

$lng['emails']['description'] = 'Hier k&ouml;nnen Sie Ihre E-Mail Adressen einrichten.<br />Ein Konto ist wie Ihr Briefkasten vor der Haust&uuml;re. Wenn jemand eine email an Sie schreibt, dann wird diese in dieses Konto gelegt.<br><br>Die Zugangsdaten von Ihrem Mailprogramm sind wie folgt: (Die Angaben in <i>kursiver</i> Schrift sind durch die jeweiligen Eintr&auml;ge zu ersetzen!)<br>Hostname: <b><i>Domainname</i></b><br>Benutzername: <b><i>Kontoname / E-Mail-Adresse</i></b><br>Passwort: <b><i>das gew&auml;hlte Passwort</i></b>';
$lng['emails']['emailaddress'] = 'E-Mail-Adresse';
$lng['emails']['emails_add'] = 'E-Mail-Adresse anlegen';
$lng['emails']['emails_edit'] = 'E-Mail-Adresse &auml;ndern';
$lng['emails']['catchall'] = 'Catchall';
$lng['emails']['iscatchall'] = 'Als Catchall-Adresse definieren?';
$lng['emails']['account'] = 'Konto';
$lng['emails']['account_add'] = 'Konto anlegen';
$lng['emails']['account_delete'] = 'Konto l&ouml;schen';
$lng['emails']['from'] = 'Von';
$lng['emails']['to'] = 'Nach';
$lng['emails']['forwarders'] = 'Weiterleitungen';
$lng['emails']['forwarder_add'] = 'Weiterleitung hinzuf&uuml;gen';

/**
 * FTP
 */

$lng['ftp']['description'] = 'Hier k&ouml;nnen Sie zus&auml;tzliche FTP-Konten einrichten.<br />Die &Auml;nderungen sind sofort wirksam und die FTP-Konten sofort benutzbar.';
$lng['ftp']['account_add'] = 'Benutzerkonto anlegen';

/**
 * MySQL
 */

$lng['mysql']['databasename'] = 'Benutzer-/Datenbankname';
$lng['mysql']['databasedescription'] = 'Datenbankbeschreibung';
$lng['mysql']['database_create'] = 'Datenbank anlegen';

/**
 * Extras
 */

$lng['extras']['description'] = 'Hier k&ouml;nnen Sie zus&auml;tzliche Extras einrichten, wie zum Beispiel Verzeichnisschutz.<br />Die &Auml;nderungen sind erst nach einer bestimmten Zeit wirksam.';
$lng['extras']['directoryprotection_add'] = 'Verzeichnisschutz anlegen';
$lng['extras']['view_directory'] = 'Verzeichnis anzeigen';
$lng['extras']['pathoptions_add'] = 'Pfadoptionen hinzuf&uuml;gen';
$lng['extras']['directory_browsing'] = 'Verzeichnisinhalt anzeigen';
$lng['extras']['pathoptions_edit'] = 'Pfadoptionen bearbeiten';
$lng['extras']['error404path'] = '404';
$lng['extras']['error403path'] = '403';
$lng['extras']['error500path'] = '500';
$lng['extras']['error401path'] = '401';
$lng['extras']['errordocument404path'] = 'URL zum Fehlerdokument 404';
$lng['extras']['errordocument403path'] = 'URL zum Fehlerdokument 403';
$lng['extras']['errordocument500path'] = 'URL zum Fehlerdokument 500';
$lng['extras']['errordocument401path'] = 'URL zum Fehlerdokument 401';

/**
 * Errors
 */

$lng['error']['error'] = 'Fehlermeldung';
$lng['error']['directorymustexist'] = 'Das Verzeichnis %s muss existieren. Legen Sie es bitte mit Ihrem FTP-Programm an.';
$lng['error']['filemustexist'] = 'Die Datei %s muss existieren.';
$lng['error']['allresourcesused'] = 'Sie haben bereits alle Ihnen zur Verf&uuml;gung stehenden Ressourcen verbraucht.';
$lng['error']['domains_cantdeletemaindomain'] = 'Sie k&ouml;nnen keine Domain, die als E-Mail-Domain verwendet wird l&ouml;schen. ';
$lng['error']['domains_canteditdomain'] = 'Sie k&ouml;nnen diese Domain nicht bearbeiten. Dies wurde durch den Admin verweigert';
$lng['error']['domains_cantdeletedomainwithemail'] = 'Sie k&ouml;nnen keine Domain l&ouml;schen die noch als E-Mail-Domain verwendet wird. L&ouml;schen Sie zuerst alle E-Mail-Adressen dieser Domain.';
$lng['error']['firstdeleteallsubdomains'] = 'Sie m&uuml;ssen erst alle Subdomains l&ouml;schen, bevor Sie eine Wildcarddomain anlegen k&ouml;nnen.';
$lng['error']['youhavealreadyacatchallforthisdomain'] = 'Sie haben bereits eine Adresse als Catchall f&uuml;r diese Domain definiert.';
$lng['error']['ftp_cantdeletemainaccount'] = 'Sie k&ouml;nnen Ihren Hauptaccount nicht l&ouml;schen.';
$lng['error']['login'] = 'Der angegebene Benutzername/Passwort ist falsch.';
$lng['error']['login_blocked'] = 'Dieser Account wurde aufgrund zu vieler Fehlversuche vorr&uuml;bergehend geschlossen. <br />Bitte versuchen Sie es in ' . $settings['login']['deactivatetime'] . ' Sekunden erneut.';
$lng['error']['notallreqfieldsorerrors'] = 'Sie haben nicht alle Felder oder ein Feld mit fehlerhaften Angaben ausgef&uuml;llt.';
$lng['error']['oldpasswordnotcorrect'] = 'Das alte Passwort ist nicht korrekt.';
$lng['error']['youcantallocatemorethanyouhave'] = 'Sie k&ouml;nnen nicht mehr Ressourcen verteilen als Sie noch frei haben.';
$lng['error']['mustbeurl'] = 'Sie m&uuml;ssen eine vollst&auml;ndige URL angeben (z.B. http://irgendwas.de/error404.htm)';
$lng['error']['invalidpath'] = 'Sie haben keine g&uuml;ltige URL ausgew&auml;hlt (Evtl. Probleme beim Verzeichnislisting?)';
$lng['error']['stringisempty'] = 'Fehlende Eingabe im Feld';
$lng['error']['stringiswrong'] = 'Falsche Eingabe im Feld';
$lng['error']['myloginname'] = '\'' . $lng['login']['username'] . '\'';
$lng['error']['mypassword'] = '\'' . $lng['login']['password'] . '\'';
$lng['error']['oldpassword'] = '\'' . $lng['changepassword']['old_password'] . '\'';
$lng['error']['newpassword'] = '\'' . $lng['changepassword']['new_password'] . '\'';
$lng['error']['newpasswordconfirm'] = '\'' . $lng['changepassword']['new_password_confirm'] . '\'';
$lng['error']['newpasswordconfirmerror'] = 'Das neue Passwort und die Best&auml;tigung sind nicht identisch.';
$lng['error']['myname'] = '\'' . $lng['customer']['name'] . '\'';
$lng['error']['myfirstname'] = '\'' . $lng['customer']['firstname'] . '\'';
$lng['error']['emailadd'] = '\'' . $lng['customer']['email'] . '\'';
$lng['error']['mydomain'] = '\'Domain\'';
$lng['error']['mydocumentroot'] = '\'Documentroot\'';
$lng['error']['loginnameexists'] = 'Der Login-Name %s existiert bereits.';
$lng['error']['emailiswrong'] = 'Die E-Mail-Adresse %s enth&auml;lt ung&uuml;ltige Zeichen oder ist nicht vollst&auml;ndig.';
$lng['error']['loginnameiswrong'] = 'Der Login-Name %s enth&auml;lt ung&uuml;ltige Zeichen.';
$lng['error']['userpathcombinationdupe'] = 'Kombination aus Benutzername und Pfad existiert bereits.';
$lng['error']['patherror'] = 'allgemeiner Fehler! Pfad darf nicht leer sein.';
$lng['error']['errordocpathdupe'] = 'Option f&uuml;r Pfad %s existiert bereits.';
$lng['error']['adduserfirst'] = 'Sie m&uuml;ssen zuerst einen Kunden anlegen.';
$lng['error']['domainalreadyexists'] = 'Die Domain %s wurde bereits einem Kunden zugeordnet.';
$lng['error']['nolanguageselect'] = 'Keine Sprache ausgew&auml;hlt.';
$lng['error']['nosubjectcreate'] = 'Sie m&uuml;ssen einen Betreff angeben.';
$lng['error']['nomailbodycreate'] = 'Sie m&uuml;ssen einen E-Mail-Text eingeben.';
$lng['error']['templatenotfound'] = 'Template wurde nicht gefunden.';
$lng['error']['alltemplatesdefined'] = 'Sie k&ouml;nnen keine weiteren Templates anlegen, da bereits alle Sprachen mit Templates versorgt sind.';
$lng['error']['wwwnotallowed'] = 'Ihre Subdomain darf nicht www heissen.';
$lng['error']['subdomainiswrong'] = 'Die Subdomain %s enth&auml;lt ung&uuml;ltige Zeichen.';
$lng['error']['domaincantbeempty'] = 'Der Domain-Name darf nicht leer sein.';
$lng['error']['domainexistalready'] = 'Die Domain %s existiert bereits.';
$lng['error']['domainisaliasorothercustomer'] = 'Die ausgew&auml;hlte Aliasdomain ist entweder selber eine Aliasdomain oder geh&ouml;rt zu einem anderen Kunden.';
$lng['error']['emailexistalready'] = 'Die E-Mail-Adresse %s existiert bereits.';
$lng['error']['maindomainnonexist'] = 'Die Haupt-Domain %s existiert nicht.';
$lng['error']['destinationnonexist'] = 'Bitte geben Sie Ihre Weiterleitungsadresse im Feld \'Nach\' ein.';
$lng['error']['destinationalreadyexistasmail'] = 'Die Weiterleitung zu %s exisitiert bereits als aktive E-Mail-Adresse.';
$lng['error']['destinationalreadyexist'] = 'Es gibt bereits eine Weiterleitung nach %s .';
$lng['error']['destinationiswrong'] = 'Die Weiterleitungsadresse-Adresse %s enth&auml;lt ung&uuml;ltige Zeichen oder ist nicht vollst&auml;ndig.';
$lng['error']['domainname'] = $lng['domains']['domainname'];

/**
 * Questions
 */

$lng['question']['question'] = 'Sicherheitsabfrage';
$lng['question']['admin_customer_reallydelete'] = 'Wollen Sie den Kunden %s wirklich l&ouml;schen?<br />ACHTUNG! Alle Daten gehen unwiderruflich verloren! Nach dem Vorgang m&uuml;ssen Sie die Daten aus dem Dateisystem noch manuell entfernen.';
$lng['question']['admin_domain_reallydelete'] = 'Wollen Sie die Domain %s wirklich l&ouml;schen?';
$lng['question']['admin_domain_reallydisablesecuritysetting'] = 'Wollen Sie diese wichtigen Sicherheitseinstellungen (OpenBasedir und/oder SafeMode) wirklich deaktivieren?';
$lng['question']['admin_admin_reallydelete'] = 'Wollen Sie den Admin %s wirklich l&ouml;schen?<br />Alle Kunden und Domains werden Ihrem Account zugeteilt.';
$lng['question']['admin_template_reallydelete'] = 'Wollen Sie die Vorlage \'%s\' wirklich l&ouml;schen?';
$lng['question']['domains_reallydelete'] = 'Wollen Sie die Domain %s wirklich l&ouml;schen?';
$lng['question']['email_reallydelete'] = 'Wollen Sie die E-Mail-Adresse %s wirklich l&ouml;schen?';
$lng['question']['email_reallydelete_account'] = 'Wollen Sie das Konto von %s wirklich l&ouml;schen?';
$lng['question']['email_reallydelete_forwarder'] = 'Wollen Sie die Weiterleitung %s wirklich l&ouml;schen?';
$lng['question']['extras_reallydelete'] = 'Wollen Sie den Verzeichnisschutz f&uuml;r %s wirklich l&ouml;schen?';
$lng['question']['extras_reallydelete_pathoptions'] = 'Wollen Sie die Optionen f&uuml;r den Pfad %s wirklich l&ouml;schen?';
$lng['question']['ftp_reallydelete'] = 'Wollen Sie das FTP-Benutzerkonto %s wirklich l&ouml;schen?';
$lng['question']['mysql_reallydelete'] = 'Wollen Sie die Datenbank %s wirklich l&ouml;schen?<br />ACHTUNG! Alle Daten gehen unwiderruflich verloren!';
$lng['question']['admin_configs_reallyrebuild'] = 'Wollen Sie wirklich Ihre Apache und Bind Konfigurationsdateien neu erstellen lassen?';

/**
 * Mails
 */

$lng['mails']['pop_success']['mailbody'] = 'Hallo,\n\nihr E-Mail-Konto {USERNAME}\nwurde erfolgreich eingerichtet.\n\nDies ist eine automatisch generierte\neMail, bitte antworten Sie nicht auf\ndiese Mitteilung.\n\nIhr SysCP-Team';
$lng['mails']['pop_success']['subject'] = 'E-Mail-Konto erfolgreich eingerichtet';
$lng['mails']['createcustomer']['mailbody'] = 'Hallo {FIRSTNAME} {NAME},\n\nhier ihre Accountinformationen:\n\nBenutzername: {USERNAME}\nPassword: {PASSWORD}\n\nVielen Dank,\nIhr SysCP-Team';
$lng['mails']['createcustomer']['subject'] = 'Accountinformationen';

/**
 * Admin
 */

$lng['admin']['overview'] = '&Uuml;bersicht';
$lng['admin']['ressourcedetails'] = 'Verbrauchte Ressourcen';
$lng['admin']['systemdetails'] = 'Systemdetails';
$lng['admin']['syscpdetails'] = 'SysCP-Details';
$lng['admin']['installedversion'] = 'Installierte Version';
$lng['admin']['latestversion'] = 'Neueste Version';
$lng['admin']['lookfornewversion']['clickhere'] = 'per Webservice abfragen';
$lng['admin']['lookfornewversion']['error'] = 'Fehler beim Auslesen';
$lng['admin']['resources'] = 'Ressourcen';
$lng['admin']['customer'] = 'Kunde';
$lng['admin']['customers'] = 'Kunden';
$lng['admin']['customer_add'] = 'Kunden anlegen';
$lng['admin']['customer_edit'] = 'Kunden bearbeiten';
$lng['admin']['domains'] = 'Domains';
$lng['admin']['domain_add'] = 'Domain anlegen';
$lng['admin']['domain_edit'] = 'Domain bearbeiten';
$lng['admin']['subdomainforemail'] = 'Subdomains als E-Mail-Domains';
$lng['admin']['admin'] = 'Admin';
$lng['admin']['admins'] = 'Admins';
$lng['admin']['admin_add'] = 'Admin anlegen';
$lng['admin']['admin_edit'] = 'Admin bearbeiten';
$lng['admin']['customers_see_all'] = 'Kann alle Kunden sehen?';
$lng['admin']['domains_see_all'] = 'Kann alle Domains sehen?';
$lng['admin']['change_serversettings'] = 'Kann Servereinstellungen bearbeiten?';
$lng['admin']['server'] = 'Server';
$lng['admin']['serversettings'] = 'Einstellungen';
$lng['admin']['rebuildconf'] = 'Configs neuschreiben';
$lng['admin']['stdsubdomain'] = 'Standardsubdomain';
$lng['admin']['stdsubdomain_add'] = 'Standardsubdomain anlegen';
$lng['admin']['phpenabled'] = 'PHP verf&uuml;gbar';
$lng['admin']['deactivated'] = 'Gesperrt';
$lng['admin']['deactivated_user'] = 'Benutzer sperren';
$lng['admin']['sendpassword'] = 'Passwort zusenden';
$lng['admin']['ownvhostsettings'] = 'Eigene vHost-Einstellungen';
$lng['admin']['configfiles']['serverconfiguration'] = 'Konfiguration';
$lng['admin']['configfiles']['files'] = '<b>Konfigurationsdateien:</b> Bitte &auml;ndern Sie die entsprechenden Konfigurationsdateien<br />oder legen sie mit dem folgenden Inhalt neu an, falls sie nicht existieren.<br /><b>Bitte beachten Sie:</b> Das MySQL-Passwort wurde aus Sicherheitsgr&uuml;nden nicht ersetzt.<br />Bitte ersetzen Sie &quot;MYSQL_PASSWORD&quot; manuell durch das entsprechende Passwort.<br />Falls Sie es vergessen haben sollten, finden Sie es in der Datei &quot;lib/userdata.inc.php&quot;.';
$lng['admin']['configfiles']['commands'] = '<b>Kommandos:</b> Bitte f&uuml;hren Sie die folgenden Kommandos in einer Shell aus.';
$lng['admin']['configfiles']['restart'] = '<b>Neustart:</b> Bitte f&uuml;hren Sie die folgenden Kommandos zum Neuladen<br />der Konfigurationsdateien in einer Shell aus.';
$lng['admin']['templates']['templates'] = 'E-Mail-Vorlagen';
$lng['admin']['templates']['template_add'] = 'Vorlage hinzuf&uuml;gen';
$lng['admin']['templates']['template_edit'] = 'Vorlage bearbeiten';
$lng['admin']['templates']['action'] = 'Aktion';
$lng['admin']['templates']['email'] = 'E-Mail- &amp; Dateivorlagen';
$lng['admin']['templates']['subject'] = 'Betreff';
$lng['admin']['templates']['mailbody'] = 'Mailtext';
$lng['admin']['templates']['createcustomer'] = 'Willkommensmail f&uuml;r neue Kunden';
$lng['admin']['templates']['pop_success'] = 'Willkommensmail f&uuml;r neue E-Mail Konten';
$lng['admin']['wwwserveralias'] = 'www. ServerAlias hinzuf&uuml;gen';
$lng['admin']['templates']['template_replace_vars'] = 'Variablen die in den Vorlagen ersetzt werden:';
$lng['admin']['templates']['FIRSTNAME'] = 'Wird mit dem Vornamen des Kunden ersetzt.';
$lng['admin']['templates']['NAME'] = 'Wird mit dem Namen des Kunden ersetzt.';
$lng['admin']['templates']['USERNAME'] = 'Wird mit dem Benutzernamen des neuen Kundenaccounts ersetzt.';
$lng['admin']['templates']['PASSWORD'] = 'Wird mit dem Passwort des neuen Kundenaccounts ersetzt.';
$lng['admin']['templates']['EMAIL'] = 'Wird mit der Adresse des neuen POP3/IMAP Kontos ersetzt.';

/**
 * Serversettings
 */

$lng['serversettings']['session_timeout']['title'] = 'Session Timeout';
$lng['serversettings']['session_timeout']['description'] = 'Wie lange muss ein Benutzer inaktiv sein, damit die Session ung&uuml;ltig wird? (Sekunden)';
$lng['serversettings']['accountprefix']['title'] = 'Kundenprefix';
$lng['serversettings']['accountprefix']['description'] = 'Welchen Prefix sollen die Kundenaccounts haben?';
$lng['serversettings']['mysqlprefix']['title'] = 'SQL-Prefix';
$lng['serversettings']['mysqlprefix']['description'] = 'Welchen Prefix sollen die MySQL-Benutzerkonten haben?';
$lng['serversettings']['ftpprefix']['title'] = 'FTP-Prefix';
$lng['serversettings']['ftpprefix']['description'] = 'Welchen Prefix sollen die FTP-Benutzerkonten haben?';
$lng['serversettings']['documentroot_prefix']['title'] = 'Heimatverzeichnis';
$lng['serversettings']['documentroot_prefix']['description'] = 'Wo sollen alle Heimatverzeichnisse der Kunden liegen?';
$lng['serversettings']['logfiles_directory']['title'] = 'Apache-Logdateien-Verzeichnis';
$lng['serversettings']['logfiles_directory']['description'] = 'Wo sollen alle Logdateien des Apache liegen?';
$lng['serversettings']['ipaddress']['title'] = 'IP-Adresse';
$lng['serversettings']['ipaddress']['description'] = 'Welche IP-Adresse hat der Server?';
$lng['serversettings']['hostname']['title'] = 'Hostname';
$lng['serversettings']['hostname']['description'] = 'Welchen Hostnamen hat der Server?';
$lng['serversettings']['apachereload_command']['title'] = 'Apache-Reload-Command';
$lng['serversettings']['apachereload_command']['description'] = 'Wie heisst das Skript zum Neuladen der Apache-Konfigurationsdateien?';
$lng['serversettings']['bindconf_directory']['title'] = 'Bind-Config-Directory';
$lng['serversettings']['bindconf_directory']['description'] = 'Wo liegen die Bind-Konfigurationsdateien?';
$lng['serversettings']['bindreload_command']['title'] = 'Bind-Reload-Command';
$lng['serversettings']['bindreload_command']['description'] = 'Wie heisst das Skript zum Neuladen der Bind-Konfigurationsdateien?';
$lng['serversettings']['binddefaultzone']['title'] = 'Bind-Default-Zone';
$lng['serversettings']['binddefaultzone']['description'] = 'Wie heisst die Default-Zone f&uuml;r alle Domains?';
$lng['serversettings']['vmail_uid']['title'] = 'Mails-Uid';
$lng['serversettings']['vmail_uid']['description'] = 'Welche UID sollen die Mails haben?';
$lng['serversettings']['vmail_gid']['title'] = 'Mails-Gid';
$lng['serversettings']['vmail_gid']['description'] = 'Welche GID sollen die Mails haben?';
$lng['serversettings']['vmail_homedir']['title'] = 'Mails-Homedir';
$lng['serversettings']['vmail_homedir']['description'] = 'Wo sollen die E-Mails liegen?';
$lng['serversettings']['adminmail']['title'] = 'Absenderadresse';
$lng['serversettings']['adminmail']['description'] = 'Wie ist die Absenderadresse f&uuml;r E-Mails aus dem Panel?';
$lng['serversettings']['phpmyadmin_url']['title'] = 'phpMyAdmin-URL';
$lng['serversettings']['phpmyadmin_url']['description'] = 'Wo liegt der phpMyAdmin? (muss mit http(s):// beginnen)';
$lng['serversettings']['webmail_url']['title'] = 'WebMail-URL';
$lng['serversettings']['webmail_url']['description'] = 'Wo liegt das WebMail? (muss mit http(s):// beginnen)';
$lng['serversettings']['webftp_url']['title'] = 'WebFTP-URL';
$lng['serversettings']['webftp_url']['description'] = 'Wo liegt das WebFTP? (muss mit http(s):// beginnen)';
$lng['serversettings']['language']['description'] = 'Welche Sprache ist ihre Standardsprache?';
$lng['serversettings']['maxloginattempts']['title'] = 'Max Loginversuche';
$lng['serversettings']['maxloginattempts']['description'] = 'Maximale Anzahl an Loginversuchen bis der Account deaktiviert wird.';
$lng['serversettings']['deactivatetime']['title'] = 'L&auml;nge der Deaktivierung';
$lng['serversettings']['deactivatetime']['description'] = 'Zeitraum (in sek.) f&uuml;r den der Account deaktiviert ist.';
$lng['serversettings']['pathedit']['title'] = 'Pfad-Eingabemethode';
$lng['serversettings']['pathedit']['description'] = 'Soll ein Pfad via Dropdown-Men&uuml; ausgew&auml;hlt oder manuell eingegeben werden k&ouml;nnen.';
$lng['serversettings']['nameservers']['title'] = 'Nameserver';
$lng['serversettings']['nameservers']['description'] = 'Eine durch Komma getrennte Liste mit den Hostnamen aller Nameserver. Der erste ist der prim&auml;re.';
$lng['serversettings']['mxservers']['title'] = 'MX Server';
$lng['serversettings']['mxservers']['description'] = 'Eine durch Komma getrenne Liste die ein Paar mit einer Nummer und den Hostnamen einen MX Servers, getrennt durch ein Leerzeichen, enthaelt (z.B. \'10 mx.example.com\').';

/**
 * CHANGED BETWEEN 1.2.12 and 1.2.13
 */

$lng['mysql']['description'] = 'Hier k&ouml;nnen Sie MySQL-Datenbanken anlegen und l&ouml;schen.<br>Die &Auml;nderungen werden sofort wirksam und die Datenbanken sofort benutzbar.<br>Im Men&uuml; finden Sie einen Link zum phpMyAdmin, mit dem Sie Ihre Datenbankeninhalte einfach bearbeiten k&ouml;nnen.<br><br>Die Zugangsdaten von php-Skripten sind wie folgt: (Die Angaben in <i>kursiver</i> Schrift sind durch die jeweiligen Eintr&auml;ge zu ersetzen!)<br>Hostname: <b><SQL_HOST></b><br>Benutzername: <b><i>Datenbankname</i></b><br>Passwort: <b><i>das gew&auml;hlte Passwort</i></b><br>Datenbank: <b><i>Datenbankname</i></b>';

/**
 * ADDED BETWEEN 1.2.12 and 1.2.13
 */

$lng['admin']['cronlastrun'] = 'Letzter Cronjob';
$lng['serversettings']['paging']['title'] = 'Eintr&auml;ge pro Seite';
$lng['serversettings']['paging']['description'] = 'Wieviele Eintr&auml;ge sollen auf einer Seite gezeigt werden? (0 = Paging deaktivieren)';
$lng['error']['ipstillhasdomains'] = 'Die IP/Port Kombination, die Sie l&ouml;schen wollen ist noch bei einer oder mehreren Domains eingetragen. Bitte &auml;ndern sie die Domains vorher auf eine andere IP/Port Kombination um diese l&ouml;schen zu k&ouml;nnen.';
$lng['error']['cantdeletedefaultip'] = 'Sie k&ouml;nnen die Standard IP/Port Kombination f&uuml;r Reseller nicht l&ouml;schen. Bitte setzen Sie eine andere IP/Port Kombination als Standard um diese l&ouml;schen zu k&ouml;nnen.';
$lng['error']['cantdeletesystemip'] = 'Sie k&ouml;nnen die letzte System IP nicht l&ouml;schen. Entweder legen Sie eine neue IP/Port Kombination als Systemeinstellung an oder &auml;ndern die System IP.';
$lng['error']['myipaddress'] = '\'IP\'';
$lng['error']['myport'] = '\'Port\'';
$lng['error']['myipdefault'] = 'Sie m&uuml;ssen eine IP/Port Kombination ausw&auml;hlen, die den Standard defninieren soll.';
$lng['error']['myipnotdouble'] = 'Diese Kombination aus IP und Post existiert bereits.';
$lng['question']['admin_ip_reallydelete'] = 'Wollen Sie wirklich die IP %s l&ouml;schen?';
$lng['admin']['ipsandports']['ipsandports'] = 'IPs und Ports';
$lng['admin']['ipsandports']['add'] = 'IP/Port hinzuf&uuml;gen';
$lng['admin']['ipsandports']['edit'] = 'IP/Port bearbeiten';
$lng['admin']['ipsandports']['ipandport'] = 'IP/Port';
$lng['admin']['ipsandports']['ip'] = 'IP';
$lng['admin']['ipsandports']['port'] = 'Port';

// ADDED IN 1.2.13-rc3

$lng['error']['cantchangesystemip'] = 'Sie k&ouml;nnen die letzte System IP nicht l&ouml;schen. Entweder legen Sie noch eine neue IP/Port Kombination als Systemeinstellung an oder &auml;ndern die System IP.';
$lng['question']['admin_domain_reallydocrootoutofcustomerroot'] = 'Sind Sie sicher, dass der DocumentRoot dieser Domain au&szlig;erhalb des Heimatverzeichnisses des Kunden liegen soll?';

// ADDED IN 1.2.14-rc1

$lng['admin']['memorylimitdisabled'] = 'Deaktiviert';
$lng['domain']['openbasedirpath'] = 'OpenBasedir-Pfad';
$lng['domain']['docroot'] = 'Oben eingegebener Pfad';
$lng['domain']['homedir'] = 'Heimverzeichnis';
$lng['admin']['valuemandatory'] = 'Dieses Feld muss ausgef&uuml;llt werden';
$lng['admin']['valuemandatorycompany'] = 'Entweder &quot;Name&quot; und &quot;Vorname&quot; oder &quot;Firma&quot; muss ausgef&uuml;llt werden';
$lng['menue']['main']['username'] = 'Angemeldet als: ';
$lng['panel']['urloverridespath'] = 'URL (&uuml;berschreibt Pfad)';
$lng['panel']['pathorurl'] = 'Pfad oder URL';
$lng['error']['sessiontimeoutiswrong'] = '&quot;Session-Timeout&quot; muss ein numerischer Wert sein.';
$lng['error']['maxloginattemptsiswrong'] = '&quot;Maximale Loginversuche&quot; muss ein numerischer Wert sein.';
$lng['error']['deactivatetimiswrong'] = '&quot;L&auml;nge der Deaktivierung&quot; muss numerisch sein.';
$lng['error']['accountprefixiswrong'] = 'Das &quot;Kundenprefix&quot; ist falsch.';
$lng['error']['mysqlprefixiswrong'] = 'Das &quot;SQL-Prefix&quot; ist falsch.';
$lng['error']['ftpprefixiswrong'] = 'Das &quot;FTP-Prefix&quot; ist falsch.';
$lng['error']['ipiswrong'] = 'Die &quot;IP-Adresse&quot; ist falsch. Es ist nur eine g&uuml;ltige IP-Adresse erlaubt.';
$lng['error']['vmailuidiswrong'] = 'Die &quot;Mails-UID&quot; ist falsch. Nur eine numerische UID ist erlaubt.';
$lng['error']['vmailgidiswrong'] = 'Die &quot;Mails-GID&quot; ist falsch. Nur eine numerische GID ist erlaubt.';
$lng['error']['adminmailiswrong'] = 'Die &quot;Absenderadresse&quot; ist fehlerhaft. Es ist nur eine g&uuml;ltige E-Mail-Adresse erlaubt';
$lng['error']['pagingiswrong'] = 'Die &quot;Eintr&auml;ge pro Seite&quot;-Einstellung ist falsch. Nur numerische Zeichen sind erlaubt.';
$lng['error']['phpmyadminiswrong'] = 'Die &quot;phpMyAdmin-URL&quot ist keine g&uuml;ltige URL.';
$lng['error']['webmailiswrong'] = 'Die &quot;WebMail-URL&quot ist keine g&uuml;ltige URL.';
$lng['error']['webftpiswrong'] = 'Die &quot;WebFTP-URL&quot ist keine g&uuml;ltige URL.';
$lng['domains']['hasaliasdomains'] = 'Hat Aliasdomain(s)';
$lng['serversettings']['defaultip']['title'] = 'Standard IP/Port';
$lng['serversettings']['defaultip']['description'] = 'Welche IP/Port-Kombination soll standardm&auml;&szlig;ig verwendet werden?';
$lng['domains']['statstics'] = 'Statistiken';
$lng['panel']['ascending'] = 'aufsteigend';
$lng['panel']['decending'] = 'absteigend';
$lng['panel']['search'] = 'Suche';
$lng['panel']['used'] = 'benutzt';

// ADDED IN 1.2.14-rc3

$lng['panel']['translator'] = '&Uuml;bersetzung';

// ADDED IN 1.2.14-rc4

$lng['error']['stringformaterror'] = 'Der Wert des Feldes &quot;%s&quot; ist nicht im erwarteten Format.';

// ADDED IN 1.2.15-rc1

$lng['admin']['serversoftware'] = 'Serversoftware';
$lng['admin']['phpversion'] = 'PHP-Version';
$lng['admin']['phpmemorylimit'] = 'PHP-Memory-Limit';
$lng['admin']['mysqlserverversion'] = 'MySQL Server Version';
$lng['admin']['mysqlclientversion'] = 'MySQL Client Version';
$lng['admin']['webserverinterface'] = 'Webserver Interface';
$lng['domains']['isassigneddomain'] = 'Ist zugewiesene Domain';
$lng['serversettings']['phpappendopenbasedir']['title'] = 'An OpenBasedir anzuh&auml;ngende Pfade';
$lng['serversettings']['phpappendopenbasedir']['description'] = 'Diese (durch Doppelpunkte getrennten) Pfade werden dem OpenBasedir-Statement in jedem vhost-Container angeh&auml;ngt.';

// CHANGED IN 1.2.15-rc1

$lng['error']['loginnameissystemaccount'] = 'Sie k&ouml;nnen keinen Account anlegen, welcher wie ein Systemaccount aussieht (also zum Beispiel mit &quot;%s&quot; anf&auml;ngt). Bitte w&auml;hlen Sie einen anderen Accountnamen.';
$lng['error']['youcantdeleteyourself'] = 'Aus Sicherheitsgr&uuml;nden k&ouml;nnen Sie sich nicht selbst l&ouml;schen.';
$lng['error']['youcanteditallfieldsofyourself'] = 'Hinweis: Aus Sicherheitsgr&uuml;nden k&ouml;nnen Sie nicht alle Felder Ihres eigenen Accounts bearbeiten.';

// ADDED IN 1.2.16-svn1

$lng['serversettings']['natsorting']['title'] = 'Nat&uuml;rliche Sortierung in der Listenansicht nutzen';
$lng['serversettings']['natsorting']['description'] = 'Sortiert die Liste in der Reihenfolge web1 -> web2 -> web11 anstatt web1 -> web11 -> web2.';

// ADDED IN 1.2.16-svn2

$lng['serversettings']['deactivateddocroot']['title'] = 'Docroot f&uuml;r deaktivierte Benutzer';
$lng['serversettings']['deactivateddocroot']['description'] = 'Dieser Pfad wird als docroot f&uuml;r deaktivierte Benutzer verwendet. Wenn leer, wird kein vHost erstellt.';

// ADDED IN 1.2.16-svn4

$lng['panel']['reset'] = '&Auml;nderungen verwerfen';
$lng['admin']['accountsettings'] = 'Konteneinstellungen';
$lng['admin']['panelsettings'] = 'Paneleinstellungen';
$lng['admin']['systemsettings'] = 'Systemeinstellungen';
$lng['admin']['webserversettings'] = 'Webservereinstellungen';
$lng['admin']['mailserversettings'] = 'Mailservereinstellungen';
$lng['admin']['nameserversettings'] = 'Nameservereinstellungen';
$lng['admin']['updatecounters'] = 'Ressourcenverbrauch';
$lng['question']['admin_counters_reallyupdate'] = 'Wollen Sie den Ressourcenverbrauch neu berechnen?';
$lng['panel']['pathDescription'] = 'Wenn das Verzeichnis nicht existiert, wird es automatisch erstellt.';

// ADDED IN 1.2.16-svn6

$lng['mails']['trafficninetypercent']['mailbody'] = 'Sehr geehrte(r) {NAME},\n\nSie haben bereits {TRAFFICUSED} MB von Ihren insgesamt {TRAFFIC} MB Traffic verbraucht.\nDies sind mehr als 90%.\n\nVielen Dank,\ndas SysCP-Team';
$lng['mails']['trafficninetypercent']['subject'] = 'Sie erreichen bald Ihr Traffic-Limit';
$lng['admin']['templates']['trafficninetypercent'] = 'Hinweismail f&uuml;r Kunden, wenn sie 90% des Traffics verbraucht haben';
$lng['admin']['templates']['TRAFFIC'] = 'Wird mit Traffic, der dem Kunden zugewiesen wurde, ersetzt.';
$lng['admin']['templates']['TRAFFICUSED'] = 'Wird mit Traffic, der vom Kunden bereits verbraucht wurde, ersetzt.';

// ADDED IN 1.2.16-svn7

$lng['admin']['subcanemaildomain']['never'] = 'Nie';
$lng['admin']['subcanemaildomain']['choosableno'] = 'W&auml;hlbar, Standardwert: Nein';
$lng['admin']['subcanemaildomain']['choosableyes'] = 'W&auml;hlbar, Standardwert: Ja';
$lng['admin']['subcanemaildomain']['always'] = 'Immer';
$lng['changepassword']['also_change_webalizer'] = ' Auch Passwort vom Webalizer &auml;ndern';

// ADDED IN 1.2.16-svn8

$lng['serversettings']['mailpwcleartext']['title'] = 'Passw&ouml;rter der Mail-Konten auch im Klartext in der Datenbank speichern';
$lng['serversettings']['mailpwcleartext']['description'] = 'Wenn diese Einstellung auf Ja gesetzt wird, werden alle Passw&ouml;rter auch unverschl&uuml;sselt (also im Klartext, f&uuml;r jeden mit Zugriff auf die SysCP-Datenbank sofort lesbar) in der mail_users-Tabelle gespeichert. Aktivieren Sie diese Option nur dann, wenn Sie sie wirklich gebrauchen!';
$lng['serversettings']['mailpwcleartext']['removelink'] = 'Klicken Sie hier, um alle unverschl&uuml;sselten Passw&ouml;rter aus der Tabelle zu entfernen.';
$lng['question']['admin_cleartextmailpws_reallywipe'] = 'Wollen Sie wirklich alle unverschl&uuml;sselten Passw&ouml;rter aus der Tabelle mail_users entfernen? Dieser Schritt kann nicht r&uuml;ckg&auml;ngig gemacht werden!';
$lng['admin']['configfiles']['overview'] = '&Uuml;bersicht';
$lng['admin']['configfiles']['wizard'] = 'Assistent';
$lng['admin']['configfiles']['distribution'] = 'Distribution';
$lng['admin']['configfiles']['service'] = 'Service';
$lng['admin']['configfiles']['daemon'] = 'Daemon';
$lng['admin']['configfiles']['http'] = 'Webserver (HTTP)';
$lng['admin']['configfiles']['dns'] = 'Nameserver (DNS)';
$lng['admin']['configfiles']['mail'] = 'Mailserver (POP3/IMAP)';
$lng['admin']['configfiles']['smtp'] = 'Mailserver (SMTP)';
$lng['admin']['configfiles']['ftp'] = 'FTP-Server';
$lng['admin']['configfiles']['etc'] = 'Sonstige (System)';
$lng['admin']['configfiles']['choosedistribution'] = '-- Distribution w&auml;hlen --';
$lng['admin']['configfiles']['chooseservice'] = '-- Service w&auml;hlen --';
$lng['admin']['configfiles']['choosedaemon'] = '-- Daemon w&auml;hlen --';
$lng['admin']['trafficlastrun'] = 'Letzte Trafficberechnung';

// ADDED IN 1.2.16-svn10

$lng['serversettings']['ftpdomain']['title'] = 'FTP-Benutzerkonten @domain';
$lng['serversettings']['ftpdomain']['description'] = 'K&ouml;nnen Kunden FTP-Benutzerkonten user@customerdomain anlegen?';
$lng['panel']['back'] = 'Zur&uuml;ck';

// ADDED IN 1.2.16-svn12

$lng['serversettings']['mod_log_sql']['title'] = 'Logs in Datenbank zwischenspeichern';
$lng['serversettings']['mod_log_sql']['description'] = '<a href="http://www.outoforder.cc/projects/apache/mod_log_sql/" title="mod_log_sql">mod_log_sql</a> benutzen um die Webzugriffe tempor&auml;r zu speichern<br /><b>Dies ben&ouml;tigt eine spezielle Apache-Konfiguration</b>';
$lng['serversettings']['mod_fcgid']['title'] = 'PHP &uuml;ber mod_fcgid/suexec einbinden';
$lng['serversettings']['mod_fcgid']['description'] = 'mod_fcgid/suexec/libnss_mysql benutzen um PHP unter dem jeweiligen Useraccount laufen zu lassen<br /><b>Dies ben&ouml;tigt eine spezielle <a href="http://files.syscp.org/docs/mod_log_sql/" title="mod_log_sql - Dokumentation">Apache-Konfiguration</a></b>';
$lng['serversettings']['sendalternativemail']['title'] = 'Alternative E-Mail-Adresse benutzen';
$lng['serversettings']['sendalternativemail']['description'] = 'W&auml;hrend dem erstellen eines Accounts das Passwort an eine andere E-Mail-Adresse senden';
$lng['emails']['alternative_emailaddress'] = 'Alternative E-Mail-Adresse';
$lng['mails']['pop_success_alternative']['mailbody'] = 'Hallo,\n\nihr E-Mail-Konto {USERNAME}\nwurde erfolgreich eingerichtet.\nIhr Passwort lautet {PASSWORD}.\n\nDies ist eine automatisch generierte\neMail, bitte antworten Sie nicht auf\ndiese Mitteilung.\n\nIhr SysCP-Team';
$lng['mails']['pop_success_alternative']['subject'] = 'E-Mail-Konto erfolgreich eingerichtet';
$lng['admin']['templates']['pop_success_alternative'] = 'Willkommensmail f&uuml;r neue E-Mail Konten f&uuml;r die alternative Email Addresse';
$lng['admin']['templates']['EMAIL_PASSWORD'] = 'Wird mit dem Passwort des neuen POP3/IMAP Kontos ersetzt.';

// ADDED IN 1.2.16-svn13

$lng['error']['documentrootexists'] = 'Es existiert noch ein Verzeichnis &quot;%s&quot; f&uuml;r diesen Kunden. Bitte dieses vorher l&ouml;schen.';

// ADDED IN 1.2.16-svn14

$lng['serversettings']['apacheconf_vhost']['title'] = 'Apache vHost-Konfigurations-Datei/Verzeichnis-Name';
$lng['serversettings']['apacheconf_vhost']['description'] = 'Wo soll die vHost-Konfigurationen abgelegt werden? Sie k&ouml;nnen entweder eine Datei (also mit allen vhosts) oder einen Ordner (mit einer Datei pro vhost) angeben.';
$lng['serversettings']['apacheconf_diroptions']['title'] = 'Apache Verzeichnisoption-Konfigurations-Datei/Verzeichnis-Name';
$lng['serversettings']['apacheconf_diroptions']['description'] = 'Wo soll die Verzeichnisoption-Konfigurationen abgelegt werden? Sie k&ouml;nnen entweder eine Datei (also mit allen vhosts) oder einen Ordner (mit einer Datei pro vhost) angeben.';
$lng['serversettings']['apacheconf_htpasswddir']['title'] = 'Apache htpasswd Verzeichnisname';
$lng['serversettings']['apacheconf_htpasswddir']['description'] = 'Wo sollen die htpasswd-Dateien f&uuml; den Verzeichnisschutz abgelegt werden?';

// ADDED IN 1.2.16-svn15

$lng['error']['formtokencompromised'] = 'Das Formular scheint manipuliert worden zu sein. Aus Sicherheitsgr&uuml;nden wurden Sie ausgelogged.';
$lng['serversettings']['mysql_access_host']['title'] = 'MySQL-Access-Hosts';
$lng['serversettings']['mysql_access_host']['description'] = 'Eine durch Komma getrennte Liste mit den Hostnamen aller Hostnames/IP-Adressen von denen sich die Benutzer einloggen d&uuml;rfen.';

// CHANGED IN 1.2.18

$lng['serversettings']['mod_log_sql']['description'] = '<a href="http://www.outoforder.cc/projects/apache/mod_log_sql/" title="mod_log_sql">mod_log_sql</a> benutzen um die Webzugriffe tempor&auml;r zu speichern<br /><b>Dies ben&ouml;tigt eine spezielle <a href="http://files.syscp.org/docs/mod_log_sql/" title="mod_log_sql - Dokumentation">Apache-Konfiguration</a></b>';
$lng['serversettings']['mod_fcgid']['description'] = 'mod_fcgid/suexec/libnss_mysql benutzen um PHP unter dem jeweiligen Useraccount laufen zu lassen<br /><b>Dies ben&ouml;tigt eine spezielle Apache-Konfiguration. Alle nachfolgenden Optionen sind nur g&uuml;ltig wenn das Modul aktiviert wird.</b>';

// ADDED IN 1.2.18-svn1

$lng['admin']['ipsandports']['create_listen_statement'] = 'Erstelle Listen-Eintrag';
$lng['admin']['ipsandports']['create_namevirtualhost_statement'] = 'Erstelle NameVirtualHost-Eintrag';
$lng['admin']['ipsandports']['create_vhostcontainer'] = 'Erstelle vHost-Container';
$lng['admin']['ipsandports']['create_vhostcontainer_servername_statement'] = 'Erstelle ServerName-Eintrag im vHost-Container';

// ADDED IN 1.2.18-svn2

$lng['admin']['webalizersettings'] = 'Webalizereinstellungen';
$lng['admin']['webalizer']['normal'] = 'Normal';
$lng['admin']['webalizer']['quiet'] = 'Leise';
$lng['admin']['webalizer']['veryquiet'] = 'Keine Ausgaben';
$lng['serversettings']['webalizer_quiet']['title'] = 'Webalizerausgabe';
$lng['serversettings']['webalizer_quiet']['description'] = 'Ausgabefreudigkeit des webalizer-Programms';

// ADDED IN 1.2.18-svn3

$lng['ticket']['admin_email'] = 'root@localhost';
$lng['ticket']['noreply_email'] = 'tickets@syscp';
$lng['admin']['ticketsystem'] = 'Support-Tickets';
$lng['menue']['ticket']['ticket'] = 'Support Tickets';
$lng['menue']['ticket']['categories'] = 'Support Kategorien';
$lng['menue']['ticket']['archive'] = 'Ticket-Archiv';
$lng['ticket']['description'] = 'Hier k&ouml;nnen Sie Hilfe-Anfragen an Ihren zust&auml;ndigen Administrator senden.<br />Benachrichtigungen werden per E-Mail verschickt.';
$lng['ticket']['ticket_new'] = 'Neues Support-Ticket erstellen';
$lng['ticket']['ticket_reply'] = 'Auf Support-Ticket antworten';
$lng['ticket']['ticket_reopen'] = 'Ticket wiederer&ouml;ffnen';
$lng['ticket']['ticket_newcateory'] = 'Neue Kategorie erstellen';
$lng['ticket']['ticket_editcateory'] = 'Kategorie bearbeiten';
$lng['ticket']['ticket_view'] = 'Ticketverlauf ansehen';
$lng['ticket']['ticketcount'] = 'Anzahl Tickets';
$lng['ticket']['ticket_answers'] = 'Antworten';
$lng['ticket']['lastchange'] = 'Letzte Aktualisierung';
$lng['ticket']['subject'] = 'Betreff';
$lng['ticket']['status'] = 'Status';
$lng['ticket']['lastreplier'] = 'Letzte Antwort';
$lng['ticket']['priority'] = 'Priorit&auml;t';
$lng['ticket']['low'] = '<span class="ticket_low">Niedrig</span>';
$lng['ticket']['normal'] = '<span class="ticket_normal">Normal</span>';
$lng['ticket']['high'] = '<span class="ticket_high">Hoch</span>';
$lng['ticket']['unf_low'] = 'Niedrig';
$lng['ticket']['unf_normal'] = 'Normal';
$lng['ticket']['unf_high'] = 'Hoch';
$lng['ticket']['lastchange'] = 'Letzte &Auml;nderung';
$lng['ticket']['lastchange_from'] = 'Anfangsdatum (tt.mm.jjjj)';
$lng['ticket']['lastchange_to'] = 'Enddatum (tt.mm.jjjj)';
$lng['ticket']['category'] = 'Kategorie';
$lng['ticket']['no_cat'] = 'Keine';
$lng['ticket']['message'] = 'Nachricht';
$lng['ticket']['show'] = 'Anschauen';
$lng['ticket']['answer'] = 'Antworten';
$lng['ticket']['close'] = 'Schlie&szlig;en';
$lng['ticket']['reopen'] = 'Wiederer&ouml;ffnen';
$lng['ticket']['archive'] = 'Archivieren';
$lng['ticket']['ticket_delete'] = 'Ticket l&ouml;schen';
$lng['ticket']['lastarchived'] = 'Zuletzt archivierte Tickets';
$lng['ticket']['archivedtime'] = 'Archiviert';
$lng['ticket']['open'] = 'Offen';
$lng['ticket']['wait_reply'] = 'Warte auf Antwort';
$lng['ticket']['replied'] = 'Beantwortet';
$lng['ticket']['closed'] = 'Geschlossen';
$lng['ticket']['staff'] = 'Mitarbeiter';
$lng['ticket']['customer'] = 'Kunde';
$lng['ticket']['old_tickets'] = 'Bisheriger Ticketverlauf';
$lng['ticket']['search'] = 'Archiv durchsuchen';
$lng['ticket']['nocustomer'] = 'Keine Angabe';
$lng['ticket']['archivesearch'] = 'Archiv Suchergebnis';
$lng['ticket']['noresults'] = 'Keine Tickets gefunden';
$lng['ticket']['notmorethanxopentickets'] = 'Zum Schutz gegen Spam k&ouml;nnen Sie nicht mehr als %s offene Tickets haben';
$lng['ticket']['supportstatus'] = 'Support-Status';
$lng['ticket']['supportavailable'] = '<span class="ticket_low">Der Support ist besetzt und steht zu Ihrer Verf&uuml;gung.</span>';
$lng['ticket']['supportnotavailable'] = '<span class="ticket_high">Der Support ist zur Zeit nicht besetzt.</span>';
$lng['admin']['templates']['ticket'] = 'Benachrichtigungs-Mails f&uuml;r Support-Tickets';
$lng['admin']['templates']['SUBJECT'] = 'Wird mit dem Betreff des Support-Tickets ersetzt';
$lng['admin']['templates']['new_ticket_for_customer'] = 'Kunden-Information das das Ticket &uuml;bermittelt wurde';
$lng['admin']['templates']['new_ticket_by_customer'] = 'Admin-Benachrichtigung f&uuml;r ein Ticket eines Kunden';
$lng['admin']['templates']['new_reply_ticket_by_customer'] = 'Admin-Benachrichtigung f&uuml;r ein beantwortetes Ticket';
$lng['admin']['templates']['new_ticket_by_staff'] = 'Kunden-Benachrichtigung f&uuml;r ein Ticket eines Mitarbeiters';
$lng['admin']['templates']['new_reply_ticket_by_staff'] = 'Kunden-Benachrichtigung f&uuml;r ein beantwortetes Ticket';
$lng['mails']['new_ticket_for_customer']['mailbody'] = 'Hallo {FIRSTNAME} {NAME},\n\nihr Support-Ticket mit dem Betreff "{SUBJECT}" wurde erfolgreich gesendet.\n\nSobald ihr Ticket beantwortet wurde, werden Sie per E-Mail benachrichtigt.\n\nVielen Dank,\nthe SysCP-Team';
$lng['mails']['new_ticket_for_customer']['subject'] = 'Wir haben Ihr Support-Ticket erhalten.';
$lng['mails']['new_ticket_by_customer']['mailbody'] = 'Hallo Admin,\n\nein neues Support-Ticket wurde uebermittelt.\n\nBitte melde Dich an um es aufzurufen.\n\nVielen Dank,\ndas SysCP-Team';
$lng['mails']['new_ticket_by_customer']['subject'] = 'Neues Support-Ticket';
$lng['mails']['new_reply_ticket_by_customer']['mailbody'] = 'Hallo Admin,\n\ndas Support-Ticket "{SUBJECT}" wurde von einem Kunden beantwortet.\n\nBitte melde Dich an um es aufzurufen.\n\nVielen Dank,\ndas SysCP-Team';
$lng['mails']['new_reply_ticket_by_customer']['subject'] = 'Neue Antwort zu einem Support-Ticket';
$lng['mails']['new_ticket_by_staff']['mailbody'] = 'Hallo {FIRSTNAME} {NAME},\n\nein Support-Ticket mit dem Betreff "{SUBJECT}" wurde an Sie &uuml;bermittelt.\n\nBitte melden Sie sich an, um das Ticket aufzurufen.\n\nVielen Dank,\ndas SysCP-Team';
$lng['mails']['new_ticket_by_staff']['subject'] = 'Neues Support-Ticket';
$lng['mails']['new_reply_ticket_by_staff']['mailbody'] = 'Hallo {FIRSTNAME} {NAME},\n\ndas Support-Ticket mit dem Betreff "{SUBJECT}" wurde von einem Mitarbeiter beantwortet.\n\nBitte melden Sie sich an, um das Ticket aufzurufen.\n\nVielen Dank,\ndas SysCP-Team';
$lng['mails']['new_reply_ticket_by_staff']['subject'] = 'Neue Antwort zu einem Support-Ticket';
$lng['question']['ticket_reallyclose'] = 'Wollen Sie das Ticket "%s" wirklich schlie&szlig;en?';
$lng['question']['ticket_reallydelete'] = 'Wollen Sie das Ticket "%s" wirklich l&ouml;schen?';
$lng['question']['ticket_reallydeletecat'] = 'Wollen Sie die Kategorie "%s" wirklich l&ouml;schen?';
$lng['question']['ticket_reallyarchive'] = 'Wollen Sie das Ticket "%s" wirklich in das Archiv verschieben?';
$lng['error']['mysubject'] = '\'' . $lng['ticket']['subject'] . '\'';
$lng['error']['mymessage'] = '\'' . $lng['ticket']['message'] . '\'';
$lng['error']['mycategory'] = '\'' . $lng['ticket']['category'] . '\'';
$lng['error']['nomoreticketsavailable'] = 'Sie haben Ihr Ticketkontingent aufgebraucht. Bitte kontaktieren Sie ihren Administrator.';
$lng['error']['nocustomerforticket'] = 'Keine Kunden vorhanden um ein Ticket zu erstellen.';
$lng['error']['categoryhastickets'] = 'In dieser Kategorie befinden sich noch Tickets.<br />Bitte l&ouml;schen Sie diese um die Kategorie zu l&ouml;schen';
$lng['error']['notmorethanxopentickets'] = $lng['ticket']['notmorethanxopentickets'];
$lng['admin']['ticketsettings'] = 'Support-Ticket Einstellungen';
$lng['admin']['archivelastrun'] = 'Letzte Ticket-Archivierung';
$lng['serversettings']['ticket']['noreply_email'] = 'Keine-Antwort E-Mail Adresse';
$lng['serversettings']['ticket']['noreply_email_desc'] = 'Die Absender-Adresse der Support-Tickets. Meist sowas wie KEINE-ANTWORT@domain.tld';
$lng['serversettings']['ticket']['worktime_begin'] = 'Beginn Support-Zeit (hh:mm)';
$lng['serversettings']['ticket']['worktime_begin_desc'] = 'Beginn der Zeit in der der Support besetzt ist.';
$lng['serversettings']['ticket']['worktime_end'] = 'Ende Support-Zeit (hh:mm)';
$lng['serversettings']['ticket']['worktime_end_desc'] = 'Ende der Zeit in der der Support besetzt ist.';
$lng['serversettings']['ticket']['worktime_sat'] = 'Support an Samstagen besetzt?';
$lng['serversettings']['ticket']['worktime_sun'] = 'Support an Sonntagen besetzt?';
$lng['serversettings']['ticket']['worktime_all'] = 'Kein zeitlich begrenzter Support';
$lng['serversettings']['ticket']['worktime_all_desc'] = 'Wenn "Ja" &uuml;berschreibt diese Option Start- und Endzeit des Supports';
$lng['serversettings']['ticket']['archiving_days'] = 'Nach wievielen Tagen sollen abgeschlossene Tickets archiviert werden?';
$lng['customer']['tickets'] = 'Support-Tickets';

// ADDED IN 1.2.18-svn4

$lng['admin']['domain_nocustomeraddingavailable'] = 'Es k&ouml;nnen derzeit keine Domains angelegt werden. Sie m&uuml;ssen zuerst einen Kunden anlegen';
$lng['serversettings']['ticket']['enable'] = 'Ticketsystem aktivieren';
$lng['serversettings']['ticket']['concurrentlyopen'] = 'Wieviele Tickets kann ein Kunde gleichzeitig &ouml;ffnen?';
$lng['error']['norepymailiswrong'] = 'Die &quot;Keine-Antwort-Adresse&quot; ist fehlerhaft. Es ist nur eine g&uuml;ltige E-Mail-Adresse erlaubt';
$lng['error']['tadminmailiswrong'] = 'Die &quot;Ticket-Admin-Adresse&quot; ist fehlerhaft. Es ist nur eine g&uuml;ltige E-Mail-Adresse erlaubt';
$lng['ticket']['awaitingticketreply'] = 'Sie haben %s unbeantwortete(s) Support-Ticket(s)';

// ADDED IN 1.2.18-svn5

$lng['serversettings']['ticket']['noreply_name'] = 'Ticket E-Mail Absendername';

// ADDED IN 1.2.19-svn

$lng['serversettings']['mod_fcgid']['configdir'] = 'Konfigurations-Verzeichnis';
$lng['serversettings']['mod_fcgid']['configdir_desc'] = 'Wo sollen alle Konfigurationsdateien von fcgid liegen? Wenn Sie keine selbst kompilierte suexec Binary benutzen, was in der Regel der Fall ist, muss dieser Pfad unter /var/www/ liegen.';
$lng['serversettings']['mod_fcgid']['tmpdir'] = 'Temp Verzeichnis';

// ADDED IN 1.2.19-svn3

$lng['serversettings']['ticket']['reset_cycle'] = 'Turnus verbrauchte Tickets zur&uuml;cksetzen';
$lng['serversettings']['ticket']['reset_cycle_desc'] = 'Setzt die Anzahl der vom Kunden verbrauchten Tickets in dem angegebenen Turnus auf 0';
$lng['admin']['tickets']['daily'] = 'T&auml;glich';
$lng['admin']['tickets']['weekly'] = 'W&ouml;chentlich';
$lng['admin']['tickets']['monthly'] = 'Monatlich';
$lng['admin']['tickets']['yearly'] = 'J&auml;hrlich';
$lng['error']['ticketresetcycleiswrong'] = 'Der Turnus des Ticket-Zur&uuml;cksetzen muss "T&auml;glich", "W&ouml;chentlich", "Monatlich" oder "J&auml;hrlich" sein.';

// ADDED IN 1.2.19-svn4

$lng['menue']['traffic']['traffic'] = 'Traffic';
$lng['menue']['traffic']['current'] = 'Aktueller Monat';
$lng['traffic']['month'] = "Monat";
$lng['traffic']['months'][1] = "Januar";
$lng['traffic']['months'][2] = "Februar";
$lng['traffic']['months'][3] = "M&auml;rz";
$lng['traffic']['months'][4] = "April";
$lng['traffic']['months'][5] = "Mai";
$lng['traffic']['months'][6] = "Juni";
$lng['traffic']['months'][7] = "Juli";
$lng['traffic']['months'][8] = "August";
$lng['traffic']['months'][9] = "September";
$lng['traffic']['months'][10] = "Oktober";
$lng['traffic']['months'][11] = "November";
$lng['traffic']['months'][12] = "Dezember";
$lng['traffic']['mb'] = "Traffic (MB)";
$lng['traffic']['day'] = "Tag";
$lng['traffic']['distribution'] = '<font color="#019522">FTP</font> | <font color="#0000FF">HTTP</font> | <font color="#800000">Mail</font>';
$lng['traffic']['sumhttp'] = 'Summe HTTP-Traffic in';
$lng['traffic']['sumftp'] = 'Summe FTP-Traffic in';
$lng['traffic']['summail'] = 'Summe Mail-Traffic in';

// ADDED IN 1.2.19-svn4.5

$lng['serversettings']['no_robots']['title'] = 'Erlaube die Indizierung deines SysCP durch Suchmaschinen';

// ADDED IN 1.2.19-svn6

$lng['admin']['loggersettings'] = 'Log Einstellungen';
$lng['serversettings']['logger']['enable'] = 'Logging ja/nein';
$lng['serversettings']['logger']['severity'] = 'Logging Level';
$lng['admin']['logger']['normal'] = 'Normal';
$lng['admin']['logger']['paranoid'] = 'Paranoid';
$lng['serversettings']['logger']['types'] = 'Log-Art(en)';
$lng['serversettings']['logger']['types_desc'] = 'Tragen Sie hier die gew&uuml;nschten Logtypen kommagetrennt ein.<br />M&ouml;gliche Logtypen sind: syslog, file, mysql';
$lng['serversettings']['logger']['logfile'] = 'Log-Datei Pfad inklusive Dateinamen';
$lng['error']['logerror'] = 'Log-Fehler: %s';
$lng['serversettings']['logger']['logcron'] = 'Log Cronjobs (einen Durchgang)';
$lng['question']['logger_reallytruncate'] = 'Wollen Sie die Tabelle "%s" wirklich leeren?';
$lng['admin']['loggersystem'] = 'System-Logging';
$lng['menue']['logger']['logger'] = 'System-Logging';
$lng['logger']['date'] = 'Datum';
$lng['logger']['type'] = 'Typ';
$lng['logger']['action'] = 'Aktion';
$lng['logger']['user'] = 'Benutzer';
$lng['logger']['truncate'] = 'Log leeren';

// ADDED IN 1.2.19-svn7

$lng['serversettings']['ssl']['use_ssl'] = 'SSL nutzen';
$lng['serversettings']['ssl']['ssl_cert_file'] = 'Pfad zum Zertifikat';
$lng['serversettings']['ssl']['openssl_cnf'] = 'Standardwerte zum Erstellen eines Zertifikats';
$lng['panel']['reseller'] = 'Reseller';
$lng['panel']['admin'] = 'Administrator';
$lng['panel']['customer'] = 'Kunde/n';
$lng['error']['nomessagetosend'] = 'Keine Nachricht angegeben';
$lng['error']['noreceipientsgiven'] = 'Keine Empf&auml;nger angegeben';
$lng['admin']['emaildomain'] = 'E-Maildomain';
$lng['admin']['email_only'] = 'Nur E-Mail?';
$lng['admin']['wwwserveralias'] = 'Einen &quot;www.&quot; ServerAlias hinzuf&uuml;gen';
$lng['admin']['ipsandports']['enable_ssl'] = 'Ist dies ein SSL-Port?';
$lng['admin']['ipsandports']['ssl_cert_file'] = 'Pfad zum Zertifikat';
$lng['panel']['send'] = 'Versenden';
$lng['admin']['subject'] = 'Betreff';
$lng['admin']['receipient'] = 'Empf&auml;nger';
$lng['admin']['message'] = 'Rundmail senden';
$lng['admin']['text'] = 'Nachricht';
$lng['menu']['message'] = 'Nachrichten';
$lng['error']['errorsendingmail'] = 'Das Versenden der Nachricht an &quot;%s&quot; schlug fehl.';
$lng['error']['cannotreaddir'] = 'Der Ordner &quot;%s&quot; kann nicht gelesen werden';
$lng['message']['success'] = 'Nachricht erfolgreich an %s Empf&auml;nger gesendet';
$lng['message']['noreceipients'] = 'Es wurde keine E-Mail versendet da sich keine Empf&auml;nger in der Datenbank befinden';
$lng['admin']['sslsettings'] = 'SSL Einstellungen';
$lng['cronjobs']['notyetrun'] = 'Bisher nicht gestartet';
$lng['install']['servername_should_be_fqdn'] = 'Der Servername sollte eine FQDN sein und keine IP Adresse';
$lng['serversettings']['default_vhostconf']['title'] = 'Standard Vhost-Einstellungen';
$lng['serversettings']['default_vhostconf']['description'] = 'Der Inhalt dieses Feldes wird direkt in jeden Domain-vHost-Container &uuml;bernommen. Achtung: Der Code wird nicht auf Fehler gepr&uuml;ft. Etwaige Fehler werden also auch &uuml;bernommen. Apache k&ouml;nnte nicht mehr starten!';
$lng['emails']['quota'] = 'Kontingent';
$lng['emails']['noquota'] = 'Kein Kontingent';
$lng['emails']['updatequota'] = 'Update';
$lng['serversettings']['mail_quota']['title'] = 'Mailbox-Kontingent';
$lng['serversettings']['mail_quota']['description'] = 'Standard-Kontingent f&uuml;r neuerstellte E-Mail Benutzerkonten';
$lng['serversettings']['mail_quota_enabled']['title'] = 'Nutze E-Mail Kontingent f&uuml;r Kunden';
$lng['serversettings']['mail_quota_enabled']['description'] = 'Aktiviere Kontingent f&uuml;r E-Mailkonten. Standard ist <b>Nein</b> da dies eine spezielle Konfiguration voraussetzt.';
$lng['serversettings']['mail_quota_enabled']['removelink'] = 'Hier klicken, um alle E-Mail Kontingente zu entfernen';
$lng['question']['admin_quotas_reallywipe'] = 'Sind Sie sicher, dass alle E-Mail Kontingente aus der Tabelle mail_users entfernt werden sollen? Dieser Schritt kann nicht r&uuml;ckg&auml;ngig gemacht werden!';
$lng['error']['vmailquotawrong'] = 'Die Kontingent-Gr&ouml;&szlig;e muss zwischen 1 und 999 liegen';
$lng['customer']['email_quota'] = 'E-Mail Kontingent';
$lng['customer']['email_imap'] = 'E-Mail IMAP';
$lng['customer']['email_pop3'] = 'E-Mail POP3';
$lng['customer']['mail_quota'] = 'E-Mail Kontingent';
$lng['error']['invalidip'] = 'Ung&uuml;ltige IP Adresse: %s';
$lng['serversettings']['decimal_places'] = 'Nachkommastellen bei der Ausgabe von Traffic/Webspace';

// ADDED IN 1.2.19-svn8

$lng['admin']['dkimsettings'] = 'DomainKey - Einstellungen';
$lng['dkim']['dkim_prefix']['title'] = 'Prefix';
$lng['dkim']['dkim_prefix']['description'] = 'Wie lautet der Pfad zu den DKIM RSA-Dateien sowie den Einstellungsdateien des Milter-Plugins?';
$lng['dkim']['dkim_domains']['title'] = 'Domains Dateiname';
$lng['dkim']['dkim_domains']['description'] = '<em>Dateiname</em> der DKIM Domains Angabe aus der dkim-milter-Konfigurationsdatei';
$lng['dkim']['dkim_dkimkeys']['title'] = 'KeyList Dateiname';
$lng['dkim']['dkim_dkimkeys']['description'] = '<em>Dateiname</em> der DKIM KeyList Angabe aus der dkim-milter-Konfigurationsdatei';
$lng['dkim']['dkimrestart_command']['title'] = 'Milter Restart Kommando';
$lng['dkim']['dkimrestart_command']['description'] = 'Wie lautet das Kommando zum Neustarten des DKIM Milter Dienstes?';

// ADDED IN 1.2.19-svn9

$lng['admin']['caneditphpsettings'] = 'Kann PHP-bezogene Domaineinstellungen machen?';

// ADDED IN 1.2.19-svn12

$lng['admin']['allips'] = 'Alle IP\'s';
$lng['panel']['nosslipsavailable'] = 'F&uuml;r diesen Server wurden noch keine SSL IP/Port Kombinationen eingetragen';
$lng['ticket']['by'] = 'von';
$lng['dkim']['use_dkim']['title'] = 'DKIM Support aktivieren?';
$lng['dkim']['use_dkim']['description'] = 'Wollen Sie das Domain Keys (DKIM) System benutzen?';
$lng['error']['invalidmysqlhost'] = 'Ung&uuml;ltige MySQL Host Adresse: %s';
$lng['error']['cannotuseawstatsandwebalizeratonetime'] = 'Webalizer und Awstats k&ouml;nnen nicht zur gleichen Zeit aktiviert werden, bitte w&auml;hlen Sie eines aus';
$lng['serversettings']['webalizer_enabled'] = 'Nutze Webalizer Statistiken';
$lng['serversettings']['awstats_enabled'] = 'Nutze AWStats Statistiken';
$lng['admin']['awstatssettings'] = 'Awstats Einstellungen';
$lng['serversettings']['awstats_domain_file']['title'] = 'Awstats Domain-Dateien Ordner';
$lng['serversettings']['awstats_model_file']['title'] = 'Awstats Model Datei';

// ADDED IN 1.2.19-svn16

$lng['admin']['domain_dns_settings'] = 'Domain DNS Einstellungen';
$lng['dns']['destinationip'] = 'Domain IP';
$lng['dns']['standardip'] = 'Server Standard IP';
$lng['dns']['a_record'] = 'A-Eintrag (IPv6 optional)';
$lng['dns']['cname_record'] = 'CNAME-Eintrag';
$lng['dns']['mxrecords'] = 'MX Eintr&auml;ge definieren';
$lng['dns']['standardmx'] = 'Server Standard MX Eintrag';
$lng['dns']['mxconfig'] = 'Eigene MX Eintr&auml;ge';
$lng['dns']['priority10'] = 'Priorit&auml;t 10';
$lng['dns']['priority20'] = 'Priorit&auml;t 20';
$lng['dns']['txtrecords'] = 'TXT Eintr&auml;ge definieren';
$lng['dns']['txtexample'] = 'Beispiel (SPF-Eintrag):<br />v=spf1 ip4:xxx.xxx.xx.0/23 -all';
$lng['serversettings']['selfdns']['title'] = 'Manuelle DNS Einstellungen f&uuml;r Domains';
$lng['serversettings']['selfdnscustomer']['title'] = 'Erlaube Kunden eigene DNS Einstellungen vornehmen zu k&ouml;nnen';
$lng['admin']['activated'] = 'Aktiviert';
$lng['admin']['statisticsettings'] = 'Statistik Einstellungen';
$lng['admin']['or'] = 'oder';

// ADDED IN 1.2.19-svn17

$lng['serversettings']['unix_names']['title'] = 'Benutze UNIX kompatible Benutzernamen';
$lng['serversettings']['unix_names']['description'] = 'Erlaubt die Nutzung von <strong>-</strong> und <strong>_</strong> in Benutzernamen wenn <strong>Nein</strong>';
$lng['error']['cannotwritetologfile'] = 'Logdatei %s konnte nicht f&uuml;r Schreiboperationen ge&ouml;ffnet werden.';
$lng['admin']['sysload'] = 'System-Auslastung';
$lng['admin']['noloadavailable'] = 'nicht verf&uuml;gbar';
$lng['admin']['nouptimeavailable'] = 'nicht verf&uuml;gbar';
$lng['panel']['backtooverview'] = 'Zur&uuml;ck zur &Uuml;bersicht';
$lng['admin']['nosubject'] = '(Kein Betreff)';
$lng['admin']['configfiles']['statistics'] = 'Statistik';
$lng['login']['forgotpwd'] = 'Passwort vergessen?';
$lng['login']['presend'] = 'Passwort zur&uuml;cksetzen';
$lng['login']['email'] = 'E-Mail Adresse';
$lng['login']['remind'] = 'Passwort zur&uuml;cksetzen';
$lng['login']['usernotfound'] = 'Fehler: Unbekannter Benutzer!';
$lng['pwdreminder']['subject'] = 'SysCP - Passwort zur&uuml;ckgesetzt';
$lng['pwdreminder']['body'] = 'Hallo %s,\n\ndein SysCP Passwort wurde zur&uuml;ckgesetzt!\nDas neue Passwort lautet: %p\n\nVielen Dank,\nIhr SysCP-Team';
$lng['pwdreminder']['success'] = 'Passwort erfolgreich zur&uuml;ckgesetzt.<br />Sie sollten nun eine E-Mail mit dem neuen Passwort erhalten.';

// ADDED IN 1.2.19-svn18

$lng['serversettings']['allow_preset'] = 'Erlaube das Zur&uuml;cksetzen des Kundenpassworts';
$lng['pwdreminder']['notallowed'] = 'Das Zur&uuml;cksetzen des Passworts ist deaktiviert';

// ADDED IN 1.2.19-svn20

$lng['serversettings']['awstats_path']['title'] = 'Pfad zum awstats cgi-bin Ordner';
$lng['serversettings']['awstats_path']['description'] = 'z.B. /usr/share/webapps/awstats/6.1/webroot/cgi-bin/';
$lng['serversettings']['awstats_updateall_command']['title'] = 'Pfad zu &quot;awstats_updateall.pl&quot;';
$lng['serversettings']['awstats_updateall_command']['description'] = 'z.B. /usr/bin/awstats_updateall.pl';

// ADDED IN 1.2.19-svn21

$lng['customer']['title'] = 'Titel';
$lng['customer']['country'] = 'Land';
$lng['panel']['dateformat'] = 'JJJJ-MM-TT';
$lng['panel']['dateformat_function'] = 'd.m.Y';

// Y = Year, m = Month, d = Day

$lng['panel']['timeformat_function'] = 'H:i:s';

// H = Hour, i = Minute, s = Second

$lng['panel']['default'] = 'Standard';
$lng['panel']['never'] = 'Nie';
$lng['panel']['active'] = 'Aktiv';
$lng['panel']['please_choose'] = 'Bitte ausw&auml;hlen';
$lng['panel']['intervalfee_type']['y'] = 'Jahre';
$lng['panel']['intervalfee_type']['m'] = 'Monate';
$lng['panel']['intervalfee_type']['d'] = 'Tage';
$lng['panel']['intervalfee_type_one']['y'] = 'Jahr';
$lng['panel']['intervalfee_type_one']['m'] = 'Monat';
$lng['panel']['intervalfee_type_one']['d'] = 'Tag';
$lng['panel']['service_still_active'] = 'Dienst noch aktiv';
$lng['panel']['allow_modifications'] = '&Auml;nderungen zulassen';
$lng['domains']['add_date'] = 'Zu SysCP hinzugef&uuml;gt';
$lng['domains']['registration_date'] = 'Bei Registry hinzugef&uuml;gt';
$lng['domains']['topleveldomain'] = 'Top-Level-Domain';
$lng['admin']['accountdata'] = 'Benutzerdaten';
$lng['admin']['contactdata'] = 'Kontaktdaten';
$lng['admin']['servicedata'] = 'Dienstleistungsdaten';
$lng['admin']['billingdata'] = 'Abrechnungsdaten';
$lng['admin']['invoicedata'] = 'Rechnungsdaten';
$lng['admin']['customer_categories_once'] = 'Berechne Einrichtungsgeb&uuml;hren der Kunden';
$lng['admin']['customer_categories_period'] = 'Berechne Intervallgeb&uuml;hren der Kunden';
$lng['customer']['taxid'] = 'USt-Id-Nr';
$lng['customer']['calc_tax'] = 'Berechne MwSt';
$lng['customer']['create_contract'] = 'Vertrag erstellen';
$lng['customer']['contract_date'] = 'Vertragsdatum';
$lng['customer']['contract_number'] = 'Vertragsbezeichnung';
$lng['customer']['additional_service_description'] = 'Zus&auml;tzliche Listungsbeschreibung';
$lng['customer']['contract_details'] = 'Vertragsdetails';
$lng['customer']['included_domains'] = 'Inklusivdomains';
$lng['customer']['additional_traffic'] = 'Zus&auml;tzlicher Traffic';
$lng['customer']['additional_diskspace'] = 'Zus&auml;tzlicher Webspace';
$lng['customer']['term_of_payment'] = 'Zahlungsziel (Tage)';
$lng['customer']['payment_every'] = 'Abrechnungszeitraum';
$lng['customer']['payment_method'] = 'Abrechnungsverfahren';
$lng['customer']['payment_methods'][CONST_BILLING_PAYMENTMETHOD_BANKTRANSFER] = '&Uuml;berweisung';
$lng['customer']['payment_methods'][CONST_BILLING_PAYMENTMETHOD_DEBITCARD] = 'Lastschrift';
$lng['customer']['bankaccount_holder'] = 'Kontoinhaber';
$lng['customer']['bankaccount_number'] = 'Kontonummer';
$lng['customer']['bankaccount_blz'] = 'Bankleitzahl (BLZ)';
$lng['customer']['bankaccount_bank'] = 'Bankname / Institut';
$lng['service']['quantity'] = 'Anzahl';
$lng['service']['interval_fee'] = 'Intervallgeb&uuml;hr';
$lng['service']['interval_length'] = 'Intervalll&auml;nge';
$lng['service']['interval_payment'] = 'Bezahlungsweise';
$lng['service']['interval_payment_prepaid'] = 'Prepaid';
$lng['service']['interval_payment_postpaid'] = 'Postpaid';
$lng['service']['setup_fee'] = 'Einrichtungsgeb&uuml;hr';
$lng['service']['active'] = 'Ist die Dienstleistung aktiv';
$lng['service']['start_date'] = 'Dienstleistung aktiv seit';
$lng['service']['end_date'] = 'Dienstleistung inaktiv seit';
$lng['service']['lastinvoiced_date'] = 'Zuletzt abgerechnet';
$lng['service']['valid_from'] = 'G&uuml;ltig von';
$lng['service']['valid_to'] = 'G&uuml;ltig bis';
$lng['invoice']['invoicenumbertemplate'] = 'H-{year}/{number}';
$lng['invoice']['sender'] = 'PROVIDER GMBH | STRASSE 1 | 12345 STADT | LAND';
$lng['invoice']['invoice'] = 'RECHNUNG';
$lng['invoice']['cancellation'] = 'STORNORECHNUNG';
$lng['invoice']['reminder'] = 'MAHNUNG';
$lng['invoice']['preview'] = 'VORSCHAU';
$lng['invoice']['dateheader'] = 'Stadt, den %s';
$lng['invoice']['number'] = 'RECHNUNGSNUMMER';
$lng['invoice']['contract_number'] = 'HOSTINGVERTRAG';
$lng['invoice']['contract_details'] = 'HOSTINGPAKET';
$lng['invoice']['contract_details_template'] = 'Hostingpaket gem. Hostingvertrag vom %s mit %s MB Webspace, %s ' . chr(128) . ' pro %s MB Zusatzwebspace, %s GB Traffic, %s ' . chr(128) . ' pro %s GB Zusatztraffic; %s Inklusivdomains; Grundgeb&uuml;hr %s ' . chr(128) . ' pro %s; Abrechnungsintervall %s.';
$lng['invoice']['period'] = 'LEISTUNGSZEITRAUM';
$lng['invoice']['header'][0] = 'POS.';
$lng['invoice']['header'][1] = 'BEZEICHNUNG';
$lng['invoice']['header'][2] = 'ZEITRAUM';
$lng['invoice']['header'][3] = 'NETTO [' . chr(128) . ']';
$lng['invoice']['header'][4] = 'MWST [' . chr(128) . ']';
$lng['invoice']['header'][5] = '%';
$lng['invoice']['header'][6] = 'GESAMT [' . chr(128) . ']';
$lng['invoice']['subtotal'] = 'ZWISCHENSUMME';
$lng['invoice']['tax'] = 'MWST (%s%%)';
$lng['invoice']['credit_note'] = 'GUTSCHRIFT';
$lng['invoice']['total'] = 'GESAMT';
$lng['invoice']['payment_methods'][0] = 'Rechnungsbetrag zahlbar innerhalb von %s Tagen.' . "\n" . 'Da uns noch keine Lastschrift-Einzugserm&auml;chtigung von Ihnen vorliegt, bitten wir Sie die Rechnung per &Uuml;berweisung auf unser Konto zu begleichen. Falls auch Sie am Lastschriftverfahren teilnehmen m&ouml;chten, f&uuml;llen Sie bitte das angef&uuml;gte Formular aus und senden Sie es per Post an uns zur&uuml;ck.';
$lng['invoice']['payment_methods'][1] = 'Der Rechnungsbetrag wird in den n&auml;chsten %s Tagen von Ihrem Konto bei der %s, Kontonummer %s, BLZ %s per Lastschrift eingezogen.';
$lng['invoice']['state'] = 'Status';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_INVOICED] = 'gestellt';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_SENT] = 'versandt';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_PAID] = 'bezahlt';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_CANCELLED_NO_REINVOICE] = 'storniert (keine Neuberechnung)';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_CANCELLED_REINVOICE_WITHOUT_CREDIT_NOTE] = 'storniert (Neuberechnung, keine Gutschrift)';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_CANCELLED_REINVOICE_WITH_CREDIT_NOTE] = 'storniert (Neuberechnung, mit Gutschrift)';
$lng['invoice']['states'][CONST_BILLING_INVOICESTATE_CANCELLED_REINVOICED] = 'storniert (neu berechnet)';
$lng['invoice']['state_change'] = 'Letzte Status&auml;nderung';
$lng['invoice']['change_state'] = 'Rechnungsstatus &auml;ndern';
$lng['invoice']['total_fee'] = 'Netto';
$lng['invoice']['total_fee_taxed'] = 'Gesamt';
$lng['invoice']['fix'] = 'Rechnung Fixieren';
$lng['invoice']['pdf'] = 'PDF erstellen';
$lng['invoice']['create_reminder'] = 'Mahnung erstellen';
$lng['invoice']['changelog'] = '&Auml;nderungsprotokoll';
$lng['invoice']['deleted_line'] = 'Die Zeile wurde gel&ouml;scht.';
$lng['invoice']['original_value'] = 'Originalwerte';
$lng['invoice']['page_footer'] = 'Seite %s von %s';
$lng['billing']['billing'] = 'Abrechnung';
$lng['billing']['invoices'] = 'Rechnungen';
$lng['billing']['invoices_admin'] = 'Rechnungen (Admins)';
$lng['billing']['openinvoices'] = 'Offene Rechnungsposten';
$lng['billing']['openinvoices_admin'] = 'Offene Rechnungsposten (Admins)';
$lng['billing']['cacheinvoicefees'] = 'Liste/Rechnungsbetr&auml;ge aktualisieren';
$lng['billing']['caption'] = 'Beschreibung';
$lng['billing']['invoice'] = 'Rechnung';
$lng['billing']['invoice_date'] = 'Rechnungsdatum';
$lng['billing']['invoice_fee'] = 'Rechnungsbetrag';
$lng['billing']['preview'] = 'Vorschau';
$lng['billing']['number'] = 'Rechnungsnummer';
$lng['billing']['caption_setup'] = 'Beschreibung f&uuml;r Setupgeb&uuml;hr';
$lng['billing']['caption_interval'] = 'Beschreibung f&uuml;r Intervallgeb&uuml;hr';
$lng['billing']['template'] = 'Vorlage';
$lng['billing']['interval'] = 'Intervall';
$lng['billing']['other'] = 'Andere Dienstleitungen';
$lng['billing']['other_add'] = 'Anderen Dienstleitung hinzuf&uuml;gen';
$lng['billing']['other_edit'] = 'Anderen Dienstleitung bearbeiten';
$lng['billing']['taxclassesnrates'] = 'Steuerklassen und -s&auml;tze';
$lng['billing']['taxclass'] = 'Steuerklasse';
$lng['billing']['taxrate'] = 'Steuersatz';
$lng['billing']['taxrate_add'] = 'Steuersatz hinzuf&uuml;gen';
$lng['billing']['taxrate_edit'] = 'Steuersatz bearbeiten';
$lng['billing']['domains_templates'] = 'Domainvorlagen';
$lng['billing']['domains_templates_add'] = 'Domainvorlage hinzuf&uuml;gen';
$lng['billing']['domains_templates_edit'] = 'Domainvorlage bearbeiten';
$lng['billing']['other_templates'] = 'Vorlagen f&uuml;r andere Dienstleistungen';
$lng['billing']['other_templates_add'] = 'Vorlage f&uuml;r andere Dienstleistungen hinzuf&uuml;gen';
$lng['billing']['other_templates_edit'] = 'Vorlage f&uuml;r andere Dienstleistungen bearbeiten';
$lng['billing']['categories']['hosting_caption'] = 'HOSTING';
$lng['billing']['categories']['hosting_rowcaption_setup'] = 'Hostingpaket - Einrichtungsgeb&uuml;hr';
$lng['billing']['categories']['hosting_rowcaption_interval'] = 'Hostingpaket';
$lng['billing']['categories']['hosting_rowcaption_setup_withloginname'] = 'Hostingpaket ({loginname}) - Einrichtungsgeb&uuml;hr';
$lng['billing']['categories']['hosting_rowcaption_interval_withloginname'] = 'Hostingpaket ({loginname})';
$lng['billing']['categories']['domains_caption'] = 'DOMAINS';
$lng['billing']['categories']['domains_rowcaption_setup'] = 'Domain {domain} - Einrichtungsgeb&uuml;hr';
$lng['billing']['categories']['domains_rowcaption_interval'] = 'Domain {domain}';
$lng['billing']['categories']['domains_rowcaption_setup_included_domain'] = 'Inklusivdomain {domain} - Einrichtungsgeb&uuml;hr';
$lng['billing']['categories']['domains_rowcaption_interval_included_domain'] = 'Inklusivdomain {domain}';
$lng['billing']['categories']['traffic_caption'] = 'TRAFFIC';
$lng['billing']['categories']['traffic_rowcaption_setup'] = $lng['billing']['categories']['traffic_rowcaption_interval'] = 'Trafficverbrauch: {traffic_total}/{traffic_included} GB';
$lng['billing']['categories']['traffic_rowcaption_setup_unlimited'] = $lng['billing']['categories']['traffic_rowcaption_interval_unlimited'] = 'Trafficverbrauch: {traffic_total}/' . $lng['customer']['unlimited'] . ' GB';
$lng['billing']['categories']['other_caption'] = 'ANDERE';
$lng['billing']['categories']['other_rowcaption_setup'] = $lng['billing']['categories']['other_rowcaption_interval'] = 'Andere Dienstleistung';
$lng['billing']['categories']['diskspace_caption'] = 'WEBSPACE';
$lng['billing']['categories']['diskspace_rowcaption_setup'] = $lng['billing']['categories']['diskspace_rowcaption_interval'] = 'Webspaceverbrauch: {diskspace_total}/{diskspace_included} MB';
$lng['billing']['categories']['diskspace_rowcaption_setup_unlimited'] = $lng['billing']['categories']['diskspace_rowcaption_interval_unlimited'] = 'Webspaceverbrauch: {diskspace_total}/' . $lng['customer']['unlimited'] . ' MB';
$lng['question']['billing_invoice_row_reallydelete'] = 'Wollen Sie diese Zeile aus der Rechnung wirklich l&ouml;schen?';
$lng['question']['billing_invoice_row_reallyreset'] = 'Wollen Sie wirklich alle &Auml;nderungen an dieser Rechnung verwerfen?';
$lng['question']['billing_invoice_row_reallyreset_key'] = 'Wollen Sie wirklich die &Auml;nderungen an dieser Zeile verwerfen?';
$lng['question']['billing_domains_template_reallydelete'] = 'Wollen Sie die Vorlage f&uuml; %s wirklich l&ouml;schen?';
$lng['question']['billing_other_template_reallydelete'] = 'Wollen Sie die Vorlage f&uuml; %s wirklich l&ouml;schen?';
$lng['question']['billing_other_service_reallydelete'] = 'Wollen Sie diese Dienstleistung wirklich l&ouml;schen?';
$lng['question']['billing_taxrate_reallydelete'] = 'Wollen Sie diesen Steuersart wirklich l&ouml;schen?';

// ADDED IN 1.2.19-svn22

$lng['serversettings']['allow_preset_desc'] = 'Kunden k&ouml;nnen ihr Passwort zur&uuml;cksetzen und bekommen ein Neues per E-Mail zugesandt';
$lng['serversettings']['allow_preset_admin'] = 'Erlaube das Zur&uuml;cksetzen von Admin-/Reseller-Passw&ouml;rtern.';
$lng['serversettings']['allow_preset_admin_desc'] = 'Admins/Reseller k&ouml;nnen ihr Passwort zur&uuml;cksetzen und bekommen ein Neues per E-Mail zugesandt';

// ADDED IN 1.2.19-svn23

$lng['admin']['edit_billingdata'] = 'Kann Abrechnungsdaten bearbeiten?';
$lng['error']['service_still_active'] = 'Die Dienstleistung ist noch aktiv.';

// ADDED IN 1.2.19-svn23

$lng['admin']['billingsettings'] = 'Abrechungseinstellungen';
$lng['serversettings']['billing']['activate_billing']['title'] = 'Abrechnungssystem aktivieren';
$lng['serversettings']['billing']['activate_billing']['description'] = 'Hier k&ouml;nnen Sie das Abrechnungssystem global aktivieren bzw deaktivieren.';
$lng['serversettings']['billing']['highlight_inactive']['title'] = 'Inaktive Abrechnung markieren';
$lng['serversettings']['billing']['highlight_inactive']['description'] = 'Sollen Zeilen, deren Abrechnung inaktiv ist, farblich hervorgehoben werden?';
$lng['serversettings']['billing']['invoicenumber_count']['title'] = 'Aktuelle Rechnungsnummer';
$lng['serversettings']['billing']['invoicenumber_count']['description'] = 'Diese Nummer entspricht der Anzahl der bisher generierten Rechnungen. &Auml;nderungen k&ouml;nnen &Auml;rger in der Buchhaltung machen!';

// ADDED IN 1.2.19-svn25

$lng['emails']['quota_type']['byte'] = 'B';
$lng['emails']['quota_type']['kilobyte'] = 'KB';
$lng['emails']['quota_type']['megabyte'] = 'MB';
$lng['emails']['quota_type']['gigabyte'] = 'GB';
$lng['emails']['quota_type']['terabyte'] = 'TB';
$lng['emails']['quota_type']['petabyte'] = 'PB';

// Autoresponder module

$lng['menue']['email']['autoresponder'] = 'Abwesenheitsnachrichten';
$lng['autoresponder']['active'] = 'Aktiviert';
$lng['autoresponder']['autoresponder_add'] = 'Abwesenheitsnachricht hinzuf&uuml;gen';
$lng['autoresponder']['autoresponder_edit'] = 'Abwesenheitsnachricht bearbeiten';
$lng['autoresponder']['autoresponder_new'] = 'Neue Abwesenheitsnachricht erstellen';
$lng['autoresponder']['subject'] = 'Betreff';
$lng['autoresponder']['message'] = 'Nachricht';
$lng['autoresponder']['account'] = 'Konto';
$lng['autoresponder']['sender'] = 'Absender';
$lng['question']['autoresponderdelete'] = 'Abwesenheitsnachricht wirklich l&ouml;schen?';
$lng['error']['noemailaccount'] = 'Es gibt zwei m&ouml;gliche Gr&uuml;nde warum keine Abwesenheitsnachricht erstellt werden kann: Sie ben&ouml;tigen mindestens einen E-Mail Account. Zweitens kann es sein dass bereits f&uuml;r alle Accounts eine Abwesenheitsnachricht eingerichtet wurde.';
$lng['error']['missingfields'] = 'Es wurden nicht alle Felder augef&uuml;llt.';
$lng['error']['accountnotexisting'] = 'Der angegebene E-Mail-Account existiert nicht.';
$lng['error']['autoresponderalreadyexists'] = 'F&uuml;r dieses Konto existiert bereits eine Abwesenheitsnachricht.';
$lng['error']['invalidautoresponder'] = 'Das angegebene Konto ist ung&uuml;ltig.';
$lng['serversettings']['autoresponder_active']['title'] = 'Abwesenheitsnachrichten-Modul verwenden';
$lng['serversettings']['autoresponder_active']['description'] = 'M&ouml;chten Sie das Abwesenheitsnachrichten-Modul verwenden? Dazu muss ein separater Cronjob eingerichtet sein.';
$lng['invoice']['active'] = 'Rechnung aktiviert';
$lng['admin']['show_version_login']['title'] = 'Zeige SysCP Version beim Login';
$lng['admin']['show_version_login']['description'] = 'Zeige SysCP Version in der Fu&szlig;zeile der Loginseite';
$lng['admin']['show_version_footer']['title'] = 'Zeige SysCP Version in Fu&szlig;zeile';
$lng['admin']['show_version_footer']['description'] = 'Zeige SysCP Version in der Fu&szlig;zeile aller anderen Seiten';
$lng['admin']['syscp_graphic']['title'] = 'Grafik im Kopfbereich des Panels';
$lng['admin']['syscp_graphic']['description'] = 'Welche Grafik soll im Kopfbereich des Panels anstatt des SysCP Logos angezeigt werden?';

//improved syscp

$lng['menue']['phpsettings']['maintitle'] = 'PHP Konfigurationen';
$lng['admin']['phpsettings']['title'] = 'PHP Konfiguration';
$lng['admin']['phpsettings']['description'] = 'Kurzbeschreibung';
$lng['admin']['phpsettings']['actions'] = 'Aktionen';
$lng['admin']['phpsettings']['activedomains'] = 'In Verwendung f&uuml;r Domain(s)';
$lng['admin']['phpsettings']['notused'] = 'Konfiguration wird nicht verwendet';
$lng['admin']['misc'] = 'Sonstiges';
$lng['admin']['phpsettings']['editsettings'] = 'PHP Konfiguration bearbeiten';
$lng['admin']['phpsettings']['addsettings'] = 'PHP Konfiguration erstellen';
$lng['admin']['phpsettings']['viewsettings'] = 'PHP Konfiguration ansehen';
$lng['admin']['phpsettings']['phpinisettings'] = 'php.ini Einstellungen';
$lng['error']['nopermissionsorinvalidid'] = 'Entweder fehlen Ihnen die n&ouml;tigen Rechte diese Einstellung zu &auml;ndern oder es wurde eine ung&uuml;ltige Id &uuml;bergeben';
$lng['panel']['view'] = 'ansehen';
$lng['question']['phpsetting_reallydelete'] = 'Wollen Sie diese PHP Einstellungen wirklich l&ouml;schen? Alle Domains die diese Einstellungen bis jetzt verwendet haben, werden dann auf die Standard Einstellungen umgestellt.';
$lng['admin']['phpsettings']['addnew'] = 'Neue Konfiguration erstellen';
$lng['error']['phpsettingidwrong'] = 'Eine PHP Konfiguration mit dieser Id existiert nicht';
$lng['error']['descriptioninvalid'] = 'Der Beschreibungstext ist zu kurz, zu lang oder enth&auml;lt ung&uuml;ltige Zeichen';
$lng['error']['info'] = 'Info';
$lng['admin']['phpconfig']['template_replace_vars'] = 'Variablen die in den Konfigurationen ersetzt werden';
$lng['admin']['phpconfig']['safe_mode'] = 'Wird mit der safe_mode Einstellung der Domain ersetzt.';
$lng['admin']['phpconfig']['pear_dir'] = 'Wird mit dem globalen Wert f&uuml;r das Include Verzeichnis ersetzt.';
$lng['admin']['phpconfig']['open_basedir'] = 'Wird mit der open_basedir Einstellung der Domain ersetzt.';
$lng['admin']['phpconfig']['tmp_dir'] = 'Wird mit der Einstellung f&uuml;r das tempor&auml;re Verzeichnis der Domain ersetzt.';
$lng['admin']['phpconfig']['open_basedir_global'] = 'Wird mit der globalen Einstellung des Pfades ersetzt, der dem open_basedir hinzugef&uuml;gt wird.';
$lng['admin']['phpconfig']['customer_email'] = 'Wird mit der E-Mail Adresse des Kunden ersetzt, dem die Domain geh&ouml;rt.';
$lng['admin']['phpconfig']['admin_email'] = 'Wird mit der E-Mail Adresse des Admins ersetzt, dem die Domain geh&ouml;rt.';
$lng['admin']['phpconfig']['domain'] = 'Wird mit der Domain ersetzt.';
$lng['admin']['phpconfig']['customer'] = 'Wird mit dem Loginnamen des Kunden ersetzt, dem die Domain geh&ouml;rt.';
$lng['admin']['phpconfig']['admin'] = 'Wird mit dem Loginnamen des Admins ersetzt, dem die Domain geh&ouml;rt.';
$lng['login']['backtologin'] = 'Zur&uuml;ck zum Login';
$lng['serversettings']['mod_fcgid']['starter'] = 'Prozesse je Domain';
$lng['serversettings']['mod_fcgid']['starter_desc'] = 'Wieviele PHP Prozesse pro Domain sollen gestartet/erlaubt werden. Der Wert 0 wird empfohlen, da PHP dann selbst die Anzahl effizient verwaltet.';
$lng['serversettings']['mod_fcgid']['wrapper'] = 'Wrappereinbindung in Vhosts';
$lng['serversettings']['mod_fcgid']['wrapper_desc'] = 'Wie sollen die Wrapper in den Vhosts eingebunden werden';
$lng['serversettings']['mod_fcgid']['tmpdir_desc'] = 'Wo sollen die tempor&auml;ren Verzeichnisse erstellt werden';
$lng['admin']['know_what_youre_doing'] = '&Auml;ndern Sie diese Einstellungen nur, wenn Sie wissen was Sie tun!';
$lng['serversettings']['mod_fcgid']['peardir'] = 'Globale PEAR Verzeichnisse';
$lng['serversettings']['mod_fcgid']['peardir_desc'] = 'Welche globalen PEAR Verzeichnisse sollen in den php.ini Einstellungen ersetzt werden? Einzelne Verzeichnisse sind mit einem Doppelpunkt zu trennen.';

//improved syscp 2

$lng['admin']['templates']['index_html'] = 'index.html Datei f&uuml;r neu erzeugte Kundenverzeichnisse';
$lng['admin']['templates']['SERVERNAME'] = 'Wird mit dem Servernamen ersetzt.';
$lng['admin']['templates']['CUSTOMER'] = 'Wird mit dem Loginnamen des Kunden ersetzt.';
$lng['admin']['templates']['ADMIN'] = 'Wird mit dem Loginnamen des Admins ersetzt.';
$lng['admin']['templates']['CUSTOMER_EMAIL'] = 'Wird mit der E-Mail Adresse des Kunden ersetzt.';
$lng['admin']['templates']['ADMIN_EMAIL'] = 'Wird mit der E-Mail Adresse des Admin ersetzt.';
$lng['admin']['templates']['filetemplates'] = 'Dateivorlagen';
$lng['admin']['templates']['filecontent'] = 'Dateiinhalt';
$lng['error']['filecontentnotset'] = 'Diese Datei darf nicht leer sein!';
$lng['serversettings']['index_file_extension']['description'] = 'Welche Dateiendung soll die index Datei in neu erstellten Kundenverzeichnissen haben? Diese Dateiendung wird dann verwendet, wenn Sie bzw. einer Ihrer Admins eigene index Dateivorlagen erstellt haben.';
$lng['serversettings']['index_file_extension']['title'] = 'Dateiendung f&uuml;r index Datei in neu erstellen Kundenverzeichnissen';
$lng['error']['index_file_extension'] = 'Die Dateiendung f&uuml;r die index Datei muss zwischen 1 und 6 Zeichen lang sein und darf nur aus den Zeichen a-z, A-Z und 0-9 bestehen';
$lng['admin']['security_settings'] = 'Sicherheitseinstellungen';
$lng['admin']['expert_settings'] = 'Experteneinstellungen!';
$lng['admin']['mod_fcgid_starter']['title'] = 'PHP Prozesse f&uuml;r diese Domain (leer f&uuml;r Standardwert)';

//added with aps installer

$lng['admin']['aps'] = 'APS Installer';
$lng['customer']['aps'] = 'APS Installer';
$lng['aps']['scan'] = 'Neue Pakete einlesen';
$lng['aps']['upload'] = 'Neue Pakete hochladen';
$lng['aps']['managepackages'] = 'Pakete verwalten';
$lng['aps']['manageinstances'] = 'Instanzen verwalten';
$lng['aps']['overview'] = 'Paket&uuml;bersicht';
$lng['aps']['status'] = 'Meine Pakete';
$lng['aps']['search'] = 'Paket suchen';
$lng['aps']['upload_description'] = 'Bitte w&auml;hlen Sie die APS Installer ZIP-Dateien aus, um diese im System zu installieren.';
$lng['aps']['search_description'] = 'Name, Beschreibung, Schlagwort, Version';
$lng['aps']['detail'] = 'Weitere Informationen';
$lng['aps']['install'] = 'Paket installieren';
$lng['aps']['data'] = 'Daten';
$lng['aps']['version'] = 'Version';
$lng['aps']['homepage'] = 'Homepage';
$lng['aps']['installed_size'] = 'Gr&ouml;&szlig;e nach Installation';
$lng['aps']['categories'] = 'Kategorien';
$lng['aps']['languages'] = 'Sprachen';
$lng['aps']['long_description'] = 'Langbeschreibung';
$lng['aps']['configscript'] = 'Konfigurationsscript';
$lng['aps']['changelog'] = 'Changelog';
$lng['aps']['license'] = 'Lizenz';
$lng['aps']['license_link'] = 'Link zur Lizenz';
$lng['aps']['screenshots'] = 'Screenshots';
$lng['aps']['back'] = 'Zur&uuml;ck zur &Uuml;bersicht';
$lng['aps']['install_wizard'] = 'Installationsassistent...';
$lng['aps']['wizard_error'] = 'Ihre Eingaben enthalten ung&uuml;ltige Daten. Bitte korrigieren Sie diese, um mit der Installation fortzufahren.';
$lng['aps']['basic_settings'] = 'Grundlegende Einstellungen';
$lng['aps']['application_location'] = 'Installationsort';
$lng['aps']['application_location_description'] = 'Ort an dem die Anwendung installiert werden soll.';
$lng['aps']['no_domains'] = 'Keine Domains gefunden';
$lng['aps']['database_password'] = 'Datenbankpasswort';
$lng['aps']['database_password_description'] = 'Passwort das f&uuml;r die neu zu erstellende Datenbank verwendet werden soll.';
$lng['aps']['license_agreement'] = 'Zustimmung';
$lng['aps']['cancel_install'] = 'Installation abbrechen';
$lng['aps']['notazipfile'] = 'Die hochgeladene Datei ist keine Zip-Datei.';
$lng['aps']['filetoobig'] = 'Die Datei ist zu gro&szlig;.';
$lng['aps']['filenotcomplete'] = 'Die Datei wurde nicht vollst&auml;ndig hochgeladen.';
$lng['aps']['phperror'] = 'Es trat ein PHP interner Fehler auf. Der Upload Fehlercode lautet #';
$lng['aps']['moveproblem'] = 'Die hochgeladene Datei konnte nicht aus dem tempor&auml;ren Ordner verschoben werden. Pr&uuml;fen Sie ob alle Rechte korrekt gesetzt sind.';
$lng['aps']['uploaderrors'] = '<strong>Fehler f&uuml;r die Datei <em>%s</em></strong><br/><ul>%s</ul>';
$lng['aps']['nospecialchars'] = 'Sonderzeichen sind im Suchausdruck nicht erlaubt!';
$lng['aps']['noitemsfound'] = 'Es wurden keine Pakete gefunden!';
$lng['aps']['nopackagesinstalled'] = 'Sie haben noch kein Paket installiert welches angezeigt werden k&ouml;nnte.';
$lng['aps']['instance_install'] = 'Paket wurde zur Installation vorgemerkt';
$lng['aps']['instance_task_active'] = 'Paket wird gerade installiert';
$lng['aps']['instance_success'] = 'Paket ist installiert bzw. wurde erfolgreich installiert';
$lng['aps']['instance_error'] = 'Paket ist nicht installiert - bei der Installation traten Fehler auf';
$lng['aps']['instance_uninstall'] = 'Paket wurde zur Deinstallation vorgemerkt';
$lng['aps']['unknown_status'] = 'Fehler - Unbekannter Wert';
$lng['aps']['currentstatus'] = 'Aktueller Status';
$lng['aps']['activetasks'] = 'Aktuelle Tasks';
$lng['aps']['task_install'] = 'Installation ausstehend';
$lng['aps']['task_remove'] = 'Deinstallation ausstehend';
$lng['aps']['task_reconfigure'] = 'Neukonfiguration ausstehend';
$lng['aps']['task_upgrade'] = 'Aktualisierung ausstehend';
$lng['aps']['no_task'] = 'Kein Task ausstehend';
$lng['aps']['applicationlinks'] = 'Anwendungslinks';
$lng['aps']['mainsite'] = 'Hauptseite';
$lng['aps']['uninstall'] = 'Paket deinstallieren';
$lng['aps']['reconfigure'] = 'Einstellungen &auml;ndern';
$lng['aps']['erroronnewinstance'] = '<strong>Dieses Paket kann nicht installiert werden.</strong><br/><br/>Bitte gehen Sie zur&uuml;ck zur Paket&uuml;bersicht und starten Sie eine neue Installation.';
$lng['aps']['successonnewinstance'] = '<strong><em>%s</em> wird nun installiert.</strong><br/><br/>Gehen Sie zur&uuml;ck zu "Meine Pakete" und warten Sie bis die Installation abgeschlossen ist. Dies kann einige Minuten in Anspruch nehmen.';
$lng['aps']['php_misc_handler'] = 'PHP - Sontiges - Es werden keine anderen Dateiendung als .php zum Parsen unterst&uuml;tzt.';
$lng['aps']['php_misc_directoryhandler'] = 'PHP - Sonstiges - Je Verzeichnis deaktivierte PHP Handler werden nicht unterst&uuml;tzt.';
$lng['aps']['asp_net'] = 'ASP.NET - Paket wird nicht unterst&uuml;tzt.';
$lng['aps']['cgi'] = 'CGI - Paket wird nicht unterst&uuml;tzt.';
$lng['aps']['php_extension'] = 'PHP - Erweiterung "%s" fehlt.';
$lng['aps']['php_function'] = 'PHP - Funktion "%s" fehlt.';
$lng['aps']['php_configuration'] = 'PHP - Konfiguration - Aktuelle "%s" Einstellung wird von Paket nicht unterst&uuml;tzt.';
$lng['aps']['php_configuration_post_max_size'] = 'PHP - Konfiguration - "post_max_size" Wert zu klein.';
$lng['aps']['php_configuration_memory_limit'] = 'PHP - Konfiguration - "memory_limit" Wert zu klein.';
$lng['aps']['php_configuration_max_execution_time'] = 'PHP - Konfiguration - "max_execution_time" Wert zu klein.';
$lng['aps']['php_general_old'] = 'PHP - Generell - PHP Version zu alt.';
$lng['aps']['php_general_new'] = 'PHP - Generell - PHP Version zu neu.';
$lng['aps']['db_mysql_support'] = 'Datenbank - MySQL wird von Paket nicht unterst&uuml;tzt.';
$lng['aps']['db_mysql_version'] = 'Datanbank - MySQL Server zu alt.';
$lng['aps']['webserver_module'] = 'Webserver - Modul "%s" fehlt.';
$lng['aps']['webserver_fcgid'] = 'Webserver - Von diesem Paket werden einige Webserver Module ben&ouml;tigt. Da Sie SysCP in einer FastCGI/mod_fcgid Umgebung verwenden existiert die Funktion "apache_get_modules" nicht. Es kann also nicht ermittelt werden ob das Paket unterst&uuml;tzt wird.';
$lng['aps']['webserver_htaccess'] = 'Webserver - Dieses Paket ben&ouml;tigt das .htaccess Dateien vom Webserver geparst werden. Das Paket kann nicht installiert werden, da nicht ermittelt werden kann ob diese Funktion aktiviert ist.';
$lng['aps']['misc_configscript'] = 'Sonstiges - Die Sprache des Konfigurationsskriptes wird nicht unterst&uuml;tzt.';
$lng['aps']['misc_charset'] = 'Sonstiges - In der aktuellen Version wird eine Installer Validierung gegen einen gewissen Zeichensatz nicht unterst&uuml;tzt.';
$lng['aps']['misc_version_already_installed'] = 'Die gleiche Paketversion ist bereits installiert.';
$lng['aps']['misc_only_newer_versions'] = 'Aus Sicherheitsgr&uuml;nden k&ouml;nnen nur Pakete installiert werden die neuer sind als die, die bereits im System installiert sind.';
$lng['aps']['erroronscan'] = '<strong>Fehler f&uuml;r <em>%s</em></strong><ul>%s</ul>';
$lng['aps']['invalidzipfile'] = '<strong>Fehler f&uuml;r <em>%s</em></strong><br/><ul><li>Dies ist keine g&uuml;ltige APS Zipdatei!</li></ul>';
$lng['aps']['successpackageupdate'] = '<strong><em>%s</em> erfolgreich als Paketupdate installiert</strong>';
$lng['aps']['successpackageinstall'] = '<strong><em>%s</em> erfolgreich als neues Paket installiert</strong>';
$lng['aps']['class_zip_missing'] = 'SimpleXML Klasse oder ZIP Funktionen nicht vorhanden.';
$lng['aps']['dir_permissions'] = 'Der PHP bzw. Webserver Prozess muss Schreibrechte f&uuml;r /var/www/syscp/temp/ und /var/www/syscp/packages/ haben.';
$lng['aps']['initerror'] = '<strong>Es gibt ein paar Probleme mit diesem Modul:</strong><ul>%s</ul>Beheben Sie diese Probleme oder das Modul kann nicht genutzt werden!';
$lng['aps']['iderror'] = 'Es wurde eine falsche Id &uuml;bergeben!';
$lng['aps']['nopacketsforinstallation'] = 'Es wurden keine Pakete zur Installation gefunden.';
$lng['aps']['nopackagestoinstall'] = 'Es existieren keine Pakete die angezeigt oder installiert werden k&ouml;nnten.';
$lng['aps']['nodomains'] = 'W&auml;hlen Sie eine Domain aus der Liste. Sollte keine Domain vorhanden sein k&ouml;nnen Sie keine Pakete installieren!';
$lng['aps']['wrongpath'] = 'Entweder enth&auml;lt dieser Pfad ung&uuml;ltige Zeichen oder es ist bereits eine Anwendung an dem genannten Ort installiert.';
$lng['aps']['dbpassword'] = 'Geben Sie ein Passwort mit einer minimalen L&auml;nge von 8 Zeichen ein.';
$lng['aps']['error_text'] = 'Geben Sie einen Text ohne Sonderzeichen ein.';
$lng['aps']['error_email'] = 'Geben Sie eine g&uuml;ltige E-Mail Adresse ein.';
$lng['aps']['error_domain'] = 'Geben Sie eine g&uuml;ltige URL wie http://www.example.com/ ein.';
$lng['aps']['error_integer'] = 'Geben Sie eine Zahl (Integer-Format) ein. Beispiel: <em>5</em> oder <em>7</em>.';
$lng['aps']['error_float'] = 'Geben Sie eine Zahl (Float-Format) ein. Beispiel: <em>5,2432</em> oder <em>7,5346</em>.';
$lng['aps']['error_password'] = 'Geben Sie ein Passwort ein.';
$lng['aps']['error_license'] = 'Ja, ich habe die Lizenz gelesen und willige ein diese zu befolgen.';
$lng['aps']['error_licensenoaccept'] = 'Sie m&uuml;ssen die Lizenz annehmen um die Anwendung installieren zu k&ouml;nnen.';
$lng['aps']['stopinstall'] = 'Installation abbrechen';
$lng['aps']['installstopped'] = 'Die Installation f&uuml;r dieses Paket wurde erfolgreich abgebrochen.';
$lng['aps']['installstoperror'] = 'Die Installation kann nicht mehr abgebrochen werden, da diese bereits gestartet wurde. M&ouml;chten Sie das Paket entfernen, so warten Sie die Installation ab und entfernen Sie dann das Paket unter "Meine Pakete"';
$lng['aps']['waitfortask'] = 'Es stehen momentan keine Aktionen zur Verf&uuml;gung. Warten Sie bis alle Tasks abgearbeitet wurden.';
$lng['aps']['removetaskexisting'] = '<strong>Es gibt bereits einen Task zur Deinstallation.</strong><br/><br/>Bitte gehen Sie zur&uuml;ck zu "Meine Pakete" und warten Sie bis die Deinstallation abgeschlossen ist.';
$lng['aps']['packagewillberemoved'] = '<strong>Das Paket wird nun deinstalliert.</strong><br/><br/>Gehen Sie zur&uuml;ck zu "Meine Pakete" und warten Sie bis die Deinstallation abgeschlossen ist.';
$lng['question']['reallywanttoremove'] = '<strong>Wollen Sie dieses Paket wirklich deinstallieren?</strong><br/><br/>Alle Datenbankinhalte und Dateien werden unwiderruflich gel&ouml;scht. Wenn Sie die enthaltenen Daten weiterhin ben&ouml;tigen, stellen Sie sicher dass Sie diese vorher sichern!<br/><br/>';
$lng['aps']['searchoneresult'] = '%s Paket gefunden';
$lng['aps']['searchmultiresult'] = '%s Pakete gefunden';
$lng['question']['reallywanttostop'] = 'Wollen Sie die Installation dieses Paketes wirklich abbrechen?<br/><br/>';
$lng['aps']['packagenameandversion'] = 'Paketname &amp; Version';
$lng['aps']['package_locked'] = 'Gesperrt';
$lng['aps']['package_enabled'] = 'Freigegeben';
$lng['aps']['lock'] = 'Sperren';
$lng['aps']['unlock'] = 'Freigeben';
$lng['aps']['remove'] = 'L&ouml;schen';
$lng['aps']['allpackages'] = 'Alle Pakete';
$lng['question']['reallyremovepackages'] = '<strong>Wollen Sie diese Pakete wirklich l&ouml;schen?</strong><br/><br/>Pakete mit Abh&auml;ngigkeiten k&ouml;nnen erst gel&ouml;scht werden wenn die entsprechenden Instanzen daf&uuml;r deinstalliert wurden!<br/><br/>';
$lng['aps']['nopackagesinsystem'] = 'Es wurden noch keine Pakete im System installiert, die verwaltet werden k&ouml;nnten.';
$lng['aps']['packagenameandstatus'] = 'Paketname &amp; Status';
$lng['aps']['activate_aps']['title'] = 'APS Installer aktivieren';
$lng['aps']['activate_aps']['description'] = 'Hier k&ouml;nnen Sie den APS Installer global aktivieren bzw. deaktivieren.';
$lng['aps']['packages_per_page']['title'] = 'Pakete pro Seite';
$lng['aps']['packages_per_page']['description'] = 'Wieviele Pakete sollen Kunden pro Seite angezeigt bekommen?';
$lng['aps']['upload_fields']['title'] = 'Uploadfelder pro Seite';
$lng['aps']['upload_fields']['description'] = 'Wieviele Uploadfelder sollen im Panel zur Installation von Paketen angezeigt werden?';
$lng['aps']['exceptions']['title'] = 'Ausnahmen f&uuml;r Paketvalidierung';
$lng['aps']['exceptions']['description'] = 'Manche Pakete ben&ouml;tigen spezielle Konfigurationsparameter oder Module. Der Installer selbst kann nicht immer eindeutig feststellen ob diese Optionen/Erweiterungen aktiviert sind. Aus diesem Grund kann man hier nun Ausnahmen festlegen damit Pakete dann trotzdem installiert werden k&ouml;nnen. W&auml;hlen Sie nur die Optionen aus, die auch wirklich so mit der Realit&auml;t &uuml;bereinstimmen, denn sp&auml;testens bei der Installation eines Paketes wird diese dann scheitern.';
$lng['aps']['settings_php_extensions'] = 'PHP-Erweiterungen';
$lng['aps']['settings_php_configuration'] = 'PHP-Konfiguration';
$lng['aps']['settings_webserver_modules'] = 'Webserver Module';
$lng['aps']['settings_webserver_misc'] = 'Webserver Sonstiges';
$lng['aps']['specialoptions'] = 'Sonderoptionen';
$lng['aps']['removeunused'] = 'Ungenutzte Pakete entfernen';
$lng['aps']['enablenewest'] = 'Von jedem Paket neueste Version freigeben, alte sperren';
$lng['aps']['installations'] = 'Installationen';
$lng['aps']['statistics'] = 'Statistiken';
$lng['aps']['numerofpackagesinstalled'] = '%s Pakete installiert<br/>';
$lng['aps']['numerofpackagesenabled'] = '%s Pakete freigegeben<br/>';
$lng['aps']['numerofpackageslocked'] = '%s Pakete gesperrt<br/>';
$lng['aps']['numerofinstances'] = '%s Instanzen installiert<br/>';
$lng['question']['reallydoaction'] = '<strong>Wollen Sie die gew&auml;hlten Aktionen wirklich durchf&uuml;hren?</strong><br/><br/>Daten, die durch diese Vorg&auml;nge m&ouml;glicherweise gel&ouml;scht werden, k&ouml;nnen anschlie&szlig;end nicht wieder hergestellt werden.<br/><br/>';
$lng['aps']['linktolicense'] = 'Link zur Lizenz';
$lng['aps']['initerror_customer'] = 'Es gibt momentan ein Problem mit dieser SysCP Erweiterung. Wenden Sie sich an Ihren Administrator f&uuml;r weitere Informationen.';
$lng['aps']['numerofinstances'] = '%s Installationen insgesamt<br/>';
$lng['aps']['numerofinstancessuccess'] = '%s erfolgreiche Installationen<br/>';
$lng['aps']['numerofinstanceserror'] = '%s fehlgeschlagene Installationen<br/>';
$lng['aps']['numerofinstancesaction'] = '%s geplante Installationen/Deinstallationen';
$lng['aps']['downloadallpackages'] = 'Alle Pakete vom Distributionsserver herunterladen';
$lng['aps']['updateallpackages'] = 'Alle Pakete &uuml;ber Distributionsserver aktualisieren';
$lng['aps']['downloadtaskexists'] = 'Es gibt bereits einen Task zum Download aller Pakete. Bitte warten Sie bis dieser abgeschlossen ist.';
$lng['aps']['downloadtaskinserted'] = 'Es wurde ein Task zum Download aller Pakete erstellt. Dieser Vorgang kann einige Minuten in Anspruch nehmen.';
$lng['aps']['updatetaskexists'] = 'Es gibt bereits einen Task zur Aktualisierung aller Pakete. Bitte warten Sie bis dieser abgeschlossen ist.';
$lng['aps']['updatetaskinserted'] = 'Es wurde ein Task zur Aktualisierung aller Pakete erstellt. Dieser Vorgang kann einige Minuten in Anspruch nehmen.';
$lng['aps']['canmanagepackages'] = 'Darf APS Pakete verwalten';

$lng['error']['customerdoesntexist'] = 'Der ausgew&auml;hlte Kunde existiert nicht.';
$lng['error']['admindoesntexist'] = 'Der ausgew&auml;hlte Admin existiert nicht.';

?>