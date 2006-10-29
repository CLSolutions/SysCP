<?php

/**
 * This file is part of the SysCP project.
 * Copyright (c) 2003-2006 the SysCP Project.
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @author     Tim Zielosko <mail@zielosko.net>
 * @copyright  (c) the authors
 * @package    Org.Syscp.Installer
 * @subpackage Language
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @version    $Id$
 */

/**
 * Begin
 */

$lng['install']['language'] = 'Langue';
$lng['install']['welcome'] = 'Bienvenue � l�installation de SysCP';
$lng['install']['welcometext'] = 'Merci beacoup d�avoir choisi SysCP. Pour installer SysCP remplissez les cases ci-dessous avec les dates demand�es.<br /><b>Attention:</b> Une banque de donn�es d�j� existante qui a le m�me nom que vous choisissez ci-dessous va �tre effac�e!';
$lng['install']['database'] = 'Banque de donn�es';
$lng['install']['mysql_hostname'] = 'Hostname MySQL';
$lng['install']['mysql_database'] = 'Banque de donn�es MySQL';
$lng['install']['mysql_unpriv_user'] = 'Utilisateur pour l�acc�s inprivil�gi� � MySQL';
$lng['install']['mysql_unpriv_pass'] = 'Mot de passe pour l�acc�s inprivil�gi� � MySQL';
$lng['install']['mysql_root_user'] = 'Utilisateur pour l�acc�s root � MySQL';
$lng['install']['mysql_root_pass'] = 'Mot de passe pour l�acc�s root � MySQL';
$lng['install']['admin_account'] = 'Acc�s administrative';
$lng['install']['admin_user'] = 'Login de l�administrateur';
$lng['install']['admin_pass'] = 'Mot de passe de l�administrateur';
$lng['install']['admin_pass_confirm'] = 'Mot de passe de l�administrateur (Confirmation)';
$lng['install']['serversettings'] = 'Configuration du server';
$lng['install']['servername'] = 'Nom du server (FQDN)';
$lng['install']['serverip'] = 'Adresse IP du server';
$lng['install']['next'] = 'Continuer';

/**
 * Progress
 */

$lng['install']['testing_mysql'] = 'Verifiant le login root de MySQL...';
$lng['install']['erasing_old_db'] = 'Effacant la vielle banque de donn�es...';
$lng['install']['create_mysqluser_and_db'] = 'Cr�ant banque de donn�es et utilisateur...';
$lng['install']['testing_new_db'] = 'Verifiant banque de donn�es et utilisateur...';
$lng['install']['importing_data'] = 'Important les donn�es dans la banque de donn�es...';
$lng['install']['changing_data'] = 'Conformant les donn�es import�s...';
$lng['install']['adding_admin_user'] = 'Appliquant l�administrateur...';
$lng['install']['creating_configfile'] = 'Cr�ant le fichier de configuration...';
$lng['install']['creating_configfile_succ'] = 'OK, userdata.inc.php �tait sauvegard� � lib/.';
$lng['install']['creating_configfile_temp'] = 'Fichier �tait sauvegard� � /tmp/userdata.inc.php, s�il-vous plait le d�placer � lib/.';
$lng['install']['creating_configfile_failed'] = 'Erreur en cr�ant lib/userdata.inc.php, s�il-vous plait cr�ez le avec le content ci-dessous:';
$lng['install']['syscp_succ_installed'] = 'SysCP �tait install� avec succ�s.';
$lng['install']['click_here_to_login'] = 'Continuer � l��cran login.';

?>