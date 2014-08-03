<?php /* Smarty version Smarty-3.1.18, created on 2014-08-02 19:43:57
         compiled from "/share/MD1_DATA/Web/xplog/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155187757353db176ee5cc55-41341870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cebcd1108daa15d4391d19e37d34a6d5e282a088' => 
    array (
      0 => '/share/MD1_DATA/Web/xplog/templates/header.tpl',
      1 => 1406979836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155187757353db176ee5cc55-41341870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53db176ee74485_20063833',
  'variables' => 
  array (
    'page' => 0,
    'menuArr' => 0,
    'item' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53db176ee74485_20063833')) {function content_53db176ee74485_20063833($_smarty_tpl) {?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="static/css/style.css" />
	<script language="javascript" type="text/javascript" src="static/js/ckeditor/ckeditor.js"></script>
</head>
<body>

<div id="wrapper">
<div id="header">
	<h1><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</h1>
</div>
<div id="menu">

	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
	<?php } ?>

</div>
<div id="content">
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<div class="error">
	<span class="title"><?php echo $_smarty_tpl->tpl_vars['error']->value['title'];?>
</span>
	<br />
	<span class="text">
	<?php echo $_smarty_tpl->tpl_vars['error']->value['text'];?>

	</div>
<?php }?><?php }} ?>
