<?php
$smarty->assign('page', array('name' => $action, 'title' => 'Logs'));

$logs = array(
	array(
		'id' => 1,
		'title' => 'Log 2',
		'content' => 'This is the second log entry....',
		'tags' => array(
			array( 'name' => 'entry', 'bgcolor' => 'dfd', 'color' => '0c0' ),
			array( 'name' => 'test', 'bgcolor' => 'ddf', 'color' => '00c' )
		)
	),array(
		'id' => 0,
		'title' => 'Log 1',
		'content' => 'This is the first log entry....',
		'tags' => array(
			array( 'name' => 'first', 'bgcolor' => 'fdd', 'color' => 'c00' ),
			array( 'name' => 'entry', 'bgcolor' => 'dfd', 'color' => '0c0' ),
			array( 'name' => 'test', 'bgcolor' => 'ddf', 'color' => '00c' )
		)
	)
);

$smarty->assign('logs', $logs);

$smarty->display('logs.tpl');