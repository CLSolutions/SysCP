$header
	<form method="post" action="$filename">
		<input type="hidden" name="token" value="{$userinfo['formtoken']}" />
		<input type="hidden" name="s" value="$s" />
		<input type="hidden" name="page" value="$page" />
		<input type="hidden" name="action" value="$action" />
		<table cellpadding="5" cellspacing="4" border="0" align="center" class="maintable_40">
			<tr>
				<td class="maintitle" colspan="2"><b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['templates']['template_add']}</b></td>
			</tr>
			<tr>
				<td class="main_field_name">{$lng['login']['language']}:</td>
				<td class="main_field_display" nowrap="nowrap"><select class="dropdown_noborder" name="language">$language_options</select></td>
			</tr>
			<tr>
				<td class="main_field_confirm" colspan="2"><input type="hidden" name="prepare" value="prepare" /><input class="bottom" type="submit" value="{$lng['panel']['next']}" /></td>
			</tr>
		</table>
	</form>
	<br />
	<br />
$footer