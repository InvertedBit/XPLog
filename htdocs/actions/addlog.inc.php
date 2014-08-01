<?php
$smarty->assign('page', array('name' => $action, 'title' => 'Add entry'));

if(!isset($_POST['callback']))
	$smarty->display('addlog.tpl');
else
{
	
	$title = @$_POST['title'];
	$content = @$_POST['content'];
	$tags = split(@$_POST['tags'],',');
	
	for($i = 0; $i < count($tags); $i++) {
		$tags[$i] = trim($tags[$i]);
	}
	
	if($title == "" || $content == "")
	{
		$smarty->assign('error', array('title' => 'Adding error', 'text' => 'Please complete the form.'));
		$smarty->display('addlog.tpl');
	}else
	{
		DbHelper::getInstance()->insert('logs', array('title' => $title, 'content' => $content));
		$id = DbHelper::getInstance()->select('logs', 'id', array('title' => $title, 'content' => $content), null, '1');
		foreach($tags as $tag) {
			//$tags = DbHelper::getInstance()->select();
		}
		
		//Header("Location:index.php?action=log&id=".$id['id']);
	}else {
		$smarty->assign('error', array('title' => 'Registration error', 'text' => 'The user could not be created: '.DbHelper::getInstance()->getError()));
		$smarty->display('register.tpl');
	}
}