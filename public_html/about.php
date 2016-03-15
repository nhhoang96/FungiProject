<?php
//Fungi Team 2015
include "../private_html/setup.php";

$smarty->assign("aboutActive", "active");
$smarty->assign("title", "About");

$smarty->display('about.tpl');
?>