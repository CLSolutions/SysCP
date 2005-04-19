$header
    <form method="post" action="$filename">
     <input type="hidden" name="s" value="$s">
     <input type="hidden" name="page" value="$page">
     <input type="hidden" name="action" value="$action">
     <table cellpadding="3" cellspacing="1" border="0" align="center" class="maintable">
      <tr>
       <td colspan="2" class="title">{$lng['admin']['domain_add']}</td>
      </tr>
      <tr>
       <td class="maintable">{$lng['admin']['customer']}:</td>
       <td class="maintable" nowrap><select name="customerid">$customers</select></td>
      </tr>
      <tr>
       <td class="maintable">Domain:</td>
       <td class="maintable" nowrap><input type="text" name="domain" value="" size="60"></td>
      </tr>
      <if $userinfo['change_serversettings'] == '1'><tr>
       <td class="maintable" nowrap>DocumentRoot:<font size="-2"><br />({$lng['panel']['emptyfordefault']})</td>
       <td class="maintable" nowrap><input type="text" name="documentroot" value="" size="60"></td>
      </tr>
      <tr>
       <td class="maintable" nowrap>Nameserver:</td>
       <td class="maintable" nowrap>$isbinddomain</td>
      </tr>
      <tr>
       <td class="maintable" nowrap>Zonefile:<font size="-2"><br />({$lng['panel']['emptyfordefault']})</td>
       <td class="maintable" nowrap><input type="text" name="zonefile" value="" size="60"></td>
      </tr></if>
      <tr>
       <td class="maintable" nowrap>Emaildomain:</td>
       <td class="maintable" nowrap>$isemaildomain</td>
      </tr>
      <tr>
       <td class="maintable" nowrap>{$lng['admin']['subdomainforemail']}:</td>
       <td class="maintable" nowrap>$subcanemaildomain</td>
      </tr>
      <tr>
       <td class="maintable" nowrap>{$lng['admin']['domain_edit']}:</td>
       <td class="maintable" nowrap>$caneditdomain</td>
      </tr>
      <if $userinfo['change_serversettings'] == '1'><tr>
       <td class="maintable" nowrap>OpenBasedir:</td>
       <td class="maintable" nowrap>$openbasedir</td>
      </tr>
      <tr>
       <td class="maintable" nowrap>Safemode:</td>
       <td class="maintable" nowrap>$safemode</td>
      </tr>
      <tr>
       <td class="maintable" nowrap>Speciallogfile:</td>
       <td class="maintable" nowrap>$speciallogfile</td>
      </tr>
      <tr>
       <td class="maintable" nowrap>{$lng['admin']['ownvhostsettings']}:</td>
       <td class="maintable" nowrap><textarea rows="12" cols="60" name="specialsettings"></textarea></td>
      </tr></if>
      <tr>
       <td class="maintable" colspan="2" align="right"><input type="hidden" name="send" value="send"><input type="submit" value="{$lng['panel']['save']}"></td>
      </tr>
     </table>
    </form>
$footer
