<?php
if(@$_SERVER['SERVER_NAME'] == 'localhost') {
	define('LOCALHOST',true);
	ini_set('display_errors', 'On');
	$cfg['db']['dbname'] = 'mvc';
	$cfg['db']['user'] = 'root';
	$cfg['db']['pass'] = '';
} else {
	define('LOCALHOST',false);
	//ini_set('display_errors', 'Off');
	$cfg['db']['dbname'] = 'sub';
	$cfg['db']['user'] = 'admindu5BCfx';
	$cfg['db']['pass'] = 'DjTDS93KRM6S';
}

$cfg['db']['host'] = 'localhost';
//$cfg['db']['dbname'] = 'mvc';
//$cfg['db']['user'] = 'root';
//$cfg['db']['pass'] = '';

$cfg['path']['controllers'] = 'controllers';
$cfg['path']['models'] = 'models';
$cfg['path']['views'] = 'views';



?>