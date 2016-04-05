<?php
//Fungi Team 2015
include "../private_html/setup.php";

$smarty->assign("glossaryActive", "active");
$smarty->assign("title", "Glossary");

$smarty->display('glossary.tpl');
?>