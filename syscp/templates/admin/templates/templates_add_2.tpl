$header
	<form method="post" action="$filename">
		<input type="hidden" name="token" value="{$userinfo['formtoken']}" />
		<input type="hidden" name="s" value="$s" />
		<input type="hidden" name="page" value="$page" />
		<input type="hidden" name="action" value="$action" />
		<table cellpadding="5" cellspacing="4" border="0" align="center" class="maintable">
			<tr>
				<td class="maintitle" colspan="2"><b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['templates']['template_add']}</b></td>
			</tr>
			<tr>
				<td class="main_field_name">{$lng['login']['language']}:</td>
				<td class="main_field_display" nowrap="nowrap"><b>$language</b><input type="hidden" name="language" value="$language" /></td>
			</tr>
			<tr>
				<td class="main_field_name">{$lng['admin']['templates']['action']}:</td>
				<td class="main_field_display" nowrap="nowrap"><select class="dropdown_noborder" name="template">$template_options</select></td>
			</tr>
			<tr>
				<td class="main_field_name" nowrap="nowrap">{$lng['admin']['templates']['subject']}: *</td>
				<td class="main_field_display" nowrap="nowrap"><input type="text" name="subject" value="" maxlength="255" size="75" /></td>
			</tr>
			<tr>
				<td class="main_field_name" nowrap="nowrap">{$lng['admin']['templates']['mailbody']}: *</td>
				<td class="main_field_display" nowrap="nowrap"><textarea class="textarea_noborder" name="mailbody" rows="20" cols="75"></textarea></td>
			</tr>
			<tr>
				<td class="main_field_confirm" colspan="2"><input type="hidden" name="send" value="send" /><input class="bottom" type="submit" value="{$lng['panel']['save']}" /></td>
			</tr>
		</table>
	<br />
	<br />
		<table cellpadding="5" cellspacing="0" border="0" align="center" class="maintable">
			<tr>
				<td class="maintitle" colspan="2"><b>&nbsp;<img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['templates']['template_replace_vars']}</b></td>
			</tr>
			<tr>
				<td class="field_display_border_left" colspan="2"><b>{$lng['admin']['templates']['createcustomer']}</b></td>
			</tr>
			<tr>
				<td class="field_name_border_left"><i>{FIRSTNAME}</i>:</td>
				<td class="field_name">{$lng['admin']['templates']['FIRSTNAME']}</td>
			</tr>
			<tr>
				<td class="field_name_border_left"><i>{NAME}</i>:</td>
				<td class="field_name">{$lng['admin']['templates']['NAME']}</td>
			</tr>
			<tr>
				<td class="field_name_border_left"><i>{USERNAME}</i>:</td>
				<td class="field_name">{$lng['admin']['templates']['USERNAME']}</td>
			</tr>
			<tr>
				<td class="field_name_border_left"><i>{PASSWORD}</i>:</td>
				<td class="field_name">{$lng['admin']['templates']['PASSWORD']}</td>
			</tr>
			<tr>
				<td class="field_display_border_left" colspan="2"><b>{$lng['admin']['templates']['pop_success']}</b></td>
			</tr>
			<tr>
				<td class="field_name_border_left"><i>{EMAIL}</i>:</td>
				<td class="field_name">{$lng['admin']['templates']['EMAIL']}</td>
			</tr>
			<if $settings['panel']['sendalternativemail'] == 1>
            <tr>
                <td class="field_display_border_left" colspan="2"><b>{$lng['admin']['templates']['pop_success_alternative']}</b></td>
            </tr>
            <tr>
                <td class="field_name_border_left"><i>{EMAIL}</i>:</td>
                <td class="field_name">{$lng['admin']['templates']['EMAIL']}</td>
            </tr>
            <tr>
                <td class="field_name_border_left"><i>{PASSWORD}</i>:</td>
                <td class="field_name">{$lng['admin']['templates']['EMAIL_PASSWORD']}</td>
            </tr>
            </if>
			<tr>
				<td class="field_display_border_left" colspan="2"><b>{$lng['admin']['templates']['trafficninetypercent']}</b></td>
			</tr>
			<tr>
				<td class="field_name_border_left"><i>{TRAFFIC}</i>:</td>
				<td class="field_name">{$lng['admin']['templates']['TRAFFIC']}</td>
			</tr>
			<tr>
				<td class="field_name_border_left"><i>{TRAFFICUSED}</i>:</td>
				<td class="field_name">{$lng['admin']['templates']['TRAFFICUSED']}</td>
			</tr>
			<tr>
				<td class="field_display_border_left" colspan="2"><b>{$lng['admin']['templates']['ticket']}</b></td>
			</tr>
			<tr>
				<td class="field_name_border_left"><i>{SUBJECT}</i>:</td>
				<td class="field_name">{$lng['admin']['templates']['SUBJECT']}</td>
			</tr>
			<tr>
				<td class="field_name_border_left"><i>{FIRSTNAME}</i>:</td>
				<td class="field_name">{$lng['admin']['templates']['FIRSTNAME']}</td>
			</tr>
			<tr>
				<td class="field_name_border_left"><i>{NAME}</i>:</td>
				<td class="field_name">{$lng['admin']['templates']['NAME']}</td>
			</tr>
		</table>
	</form>
	<br />
	<br />
$footer