$header
	<form method="post" action="$filename">
  <input type="hidden" name="token" value="{$userinfo['formtoken']}" />
	<input type="hidden" name="s" value="$s" />
	<input type="hidden" name="page" value="$page" />
	<input type="hidden" name="action" value="$action" />
		<table cellpadding="5" cellspacing="4" border="0" align="center" class="maintable_60">
			<tr>
				<td class="maintitle" colspan="2"><b><img src="images/title.gif" alt="" />&nbsp;{$lng['ticket']['ticket_newcateory']}</b></td>
			</tr>
			<tr>
				<td class="main_field_name">{$lng['ticket']['category']}:</td>
				<td class="main_field_display" nowrap="nowrap"><input type="text" name="category" maxlength="50" /></td>
			</tr>
			<tr>
				<td class="main_field_confirm" colspan="2"><input type="hidden" name="send" value="send" /><input type="submit" class="bottone" value="{$lng['ticket']['ticket_newcateory']}" /></td>
			</tr>
		</table>
	</form>
	<br />
	<br />
$footer