<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-17 00:17:26
         compiled from "smarty\views\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:903156e8626eec3357-27324442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cb02134d785cedb5665c8b77ff3e65de3571c6e' => 
    array (
      0 => 'smarty\\views\\head.tpl',
      1 => 1458170149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '903156e8626eec3357-27324442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e8626f034a85_26539392',
  'variables' => 
  array (
    'title' => 0,
    'appActive' => 0,
    'speciesActive' => 0,
    'aboutActive' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e8626f034a85_26539392')) {function content_56e8626f034a85_26539392($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
	<link href="css/navigation.css" type=text/css rel="stylesheet" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.css">
	<!--Change stylesheet based on page-->
    <link href="css/application.css" type="text/css" rel="stylesheet" />
	<link href="css/about.css" type=text/css rel="stylesheet" />
	<link href="css/species.css" type=text/css rel="stylesheet" />
		<!-- Table sorting -->
	<link href="css/result.css" type=text/css rel="stylesheet" />
	<link href="css/lightbox.css" type=text/css rel="stylesheet" />
	<link href="css/cards.css" type=text/css rel="stylesheet" />
</head>

<body>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">Fungi Growing on Wood</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
					<li class="<?php echo $_smarty_tpl->tpl_vars['appActive']->value;?>
"><a href="app.php">Application</a></li>
                	<li class="<?php echo $_smarty_tpl->tpl_vars['speciesActive']->value;?>
"><a href="species.php">Species</a></li>
                	<li class="<?php echo $_smarty_tpl->tpl_vars['aboutActive']->value;?>
"><a href="about.php">About</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin.html">Control Panel</a></li>
            </ul>
        </div>
    </div>
</nav><?php }} ?>
