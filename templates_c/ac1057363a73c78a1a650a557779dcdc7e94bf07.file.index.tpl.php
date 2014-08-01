<?php /* Smarty version Smarty-3.1.18, created on 2014-08-01 15:10:04
         compiled from "/share/MD1_DATA/Web/xplog/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78154611753db1197732e61-39073290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac1057363a73c78a1a650a557779dcdc7e94bf07' => 
    array (
      0 => '/share/MD1_DATA/Web/xplog/templates/index.tpl',
      1 => 1406877002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78154611753db1197732e61-39073290',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53db1197c38fa2_00286234',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53db1197c38fa2_00286234')) {function content_53db1197c38fa2_00286234($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


Hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, welcome to Smarty!

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
