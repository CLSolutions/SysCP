$header
	<table cellpadding="5" cellspacing="0" border="0" align="center" class="maintable">
		<tr>
			<td class="maintitle_search_left" colspan="2"><b><img src="images/title.gif" alt="" />&nbsp;{$lng['menue']['phpsettings']['maintitle']}</b></td>
			<td class="maintitle_search_right">&nbsp;</td>
		</tr>
		<tr>
			<td class="field_display_border_left">{$lng['admin']['phpsettings']['description']}</td>
			<td class="field_display">{$lng['admin']['phpsettings']['activedomains']}</td>
			<td class="field_display">{$lng['admin']['phpsettings']['actions']}</td>
		</tr>
		$tablecontent
		<if (int)$userinfo['caneditphpsettings'] == 1>
		<tr>
			<td class="field_display_border_left" colspan="3"><a href="$filename?s=$s&amp;page=$page&amp;action=add">{$lng['admin']['phpsettings']['addnew']}</a></td>
		</tr>
		</if>
	</table>
	<br />
	<br />
$footer