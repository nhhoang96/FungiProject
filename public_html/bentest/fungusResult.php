<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require 'smarty/libs/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

// We can use smarty to refer to stuff pulled down from mySQL in the template more easily.
$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
// These are just placeholders
$smarty->assign("fungName", "Bicentennial Red Tipped Fungus");
$smarty->assign("sciName", "Auricularia auricula Underwood");
$smarty->assign("phylum", "Basidiomycota");
$smarty->assign("order", "Basidiomycota");
$smarty->assign("family", "Basidiomycota");
$smarty->assign("dimension", "Basidiomycota");
$smarty->assign("occurrence", "Basidiomycota");
$smarty->assign("gills", "Basidiomycota");
$smarty->assign("cap", "Basidiomycota");
$smarty->assign("sporePrint", "Basidiomycota");
$smarty->assign("veil", "Basidiomycota");
$smarty->assign("edibility", "I wouldn't try it bro");
$smarty->assign("comment", "Believed to let you jump higher in Mario Bros.");

$smarty->display('template/fungusResult.tpl');
