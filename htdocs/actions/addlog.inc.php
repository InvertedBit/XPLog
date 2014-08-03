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
		$res = DbHelper::getInstance()->select('logs', 'id', array('title' => $title, 'content' => $content), null, '1');
		$logid = $res->fetch_assoc();
		foreach($tags as $tag) {
			if(!DbHelper::getInstance()->exists('tags', array('name' => $tag)))
				DbHelper::getInstance()->insert('tags', array('name' => $tag));
			$res = DbHelper::getInstance()->select('tags', 'id', array('name' => $tag), null, '1');
			$tagid = $res->fetch_assoc();
			if(!DbHelper::getInstance()->exists('logs_tags', array('log_id' => $logid, 'tag_id' => $tagid)))
				DbHelper::getInstance()->insert('tags', array('log_id' => $logid, 'tag_id' => $tagid));
		}
		
		//Header("Location:index.php?action=log&id=".$id['id']);
	}
}