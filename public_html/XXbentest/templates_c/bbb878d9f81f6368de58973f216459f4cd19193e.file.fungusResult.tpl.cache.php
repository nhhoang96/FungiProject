<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-06 04:00:09
         compiled from "template\fungusResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310645513166420a5c4-94996110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb878d9f81f6368de58973f216459f4cd19193e' => 
    array (
      0 => 'template\\fungusResult.tpl',
      1 => 1428285603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310645513166420a5c4-94996110',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5513166424ba74_76678714',
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
<?php if ($_valid && !is_callable('content_5513166424ba74_76678714')) {function content_5513166424ba74_76678714($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['fungName']->value;?>
</title>
    <meta charset="utf-8">
    <link href="../css/reset.css" type=text/css rel="stylesheet" />
    <link href="../css/fungusResult.css" type=text/css rel="stylesheet" />
    <?php echo '<script'; ?>
 src="jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
</head>

<body>

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
</html><?php }} ?>
