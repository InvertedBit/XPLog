<?php /* Smarty version Smarty-3.1.18, created on 2014-08-03 09:59:59
         compiled from "/share/MD1_DATA/Web/xplog/templates/addlog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27704169853dcc600c952c8-47121278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07d5aa6d2d909de1db636082efed43081a49259c' => 
    array (
      0 => '/share/MD1_DATA/Web/xplog/templates/addlog.tpl',
      1 => 1406981647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27704169853dcc600c952c8-47121278',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53dcc600d928d7_86845877',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53dcc600d928d7_86845877')) {function content_53dcc600d928d7_86845877($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form action="index.php?action=register" method="post">
<table>
<tr>
<td>Title:</td><td><input type="text" name="title" /></td>
</tr>
<tr>
<td>Content:</td><td><textarea class="ckeditor" name="editoraddlog"></textarea></td>
</tr>
<tr>
<td>Tags:</td><td><input type="text" name="tags" /></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="callback" value="Add entry" /></td>
</tr>
</table>
</form>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
