<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-11 17:57:21
         compiled from "smarty\views\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:679357040900ed6b38-45031509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49cbcb3919b9e93c232b5e37d425f64c56c77e11' => 
    array (
      0 => 'smarty\\views\\head.tpl',
      1 => 1460054826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '679357040900ed6b38-45031509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57040900ef9dc9_39571591',
  'variables' => 
  array (
    'title' => 0,
    'pageName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57040900ef9dc9_39571591')) {function content_57040900ef9dc9_39571591($_smarty_tpl) {?><!DOCTYPE html>
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
    <link href="css/admin.css" type=text/css rel="stylesheet" />
    <link href="css/glossary.css" type=text/css rel="stylesheet" />


</head>

<body id="<?php echo $_smarty_tpl->tpl_vars['pageName']->value;?>
">
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
				<li class="appnav"><a href="app.php">Application</a></li>
                <li class="speciesnav"><a href="species.php">Species</a></li>
                <li class="glossary"><a href="glossary.php">Glossary</a></li>
                <li class="about"><a href="about.php">About</a>


            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li class="admin"><a href="admin.php">Control Panel</a></li>
            </ul>
        </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
> <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

</nav><?php }} ?>