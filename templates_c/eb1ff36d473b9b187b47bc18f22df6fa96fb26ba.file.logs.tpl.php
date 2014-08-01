<?php /* Smarty version Smarty-3.1.18, created on 2014-08-01 18:51:36
         compiled from "/share/MD1_DATA/Web/xplog/templates/logs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201716740353db168e17d659-79568400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb1ff36d473b9b187b47bc18f22df6fa96fb26ba' => 
    array (
      0 => '/share/MD1_DATA/Web/xplog/templates/logs.tpl',
      1 => 1406890224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201716740353db168e17d659-79568400',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53db168e2606c1_58816583',
  'variables' => 
  array (
    'logs' => 0,
    'log' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53db168e2606c1_58816583')) {function content_53db168e2606c1_58816583($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<a href="index.php?action=addlog" class="addlogentry">Add entry</a>

<?php if (isset($_smarty_tpl->tpl_vars['logs']->value)) {?>

	<?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
	
		<div class="logentry">
			<div class="title">
				<a href="index.php?action=log&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['log']->value['title'];?>
</a>
			</div>
			<div class="content">
				<?php echo $_smarty_tpl->tpl_vars['log']->value['content'];?>

			</div>
			<div class="tags">
				<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
					<a href="#" style="background-color: #<?php echo $_smarty_tpl->tpl_vars['tag']->value['bgcolor'];?>
;color: #<?php echo $_smarty_tpl->tpl_vars['tag']->value['color'];?>
;border-color: #<?php echo $_smarty_tpl->tpl_vars['tag']->value['color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
				<?php } ?>
			</div>
		</div>
	
	<?php } ?>

<?php } else { ?>

	No logs found.

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
