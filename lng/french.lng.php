<?php
/**
 * filename: $Source$
 * begin: Friday, Oct 08, 2004
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. This program is distributed in the
 * hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * @author Tim Zielosko <tim@zielosko.de>
 * @copyright (C) 2004 Tim Zielosko
 * @package Language
 * @version $Id$
 */


/**
 * Global
 */
$lng['panel']['edit'] = 'Modifier';
$lng['panel']['delete'] = 'Effacer';
$lng['panel']['create'] = 'Appliquer';
$lng['panel']['save'] = 'Sauvegarder';
$lng['panel']['yes'] = 'Oui';
$lng['panel']['no'] = 'Non';
$lng['panel']['emptyfornochanges'] = 'Veuillez laisser vide pour aucun changement';
$lng['panel']['emptyfordefault'] = 'Veuillez laisser vide pour l�option standard';
$lng['panel']['path'] = 'Chemin';

/**
 * Login
 */
$lng['login']['username'] = 'Identifiant';
$lng['login']['password'] = 'Mot de passe';
$lng['login']['language'] = 'Langue';
$lng['login']['login'] = 'S�identifier';
$lng['login']['logout'] = 'Se deconnecter';

/**
 * Customer
 */
$lng['customer']['login'] = 'Identifiant';
$lng['customer']['documentroot'] = 'Chemin';
$lng['customer']['name'] = 'Nom';
$lng['customer']['surname'] = 'Pr�nom';
$lng['customer']['company'] = 'Entreprise';
$lng['customer']['street'] = 'Rue';
$lng['customer']['zipcode'] = 'Code postal';
$lng['customer']['city'] = 'Ville';
$lng['customer']['phone'] = 'T�l�phone';
$lng['customer']['fax'] = 'Fax';
$lng['customer']['email'] = 'e-mail';
$lng['customer']['customernumber'] = 'Numero du client';
$lng['customer']['diskspace'] = 'Webspace (MB)';
$lng['customer']['traffic'] = 'Traffic (GB)';
$lng['customer']['mysqls'] = 'Banque(s) de donn�es MySQL';
$lng['customer']['emails'] = 'Adresse(s) e-mail';
$lng['customer']['forwarders'] = 'Retransmissions e-mail';
$lng['customer']['ftps'] = 'Acc�s FTP';
$lng['customer']['subdomains'] = 'Sub-Domain(s)';
$lng['customer']['domains'] = 'Domain(s)';
$lng['customer']['unlimited'] = 'illimit�';

/**
 * Customermenue
 */
$lng['menue']['main']['main'] = 'General';
$lng['menue']['main']['changepassword'] = 'Changer le mot de passe';
$lng['menue']['email']['email'] = 'e-mail';
$lng['menue']['email']['pop'] = 'Acc�s POP3';
$lng['menue']['email']['forwarders'] = 'Retransmissions';
$lng['menue']['email']['webmail'] = 'Webmail';
$lng['menue']['mysql']['mysql'] = 'MySQL';
$lng['menue']['mysql']['databases'] = 'Banques de donn�es';
$lng['menue']['mysql']['phpmyadmin'] = 'phpMyAdmin';
$lng['menue']['domains']['domains'] = 'Domains';
$lng['menue']['domains']['settings'] = 'R�glages';
$lng['menue']['ftp']['ftp'] = 'FTP';
$lng['menue']['ftp']['accounts'] = 'Acc�s';
$lng['menue']['ftp']['webftp'] = 'WebFTP';
$lng['menue']['extras']['extras'] = 'Extras';
$lng['menue']['extras']['directoryprotection'] = 'Protection des dossiers';
$lng['menue']['extras']['pathoptions'] = 'Options du chemin';

/**
 * Index
 */
$lng['index']['customerdetails'] = 'Donn�es du compte';
$lng['index']['accountdetails'] = 'Donn�es de l�acc�s';

/**
 * Change Password
 */
$lng['changepassword']['old_password'] = 'Vieux mot de passe';
$lng['changepassword']['new_password'] = 'Nouveau mot de passe';
$lng['changepassword']['new_password_confirm'] = 'Nouveau mot de passe (confirmer)';
$lng['changepassword']['also_change_ftp'] = ' Changer aussi le mot de passe de l�acc�s FTP general';

/**
 * Domains
 */
$lng['domains']['description'] = 'Ici vous pouvez inscrire des Domains et changer ses chemins.<br />Il faut un peu de temps apr�s chaque changement pour relire la configuration.';
$lng['domains']['domainsettings'] = 'Configuration des Domains';
$lng['domains']['domainname'] = 'Nom du Domain';
$lng['domains']['subdomain_add'] = 'Appliquer un Subdomain';
$lng['domains']['subdomain_edit'] = 'Changer un Subdomain';
$lng['domains']['wildcarddomain'] = 'Domain Wildcard?';

/**
 * eMails
 */
$lng['emails']['description'] = 'Ici vous pouvez appliquer vos boites � e-mail.<br><br>Les donn�es pour configurer votre logiciel e-mail sont celles-la: <br><br>Nom du server: <b><i>votre domain</i></b><br>Identifiant: <b><i>l�adresse e-mail</i></b><br>Mot de passe: <b><i>le mot de passe que vous avez choisi</i></b>';
$lng['emails']['forwarders_add'] = 'Appliquer une retransmission';
$lng['emails']['from'] = 'de';
$lng['emails']['to'] = '�';
$lng['emails']['pop3_add'] = 'Appliquer un acc�s POP3';
$lng['emails']['emailaddress'] = 'Acc�s / Adresse';

/**
 * FTP
 */
$lng['ftp']['description'] = 'Ici vous pouvez appliquer des acc�s FTP additionel.<br />Les changements sont tout de suite op�rant et l�acc�s est disponible.';
$lng['ftp']['account_add'] = 'Appliquer un acc�s';

/**
 * MySQL
 */
$lng['mysql']['description'] = 'Ici vous pouvez appliquer et effacer des banques de donn�es MySQL.<br>Les changements sont tout de suite op�rant et les banques sont disponibles.<br>Sur le menu on trouve un lien � phpMyAdmin, avec lequel vous pouvez modifier vos banques de donn�es.<br><br>L�acc�s de PHP fonctionne comme ca: (Il faut modifier les valeurs en <i>italique</i> en mettant ce que c�est!)<br><br>$connection = mysql_connect("localhost", "<i>Votre identifiant</i>", "<i>Votre mot de passe</i>");<br>mysql_select_db("<i>Le nom de la banque</i>", $connection);';
$lng['mysql']['databasename'] = 'Nom de la banque';
$lng['mysql']['database_create'] = 'Appliquer une banque de donn�es';

/**
 * Extras
 */
$lng['extras']['description'] = 'Ici vous pouvez appliquer des extras additionell, par example la protection des listes.<br />Il faut un peu de temps apr�s chaque changement pour reliser la configuration.';
$lng['extras']['directoryprotection_add'] = 'Appliquer une protection des dossiers';
$lng['extras']['view_directory'] = 'Faire voir le fichier';
$lng['extras']['pathoptions_add'] = 'Appliquer des options de chemin';
$lng['extras']['directory_browsing'] = 'Faire voir le contenu des fichiers';
$lng['extras']['pathoptions_edit'] = 'Modifier les options de chemin';

/**
 * Errors
 */
$lng['error']['error'] = 'Erreur';
$lng['error']['directorymustexist'] = 'Le dossier que vous avez choisi n�existe pas. S�il vous plait appliquer le avec votre client FTP.';
$lng['error']['domains_cantdeletemaindomain'] = 'Vous ne pouvez pas effacer une domain qui est utilis� pour des adresses e-mail. ';
$lng['error']['firstdeleteallsubdomains'] = 'Il faut effacer toutes les subdomains avant d�appliquer un domain Wildcard.';
$lng['error']['ftp_cantdeletemainaccount'] = 'Vous ne pouvez pas effacer votre acc�s principal.';
$lng['error']['login'] = 'Identifiant / mot de passe invalide.';
$lng['error']['login_blocked'] = 'Cet acc�s �tait bloqu� � cause de trop des login fautes.<br />S�il vous-plait l�essayer encore dans '.$settings['login']['deactivatetime'].' secondes.';
$lng['error']['notallreqfieldsorerrors'] = 'Vous n�avez pas rempli toutes les cases ou vous avez rempli des valeurs invalide.';
$lng['error']['oldpasswordnotcorrect'] = 'Le vieux mot de passe n�est pas correct.';
$lng['error']['youcantallocatemorethanyouhave'] = 'Vous ne pouvez pas distribuer plus des ressources qu�il reste.';
$lng['error']['youcantdeletechangemainadmin'] = 'Pour des raisons de la s�curit� c�est pas possible d�effacer ou modifier l�administrateur principal.';

/**
 * Questions
 */
$lng['question']['question'] = 'Question de s�curit�';
$lng['question']['admin_customer_reallydelete'] = 'Voulez-vous vraiment effacer le compte %s?<br />ATTENTION! Toutes les donn�es vont �tre effac�es! Apr�s ceci fait il faut effacer les dossiers du system des fichiers manuellement.';
$lng['question']['admin_domain_reallydelete'] = 'Voulez-vous vraiment effacer le domain %s?';
$lng['question']['admin_domain_reallydisablesecuritysetting'] = 'Voulez-vous vraiment d�sactiver ces modes importants (OpenBasedir et/o� SafeMode) ?';
$lng['question']['admin_admin_reallydelete'] = 'Voulez-vous vraiment effacer l\'administrateur %s?<br />Tout ses comptes vont �tre affect� au administrateur principal.';
$lng['question']['domains_reallydelete'] = 'Voulez-vous vraiment effacer le domain %s?';
$lng['question']['email_reallydelete_forwarders'] = 'Voulez-vous vraiment effacer la retransmission %s?';
$lng['question']['email_reallydelete_pop'] = 'Voulez-vous vraiment effacer l\'adresse e-mail %s?';
$lng['question']['extras_reallydelete'] = 'Voulez-vous vraiment effacer la protection du dossier %s?';
$lng['question']['extras_reallydelete_pathoptions'] = 'Voulez-vous vraiment effacer les options du chemin %s?';
$lng['question']['ftp_reallydelete'] = 'Voulez-vous vraiment effacer l\'acc�s eMail %s?';
$lng['question']['mysql_reallydelete'] = 'Voulez-vous vraiment effacer la banque de donn�s %s?<br />ATTENTION: Toutes les donn�es vont �tre effac�es!';

/**
 * Mails
 */
$lng['mails']['pop_success']['mailbody'] = 'Bonjour,\n\nvotre acc�s POP3 $email\na �t� install� avec succ�s.\n\nC�est un e-mail g�ner� automatiquement, s�il vous plait ne repondez pas a ce message.\n\nVotre Webmaster';
$lng['mails']['pop_success']['subject'] = 'Acc�s POP3 install�';
$lng['mails']['createcustomer']['mailbody'] = 'Bonjour $surname $name,\n\nici vos informations d�acc�s:\n\nIdentifiant: $loginname\nMot de passe: $password\n\nNous vous remercions,\nVotre Webmaster';
$lng['mails']['createcustomer']['subject'] = 'Informations de votre acc�s';

/**
 * Admin
 */
$lng['admin']['overview'] = 'Sommaire';
$lng['admin']['ressourcedetails'] = 'Ressources utilis�s';
$lng['admin']['systemdetails'] = 'Details du system';
$lng['admin']['syscpdetails'] = 'Details du SysCP';
$lng['admin']['installedversion'] = 'Version install�e';
$lng['admin']['latestversion'] = 'La plus nouvelle version';
$lng['admin']['lookfornewversion']['clickhere'] = 'Interroger par internet';
$lng['admin']['lookfornewversion']['error'] = 'Erreur en triant';
$lng['admin']['customer'] = 'Compte';
$lng['admin']['customers'] = 'Comptes';
$lng['admin']['customer_add'] = 'Appliquer un compte';
$lng['admin']['customer_edit'] = 'Modifier un compte';
$lng['admin']['domains'] = 'Domains';
$lng['admin']['domain_add'] = 'Appliquer un Domain';
$lng['admin']['domain_edit'] = 'Modifier le domain';
$lng['admin']['admin'] = 'Administrateur';
$lng['admin']['admins'] = 'Administrateurs';
$lng['admin']['admin_add'] = 'Appliquer un administrateur';
$lng['admin']['admin_edit'] = 'Modifier un administrateur';
$lng['admin']['customers_see_all'] = 'Peut voir tous les comptes?';
$lng['admin']['domains_see_all'] = 'Peut voir tous les Domains?';
$lng['admin']['change_serversettings'] = 'Peut modifier la configuration du server?';
$lng['admin']['serversettings'] = 'Configuration du server';
$lng['admin']['stdsubdomain'] = 'Subdomain-type';
$lng['admin']['stdsubdomain_add'] = 'Appliquer un subdomain-type';
$lng['admin']['deactivated'] = 'Bloqu�';
$lng['admin']['deactivated_user'] = 'Bloquer utilisateur';
$lng['admin']['sendpassword'] = 'Envoyer mot de passe';
$lng['admin']['ownvhostsettings'] = 'Configuration sp�ciale du vHost';
$lng['admin']['configfiles']['serverconfiguration'] = 'Configuration du server';
$lng['admin']['configfiles']['files'] = '<b>Fichiers de configuration:</b> S�il vous-plait modifiez les fichiers correspondants<br />ou cr�ez les avec les contenu ci-dessous.<br /><b>IMPORTANT:</b> Le mot de passe MySQL n�est pas donn�s dans les dates ci-dessus<br />� cause des raisons de s�curit�. S�il vous-plait substituez les &quot;MYSQL_PASSWORD&quot;<br />manuellement avec le mot de passe. En cas de l�avoir oubli�, vous le trouvez dans<br />le fichier &quot;lib/userdata.inc.php&quot;.';
$lng['admin']['configfiles']['commands'] = '<b>Commandes:</b> S�il vous-plait ex�cuter les commandes ci-dessous sur le shell.';
$lng['admin']['configfiles']['restart'] = '<b>R�demarrer:</b> S�il vous-plait ex�cuter les commandes ci-dessous pour<br />r�initialiser les fichiers de configuration.';

/**
 * Serversettings
 */
$lng['serversettings']['session_timeout']['title'] = 'Session Timeout';
$lng['serversettings']['session_timeout']['description'] = 'Combien de temps faut-il etre inactif pour que votre session se ferme automatiquement (secondes)';
$lng['serversettings']['catachallkeyword']['title'] = 'Catchall-Keyword';
$lng['serversettings']['catachallkeyword']['description'] = 'Quelle est l�adresse e-mail qui capture tous e-mails?';
$lng['serversettings']['accountprefix']['title'] = 'Pr�fix des comptes';
$lng['serversettings']['accountprefix']['description'] = 'Quel pr�fix doivent avoir les comptes?';
$lng['serversettings']['mysqlprefix']['title'] = 'Pr�fix SQL';
$lng['serversettings']['mysqlprefix']['description'] = 'Quel pr�fix doivent avoir les banques de donn�es?';
$lng['serversettings']['ftpprefix']['title'] = 'Pr�fix FTP';
$lng['serversettings']['ftpprefix']['description'] = 'Quel pr�fix doivent avoir les acc�s FTP?';
$lng['serversettings']['documentroot_prefix']['title'] = 'Documentdirectory';
$lng['serversettings']['documentroot_prefix']['description'] = 'O� doivent �tre tous les comptes';
$lng['serversettings']['logfiles_directory']['title'] = 'Logfilesdirectory';
$lng['serversettings']['logfiles_directory']['description'] = 'O� doivent �tre les archives d�acc�s?';
$lng['serversettings']['ipaddress']['title'] = 'Adresse IP';
$lng['serversettings']['ipaddress']['description'] = 'Quelle est l�adresse IP du server?';
$lng['serversettings']['hostname']['title'] = 'Hostname';
$lng['serversettings']['hostname']['description'] = 'Quel est le hostname du server?';
$lng['serversettings']['apacheconf_directory']['title'] = 'Apache-Config-Directory';
$lng['serversettings']['apacheconf_directory']['description'] = 'O� est sauvegard�e la configuration de l�Apache?';
$lng['serversettings']['apachereload_command']['title'] = 'Apache-Reload-Command';
$lng['serversettings']['apachereload_command']['description'] = 'Comment est la commande pour red�marrer l�Apache?';
$lng['serversettings']['bindconf_directory']['title'] = 'Bind-Config-Directory';
$lng['serversettings']['bindconf_directory']['description'] = 'O� est sauvegard�e la configuration du BIND?';
$lng['serversettings']['bindreload_command']['title'] = 'Bind-Reload-Command';
$lng['serversettings']['bindreload_command']['description'] = 'Comment est la commande pour red�marrer le BIND?';
$lng['serversettings']['binddefaultzone']['title'] = 'Bind-Default-Zone';
$lng['serversettings']['binddefaultzone']['description'] = 'Comment s�appelle la zone standard des tous les domaines?';
$lng['serversettings']['vmail_uid']['title'] = 'Mails-Uid';
$lng['serversettings']['vmail_uid']['description'] = 'Quel UID doivent avoir les e-mails?';
$lng['serversettings']['vmail_gid']['title'] = 'Mails-Gid';
$lng['serversettings']['vmail_gid']['description'] = 'Quel GID doivent avoir les e-mails?';
$lng['serversettings']['vmail_homedir']['title'] = 'Mails-Homedir';
$lng['serversettings']['vmail_homedir']['description'] = 'O� doivent �tre les e-mails?';
$lng['serversettings']['adminmail']['title'] = 'Adresse de l�exp�diteur';
$lng['serversettings']['adminmail']['description'] = 'Quelle est l�adresse standard des e-mails qui sont envoy�s de SysCP?';
$lng['serversettings']['phpmyadmin_url']['title'] = 'URL phpMyAdmin';
$lng['serversettings']['phpmyadmin_url']['description'] = '� quelle adresse se trouve le phpMyAdmin?';
$lng['serversettings']['webmail_url']['title'] = 'URL WebMail';
$lng['serversettings']['webmail_url']['description'] = '� quelle adresse se trouve le WebMail?';
$lng['serversettings']['webftp_url']['title'] = 'URL WebFTP';
$lng['serversettings']['webftp_url']['description'] = '� quelle adresse se trouve le WebFTP?';

?>