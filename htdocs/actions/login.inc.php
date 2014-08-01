<?php
$smarty->assign('page', array('name' => $action, 'title' => 'Login'));

if(!isset($_POST['callback']))
	$smarty->display('login.tpl');
else
{
	
	$username = @$_POST['username'];
	$password = @$_POST['password'];
	
	if($username == "" || $password == "")
	{
		$smarty->assign('error', array('title' => 'Login error', 'text' => 'Please complete the form.'));
		$smarty->display('login.tpl');
	}else
	{
	
		
	
		Header("Location:index.php");
	}
}