<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type" />
	<link rel="stylesheet" href="templates/main.css" type="text/css" />
	<title><if isset($userinfo['loginname']) && $userinfo['loginname'] != ''>{$userinfo['loginname']} - </if>SysCP</title>
</head>
<body style="margin: 0; padding: 0;"<if !isset($userinfo['loginname']) && !(isset($userinfo['loginname']) && $userinfo['loginname'] == '')> onload="document.loginform.loginname.focus()"</if>>
<!--
    We request you retain the full copyright notice below including the link to www.syscp.org.
    This not only gives respect to the large amount of time given freely by the developers
    but also helps build interest, traffic and use of SysCP. If you refuse
    to include even this then support on our forums may be affected.
    The SysCP Team : 2003-2006
// -->
<!--
	Templates by Luca Piona (info@havanastudio.ch) and Luca Longinotti (chtekk@gentoo.org)
// -->
<table cellspacing="0" cellpadding="0" border="0" width="100%">
	<tr>
		<td width="800"><img src="images/header.gif" width="800" height="90" alt="" /></td>
		<td class="header">&nbsp;</td>
	</tr>
</table>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
	<tr>
		<td width="240" valign="top" bgcolor="#EBECF5">$navigation<br /></td>
		<td width="15" class="line_shadow">&nbsp;</td>
		<td valign="top" bgcolor="#FFFFFF">
		<br />
		<br />
