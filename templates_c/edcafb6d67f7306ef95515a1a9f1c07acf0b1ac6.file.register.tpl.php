<?php /* Smarty version Smarty-3.1.18, created on 2014-08-01 13:44:21
         compiled from "/share/MD1_DATA/Web/xplog/templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202742752853db2483088ea2-31411215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edcafb6d67f7306ef95515a1a9f1c07acf0b1ac6' => 
    array (
      0 => '/share/MD1_DATA/Web/xplog/templates/register.tpl',
      1 => 1406871404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202742752853db2483088ea2-31411215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53db2483171129_71664882',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53db2483171129_71664882')) {function content_53db2483171129_71664882($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
