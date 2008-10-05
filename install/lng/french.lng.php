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
 * @author     Tim Zielosko <mail@zielosko.net>
 * @author     Romain MARIADASSOU <roms2000@free.fr>
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package    Language
 * @version    $Id$
 */

/**
 * Begin
 */

$lng['install']['language'] = 'Langue d\'installation';
$lng['install']['welcome'] = 'Bienvenue � l\'installation de SysCP';
$lng['install']['welcometext'] = 'Merci beaucoup d\'avoir choisi SysCP. Pour installer SysCP remplissez les cases ci-dessous avec les informations demand�es.<br /><b>Attention :</b> Si vous entrez le nom d\'une base de donn�es existante, celle-ci sera effac�e !';
$lng['install']['database'] = 'Base de donn�es';
$lng['install']['mysql_hostname'] = 'Nom d\'h�te du serveur MySQL';
$lng['install']['mysql_database'] = 'Base de donn�es MySQL';
$lng['install']['mysql_unpriv_user'] = 'Utilisateur pour l\'acc�s non privil�gi� � MySQL';
$lng['install']['mysql_unpriv_pass'] = 'Mot de passe pour l\'acc�s non privil�gi� � MySQL';
$lng['install']['mysql_root_user'] = 'Utilisateur pour l\'acc�s root � MySQL';
$lng['install']['mysql_root_pass'] = 'Mot de passe pour l\'acc�s root � MySQL';
$lng['install']['admin_account'] = 'Acc�s administratif';
$lng['install']['admin_user'] = 'Login de l\'administrateur';
$lng['install']['admin_pass'] = 'Mot de passe de l\'administrateur';
$lng['install']['admin_pass_confirm'] = 'Mot de passe de l\'administrateur (confirmation)';
$lng['install']['serversettings'] = 'Configuration du serveur';
$lng['install']['servername'] = 'Nom du serveur (FQDN)';
$lng['install']['serverip'] = 'Adresse IP du serveur';
$lng['install']['apacheversion'] = 'Version du serveur Apache';
$lng['install']['next'] = 'Continuer';

/**
 * Progress
 */

$lng['install']['testing_mysql'] = 'V�rification du login root de MySQL ...';
$lng['install']['erasing_old_db'] = 'Effacement de l\'ancienne base de donn�es ...';
$lng['install']['create_mysqluser_and_db'] = 'Cr�ation de la base de donn�es puis des utilisateurs ...';
$lng['install']['testing_new_db'] = 'V�rification de la base de donn�es et des utilisateurs ...';
$lng['install']['importing_data'] = 'Importation des informations dans la base de donn�es ...';
$lng['install']['changing_data'] = 'Modification des donn�es import�s ...';
$lng['install']['adding_admin_user'] = 'Ajout de l\'utilisateur administrateur ...';
$lng['install']['creating_configfile'] = 'Cr�ation du fichier de configuration ...';
$lng['install']['creating_configfile_succ'] = 'OK, userdata.inc.php a �t� sauvegard� dans le dossier lib/ de SysCP.';
$lng['install']['creating_configfile_temp'] = 'Le fichier a �t� sauvegard� dans /tmp/userdata.inc.php, veuillez le d�placer / copier dans le dossier lib/ de SysCP.';
$lng['install']['creating_configfile_failed'] = 'Erreur en cr�ant le fichier lib/userdata.inc.php, veuillez le cr�er avec le contenu ci-dessous :';
$lng['install']['syscp_succ_installed'] = 'SysCP a �t� install� correctement.';
$lng['install']['click_here_to_login'] = 'Cliquez ici pour vous rendre � l\'invite de connexion.';
$lng['install']['httpuser'] = 'Nom du utilisateur du HTTP';
$lng['install']['httpgroup'] = 'Nom du la group du HTTP';

?>
