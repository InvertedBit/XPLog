<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors','On');
ini_set('display_startup_errors','On');

include_once('config.php');

// Init smarty
define('SMARTY_DIR',dirname(dirname(dirname(__FILE__))).'/libs/');
require_once(SMARTY_DIR.'Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = dirname(dirname(__FILE__)).'/templates/';
$smarty->compile_dir = dirname(dirname(__FILE__)).'/templates_c/';
$smarty->config_dir = dirname(dirname(__FILE__)).'/config/';
$smarty->cache_dir = dirname(dirname(__FILE__)).'/cache/';

$smarty->assign('name', 'Alex');

// Init DB
require_once('helper/Database.php');

$menu = array(
			array( 'title' => 'Home', 'link' => 'index.php' )
		);
if(!isset($_SESSION['user']))
{
	$menu[] = array( 'title' => 'Login', 'link' => 'index.php?action=login' );
}else
{
	$menu[] = array( 'title' => 'Logs', 'link' => 'index.php?action=logs' );
	$menu[] = array( 'title' => 'Tags', 'link' => 'index.php?action=tags' );
	$menu[] = array( 'title' => 'About', 'link' => 'index.php?action=about' );
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
