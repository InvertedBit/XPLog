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
		$check = DbHelper::getInstance()->select('users', '*', array('name' => $username, 'password' => md5($password)), null, '1');
		
		if(count($check) > 0) {
			$_SESSION['user'] = $username;
			Header("Location:index.php");
		}else {
			$smarty->assign('error', array('title' => 'Login error', 'text' => 'User not found.'));
			$smarty->display('login.tpl');
		}
	}
}