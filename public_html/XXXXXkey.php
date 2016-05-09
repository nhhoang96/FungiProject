<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/17/2016
 * Time: 12:39 PM
 */

include "../private_html/setup.php";

$smarty->assign("appActive", "active");
$smarty->assign("title", "Multi-Access Key");

$smarty->display('XXXXXkey.tpl');

?>