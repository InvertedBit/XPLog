<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
ini_set('display_startup_errors','On');

// Get config
include_once('config.php');

// Init smarty
define('SMARTY_DIR',dirname(dirname(dirname(__FILE__))).'/libs/');
require_once(SMARTY_DIR.'Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = dirname(dirname(__FILE__)).'/templates/';
$smarty->compile_dir = dirname(dirname(__FILE__)).'/templates_c/';
$smarty->config_dir = dirname(dirname(__FILE__)).'/config/';
$smarty->cache_dir = dirname(dirname(__FILE__)).'/cache/';

// Init DB
require_once('helper/Database.php');

// Load models
$files = scandir('models');
foreach($files as $file) {
    if(pathinfo($file, PATHINFO_EXTENSION) == 'php') {
        require_once('models/'.$file);
    }
}
session_start();

$smarty->assign('name', 'Alex');

$menu = array(
			array( 'title' => 'Home', 'link' => 'index.php', 'show' => 'always'),
            array( 'title' => 'Login', 'link' => 'index.php?action=login', 'show' => 'noauth'),
            array( 'title' => 'Logs', 'link' => 'index.php?action=logs', 'show' => 'auth'),
            array( 'title' => 'Tags', 'link' => 'index.php?action=tags', 'show' => 'auth'),
            array( 'title' => 'About', 'link' => 'index.php?action=about', 'show' => 'auth'),
            array( 'title' => 'Logout', 'link' => 'index.php?action=logout', 'show' => 'auth')
		);
if(!isset($_SESSION['user']))
{
}else
{
}


$smarty->assign('menuArr', $menu);

//$smarty->debugging = true;

//$smarty->display('index.tpl');

//action routing
$action = @$_GET['action'];
if($action == '')
	$action = 'home';
if(!file_exists('./actions/'.$action.'.inc.php'))
	$action = 'home';

require_once('./actions/'.$action.'.inc.php');