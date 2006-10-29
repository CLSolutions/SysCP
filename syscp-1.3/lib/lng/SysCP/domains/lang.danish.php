<?php

/**
 * This file is part of the SysCP project.
 * Copyright (c) 2003-2006 the SysCP Project.
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @author     The SysCP Team <team@syscp.org>
 * @copyright  (c) 2006 The SysCP Team
 * @package    Syscp.Translation
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 *
 */

/**
 * Normal strings
 */

$lng['SysCP']['domains']['add'] = 'Opret dom�ne';
$lng['SysCP']['domains']['aliasdomain'] = 'Dom�ne alias';
$lng['SysCP']['domains']['customer'] = 'Kunde';
$lng['SysCP']['domains']['description'] = 'Her kan du oprette dom�ner og subdom�ner i systemet, og �ndre de stier som er tilknyttet<br />Det tager et stykke tid for �ndringer at blive opdateret i systemet.';
$lng['SysCP']['domains']['domainname'] = 'Dom�ne navn';
$lng['SysCP']['domains']['domains'] = 'Dom�ner';
$lng['SysCP']['domains']['domainsettings'] = 'Dom�ne indstillinger';
$lng['SysCP']['domains']['edit'] = 'Editer dom�ne';
$lng['SysCP']['domains']['ownvhostsettings'] = 'Egne vHost-indstillinger';
$lng['SysCP']['domains']['resources'] = 'Ressourcer';
$lng['SysCP']['domains']['subdomain_add'] = 'Opr�t suddom�ne';
$lng['SysCP']['domains']['subdomain_edit'] = 'Editer (sub)dom�ne';
$lng['SysCP']['domains']['subdomainforemail'] = 'Subdom�ner som eMaildom�ner';
$lng['SysCP']['domains']['wildcarddomain'] = 'Opret som wildcarddom�ne?';

/**
 * Errors & Questions
 */

$lng['SysCP']['domains']['error']['adduserfirst'] = 'Opret venligst en kunde f�rst';
$lng['SysCP']['domains']['error']['cantdeletedomainwithemail'] = 'Du kan ikke slette et dom�ne med tilknyttede eMail-adresser. Slet alle email adresser f�rst.';
$lng['SysCP']['domains']['error']['cantdeletemaindomain'] = 'Du kan ikke slette et eMail-dom�ne.';
$lng['SysCP']['domains']['error']['canteditdomain'] = 'Du kan ikke lave �ndringer i dette dom�ne, da det er blevet l�st af administratoren.';
$lng['SysCP']['domains']['error']['domainalreadyexists'] = 'Dom�net %s er allerede delligeret til en kunde';
$lng['SysCP']['domains']['error']['domaincantbeempty'] = 'The domain-name can not be empty.';
$lng['SysCP']['domains']['error']['domainexistalready'] = 'Dom�net %s eksisterer allerede.';
$lng['SysCP']['domains']['error']['domainisaliasorothercustomer'] = 'Det valgte alias-dom�ne er enten selv et alias dom�ne, eller tilh�rer en anden kunde.';
$lng['SysCP']['domains']['error']['firstdeleteallsubdomains'] = 'Du skal f�rst slette alle sub-dom�ner for du kan oprette et wildcarddom�ne.';
$lng['SysCP']['domains']['error']['maindomainnonexist'] = 'Hoved-dom�net %s eksisterer ikke.';
$lng['SysCP']['domains']['error']['subdomainiswrong'] = 'Sub-dom�net %s indeholder ugyldige tegn.';
$lng['SysCP']['domains']['error']['wwwnotallowed'] = 'www er ikke tilladt som sub-dom�ne.';
