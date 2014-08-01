{* Smarty *}

{include file='header.tpl'}

<form action="index.php?action=register" method="post">
<table>
<tr>
<td>Username:</td><td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Password:</td><td><input type="password" name="password" /></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="callback" value="Login" /></td>
</tr>
</table>
</form>

{include file='footer.tpl'}