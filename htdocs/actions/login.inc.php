<?php
$smarty->assign('page', array('name' => $action, 'title' => 'Login'));

if(!isset($_POST['callback']))
	$smarty->display('login.tpl');
else
{
	
	$username = @$_POST['username'];
	$password = @$_POST['password'];
	
	if($username == "" || $password == "") {
		$smarty->assign('error', array('title' => 'Login error', 'text' => 'Please complete the form.'));
		$smarty->display('login.tpl');
	} elseif(!User::exists($username)) {
        $smarty->assign('error', array('title' => 'Login error', 'text' => 'User not found.'));
        $smarty->display('login.tpl');
    } elseif(User::auth($username, $password)) {
        $user = new User();
        $user->getByName($username);
        $_SESSION['user'] = $user;
        Header('Location:index.php');
    } else {
        $smarty->assign('error', array('title' => 'Login error', 'text' => 'Password incorrect.'));
        $smarty->display('login.tpl');
    }
}