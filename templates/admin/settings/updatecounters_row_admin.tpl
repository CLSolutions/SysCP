		<tr>
			<td class="main_field_name">
				<b><if $admin['adminid'] != $userinfo['userid']><a href="admin_admins.php?s=$s&amp;page=admins&amp;action=su&amp;id={$admin['adminid']}" target="_blank">{$admin['loginname']}</a></if><if $admin['adminid'] == $userinfo['userid']>{$admin['loginname']}</if>:</b>
			</td>
			<td class="main_field_display">
				<table border="0" style="text-align: left;">
					<tr>
						<td>{$lng['admin']['customers']}:</td>
						<td><span <if $admin['customers_used'] == $admin['customers_used_new']>style="color:green"<else>style="color:red"</if>><b>{$admin['customers_used']} -&gt; {$admin['customers_used_new']}</b></span></td>
					</tr>
					<tr>
						<td>{$lng['customer']['domains']}:</td>
						<td><span <if $admin['domains_used'] == $admin['domains_used_new']>style="color:green"<else>style="color:red"</if>><b>{$admin['domains_used']} -&gt; {$admin['domains_used_new']}</b></span></td>
					</tr>
					<tr>
						<td>{$lng['customer']['diskspace']}:</td>
						<td><span <if $admin['diskspace_used'] == $admin['diskspace_used_new']>style="color:green"<else>style="color:red"</if>><b>{$admin['diskspace_used']} -&gt; {$admin['diskspace_used_new']}</b></span></td>
					</tr>
					<tr>
						<td>{$lng['customer']['traffic']}:</td>
						<td><span <if $admin['traffic_used'] == $admin['traffic_used_new']>style="color:green"<else>style="color:red"</if>><b>{$admin['traffic_used']} -&gt; {$admin['traffic_used_new']}</b></span></td>
					</tr>
					<tr>
						<td>{$lng['customer']['mysqls']}:</td>
						<td><span <if $admin['mysqls_used'] == $admin['mysqls_used_new']>style="color:green"<else>style="color:red"</if>><b>{$admin['mysqls_used']} -&gt; {$admin['mysqls_used_new']}</b></span></td>
					</tr>
					<tr>
						<td>{$lng['customer']['emails']}:</td>
						<td><span <if $admin['emails_used'] == $admin['emails_used_new']>style="color:green"<else>style="color:red"</if>><b>{$admin['emails_used']} -&gt; {$admin['emails_used_new']}</b></span></td>
					</tr>
					<tr>
						<td>{$lng['customer']['accounts']}:</td>
						<td><span <if $admin['email_accounts_used'] == $admin['email_accounts_used_new']>style="color:green"<else>style="color:red"</if>><b>{$admin['email_accounts_used']} -&gt; {$admin['email_accounts_used_new']}</b></span></td>
					</tr>
					<tr>
						<td>{$lng['customer']['forwarders']}:</td>
						<td><span <if $admin['email_forwarders_used'] == $admin['email_forwarders_used_new']>style="color:green"<else>style="color:red"</if>><b>{$admin['email_forwarders_used']} -&gt; {$admin['email_forwarders_used_new']}</b></span></td>
					</tr>
					<tr>
						<td>{$lng['customer']['ftps']}:</td>
						<td><span <if $admin['ftps_used'] == $admin['ftps_used_new']>style="color:green"<else>style="color:red"</if>><b>{$admin['ftps_used']} -&gt; {$admin['ftps_used_new']}</b></span></td>
					</tr>
					<tr>
						<td>{$lng['customer']['tickets']}:</td>
						<td><span <if $admin['tickets_used'] == $admin['tickets_used_new']>style="color:green"<else>style="color:red"</if>><b>{$admin['tickets_used']} -&gt; {$admin['tickets_used_new']}</b></span></td>
					</tr>
					<tr>
						<td>{$lng['customer']['subdomains']}:</td>
						<td><span <if $admin['subdomains_used'] == $admin['subdomains_used_new']>style="color:green"<else>style="color:red"</if>><b>{$admin['subdomains_used']} -&gt; {$admin['subdomains_used_new']}</b></span></td>
					</tr>
				</table>
			</td>
		</tr>
