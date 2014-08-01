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
<td>Confirm password:</td><td><input type="password" name="password2" /></td>
</tr>
<tr>
<td>Email:</td><td><input type="text" name="email" /></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="callback" value="Register" /></td>
</tr>
</table>
</form>

{include file='footer.tpl'}