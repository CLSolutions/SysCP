<?php

/**
 * This file is part of the SysCP project.
 * Copyright (c) 2003-2007 the SysCP Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Florian Lippert <flo@syscp.org>
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package    Language
 * @version    $Id: english.lng.php 1527 2008-01-31 19:47:55Z EleRas $
 */

/**
 * Global
 */

$lng['translator'] = '';
$lng['panel']['edit'] = 'upravit';
$lng['panel']['delete'] = 'smazat';
$lng['panel']['create'] = 'vytvo�it';
$lng['panel']['save'] = 'ulo�it';
$lng['panel']['yes'] = 'ano';
$lng['panel']['no'] = 'ne';
$lng['panel']['emptyfornochanges'] = 'pr�zdn� - ��dn� zm�ny';
$lng['panel']['emptyfordefault'] = 'pr�zdn� - pro v�choz�';
$lng['panel']['path'] = 'Cesta';
$lng['panel']['toggle'] = 'P�epnout';
$lng['panel']['next'] = 'dal��';
$lng['panel']['dirsmissing'] = 'Nemohu nej�t/��st adres��!';

/**
 * Login
 */

$lng['login']['username'] = 'U�ivatel';
$lng['login']['password'] = 'Heslo';
$lng['login']['language'] = 'Jazyk';
$lng['login']['login'] = 'P�ihl�sit';
$lng['login']['logout'] = 'Odhl�sit';
$lng['login']['profile_lng'] = 'Jazyk profilu';

/**
 * Customer
 */

$lng['customer']['documentroot'] = 'Dom�c� adres��';
$lng['customer']['name'] = 'Jm�no';
$lng['customer']['firstname'] = 'K�estn� jm�no';
$lng['customer']['company'] = 'Spole�nost';
$lng['customer']['street'] = 'Ulice';
$lng['customer']['zipcode'] = 'PS�';
$lng['customer']['city'] = 'M�sto';
$lng['customer']['phone'] = 'Telefon';
$lng['customer']['fax'] = 'Fax';
$lng['customer']['email'] = 'Email';
$lng['customer']['customernumber'] = 'Z�kazn�kovo ID';
$lng['customer']['diskspace'] = 'Webov� prostor (MB)';
$lng['customer']['traffic'] = 'P�enosy (GB)';
$lng['customer']['mysqls'] = 'MySQL-Datab�ze';
$lng['customer']['emails'] = 'E-mailov�-adresy';
$lng['customer']['accounts'] = 'E-mailv�-��ty';
$lng['customer']['forwarders'] = 'E-mailov�-P�epos�la�e';
$lng['customer']['ftps'] = 'FTP-��ty';
$lng['customer']['subdomains'] = 'Sub-Dom�ny';
$lng['customer']['domains'] = 'Dom�na';
$lng['customer']['unlimited'] = 'neomezeno';

/**
 * Customermenue
 */

$lng['menue']['main']['main'] = 'Hlavn�';
$lng['menue']['main']['changepassword'] = 'Zm�nit heslo';
$lng['menue']['main']['changelanguage'] = 'Zm�nit jazyl';
$lng['menue']['email']['email'] = 'E-mail';
$lng['menue']['email']['emails'] = 'Adresy';
$lng['menue']['email']['webmail'] = 'WebMail';
$lng['menue']['mysql']['mysql'] = 'MySQL';
$lng['menue']['mysql']['databases'] = 'Datab�ze';
$lng['menue']['mysql']['phpmyadmin'] = 'phpMyAdmin';
$lng['menue']['domains']['domains'] = 'Dom�ny';
$lng['menue']['domains']['settings'] = 'Nastaven�';
$lng['menue']['ftp']['ftp'] = 'FTP';
$lng['menue']['ftp']['accounts'] = '��ty';
$lng['menue']['ftp']['webftp'] = 'WebFTP';
$lng['menue']['extras']['extras'] = 'Extra';
$lng['menue']['extras']['directoryprotection'] = 'Ochrana adres��e';
$lng['menue']['extras']['pathoptions'] = 'nastaven� cesty';

/**
 * Index
 */

$lng['index']['customerdetails'] = 'Detaily z�kazn�ka';
$lng['index']['accountdetails'] = 'Detaily ��tu';

/**
 * Change Password
 */

$lng['changepassword']['old_password'] = 'Star� heslo';
$lng['changepassword']['new_password'] = 'Nov� heslo';
$lng['changepassword']['new_password_confirm'] = 'Nov� heslo (potvrzen�)';
$lng['changepassword']['new_password_ifnotempty'] = 'Nov� heslo (pr�zdn� = beze zm�n)';
$lng['changepassword']['also_change_ftp'] = ' tak� zm�nit heslo k hlavn�mu FTP ��tu';

/**
 * Domains
 */

$lng['domains']['description'] = 'Zde m��ete vytvo�it (sub-)dom�ny a m�nit jejich cesty.<br />Syst�m pot�ebuje n�jak� �as, ne� se po �prav� nov� nastaven� projev�.';
$lng['domains']['domainsettings'] = 'Nastaven� dom�ny';
$lng['domains']['domainname'] = 'Jm�no dom�ny';
$lng['domains']['subdomain_add'] = 'Vytvo�it subdom�nu';
$lng['domains']['subdomain_edit'] = 'Upravit (sub)dom�nu';
$lng['domains']['wildcarddomain'] = 'Vytvo�it jako wildcard dom�nu?';
$lng['domains']['aliasdomain'] = 'Alias pro dom�nu';
$lng['domains']['noaliasdomain'] = '��dn� alias pro dom�nu';

/**
 * E-mails
 */

$lng['emails']['description'] = 'Zde m��ete tak� vytvo�it a m�nit e-mailov� adresy.<br />��et je jako Va�e po�tovn� schr�nka p�ed Va��m domem. Pokud V�m n�kdo po�le e-mail, p�ijde na tento ��et.<br /><br />Pro sta�en� e-mail� pou�ijte n�sleduj�c� nastaven� ve sv�m po�tovn�m klientu: (Data <i>kurz�vou</i> mus� b�t zm�n�na podle toho, co jste zadali!)<br />Host: <b><i>Jm�no dom�ny</i></b><br />U�ivatelsk� jm�no: <b><i>Jm�no ��tu / e-mailov� adresy</i></b><br />Heslo: <b><i>heslo kter� jste zadali</i></b>';
$lng['emails']['emailaddress'] = 'E-mail-adresa';
$lng['emails']['emails_add'] = 'Vytvo�it e-mailovou-adresu';
$lng['emails']['emails_edit'] = 'Editovat e-mailovou-addresu';
$lng['emails']['catchall'] = 'Catchall';
$lng['emails']['iscatchall'] = 'Definovat jako catchall-adresu?';
$lng['emails']['account'] = '��et';
$lng['emails']['account_add'] = 'Vytvo�it ��et';
$lng['emails']['account_delete'] = 'Smazat ��et';
$lng['emails']['from'] = 'Zdroj';
$lng['emails']['to'] = 'C�l';
$lng['emails']['forwarders'] = 'P�epos�latel�';
$lng['emails']['forwarder_add'] = 'Vytvo�it p�epos�latele';

/**
 * FTP
 */

$lng['ftp']['description'] = 'Zde m��ete vytv��et a m�nit FTP ��ty.<br />Zm�ny jsou provedeny okam�it� a ��ty mohou b�t okam�it� pou�ity.';
$lng['ftp']['account_add'] = 'Vytvo�it ��et';

/**
 * MySQL
 */

$lng['mysql']['databasename'] = 'jm�no u�ivatele/datab�ze';
$lng['mysql']['databasedescription'] = 'popis datab�ze';
$lng['mysql']['database_create'] = 'Vytvo�it datab�zi';

/**
 * Extras
 */

$lng['extras']['description'] = 'Zde m��ete vkl�dat extra v�ci, nap��klad ochranu adres���.<br />Syst�m pot�ebuje n�jak� �as, ne� se zm�ny projev�.';
$lng['extras']['directoryprotection_add'] = 'P�idat ochranu adres��e';
$lng['extras']['view_directory'] = 'zobrazit obsah adres��e';
$lng['extras']['pathoptions_add'] = 'p�idat nastaven� cesty';
$lng['extras']['directory_browsing'] = 'prohl�en� obsahu adres��e';
$lng['extras']['pathoptions_edit'] = 'upravit nastaven� cesty';
$lng['extras']['error404path'] = '404';
$lng['extras']['error403path'] = '403';
$lng['extras']['error500path'] = '500';
$lng['extras']['error401path'] = '401';
$lng['extras']['errordocument404path'] = 'URL k Chybov� str�nce 404';
$lng['extras']['errordocument403path'] = 'URL k Chybov� str�nce 403';
$lng['extras']['errordocument500path'] = 'URL k Chybov� str�nce 500';
$lng['extras']['errordocument401path'] = 'URL k Chybov� str�nce 401';

/**
 * Errors
 */

$lng['error']['error'] = 'Chyba';
$lng['error']['directorymustexist'] = 'Adres�� %s mus� existovat. Pros�m vytvo�te jej s pomoc� Va�eho FTP klienta.';
$lng['error']['filemustexist'] = 'Soubor %s mus� existovat.';
$lng['error']['allresourcesused'] = 'U� jste pou�ili v�echny sv� zdroje.';
$lng['error']['domains_cantdeletemaindomain'] = 'Nem��ete smazat dom�nu, kter� se pou��v� jako e-mailov� dom�na.';
$lng['error']['domains_canteditdomain'] = 'Nem��ete upravovat tuto dom�nu. Byla zak�z�na adminem.';
$lng['error']['domains_cantdeletedomainwithemail'] = 'Nem��ete smazat dom�nu, kter� se pou��v� jako e-mailov� dom�na. Nejd��ve sma�te v�echny emailov� adresy.';
$lng['error']['firstdeleteallsubdomains'] = 'Mus�te smazat v�echny subdom�ny ne� budete moci vytvo�it "wildcard" dom�nu.';
$lng['error']['youhavealreadyacatchallforthisdomain'] = 'U� jste definovali "catchall" pro tuto dom�nu.';
$lng['error']['ftp_cantdeletemainaccount'] = 'Nem��ete smazat sv�j hlavn� FTP ��et';
$lng['error']['login'] = 'U�ivatelsk� jm�no nebo heslo, kter� jste zadali, je �patn�. Pros�m zkuste to znovu!';
$lng['error']['login_blocked'] = 'Tento ��et byl zablokov�n z d�vodu p��li� velk�ho mno�stv� chyb p�i p�ihl�en�. <br />Pros�m zkuste to znovu za ' . $settings['login']['deactivatetime'] . ' sekund.';
$lng['error']['notallreqfieldsorerrors'] = 'Nevyplnili jste v�echna pol��ka nebo jsou n�kter� vypln�na �patn�.';
$lng['error']['oldpasswordnotcorrect'] = 'Star� heslo nen� spr�vn�.';
$lng['error']['youcantallocatemorethanyouhave'] = 'Nem��ete alokovat v�ce zdroj� ne� sami vlastn�te';
$lng['error']['mustbeurl'] = 'Vlo�ili jste nespr�vnou nebo nekompletn� url (nap�. http://somedomain.com/error404.htm)';
$lng['error']['invalidpath'] = 'Nevybrali jste spr�vnou url (mo�n� probl�m s "dirlistingem"?)';
$lng['error']['stringisempty'] = 'Chyb�j�c� vstup v poli';
$lng['error']['stringiswrong'] = '�patn� vstup v poli';
$lng['error']['myloginname'] = '\'' . $lng['login']['username'] . '\'';
$lng['error']['mypassword'] = '\'' . $lng['login']['password'] . '\'';
$lng['error']['oldpassword'] = '\'' . $lng['changepassword']['old_password'] . '\'';
$lng['error']['newpassword'] = '\'' . $lng['changepassword']['new_password'] . '\'';
$lng['error']['newpasswordconfirm'] = '\'' . $lng['changepassword']['new_password_confirm'] . '\'';
$lng['error']['newpasswordconfirmerror'] = 'Nov� heslo se neshoduje s t�m pro potvrzen�';
$lng['error']['myname'] = '\'' . $lng['customer']['name'] . '\'';
$lng['error']['myfirstname'] = '\'' . $lng['customer']['firstname'] . '\'';
$lng['error']['emailadd'] = '\'' . $lng['customer']['email'] . '\'';
$lng['error']['mydomain'] = '\'Domain\'';
$lng['error']['mydocumentroot'] = '\'Documentroot\'';
$lng['error']['loginnameexists'] = 'P�ihla�ovac� jm�no %s ji� existuje';
$lng['error']['emailiswrong'] = 'Emailov� adresa %s obsahuje nepovolen� znaky nebo je nekompletn�';
$lng['error']['loginnameiswrong'] = 'P�ihla�ovac� jm�no %s obsahuje nepovolen� znaky';
$lng['error']['userpathcombinationdupe'] = 'Kombinace U�ivatelsk�ho jm�na a cesty ji� existuje';
$lng['error']['patherror'] = 'Obecn� chyba! Cesta nem��e b�t pr�zdn�';
$lng['error']['errordocpathdupe'] = 'Mo�nost pro cestu %s ji� existuje';
$lng['error']['adduserfirst'] = 'Vytvo�te pros�m nejd��ve z�kazn�ka';
$lng['error']['domainalreadyexists'] = 'Dom�na %s je ji� p�i�azena k z�kazn�kovi';
$lng['error']['nolanguageselect'] = 'Nebyl vybr�n ��dn� jazyk.';
$lng['error']['nosubjectcreate'] = 'Mus�te definovat t�ma pro tuto e-mailovou �ablonu.';
$lng['error']['nomailbodycreate'] = 'Mus�te definovat text e-mailu pro tuto e-mailovou �ablonu.';
$lng['error']['templatenotfound'] = '�ablona nebyla nalezena.';
$lng['error']['alltemplatesdefined'] = 'Nem��ete definovat v�ce �ablon, v�echny jazyky jsou ji� podporov�ny.';
$lng['error']['wwwnotallowed'] = 'www nen� povoleno pro subdom�ny.';
$lng['error']['subdomainiswrong'] = 'Subdom�na %s obsahuje neplatn� znaky.';
$lng['error']['domaincantbeempty'] = 'Jm�no dom�ny nesm� b�t pr�zdn�.';
$lng['error']['domainexistalready'] = 'Dom�na %s ji� existuje.';
$lng['error']['domainisaliasorothercustomer'] = 'Vybran� alias pro dom�nu je bu� sama aliasem dom�ny nebo pat�� jin�mu z�kazn�kovi.';
$lng['error']['emailexistalready'] = 'E-mailov� adresa %s ji� existuje.';
$lng['error']['maindomainnonexist'] = 'Hlavn� dom�na %s neexistuje.';
$lng['error']['destinationnonexist'] = 'Pros�m vytvo�te p�epos�latele v poli \'C�l\'.';
$lng['error']['destinationalreadyexistasmail'] = 'P�epos�la� na %s ji� existuje jako aktivn� emailov� adresa.';
$lng['error']['destinationalreadyexist'] = 'U� jste nastavili p�epos�la� na %s .';
$lng['error']['destinationiswrong'] = 'P�epos�la� %s obsahuje nespr�vn� znaky nebo nen� kompletn�.';
$lng['error']['domainname'] = $lng['domains']['domainname'];

/**
 * Questions
 */

$lng['question']['question'] = 'Bezpe�nostn� ot�zka';
$lng['question']['admin_customer_reallydelete'] = 'Chcete opravdu smazat u�ivatele %s? Akci nelze vz�t zp�t!';
$lng['question']['admin_domain_reallydelete'] = 'Chcete opravdu smazat dom�nu %s?';
$lng['question']['admin_domain_reallydisablesecuritysetting'] = 'Chcete opravdu deaktivovat tato Bezpe�nostn� nastaven� (OpenBasedir a/nebo SafeMode)?';
$lng['question']['admin_admin_reallydelete'] = 'Chcete opravdu smazat administr�tory %s? Ka�d� z�kazn�k a dom�na bude nastavena k Va�emu ��tu.';
$lng['question']['admin_template_reallydelete'] = 'Chcete opravdu smazat �ablonu \'%s\'?';
$lng['question']['domains_reallydelete'] = 'Chcete opravdu smazat dom�nu %s?';
$lng['question']['email_reallydelete'] = 'Opravdu chcete smazat e-mailovou adresu %s?';
$lng['question']['email_reallydelete_account'] = 'Chcete opravdu smazat e-mailov� ��et %s?';
$lng['question']['email_reallydelete_forwarder'] = 'Chcete opravdu smazat p�epos�la� %s?';
$lng['question']['extras_reallydelete'] = 'Chcete opravdu odstranit ochranu adres��e %s?';
$lng['question']['extras_reallydelete_pathoptions'] = 'Opravdu chcete smazat nastaven� cesty pro %s?';
$lng['question']['ftp_reallydelete'] = 'Opravdu chcete smazat FTP ��et %s?';
$lng['question']['mysql_reallydelete'] = 'Opravdu chcete smazat datab�zi %s? Tato akce nem��e b�t vzata zp�t!';
$lng['question']['admin_configs_reallyrebuild'] = 'Opravdu chcete rebuildovat apache a nabindovat konfigura�n� soubory?';

/**
 * Mails
 */

$lng['mails']['pop_success']['mailbody'] = 'Dobr� den,\n\nV� e-mailov� ��et {EMAIL}\nbyl v po��dku nastaven.\n\nToto je automaticky vytvo�en�\ne-mail, pros�m neodpov�dejte na n�j!\n\nP�ejeme hezk� den, SysCP-Team';
$lng['mails']['pop_success']['subject'] = 'Po�tovn� ��et byl �sp�n� nastaven';
$lng['mails']['createcustomer']['mailbody'] = 'Dobr� den, {FIRSTNAME} {NAME},\n\nzde jsou informace o Va�em ��tu:\n\nU�ivatel: {USERNAME}\nHeslo: {PASSWORD}\n\nD�kujeme,\nSysCP-Team';
$lng['mails']['createcustomer']['subject'] = 'Informace o ��tu';

/**
 * Admin
 */

$lng['admin']['overview'] = 'P�ehled';
$lng['admin']['ressourcedetails'] = 'Pou�it� zdroje';
$lng['admin']['systemdetails'] = 'Detaily syst�mu';
$lng['admin']['syscpdetails'] = 'SysCP Detaily';
$lng['admin']['installedversion'] = 'Nainstalovan� verze';
$lng['admin']['latestversion'] = 'Posledn� verze';
$lng['admin']['lookfornewversion']['clickhere'] = 'hledat p�es webservice';
$lng['admin']['lookfornewversion']['error'] = 'Chyba p�i �ten�';
$lng['admin']['resources'] = 'Zdroje';
$lng['admin']['customer'] = 'Z�kazn�k';
$lng['admin']['customers'] = 'Z�kazn�ci';
$lng['admin']['customer_add'] = 'Vytvo�it z�kazn�ka';
$lng['admin']['customer_edit'] = 'Upravit z�kazn�ka';
$lng['admin']['domains'] = 'Dom�ny';
$lng['admin']['domain_add'] = 'Vytvo�it dom�nu';
$lng['admin']['domain_edit'] = 'Upravit dom�nu';
$lng['admin']['subdomainforemail'] = 'Subdom�ny jako emailov� dom�ny';
$lng['admin']['admin'] = 'Administr�tor';
$lng['admin']['admins'] = 'Administr�to�i';
$lng['admin']['admin_add'] = 'Vytvo�it administr�tora';
$lng['admin']['admin_edit'] = 'Upravit administr�tora';
$lng['admin']['customers_see_all'] = 'M��e vid�t v�echy z�kazn�ky?';
$lng['admin']['domains_see_all'] = 'M��e vid�t v�echny dom�ny?';
$lng['admin']['change_serversettings'] = 'M��e m�nit nastaven� serveru?';
$lng['admin']['server'] = 'Server';
$lng['admin']['serversettings'] = 'Nastaven�';
$lng['admin']['rebuildconf'] = 'P�ebudovat konfigura�n� soubory';
$lng['admin']['stdsubdomain'] = 'Standardn� subdom�na';
$lng['admin']['stdsubdomain_add'] = 'Vytvo�it standardn� subdom�nu';
$lng['admin']['phpenabled'] = 'PHP zapnuto';
$lng['admin']['deactivated'] = 'Deaktivov�no';
$lng['admin']['deactivated_user'] = 'Deaktivovat u�ivatele';
$lng['admin']['sendpassword'] = 'Zaslat heslo';
$lng['admin']['ownvhostsettings'] = 'Vlastn� vHost-nastaven�';
$lng['admin']['configfiles']['serverconfiguration'] = 'Konfigurace';
$lng['admin']['configfiles']['files'] = '<b>Konfigura�n� soubory:</b> Pros�m zm��te n�sleduj�c� soubory nabo je vytvo�te s<br /> n�sleduj�c�m obsahem, pokud neexistuj�.<br /><b>Pozn�mka:</b> MySQL heslo nebylo nahrazeno z bezpe�nostn�ch d�vod�.<br />Pros�m nahra�te &quot;MYSQL_PASSWORD&quot; sv�m vlastn�m. Pokud jste zapomn�li sv� mysql heslo<br />najdete jej v &quot;lib/userdata.inc.php&quot;.';
$lng['admin']['configfiles']['commands'] = '<b>P��kazy:</b> Pros�m spus�te n�sleduj�c� p��kazy v p��kazov�m ��dku.';
$lng['admin']['configfiles']['restart'] = '<b>Restart:</b> Pros�m spus�te n�sleduj�c� p��kazy v p��kazov�m ��dku, aby jste nahr�li novou konfiguraci.';
$lng['admin']['templates']['templates'] = '�ablony';
$lng['admin']['templates']['template_add'] = 'P�idat �ablonu';
$lng['admin']['templates']['template_edit'] = 'Upravit �ablonu';
$lng['admin']['templates']['action'] = 'Akce';
$lng['admin']['templates']['email'] = 'E-Mail';
$lng['admin']['templates']['subject'] = 'P�edm�t';
$lng['admin']['templates']['mailbody'] = 'T�lo mailu';
$lng['admin']['templates']['createcustomer'] = 'Uv�tac� mail pro nov� z�kazn�ky';
$lng['admin']['templates']['pop_success'] = 'Uv�tac� mail pro nov� emailov� ��ty';
$lng['admin']['templates']['template_replace_vars'] = 'Prom�nn� k nahrazen� v �ablon�:';
$lng['admin']['templates']['FIRSTNAME'] = 'Nahrazeno k�estn�m jm�nem z�kazn�ka.';
$lng['admin']['templates']['NAME'] = 'Nahrazeno jm�nem z�kazn�ka.';
$lng['admin']['templates']['USERNAME'] = 'Nahrazeno u�ivatelsk�m jm�nem z�kazn�ka.';
$lng['admin']['templates']['PASSWORD'] = 'Nahrazeno z�kazn�kov�m heslem.';
$lng['admin']['templates']['EMAIL'] = 'Nahrazeno adresou POP3/IMAP ��tu.';

/**
 * Serversettings
 */

$lng['serversettings']['session_timeout']['title'] = 'Session Timeout';
$lng['serversettings']['session_timeout']['description'] = 'Jak dlouho mus� b�t u�ivatel neaktivn�, ne� session vypr�� (sekundy)?';
$lng['serversettings']['accountprefix']['title'] = 'Z�kazn�kova p�edpona';
$lng['serversettings']['accountprefix']['description'] = 'Jk� p�edpony by m�ly m�t ��ty z�kazn�k�?';
$lng['serversettings']['mysqlprefix']['title'] = 'SQL p�edpona';
$lng['serversettings']['mysqlprefix']['description'] = 'Jak� p�edpony by m�ly m�t ��ty mysql?';
$lng['serversettings']['ftpprefix']['title'] = 'FTP p�edpona';
$lng['serversettings']['ftpprefix']['description'] = 'Jakou p�edponu by m�ly m�t ftp ��ty?';
$lng['serversettings']['documentroot_prefix']['title'] = 'Dom�c� adres��';
$lng['serversettings']['documentroot_prefix']['description'] = 'Kde by m�ly b�t ulo�eny v�echny dom�c� adres��e?';
$lng['serversettings']['logfiles_directory']['title'] = 'Adres�� pro log soubory';
$lng['serversettings']['logfiles_directory']['description'] = 'Kde by m�ly b�t v�echny log soubory ulo�eny?';
$lng['serversettings']['ipaddress']['title'] = 'IP-Adresa';
$lng['serversettings']['ipaddress']['description'] = 'Jak� je IP adresa tohoto serveru?';
$lng['serversettings']['hostname']['title'] = 'Jm�no hosta';
$lng['serversettings']['hostname']['description'] = 'Jak� je jm�no hosta tohoto serveru?';
$lng['serversettings']['apachereload_command']['title'] = 'P��kaz pro reload apache';
$lng['serversettings']['apachereload_command']['description'] = 'Jak� je p��kaz, kter�m apache znovunahraje sv� konfigura�n� soubory?';
$lng['serversettings']['bindconf_directory']['title'] = 'Bindujte konfigura�n� adres��';
$lng['serversettings']['bindconf_directory']['description'] = 'Kde by m�ly b�t ulo�eny "bind configfiles"?';
$lng['serversettings']['bindreload_command']['title'] = 'Bind reload p��kaz';
$lng['serversettings']['bindreload_command']['description'] = 'Jak� je p��kaz pro znovunahr�n� "bind configfiles"?';
$lng['serversettings']['binddefaultzone']['title'] = 'Bind v�choz� z�na';
$lng['serversettings']['binddefaultzone']['description'] = 'Jak� je n�zev v�choz� z�ny?';
$lng['serversettings']['vmail_uid']['title'] = 'UID-mail�';
$lng['serversettings']['vmail_uid']['description'] = 'Jak� UserID by m�ly e-maily m�t?';
$lng['serversettings']['vmail_gid']['title'] = 'GID-mail�';
$lng['serversettings']['vmail_gid']['description'] = 'Jak� GroupID by m�ly maily m�t?';
$lng['serversettings']['vmail_homedir']['title'] = 'Mails-Home adres��';
$lng['serversettings']['vmail_homedir']['description'] = 'Kam by se m�ly v�echny maily ukl�dat?';
$lng['serversettings']['adminmail']['title'] = 'Odes�latel';
$lng['serversettings']['adminmail']['description'] = 'Jak� je odes�latelova adresa pro emaily odeslan� z Panelu?';
$lng['serversettings']['phpmyadmin_url']['title'] = 'phpMyAdminova URL';
$lng['serversettings']['phpmyadmin_url']['description'] = 'Jak� je URL adresa phpMyAdmin? (mus� za��nat http(s)://)';
$lng['serversettings']['webmail_url']['title'] = 'WebMailov� URL';
$lng['serversettings']['webmail_url']['description'] = 'Jak� je URL adresa k WebMailu? (mus� za��nat with http(s)://)';
$lng['serversettings']['webftp_url']['title'] = 'WebFTP URL';
$lng['serversettings']['webftp_url']['description'] = 'Jak� je URL k WebFTP? (mus� za��nat with http(s)://)';
$lng['serversettings']['language']['description'] = 'Jak� je v�choz� jazyk Va�eho serveru?';
$lng['serversettings']['maxloginattempts']['title'] = 'Maxim�ln� po�et pokus� o p�ihl�en�';
$lng['serversettings']['maxloginattempts']['description'] = 'Maxim�ln� po�et pokus� o p�ihl�en� k ��tu, ne� se ��et zablokuje.';
$lng['serversettings']['deactivatetime']['title'] = 'Deaktivovan� po dobu';
$lng['serversettings']['deactivatetime']['description'] = '�as (sek.) po kter� bude ��et deaktivov�n pro p��li� mnoho pokus� o p�ihl�en�.';
$lng['serversettings']['pathedit']['title'] = 'Typ vstupu cesty';
$lng['serversettings']['pathedit']['description'] = 'M�la by b�t cesta vyb�r�na pomoc� vyskakovac�ho menu nebo vstupn�m polem?';
$lng['serversettings']['nameservers']['title'] = 'Nameservery';
$lng['serversettings']['nameservers']['description'] = 'St�edn�kem odd�len� seznam obsahuj�c� hostname v�ech nameserver�. Prvn� bude prim�rn�.';
$lng['serversettings']['mxservers']['title'] = 'MX servery';
$lng['serversettings']['mxservers']['description'] = 'St�edn�kem odd�len� seznam obsahuj�c� p�ry ��sel a hostname odd�len�ch mezerou (nap�. \'10 mx.example.com\') obsahuj�c� mx servery.';

/**
 * CHANGED BETWEEN 1.2.12 and 1.2.13
 */

$lng['mysql']['description'] = 'Zde m��ete vytv��et a m�nit sv� MySQL-Datab�ze.<br />Zm�ny jsou provedeny okam�it� a datab�ze m��e b�t okam�it� pou��v�na.<br />V menu vlevo m��ete naj�t n�stroj phpMyAdmin se kter�m m��ete jednodu�e upravovat svou datab�zi.<br /><br />Pro pou�it� datab�ze ve sv�ch php skriptech pou�ijte n�sleduj�c� nastaven�: (Data <i>kurz�vou</i> mus� b�t zm�n�na na V�mi vlo�en� hodnoty!)<br />Host: <b><SQL_HOST></b><br />U�ivatelsk� jm�no: <b><i>Databasename</i></b><br />Heslo: <b><i>heslo kter� jste zvolili</i></b><br />Datab�ze: <b><i>Databasename</i></b>';

/**
 * ADDED BETWEEN 1.2.12 and 1.2.13
 */

$lng['admin']['cronlastrun'] = 'Posledn� generov�n� konfigura�n�ch soubor�';
$lng['serversettings']['paging']['title'] = 'Z�znam� na str�nku';
$lng['serversettings']['paging']['description'] = 'Kolik z�znam� by m�lo b�t zobrazeno na str�nce? (0 = zru�it str�nkov�n�)';
$lng['error']['ipstillhasdomains'] = 'IP/Port kombinace, kterou chcete smazat m� st�le p�i�azen� dom�ny, pros�m p�e�a�te je k jin� IP/Port kombinaci ne� sma�ete tuto IP/Port kombinaci.';
$lng['error']['cantdeletedefaultip'] = 'Nem��ete smazat IP/Port kombinaci v�choz�ho p�eprodejce, pros�m vytvo�te jinou IP/Port kombinaci v�choz� pro p�eprodejce ne� sma�ete tuto IP/Port kombinaci.';
$lng['error']['cantdeletesystemip'] = 'Nem��ete smazat posledn� syst�movou IP, bu� vytvo�te novou IP/Port kombinaci pro syst�movou IP nebo zm��te IP syst�mu.';
$lng['error']['myipaddress'] = '\'IP\'';
$lng['error']['myport'] = '\'Port\'';
$lng['error']['myipdefault'] = 'Mus�te vybrat IP/Port kombinaci kter� by se m�la st�t v�choz�.';
$lng['error']['myipnotdouble'] = 'Tato kombinace IP/Portu ji� existuje.';
$lng['question']['admin_ip_reallydelete'] = 'Chcete opravdu smayat IP adresu %s?';
$lng['admin']['ipsandports']['ipsandports'] = 'IP a Porty';
$lng['admin']['ipsandports']['add'] = 'P�idat IP/Port';
$lng['admin']['ipsandports']['edit'] = 'Upravit IP/Port';
$lng['admin']['ipsandports']['ipandport'] = 'IP/Port';
$lng['admin']['ipsandports']['ip'] = 'IP';
$lng['admin']['ipsandports']['port'] = 'Port';

// ADDED IN 1.2.13-rc3

$lng['error']['cantchangesystemip'] = 'Nem��ete zm�nit posledn� syst�movou IP, bu� vytvo�te novou IP/Port kombinaci pro syst�movou IP nebo zm��te IP syst�mu.';
$lng['question']['admin_domain_reallydocrootoutofcustomerroot'] = 'Jste si jisti, �e chcete aby root dokument� pro tuto dom�nu nebyl v "customerroot" z�kazn�ka?';

// ADDED IN 1.2.14-rc1

$lng['admin']['memorylimitdisabled'] = 'Zak�z�no';
$lng['domain']['openbasedirpath'] = 'OpenBasedir-cesta';
$lng['domain']['docroot'] = 'Cesta z pol��ka naho�e';
$lng['domain']['homedir'] = 'Domovn� adres��';
$lng['admin']['valuemandatory'] = 'Tato hodnota je povinn�';
$lng['admin']['valuemandatorycompany'] = 'Bu� &quot;jm�no&quot; a &quot;k�estn� jm�no&quot; nebo &quot;spole�nost&quot; mus� b�t vypln�na';
$lng['menue']['main']['username'] = 'P�ihl�en(a) jako: ';
$lng['panel']['urloverridespath'] = 'URL (p�ep�e cestu)';
$lng['panel']['pathorurl'] = 'Cesta nebo URL';
$lng['error']['sessiontimeoutiswrong'] = 'Pouze ��seln� &quot;Session Timeout&quot; je povoleno.';
$lng['error']['maxloginattemptsiswrong'] = 'ouze ��seln� &quot;Maxim�ln� po�et pokus� o p�ihl�en�&quot; je povoleno.';
$lng['error']['deactivatetimiswrong'] = 'ouze ��seln� &quot;�as deaktivace&quot; je povoleno.';
$lng['error']['accountprefixiswrong'] = '&quot;P�edpona u�ivatele&quot; je �patn�.';
$lng['error']['mysqlprefixiswrong'] = '&quot;SQL p�edpona&quot; je �patn�.';
$lng['error']['ftpprefixiswrong'] = '&quot;FTP p�edpona&quot; je �patn�.';
$lng['error']['ipiswrong'] = '&quot;IP-Adresa&quot; je �patn�. Pouze validn� IP adresa je povolena.';
$lng['error']['vmailuidiswrong'] = '&quot;Mails-uid&quot; je �patn�. Je povoleno pouze ��seln� UID.';
$lng['error']['vmailgidiswrong'] = '&quot;Mails-gid&quot; je �patn�. Je povoleno pouze ��seln� GID.';
$lng['error']['adminmailiswrong'] = '&quot;Sender-address&quot; je �patn�. Je povolena pouze validn� emailov� adresa.';
$lng['error']['pagingiswrong'] = '&quot;Entries per Page&quot;-value je �patn�. Jsou povolena pouze ��sla.';
$lng['error']['phpmyadminiswrong'] = 'phpMyAdmin-url nan� spr�vn� url.';
$lng['error']['webmailiswrong'] = 'WebMail-odkaz nen� spr�vn� odkaz.';
$lng['error']['webftpiswrong'] = 'WebFTP-odkaz nen� spr�vn� odkaz.';
$lng['domains']['hasaliasdomains'] = 'M� aliasov� dom�ny';
$lng['serversettings']['defaultip']['title'] = 'V�choz� IP/Port';
$lng['serversettings']['defaultip']['description'] = 'Jak� je v�choz� IP/Port kombinace?';
$lng['domains']['statstics'] = 'Statistika pou�it�';
$lng['panel']['ascending'] = 'sestupn�';
$lng['panel']['decending'] = 'vzestupn�';
$lng['panel']['search'] = 'Vyhled�v�n�';
$lng['panel']['used'] = 'pou�ito';

// ADDED IN 1.2.14-rc3

$lng['panel']['translator'] = 'P�ekladatel';

// ADDED IN 1.2.14-rc4

$lng['error']['stringformaterror'] = 'Hodnota pole &quot;%s&quot; nen� v o�ek�van�m form�tu.';

// ADDED IN 1.2.15-rc1

$lng['admin']['serversoftware'] = 'Software serveru';
$lng['admin']['phpversion'] = 'PHP-Verze';
$lng['admin']['phpmemorylimit'] = 'PHP-Limit-Pam�ti';
$lng['admin']['mysqlserverversion'] = 'MySQL verze serveru';
$lng['admin']['mysqlclientversion'] = 'MySQL verze klienta';
$lng['admin']['webserverinterface'] = 'Webserver rozhran�';
$lng['domains']['isassigneddomain'] = 'Je p�i�azen� dom�na';
$lng['serversettings']['phpappendopenbasedir']['title'] = 'Cesty k p�id�n� k OpenBasedir';
$lng['serversettings']['phpappendopenbasedir']['description'] = 'Tyto cesty (odd�leny pomoc� "colons") budou vlo�eny  do OpenBasedir-statementu v ka�d�m vhost-containeru.';

// CHANGED IN 1.2.15-rc1

$lng['error']['loginnameissystemaccount'] = 'Nem��ete vytvo�it ��ty, kter� jsou podobn� syst�mov�m ��t�m (nap��klad za��naj� &quot;%s&quot;). Pros�m vlo�te jin� jm�no ��tu.';
$lng['error']['youcantdeleteyourself'] = 'Z bezpe�nostn�ch d�vod� se nem��ete smazat.';
$lng['error']['youcanteditallfieldsofyourself'] = 'Pozn�mka: Z bezpe�nostn�ch d�vod� nem��ete upravovat v�echna pole sv�ho ��tu.';

// ADDED IN 1.2.16-svn1

$lng['serversettings']['natsorting']['title'] = 'Pou��t "lidsk�" t��d�n� v seznamech';
$lng['serversettings']['natsorting']['description'] = '�adit seznamy jako web1 -> web2 -> web11 m�sto web1 -> web11 -> web2.';

// ADDED IN 1.2.16-svn2

$lng['serversettings']['deactivateddocroot']['title'] = 'Docroot pro deaktivovan� u�ivatele';
$lng['serversettings']['deactivateddocroot']['description'] = 'Kdy� bude u�ivatel deaktivov�n, tato cesta bude pou�ita jako jeho docroot. Ponechte pr�zdn�, pokud nechcete vytv��et.';

// ADDED IN 1.2.16-svn4

$lng['panel']['reset'] = 'zru�it zm�ny';
$lng['admin']['accountsettings'] = 'Nastaven� ��tu';
$lng['admin']['panelsettings'] = 'Nastaven� panelu';
$lng['admin']['systemsettings'] = 'Nastaven� syst�mu';
$lng['admin']['webserversettings'] = 'Nastaven� webserveru';
$lng['admin']['mailserversettings'] = 'Nastaven� mailserveru';
$lng['admin']['nameserversettings'] = 'Nastaven� nameserveru';
$lng['admin']['updatecounters'] = 'P�epo��tat vyu�it� zdroj�';
$lng['question']['admin_counters_reallyupdate'] = 'Opravdu chcete p�epo��tat vyu�it� zdroj�?';
$lng['panel']['pathDescription'] = 'Pokud adres�� neexistuje, bude vytvo�en automaticky.';

// ADDED IN 1.2.16-svn6

$lng['mails']['trafficninetypercent']['mailbody'] = 'V�en� u�ivateli {NAME},\n\nPou�il jste {TRAFFICUSED} MB z V�mi dostupn�ch {TRAFFIC} MB p�enos�.\nTo je v�ce jak 90%.\n\nP�ejeme hezk� den, SysCP-Team';
$lng['mails']['trafficninetypercent']['subject'] = 'Dosahuj�c va�eho limitu p�enos�';
$lng['admin']['templates']['trafficninetypercent'] = 'Upozor�ovac� mail pro z�kazn�ky, pokud vy�erpaj� 90% z p�enos�';
$lng['admin']['templates']['TRAFFIC'] = 'Nahrazeno p�enosy, kter� byly p�id�leny u�ivateli.';
$lng['admin']['templates']['TRAFFICUSED'] = 'Nahrazeno p�enosy, kter� byly vy�erp�ny z�kazn�kem.';

// ADDED IN 1.2.16-svn7

$lng['admin']['subcanemaildomain']['never'] = 'Nikdy';
$lng['admin']['subcanemaildomain']['choosableno'] = 'V�b�r, v�choz� ne';
$lng['admin']['subcanemaildomain']['choosableyes'] = 'V�b�r, v�choz� ano';
$lng['admin']['subcanemaildomain']['always'] = 'V�dy';
$lng['changepassword']['also_change_webalizer'] = ' tak� zm��te heslo pro webalizer statistics';

// ADDED IN 1.2.16-svn8

$lng['serversettings']['mailpwcleartext']['title'] = 'Tak� ulo�te hesla mailov�ch ��t� ne�ifrovan� v datab�zi';
$lng['serversettings']['mailpwcleartext']['description'] = 'Pokud je toto nastaveno na "ano", v�echna hesla budou ukl�d�na bez �ifrov�n� (��st� text, �iteln� pro kohokoliv s p��stupem k datab�zi) v tabulce mail_users. Toto aktivujte jen pokud to opravdu pot�ebujete!';
$lng['serversettings']['mailpwcleartext']['removelink'] = 'Kliknut�m zde vyma�ete v�echna neza�ifrovan� hesla z tabulky.';
$lng['question']['admin_cleartextmailpws_reallywipe'] = 'Opravdu chcete vymazat v�echna neza�ifrovan� hesla pro e-mailov� ��ty z tabulky mail_users? Tento krok nelze vr�tit zp�t!';
$lng['admin']['configfiles']['overview'] = 'P�ehled';
$lng['admin']['configfiles']['wizard'] = 'Pr�vodce';
$lng['admin']['configfiles']['distribution'] = 'Distribuce';
$lng['admin']['configfiles']['service'] = 'Slu�ba';
$lng['admin']['configfiles']['daemon'] = 'Daemon';
$lng['admin']['configfiles']['http'] = 'Webserver (HTTP)';
$lng['admin']['configfiles']['dns'] = 'Nameserver (DNS)';
$lng['admin']['configfiles']['mail'] = 'Mailserver (POP3/IMAP)';
$lng['admin']['configfiles']['smtp'] = 'Mailserver (SMTP)';
$lng['admin']['configfiles']['ftp'] = 'FTP-Server';
$lng['admin']['configfiles']['etc'] = 'Ostatn� (System)';
$lng['admin']['configfiles']['choosedistribution'] = '-- Vyberte distribuci --';
$lng['admin']['configfiles']['chooseservice'] = '-- Vyberte slu�bu --';
$lng['admin']['configfiles']['choosedaemon'] = '-- Vyberte daemona --';
$lng['admin']['trafficlastrun'] = 'Posledn� kalkulace p�enos�';

// ADDED IN 1.2.16-svn10

$lng['serversettings']['ftpdomain']['title'] = 'FTP ��ty na dom�n�';
$lng['serversettings']['ftpdomain']['description'] = 'Z�kazn�ci mohou vytv��et FTP ��ty user@customerdomain?';
$lng['panel']['back'] = 'Back';

// ADDED IN 1.2.16-svn12

$lng['serversettings']['mod_log_sql']['title'] = 'Do�asn� ukl�dat logy do datab�ze';
$lng['serversettings']['mod_log_sql']['description'] = 'Pou��t <a href="http://www.outoforder.cc/projects/apache/mod_log_sql/" title="mod_log_sql">mod_log_sql</a> pro do�asn� ulo�en� webrequest�<br /><b>Toto vy�aduje speci�ln� <a href="http://files.syscp.org/docs/mod_log_sql/" title="mod_log_sql - documentation">konfiguraci apache</a>!</b>';
$lng['serversettings']['mod_fcgid']['title'] = 'Includuj PHP p�es mod_fcgid/suexec';
$lng['serversettings']['mod_fcgid']['description'] = 'Pou�ij mod_fcgid/suexec/libnss_mysql pro b�h PHP s odpov�daj�c�m ��ivatelsk�m ��tem.<br/><b>toto vy�aduje speci�ln� konfiguraci apache!</b>';
$lng['serversettings']['sendalternativemail']['title'] = 'Pou�ij alternativn� e-mailovou adresu';
$lng['serversettings']['sendalternativemail']['description'] = 'Po�li email s heslem na jinou adresu p�i vytv��en� emailov�ho ��tu';
$lng['emails']['alternative_emailaddress'] = 'Alternativn� e-mailov� adresa';
$lng['mails']['pop_success_alternative']['mailbody'] = 'V�en� u�ivateli,\n\nV� emailov� ��et {EMAIL}\nbyl �sp�n� nastaven.\nVa�e heslo je {PASSWORD}.\n\nTento e-mail byl automaticky vygenerov�n,\npros�m neodpov�dejte na n�j!\n\nP�ejeme V�m hezk� den, SysCP-Team';
$lng['mails']['pop_success_alternative']['subject'] = 'E-mailov� ��et byl �sp�n� vytvo�en';
$lng['admin']['templates']['pop_success_alternative'] = 'Uv�tac� e-mail pro nov� ��ty byl odesl�n na alternativn� adresu';
$lng['admin']['templates']['EMAIL_PASSWORD'] = 'Nahrazeno heslem ��tu POP3/IMAP.';

// ADDED IN 1.2.16-svn13

$lng['error']['documentrootexists'] = 'Adres�� &quot;%s&quot; ji� existuje pro tohoto z�kazn�ka. Pros�m odstra�te jej, ne� budete znovu z�kazn�ka vkl�dat.';

// ADDED IN 1.2.16-svn14

$lng['serversettings']['apacheconf_vhost']['title'] = 'Apache vhost konfigura�n� soubor/dirname';
$lng['serversettings']['apacheconf_vhost']['description'] = 'Kde by m�la b�t ulo�ena konfigurace vhosta? M��ete zde bu� specifikovat soubor (v�ichni vhosti v jednom souboru) nebo adres�� (ka�d� vhost m� vlastn� soubor).';
$lng['serversettings']['apacheconf_diroptions']['title'] = 'Apache diroptions konfigura�n� soubor/dirname';
$lng['serversettings']['apacheconf_diroptions']['description'] = 'Kde by m�la b�t ulo�ena konfigurace diroptions?  M��ete zde bu� specifikovat soubor (v�ichni diroptions v jednom souboru) nebo adres�� (ka�d� diroption m� vlastn� soubor).';
$lng['serversettings']['apacheconf_htpasswddir']['title'] = 'Apache htpasswd dirname';
$lng['serversettings']['apacheconf_htpasswddir']['description'] = 'Kde by m�ly b�t ulo�eny htpasswd soubory pro ochranu adres���?';

// ADDED IN 1.2.16-svn15

$lng['error']['formtokencompromised'] = 'The request seems to be compromised. Z bezpe�nostn�ch d�vod� jste byli odhl�eni.';
$lng['serversettings']['mysql_access_host']['title'] = 'MySQL-Access-Hosts';
$lng['serversettings']['mysql_access_host']['description'] = 'St�edn�kem odd�len� seznam host�, ze kter�ch bude dovoleno u�ivatel�m se p�ipojit k MySQL-Serveru.';

// ADDED IN 1.2.18-svn1

$lng['admin']['ipsandports']['create_listen_statement'] = 'Vytvo�it Listen statement';
$lng['admin']['ipsandports']['create_namevirtualhost_statement'] = 'Vytvo�it NameVirtualHost statement';
$lng['admin']['ipsandports']['create_vhostcontainer'] = 'Vytvo�it vHost-Container';
$lng['admin']['ipsandports']['create_vhostcontainer_servername_statement'] = 'Vytvo�it ServerName statement v vHost-Container';

// ADDED IN 1.2.18-svn2

$lng['admin']['webalizersettings'] = 'Nastaven� Webalizeru';
$lng['admin']['webalizer']['normal'] = 'Norm�ln�';
$lng['admin']['webalizer']['quiet'] = 'Tich�';
$lng['admin']['webalizer']['veryquiet'] = '��dn� v�stup';
$lng['serversettings']['webalizer_quiet']['title'] = 'V�stup Webalizeru';
$lng['serversettings']['webalizer_quiet']['description'] = 'Pov�davost webalizer-programu';

// ADDED IN 1.2.18-svn3

$lng['ticket']['admin_email'] = 'root@localhost';
$lng['ticket']['noreply_email'] = 'tikety@syscp';
$lng['admin']['ticketsystem'] = 'Support-tikety';
$lng['menue']['ticket']['ticket'] = 'Support tikety';
$lng['menue']['ticket']['categories'] = 'Kategorie podpory';
$lng['menue']['ticket']['archive'] = 'Archiv-tiket�';
$lng['ticket']['description'] = 'Nastavit popis zde!';
$lng['ticket']['ticket_new'] = 'Otev��t nov� tiket';
$lng['ticket']['ticket_reply'] = 'zodpov�d�t tiket';
$lng['ticket']['ticket_reopen'] = 'Znovuotev��t tiket';
$lng['ticket']['ticket_newcateory'] = 'Vytvo�it novou kategorii';
$lng['ticket']['ticket_editcateory'] = 'Upravit kategorii';
$lng['ticket']['ticket_view'] = 'Zobrazit ticketcourse';
$lng['ticket']['ticketcount'] = 'Tikety';
$lng['ticket']['ticket_answers'] = 'Odpov�di';
$lng['ticket']['lastchange'] = 'Posledn� akce';
$lng['ticket']['subject'] = 'P�edm�t';
$lng['ticket']['status'] = 'Status';
$lng['ticket']['lastreplier'] = 'Posledn� odpov�daj�c�';
$lng['ticket']['priority'] = 'Priorita';
$lng['ticket']['low'] = '<span class="ticket_low">N�zk�</span>';
$lng['ticket']['normal'] = '<span class="ticket_normal">Norm�ln�</span>';
$lng['ticket']['high'] = '<span class="ticket_high">Vysok�</span>';
$lng['ticket']['unf_low'] = 'N�zk�';
$lng['ticket']['unf_normal'] = 'Norm�ln�';
$lng['ticket']['unf_high'] = 'Vysok�';
$lng['ticket']['lastchange'] = 'Posledn� zm�na';
$lng['ticket']['lastchange_from'] = 'Od data (dd.mm.yyyy)';
$lng['ticket']['lastchange_to'] = 'Do data (dd.mm.yyyy)';
$lng['ticket']['category'] = 'Kategorie';
$lng['ticket']['no_cat'] = '��dn�';
$lng['ticket']['message'] = 'Zpr�va';
$lng['ticket']['show'] = 'Zobraz';
$lng['ticket']['answer'] = 'Odpov��';
$lng['ticket']['close'] = 'Zav��t';
$lng['ticket']['reopen'] = 'Znovuotev��t';
$lng['ticket']['archive'] = 'Archiv';
$lng['ticket']['ticket_delete'] = 'Smazat tiket';
$lng['ticket']['lastarchived'] = 'Ned�vno archivovan� tikety';
$lng['ticket']['archivedtime'] = 'Archivov�no';
$lng['ticket']['open'] = 'Otev��t';
$lng['ticket']['wait_reply'] = '�ek� na odpov��';
$lng['ticket']['replied'] = 'Odpov�zeno';
$lng['ticket']['closed'] = 'Zav�en�';
$lng['ticket']['staff'] = 'Person�l';
$lng['ticket']['customer'] = 'Z�kazn�k';
$lng['ticket']['old_tickets'] = 'Tiket zpr�vy';
$lng['ticket']['search'] = 'Prohledat archiv';
$lng['ticket']['nocustomer'] = '��dn� v�b�r';
$lng['ticket']['archivesearch'] = 'V�sledky prohled�v�n� archivu';
$lng['ticket']['noresults'] = 'Nenalezeny ��dn� tikety';
$lng['ticket']['notmorethanxopentickets'] = 'Kv�li ochran� proti SPAMu nem��ete m�t otev�eno v�c jak %s tiket�';
$lng['ticket']['supportstatus'] = 'Status-podpory';
$lng['ticket']['supportavailable'] = '<span class="ticket_low">Na�e podpora jsou k dispozici a p�ipraveni pomoci.</span>';
$lng['ticket']['supportnotavailable'] = '<span class="ticket_high">Na�e podpora nen� moment�ln� dostupn�</span>';
$lng['admin']['templates']['ticket'] = 'Upozor�ovac� e-maily pro tikety podpory';
$lng['admin']['templates']['SUBJECT'] = 'Nahrazeno p�edm�tem tiketu podpory';
$lng['admin']['templates']['new_ticket_for_customer'] = 'Z�kaznick� upozorn�n�, �e byl tiket odesl�n';
$lng['admin']['templates']['new_ticket_by_customer'] = 'Administr�torsk� upozorn�n�, �e byl tiket otev�en z�kazn�kem';
$lng['admin']['templates']['new_reply_ticket_by_customer'] = 'Administr�torsk� upozorn�n�, �e p�i�la odpov�� na tiket od z�kazn�ka';
$lng['admin']['templates']['new_ticket_by_staff'] = 'Z�kaznick� upozorn�n�, �e byl tiket otev�en person�lem';
$lng['admin']['templates']['new_reply_ticket_by_staff'] = 'Z�kaznick� upozorn�n� na odpov�� na tiket od person�lu';
$lng['mails']['new_ticket_for_customer']['mailbody'] = 'V�en� u�ivateli {FIRSTNAME} {NAME},\n\nV� tiket podpory s p�edm�tem "{SUBJECT}" byl odesl�n.\n\nA� p�ijde odpov�� na V� tiket, budete upozorn�ni.\n\nD�kujeme,\n SysCP-Team';
$lng['mails']['new_ticket_for_customer']['subject'] = 'V� tiket na podporu byl odesl�n';
$lng['mails']['new_ticket_by_customer']['mailbody'] = 'Mil� administr�tore,\n\nbyl odesl�n nov� tiket s p�edm�tem "{SUBJECT}".\n\nPros�m p�ihla�te se pro otev�en� tiketu.\n\nD�kujeme,\n SysCP-Team';
$lng['mails']['new_ticket_by_customer']['subject'] = 'Nov� tiket podpory byl odesl�n';
$lng['mails']['new_reply_ticket_by_customer']['mailbody'] = 'Mil� administr�tore,\n\ntiket podpory "{SUBJECT}" byl zodpov�zen z�kazn�kem.\n\nPros�m p�ihla�te se pro otev�en� tiketu.\n\nD�kujeme,\n SysCP-Team';
$lng['mails']['new_reply_ticket_by_customer']['subject'] = 'Nov� odpov�� na tiket podpory';
$lng['mails']['new_ticket_by_staff']['mailbody'] = 'V�en� u�ivateli {FIRSTNAME} {NAME},\n\nbyl pro V�s otev�en tiket podpory s p�edm�tem "{SUBJECT}".\n\nPros�m p�ihla�te se pro otev�en� tiketu.\n\nD�kujeme,\n SysCP-Team';
$lng['mails']['new_ticket_by_staff']['subject'] = 'Nov� tiket podpory byl odesl�n';
$lng['mails']['new_reply_ticket_by_staff']['mailbody'] = 'V�en� u�ivateli {FIRSTNAME} {NAME},\n\ntiket podpory s p�edm�tem "{SUBJECT}" byl zodpov�zen na��m person�lem.\n\nPro p�e�ten� tiketu se pros�m p�ihla�te.\n\nD�kujem,\n SysCP-Team';
$lng['mails']['new_reply_ticket_by_staff']['subject'] = 'Nov� odpov�� na tiket podpory';
$lng['question']['ticket_reallyclose'] = 'Opravdu chcete zav��t tiket "%s"?';
$lng['question']['ticket_reallydelete'] = 'Opravdu chcete smazat tiket "%s"?';
$lng['question']['ticket_reallydeletecat'] = 'Opravdu chcete smazat kategorii "%s"?';
$lng['question']['ticket_reallyarchive'] = 'Opravdu chcete p�esunout tiket "%s" do archivu?';
$lng['error']['mysubject'] = '\'' . $lng['ticket']['subject'] . '\'';
$lng['error']['mymessage'] = '\'' . $lng['ticket']['message'] . '\'';
$lng['error']['mycategory'] = '\'' . $lng['ticket']['category'] . '\'';
$lng['error']['nomoreticketsavailable'] = 'Pou�ili jste v�echny dostupn� tikety. Pros�m kontaktujte sv�ho administr�tora.';
$lng['error']['nocustomerforticket'] = 'Nemohu vytv��et tikety bez z�kazn�k�';
$lng['error']['categoryhastickets'] = 'Kategorie st�le obsahuje tikety.<br />Pros�m sma�te tikety aby jste mohli smazat kategorii';
$lng['error']['notmorethanxopentickets'] = $lng['ticket']['notmorethanxopentickets'];
$lng['admin']['ticketsettings'] = 'Tikety-podpory nastaven�';
$lng['admin']['archivelastrun'] = 'Posledn� archivace tiket�';
$lng['serversettings']['ticket']['noreply_email'] = 'Bez odpov�dn� e-mailov� adresa';
$lng['serversettings']['ticket']['noreply_email_desc'] = 'Odes�latelova adresa pro tikety podpory, v�t�inou n�co jako no-reply@domain.tld';
$lng['serversettings']['ticket']['worktime_begin'] = 'Za��tek pr�ce podpory (hh:mm)';
$lng['serversettings']['ticket']['worktime_begin_desc'] = 'Start-time pokud je podpora k dispozici';
$lng['serversettings']['ticket']['worktime_end'] = 'Konec pr�ce podpory (hh:mm)';
$lng['serversettings']['ticket']['worktime_end_desc'] = 'End-time pokud je podpora k dispozici';
$lng['serversettings']['ticket']['worktime_sat'] = 'Je podpora k dispozici o sobot�ch?';
$lng['serversettings']['ticket']['worktime_sun'] = 'Je podpora k dispozici o ned�l�ch?';
$lng['serversettings']['ticket']['worktime_all'] = 'Podpora bez �asov�ho omezen�';
$lng['serversettings']['ticket']['worktime_all_desc'] = 'Pokud "Ano" mo�nosti za��tku a konce pr�ce podpory bude p�eps�na';
$lng['serversettings']['ticket']['archiving_days'] = 'Po kolika dnech by m�ly b�t uzav�en� tikety archivov�ny?';
$lng['customer']['tickets'] = 'Tikety podpory';

// ADDED IN 1.2.18-svn4

$lng['admin']['domain_nocustomeraddingavailable'] = 'Moment�ln� nen� mo�n� p�idat dom�nu. Nejd��ve mus�te p�idat aspo� jednoho z�kazn�ka.';
$lng['serversettings']['ticket']['enable'] = 'Zapnout syst�m tiket�';
$lng['serversettings']['ticket']['concurrentlyopen'] = 'Kolik tiket� by m�lo b�t k dispozici najednou?';
$lng['error']['norepymailiswrong'] = '&quot;Bezodpov�dn� adresa&quot; je �patn�. Je povolena pouze validn� e-mailov� adresa.';
$lng['error']['tadminmailiswrong'] = '&quot;Ticketadmin-adresa&quot; je �patn�. Je povolena pouze validn� e-mailov� adresa.';
$lng['ticket']['awaitingticketreply'] = 'M�te %s nezodpov�zen�ch tiket� podpory';

// ADDED IN 1.2.18-svn5

$lng['serversettings']['ticket']['noreply_name'] = 'Jm�no odes�latele tiket� v emailu';

?>