<?php
/**
 * filename: $Source$
 * begin: Friday, Aug 06, 2004
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. This program is distributed in the
 * hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * @author Jordi Romero (jordi@jrom.net) 
 * @copyright (C) 2005 Jordi Romero
 * @package Language
 * @version $Id$
 */


/**
 * Global
 */
$lng['panel']['edit'] = 'editar';
$lng['panel']['delete'] = 'esborrar';
$lng['panel']['create'] = 'crear';
$lng['panel']['save'] = 'guardar';
$lng['panel']['yes'] = 's�';
$lng['panel']['no'] = 'no';
$lng['panel']['emptyfornochanges'] = 'deixeu-ho buit per no canviar-ne el valor';
$lng['panel']['emptyfordefault'] = 'deixeu-ho buit per usar el valor predeterminat';
$lng['panel']['path'] = 'Ruta';
$lng['panel']['toggle'] = 'Marcar/Desmarcar';
$lng['panel']['next'] = 'seg�ent';

/**
 * Login
 */
$lng['login']['username'] = 'Nom d\'usuari';
$lng['login']['password'] = 'Contrassenya';
$lng['login']['language'] = 'Idioma';
$lng['login']['login'] = 'Identificar-se';
$lng['login']['logout'] = 'sortir';
$lng['login']['profile_lng'] = 'Idioma del perfil';

/**
 * Customer
 */
$lng['customer']['login'] = 'Nom d\'usuari';
$lng['customer']['documentroot'] = 'Directori HOME';
$lng['customer']['name'] = 'Nom';
$lng['customer']['surname'] = 'Cognom';
$lng['customer']['company'] = 'Empresa';
$lng['customer']['street'] = 'Carrer';
$lng['customer']['zipcode'] = 'Codi Postal';
$lng['customer']['city'] = 'ciutat';
$lng['customer']['phone'] = 'tel�fon';
$lng['customer']['fax'] = 'fax';
$lng['customer']['email'] = 'email';
$lng['customer']['customernumber'] = 'ID de client';
$lng['customer']['diskspace'] = 'Espai Web (MB)';
$lng['customer']['traffic'] = 'Trafic (GB)';
$lng['customer']['mysqls'] = 'Bases de dades MySQL';
$lng['customer']['emails'] = 'Adreces de correu';
$lng['customer']['accounts'] = 'Comptes d\'e-mail';
$lng['customer']['forwarders'] = 'Redireccionadors de correu';
$lng['customer']['ftps'] = 'Comptes FTP';
$lng['customer']['subdomains'] = 'Subdomini(s)';
$lng['customer']['domains'] = 'Domini(s)';
$lng['customer']['unlimited'] = 'ilimitat';

/**
 * Customermenue
 */
$lng['menue']['main']['main'] = 'Principal';
$lng['menue']['main']['changepassword'] = 'Canviar Clau';
$lng['menue']['main']['changelanguage'] = 'Canviar Idioma';
$lng['menue']['email']['email'] = 'email';
$lng['menue']['email']['emails'] = 'Adreces';
$lng['menue']['email']['webmail'] = 'WebMail';
$lng['menue']['mysql']['mysql'] = 'MySQL';
$lng['menue']['mysql']['databases'] = 'Bases de dades';
$lng['menue']['mysql']['phpmyadmin'] = 'phpMyAdmin';
$lng['menue']['domains']['domains'] = 'Dominis';
$lng['menue']['domains']['settings'] = 'Opcions';
$lng['menue']['ftp']['ftp'] = 'FTP';
$lng['menue']['ftp']['accounts'] = 'Comptes';
$lng['menue']['ftp']['webftp'] = 'WebFTP';
$lng['menue']['extras']['extras'] = 'Extres';
$lng['menue']['extras']['directoryprotection'] = 'Protecci� de directori(s)';
$lng['menue']['extras']['pathoptions'] = 'Opcions de la ruta (PATH)';

/**
 * Index
 */
$lng['index']['customerdetails'] = 'Detalls del client';
$lng['index']['accountdetails'] = 'Detalls del compte';

/**
 * Change Password
 */
$lng['changepassword']['old_password'] = 'Clau antiga';
$lng['changepassword']['new_password'] = 'Clau nova';
$lng['changepassword']['new_password_confirm'] = 'Clau nova (confirmaci�)';
$lng['changepassword']['new_password_ifnotempty'] = 'Clau nova (Deixa-ho buit per no canviar)';
$lng['changepassword']['also_change_ftp'] = ' canvia tamb� la clau del compte principal del FTP';

/**
 * Domains
 */
$lng['domains']['description'] = 'Des d\'aqu� pots crear (sub)dominis i canviar les seves rutes.<br />El sistema necessitar� una mica de temps per aplicar els nous canvis un cop efectuats.';
$lng['domains']['domainsettings'] = 'Opcions de domini';
$lng['domains']['domainname'] = 'Nom del domini';
$lng['domains']['subdomain_add'] = 'Crear subdomini';
$lng['domains']['subdomain_edit'] = 'Editar (sub)domini';
$lng['domains']['wildcarddomain'] = 'Crear un domini comod�? (wildcarddomain)';

/**
 * eMails
 */
$lng['emails']['description'] = 'Des d\'aqu� pots modificar les adreces de correu, crear-ne de noves o esborrar les que hi ha.<br />Pensa que despr�s de crear la adre�a de correu, has de crear o b� un COMPTE o b� un REDIRECCIONADOR, sense una de les dues coses la adre�a �s in�til.<br /><br />Per baixar-te el correu en el teu client de correu (Outlook, Thunderbird, ...) utilitza la seg�ent informaci�: (La informaci� en <i>cursiva</i> ha de ser substituida per la que correspongui al compte de correu en questi�!)<br />Servidor de correu entrant o sortint: <b><i>el teu domini</i></b><br />Nom dusuari: <b><i>(usuari@exemple.com)</i></b> (ATENCI�: �s imprescindible posar la adre�a sencera en el camp de l\'usuari, en cas contrari no funcionaria)<br />Clau: <b><i>la clau del compte de correu</i></b>';
$lng['emails']['emailaddress'] = 'adreces d\'email';
$lng['emails']['emails_add'] = 'Crear adre�a d\'email';
$lng['emails']['emails_edit'] = 'Editar adreces d\'email';
$lng['emails']['catchall'] = 'Compte comod�';
$lng['emails']['iscatchall'] = 'Definir els Comptes comod�?';
$lng['emails']['account'] = 'Compte';
$lng['emails']['account_add'] = 'Crear compte';
$lng['emails']['account_delete'] = 'Esborrar compte';
$lng['emails']['from'] = 'Origen';
$lng['emails']['to'] = 'Dest�';
$lng['emails']['forwarders'] = 'Redireccions';
$lng['emails']['forwarder_add'] = 'Crear redirecci�';

/**
 * FTP
 */
$lng['ftp']['description'] = 'Aqu� pots crear els teus comptes FTP.<br />Els canis s\'aplicaran a l\'instant.';
$lng['ftp']['account_add'] = 'Crear compte';

/**
 * MySQL
 */
$lng['mysql']['description'] = 'Pendent de traduir<br />Here you can create and change your MySQL-Databases.<br />The changes are made instantly and the database can be used immediately.<br />At the menu on the left side you find the tool phpMyAdmin with which you can easily administer your database.<br /><br />To use your databases in your own php-scripts use the following settings: (The data in <i>italics</i> have to be changed into the equivalents you typed in!)<br />Hostname: <b>localhost</b><br />Username: <b><i>Databasename</i></b><br />Password: <b><i>the password you\'ve chosen</i></b><br />Database: <b><i>Databasename';
$lng['mysql']['databasename'] = 'nom d\'usuari/base de dades';
$lng['mysql']['databasedescription'] = 'descripci� de la base de dades';
$lng['mysql']['database_create'] = 'Crear base de dades';

/**
 * Extras
 */
$lng['extras']['description'] = 'Aqu� pots controlar alguns extres, com protecci� de directoris.<br />El sistema requereix una mica de temps en aplicar els canvis un cop fets.';
$lng['extras']['directoryprotection_add'] = 'Afegir protecci� de directori';
$lng['extras']['view_directory'] = 'mostra el contingut del directori';
$lng['extras']['pathoptions_add'] = 'afegir opcions de la ruta (PATH)';
$lng['extras']['directory_browsing'] = 'navegar pel contingut del directori';
$lng['extras']['pathoptions_edit'] = 'editar opcions de la ruta (PATH)';
$lng['extras']['error404path'] = '404';
$lng['extras']['error403path'] = '403';
$lng['extras']['error500path'] = '500';
$lng['extras']['error401path'] = '401';
$lng['extras']['errordocument404path'] = 'Ruta a ErrorDocument 404';
$lng['extras']['errordocument403path'] = 'Ruta a ErrorDocument 403';
$lng['extras']['errordocument500path'] = 'Ruta a ErrorDocument 500';
$lng['extras']['errordocument401path'] = 'Ruta a ErrorDocument 401';

/**
 * Errors
 */
$lng['error']['error'] = 'Error';
$lng['error']['directorymustexist'] = 'El directori que has escrit no existeix. Si us plau, crea\'l per FTP.';
$lng['error']['filemustexist'] = 'El fitxer ha d\'existir.';
$lng['error']['allresourcesused'] = 'Ja has gastat tots els teus recursos!';
$lng['error']['domains_cantdeletemaindomain'] = 'No pots esborrar aquest domini perqu� est� sent usat en una adre�a d\'email.';
$lng['error']['domains_canteditdomain'] = 'No pots editar aquests dominis. Han estat bloquejats per l\'administrador';
$lng['error']['domains_cantdeletedomainwithemail'] = 'No pots esborrar aquest domini perqu� est� sent usat per una direcci� de correu. Has d\'esborrar abans la direcci� de correu';
$lng['error']['firstdeleteallsubdomains'] = 'No pots esborrar tots els subdominis si no tens un domini comod� (Wildcarddomain).';
$lng['error']['youhavealreadyacatchallforthisdomain'] = 'Ja tens un compte comod�';
$lng['error']['ftp_cantdeletemainaccount'] = 'No pots esborrar el compte principal FTP';
$lng['error']['login'] = 'El nom d\'usuari o la Clau s�n incorrectes. Sisplau torna-ho a intentar!';
$lng['error']['login_blocked'] = 'Aquest compte ha estat susp�s a causa de massa intents fraudulents d\'identificaci�. <br />Si us plau, torna a provar-ho en '.$settings['login']['deactivatetime'].' segons.';
$lng['error']['notallreqfieldsorerrors'] = 'No has omplert tots els camps o algun camp �s incorrecte.';
$lng['error']['oldpasswordnotcorrect'] = 'La clau antiga no �s la correcta.';
$lng['error']['youcantallocatemorethanyouhave'] = 'No pots ocupar m�s espai del que tens assignat!';
$lng['error']['youcantdeletechangemainadmin'] = 'L\'usuari admin �s sagrat...';
$lng['error']['mustbeurl'] = 'No has escrit una URL correcte';

/**
 * Questions
 */
$lng['question']['question'] = 'Preguntes de seguretat..';
$lng['question']['admin_customer_reallydelete'] = 'Estas segur que vols esborrar el client %s? Aquesta acci� �s irreversible!';
$lng['question']['admin_domain_reallydelete'] = 'Segur que vols esborrar el domini %s?';
$lng['question']['admin_domain_reallydisablesecuritysetting'] = 'Segur que vols desactivar aquesta opci� de seguretat? (OpenBasedir and/or SafeMode)?';
$lng['question']['admin_admin_reallydelete'] = 'Segur que vols esborrar l\'administrador %s? Tots els seus clients aniran a parar a l\'administrador principal.';
$lng['question']['admin_template_reallydelete'] = 'Segur que vols esborrar aquesta plantilla \'%s\'?';
$lng['question']['domains_reallydelete'] = 'Segur que vols esborrar el domini %s?';
$lng['question']['email_reallydelete'] = 'Segur que vols esborrar la adre�a %s?';
$lng['question']['email_reallydelete_account'] = 'Segur que vols esborrar el compte %s?';
$lng['question']['email_reallydelete_forwarder'] = 'Segur que vols esborrar la redirecci� %s?';
$lng['question']['extras_reallydelete'] = 'Segur que vols esborrar la direcci� de directori de %s?';
$lng['question']['extras_reallydelete_pathoptions'] = 'Segur que vols eliminar les opcions de ruta (PATH) de %s?';
$lng['question']['ftp_reallydelete'] = 'Segur que vols esborrar el compte FTP %s?';
$lng['question']['mysql_reallydelete'] = 'Segur que vols eliminar la base de dades %s? Aquesta acci� �s irreversible!';

/**
 * Mails
 */
$lng['mails']['pop_success']['mailbody'] = 'Hola,\n\nel teu compte d\'email $destination\ns\'ha creat satisfactoriament.\n\nAix� �s un missatge creat autom�ticament, si us plau uno responguis. Gr�cies.';
$lng['mails']['pop_success']['subject'] = 'Compte de correu creat satisfactoriament';
$lng['mails']['createcustomer']['mailbody'] = 'Hola $surname $name,\n\n aqu� te la seva informaci�:\n\nNom d\'usuari: $loginname\nClau: $password\n\n Gr�cies per tot, disfruta del teu compte';
$lng['mails']['createcustomer']['subject'] = 'Informaci� del compte';

/**
 * Admin
 */
$lng['admin']['overview'] = 'Resum';
$lng['admin']['ressourcedetails'] = 'Recursos utilitzats';
$lng['admin']['systemdetails'] = 'Detalls del sistema';
$lng['admin']['syscpdetails'] = 'Detalls de SysCP';
$lng['admin']['installedversion'] = 'Versi�';
$lng['admin']['latestversion'] = '�ltima versi�';
$lng['admin']['lookfornewversion']['clickhere'] = 'cerca a internet';
$lng['admin']['lookfornewversion']['error'] = 'Error carregant';
$lng['admin']['resources'] = 'Personal';
$lng['admin']['customer'] = 'Client';
$lng['admin']['customers'] = 'Clients';
$lng['admin']['customer_add'] = 'Crear client';
$lng['admin']['customer_edit'] = 'Editar client';
$lng['admin']['domains'] = 'Dominis';
$lng['admin']['domain_add'] = 'Crear domini';
$lng['admin']['domain_edit'] = 'Editar domini';
$lng['admin']['subdomainforemail'] = 'Subdomini com a subdomini de correu';
$lng['admin']['admin'] = 'Administrador';
$lng['admin']['admins'] = 'Administradors';
$lng['admin']['admin_add'] = 'Crear administrador';
$lng['admin']['admin_edit'] = 'Editar administrador';
$lng['admin']['customers_see_all'] = 'Pot veure tots els clients?';
$lng['admin']['domains_see_all'] = 'Pot veure tots els dominis?';
$lng['admin']['change_serversettings'] = 'Pot canviar configuracions del servidor?';
$lng['admin']['server'] = 'Servidor';
$lng['admin']['serversettings'] = 'Opcions del servidor';
$lng['admin']['stdsubdomain'] = 'Subdomini est�ndar';
$lng['admin']['stdsubdomain_add'] = 'Crear subdomini est�ndar';
$lng['admin']['deactivated'] = 'Desactivat';
$lng['admin']['deactivated_user'] = 'Desactivar Usuari';
$lng['admin']['sendpassword'] = 'Enviar Clau';
$lng['admin']['ownvhostsettings'] = 'Opcions dels vhost propis';
$lng['admin']['configfiles']['serverconfiguration'] = 'Configuracions del servidor';
$lng['admin']['configfiles']['files'] = '<b>Fitxers de configuraci�:</b> Si us plau, canvia els continguts fitxers o crea\'ls<br />amb el cotingut que surt a continuaci� si no existeixen.<br /><b>Nota:</b> El Mysql-password no ha estat modificat per questions de seguretat.<br />Canvia &quot;MYSQL_PASSWORD&quot; per la clau que desitgi';
$lng['admin']['configfiles']['commands'] = '<b>Comandaments:</b> Executa\'ls en una consola.';
$lng['admin']['configfiles']['restart'] = '<b>Restart:</b> Executa els seg�ents comandaments en la consola per carregar la nova configuraci�.';
$lng['admin']['templates']['templates'] = 'Plantilles';
$lng['admin']['templates']['template_add'] = 'Afegir plantilla';
$lng['admin']['templates']['template_edit'] = 'Editar plantilla';
$lng['admin']['templates']['action'] = 'Acci�';
$lng['admin']['templates']['email'] = 'E-Mail';
$lng['admin']['templates']['subject'] = 'Assumpte';
$lng['admin']['templates']['mailbody'] = 'Cos del missatge';
$lng['admin']['templates']['createcustomer'] = 'Missatge de benvinguda a nous clients';
$lng['admin']['templates']['pop_success'] = 'Missatge de benvinguda a les noves comptes de correu';
$lng['admin']['templates']['template_replace_vars'] = 'Variables per substituir a la plantilla:';
$lng['admin']['templates']['FIRSTNAME'] = 'Substituit pel cognom del client.';
$lng['admin']['templates']['NAME'] = 'Substituit pel nom del client.';
$lng['admin']['templates']['USERNAME'] = 'Reempla�at pel nom d\'usuari';
$lng['admin']['templates']['PASSWORD'] = 'Reempla�at per la contrassenya.';
$lng['admin']['templates']['EMAIL'] = 'Reempla�at per l\'adre�a de correu';

/**
 * Serversettings
 */
$lng['serversettings']['session_timeout']['title'] = 'Sessi� Timeout';
$lng['serversettings']['session_timeout']['description'] = 'Quant triga un usuari en esdevenir inactiu (segons)?';
$lng['serversettings']['accountprefix']['title'] = 'Prefix del client';
$lng['serversettings']['accountprefix']['description'] = 'Quin prefix han de tenir els clients?';
$lng['serversettings']['mysqlprefix']['title'] = 'Prefix SQL';
$lng['serversettings']['mysqlprefix']['description'] = 'Quin prefix han de tenir els comptes SQL?';
$lng['serversettings']['ftpprefix']['title'] = 'Prefix FTP';
$lng['serversettings']['ftpprefix']['description'] = 'Quin prefix han de tenir els comptes FTP?';
$lng['serversettings']['documentroot_prefix']['title'] = 'Directori principal';
$lng['serversettings']['documentroot_prefix']['description'] = 'On es desen els documents?';
$lng['serversettings']['logfiles_directory']['title'] = 'Directori de logs';
$lng['serversettings']['logfiles_directory']['description'] = 'On es desen els fitxers de registre (log)?';
$lng['serversettings']['ipaddress']['title'] = 'Adre�a IP';
$lng['serversettings']['ipaddress']['description'] = 'Quina �s la adre�a IP del servidor?';
$lng['serversettings']['hostname']['title'] = 'Hostname';
$lng['serversettings']['hostname']['description'] = 'Quin �s el hostname del servidor?';
$lng['serversettings']['apacheconf_directory']['title'] = 'Directori de configuraci� d\'Apache';
$lng['serversettings']['apacheconf_directory']['description'] = 'On estan els fitxers de configuraci� d\'Apache?';
$lng['serversettings']['apachereload_command']['title'] = 'Comanda de reinici d\'Apache';
$lng['serversettings']['apachereload_command']['description'] = 'Quina �s la comanda per reiniciar Apache?';
$lng['serversettings']['bindconf_directory']['title'] = 'Directori de configuraci� de Bind';
$lng['serversettings']['bindconf_directory']['description'] = 'On s�n els fitxers de configuraci� de Bind?';
$lng['serversettings']['bindreload_command']['title'] = 'Comanda de reinici de Bind';
$lng['serversettings']['bindreload_command']['description'] = 'Quina �s la comanda per reiniciar Bind?';
$lng['serversettings']['binddefaultzone']['title'] = 'Zona predeterminada de Bind';
$lng['serversettings']['binddefaultzone']['description'] = 'Quina �s la zona per defecte de Bind?';
$lng['serversettings']['vmail_uid']['title'] = 'UID de les adreces de correu';
$lng['serversettings']['vmail_uid']['description'] = 'Quina User ID han de tenir les adreces de correu?';
$lng['serversettings']['vmail_gid']['title'] = 'GID de les adreces de correu';
$lng['serversettings']['vmail_gid']['description'] = 'Quina Group ID han de tenir les adreces de correu?';
$lng['serversettings']['vmail_homedir']['title'] = 'Directori dels correus';
$lng['serversettings']['vmail_homedir']['description'] = 'Quin �s el directori on es desaran tots els missatges de correu?';
$lng['serversettings']['adminmail']['title'] = 'Remitent';
$lng['serversettings']['adminmail']['description'] = 'Quin �s el remitent dels missatges del SysCP?';
$lng['serversettings']['phpmyadmin_url']['title'] = 'Adre�a de phpMyAdmin';
$lng['serversettings']['phpmyadmin_url']['description'] = 'Quina �s la URL del phpMyAdmin? (ha de comen�ar amb http://)';
$lng['serversettings']['webmail_url']['title'] = 'Adre�a de WebMail';
$lng['serversettings']['webmail_url']['description'] = 'Quina �s la URL del WebMail? (ha de comen�ar amb http://)';
$lng['serversettings']['webftp_url']['title'] = 'Adre�a de WebFTP';
$lng['serversettings']['webftp_url']['description'] = 'Quina �s la URL del WebFTP? (ha de comen�ar amb http://)';
$lng['serversettings']['language']['description'] = 'Quin �s l\'idioma per defecte?';
$lng['serversettings']['maxloginattempts']['title']       = 'Intents de logueix m�xims';
$lng['serversettings']['maxloginattempts']['description'] = 'N�mero de vegades que pots intentar identificar-te abans de que la compta es desactivi.';
$lng['serversettings']['deactivatetime']['title']       = 'Temps de desactivacio';
$lng['serversettings']['deactivatetime']['description'] = 'Segons que la compta estar� inactiva quan s\'ha produit un seguit d\'intents frustrats d\'identificaci�.';

?>