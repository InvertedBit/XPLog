<?php /* Smarty version Smarty-3.1.18, created on 2014-08-01 12:44:09
         compiled from "/share/MD1_DATA/Web/xplog/templates/logs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201716740353db168e17d659-79568400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb1ff36d473b9b187b47bc18f22df6fa96fb26ba' => 
    array (
      0 => '/share/MD1_DATA/Web/xplog/templates/logs.tpl',
      1 => 1406868247,
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
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53db168e2606c1_58816583')) {function content_53db168e2606c1_58816583($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


Hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, welcome to Smarty!

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
