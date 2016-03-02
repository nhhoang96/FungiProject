<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-07 20:56:00
         compiled from "template\fungusResult2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259045524259bde24d7-28310928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1975289c82ab52942775fe96c4ff1aba5c30c356' => 
    array (
      0 => 'template\\fungusResult2.tpl',
      1 => 1428432951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259045524259bde24d7-28310928',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5524259c2d1541_16278889',
  'variables' => 
  array (
    'fungName' => 0,
    'sciName' => 0,
    'phylum' => 0,
    'order' => 0,
    'family' => 0,
    'occurrence' => 0,
    'dimension' => 0,
    'cap' => 0,
    'gills' => 0,
    'sporePrint' => 0,
    'veil' => 0,
    'edibility' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5524259c2d1541_16278889')) {function content_5524259c2d1541_16278889($_smarty_tpl) {?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Wood decay fungi</title>
<title><?php echo $_smarty_tpl->tpl_vars['fungName']->value;?>
</title>
    <meta charset="utf-8">
    <link href="../css/fungusResult.css" type=text/css rel="stylesheet" />
    <?php echo '<script'; ?>
 src="jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
</head>

<body>
<!center>
<!img src="oakes messiah logo.jpg">
<!/center>
<div id="header">
</div>
<div id="menu">
	<ul>
	 <li><a href="indexcopy.htm">Home</a></li>
	 <li><a href="introduction_page/introductioncopy.htm">Introduction</a>  </li>
	 <li><a href="shapekeycopy.htm">Shape Key</a>  </li>
	 <li> <a href="SpeciesListcopy.htm">Species List</a></li>
	 <li> <a href="Glossary.htm">Glossary</a></li>
	 	</ul>
</div>
<div id="content">

<div id="title"><h1><?php echo $_smarty_tpl->tpl_vars['fungName']->value;?>
</h1></div>

<div id="info">
    <ul>
        <li>Name: <?php echo $_smarty_tpl->tpl_vars['fungName']->value;?>
</li>
        <li>Scientific Name: <?php echo $_smarty_tpl->tpl_vars['sciName']->value;?>
</li>
        <li>Phylum: <?php echo $_smarty_tpl->tpl_vars['phylum']->value;?>
</li>
        <li>Order: <?php echo $_smarty_tpl->tpl_vars['order']->value;?>
</li>
        <li>Family: <?php echo $_smarty_tpl->tpl_vars['family']->value;?>
</li>
        <li>Occurrence on wood substrate: <?php echo $_smarty_tpl->tpl_vars['occurrence']->value;?>
</li>
        <li>Dimensions: <?php echo $_smarty_tpl->tpl_vars['dimension']->value;?>
</li>
        <li>Cap: <?php echo $_smarty_tpl->tpl_vars['cap']->value;?>
</li>
        <li>Gills: <?php echo $_smarty_tpl->tpl_vars['gills']->value;?>
</li>
        <li>Spore print: <?php echo $_smarty_tpl->tpl_vars['sporePrint']->value;?>
</li>
        <li>Veil: <?php echo $_smarty_tpl->tpl_vars['veil']->value;?>
</li>
        <li>Edibility: <?php echo $_smarty_tpl->tpl_vars['edibility']->value;?>
</li>
        <li>Comment: <?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</li>
    </ul>
</div> <!-- end info -->

<div id="images">image carousel goes here</div>

</div> <!-- end content -->
</body>
</html>
<?php }} ?>
