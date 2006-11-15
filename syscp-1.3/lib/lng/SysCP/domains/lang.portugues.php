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

$lng['SysCP']['domains']['add'] = 'Criar dominio';
$lng['SysCP']['domains']['aliasdomain'] = 'Ali�s para o dominio';
$lng['SysCP']['domains']['customer'] = 'Cliente';
$lng['SysCP']['domains']['description'] = 'Aqui voce pode criar(sub-)dominios e alterar seu destino.<br />O sistema ir� levar algum tempo para aplicar as novas configura��es depois de salvas.';
$lng['SysCP']['domains']['domainname'] = 'Nome do dominio';
$lng['SysCP']['domains']['domains'] = 'Dominios';
$lng['SysCP']['domains']['domainsettings'] = 'Configurar Dominio';
$lng['SysCP']['domains']['edit'] = 'Editar dominio';
$lng['SysCP']['domains']['noaliasdomain'] = 'N&atilde;o dominio do ali&aacute;s';
$lng['SysCP']['domains']['resources'] = 'Recursos';
$lng['SysCP']['domains']['subdomain_add'] = 'Criar Sub-dominio';
$lng['SysCP']['domains']['subdomain_edit'] = 'Editar (sub)dominio';
$lng['SysCP']['domains']['subdomainforemail'] = 'Subdominio como ';
$lng['SysCP']['domains']['wildcarddomain'] = 'Criar um wildcarddomain?';

/**
 * Errors & Questions
 */

$lng['SysCP']['domains']['error']['adduserfirst'] = 'Por favor crie um cliente primeiro';
$lng['SysCP']['domains']['error']['cantdeletedomainwithemail'] = 'Voce n�o pode deletar um dominio que � usado como email-domain. Delete todos as contas de e-mail primeiro.';
$lng['SysCP']['domains']['error']['cantdeletemaindomain'] = 'Voce n�o pode deletar um dominio que esta sendo usado como email-domain.';
$lng['SysCP']['domains']['error']['canteditdomain'] = 'Voce n�o pode editar este dominio. Ele foi desabilitado pelo administrador.';
$lng['SysCP']['domains']['error']['domainalreadyexists'] = 'O dominio %s j� est� apontado para outro cliente';
$lng['SysCP']['domains']['error']['domaincantbeempty'] = 'O nome do dominio n�o pode estar vazio.';
$lng['SysCP']['domains']['error']['domainexistalready'] = 'O dominio %s j� existe.';
$lng['SysCP']['domains']['error']['domainisaliasorothercustomer'] = 'O dom�nio-alias escolhido � ele pr�prio um dom�nio-alias ou este pertence a um outro cliente.';
$lng['SysCP']['domains']['error']['firstdeleteallsubdomains'] = 'Voce deve deletar todos subdominios antes de poder criar um wildcard domain.';
$lng['SysCP']['domains']['error']['maindomainnonexist'] = 'O dominio principal %s n�o existe.';
$lng['SysCP']['domains']['error']['subdomainiswrong'] = 'O subdominio %s cont�m caracteres inv�lidos.';
$lng['SysCP']['domains']['error']['wwwnotallowed'] = 'www n�o � permitido como nome de subdominio.';
