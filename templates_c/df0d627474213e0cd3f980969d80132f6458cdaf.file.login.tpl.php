<?php /* Smarty version Smarty-3.1.18, created on 2014-08-01 18:30:22
         compiled from "/share/MD1_DATA/Web/xplog/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213839388453db3da2a65fe5-38533783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df0d627474213e0cd3f980969d80132f6458cdaf' => 
    array (
      0 => '/share/MD1_DATA/Web/xplog/templates/login.tpl',
      1 => 1406889015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213839388453db3da2a65fe5-38533783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53db3da2bb3886_39508095',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53db3da2bb3886_39508095')) {function content_53db3da2bb3886_39508095($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form action="index.php?action=login" method="post">
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

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
