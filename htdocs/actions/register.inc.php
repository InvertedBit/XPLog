<?php
$smarty->assign('page', array('name' => $action, 'title' => 'Registration'));

if(!isset($_POST['callback']))
	$smarty->display('register.tpl');
else
{
	
	$username = @$_POST['username'];
	$password = @$_POST['password'];
	$password2 = @$_POST['password2'];
	$email = @$_POST['email'];
	
	if($username == "" || $password == "" || $password2 == "" || $email == "")
	{
		$smarty->assign('error', array('title' => 'Registration error', 'text' => 'Please complete the form.'));
		$smarty->display('register.tpl');
	}elseif($password != $password2)
	{
		$smarty->assign('error', array('title' => 'Registration error', 'text' => 'The two passwords are different.'));
		$smarty->display('register.tpl');
	}else
	{
	
		
	
		Header("Location:index.php");
	}
}