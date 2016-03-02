<?php
//Fungi Team 2015

//Directory
/**
 * Compose the URL that originated this script. This function was procured from
 * http://stackoverflow.com/questions/6768793/get-the-full-url-in-php and was reduced
 * by removing unnecessary items.
 * @return string the URL of the server running this script.
 */
function webRoot() {
	$ssl = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? true : false;
	$sp = strtolower($_SERVER['SERVER_PROTOCOL']);
	$protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
	$port = $_SERVER['SERVER_PORT'];
	$port = ((!$ssl && $port == '80') || ($ssl && $port == '443')) ? '' : ':' . $port;
	$host = isset($host) ? $host : $_SERVER['SERVER_NAME'] . $port;
	$url_origin = $protocol . '://' . $host . $_SERVER['REQUEST_URI'];
	$ending = strpos($url_origin, "/", strpos($url_origin, "//") + 2);
	/*
     * if the URL exists on a localhost, it is highly likely that there is an alias
     * that needs to be kept as part of the URL. Otherwise, it is highly likely that
     * the base url is actually between the http:// and the next /.
     */
	if (strpos($url_origin, "localhost") !== false) {
		$ending = strpos($url_origin, "/", $ending + 1);
	}
	return substr($url_origin, 0, $ending + 1);
}

$tmp = explode(DIRECTORY_SEPARATOR, __dir__);
unset($tmp[count($tmp)-1]);
define('BASE_PATH', implode(DIRECTORY_SEPARATOR, $tmp) . DIRECTORY_SEPARATOR);
define('WEB_PATH', BASE_PATH . 'public_html/');
define('URL', webRoot());

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
		echo 'ERROR: ' . $e->getMessage();
		exit();
	}


?>