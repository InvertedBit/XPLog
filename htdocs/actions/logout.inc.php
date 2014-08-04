<?php
$smarty->assign('page', array('name' => $action, 'title' => 'Logout'));

session_destroy();
$smarty->display('logout.tpl');