<?php
//Fungi Team 2015

//Smarty
require_once('smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'smarty/views';
$smarty->compile_dir = 'smarty/tmp';
$smarty -> setCacheDir('smarty/cache');
$smarty -> setConfigDir('smarty/configs');


//Database Connection
try {
		$pdo = new PDO("mysql:dbname=Fungi; host=localhost","fungiweb","lich3n");
		$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	} catch(PDOException $e) {
		echo "    ";
		exit();
	}


?>
