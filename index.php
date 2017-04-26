<?php 
require 'config.php';
require 'core/Controller.php';

define('USER',isset($_COOKIE['user']) ? $_COOKIE['user'] : false);

$controller = !empty($_GET['c']) ? $_GET['c'] : 'home';
if(file_exists($cfg['path']['controllers'].'/'.$controller.'.php')) {
	require ($cfg['path']['controllers'].'/'.$controller.'.php');
	$action = !empty($_GET['a']) ? $_GET['a'] : 'index';
	if(class_exists($controller) && method_exists($controller, $action)) {
		$c = new $controller;
		$c->$action();
		exit();
	}
}
require ($cfg['path']['views'].'/404.html');

?>