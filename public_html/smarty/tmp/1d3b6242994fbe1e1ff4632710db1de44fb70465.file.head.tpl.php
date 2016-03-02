<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-02 04:50:17
         compiled from "smarty\views\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:656156d6451035fce0-67095228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d3b6242994fbe1e1ff4632710db1de44fb70465' => 
    array (
      0 => 'smarty\\views\\head.tpl',
      1 => 1456890611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '656156d6451035fce0-67095228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56d6451037f0f3_59215593',
  'variables' => 
  array (
    'title' => 0,
    'active' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d6451037f0f3_59215593')) {function content_56d6451037f0f3_59215593($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
	<link href="css/navigation.css" type=text/css rel="stylesheet" />
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/cards.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/collapse.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.css">
		<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/locale/bootstrap-table-zh-CN.min.js"><?php echo '</script'; ?>
>
	<!--Change stylesheet based on page-->
	<?php if ($_smarty_tpl->tpl_vars['active']->value=='about') {?>
		<link href="css/about.css" type=text/css rel="stylesheet" />
	<?php } elseif ($_smarty_tpl->tpl_vars['active']->value=='species') {?>
		<link href="css/species.css" type=text/css rel="stylesheet" />
		<!-- Table sorting -->
	<?php } elseif ($_smarty_tpl->tpl_vars['active']->value=='result') {?>
		<link href="css/result.css" type=text/css rel="stylesheet" />
		<?php echo '<script'; ?>
 src="js/lightbox.min.js"><?php echo '</script'; ?>
>
		<link href="css/lightbox.css" rel="stylesheet" />
	<?php } else { ?>
		<link href="css/cards.css" type=text/css rel="stylesheet" />
	<?php }?>
</head>
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
				<?php if ($_smarty_tpl->tpl_vars['active']->value=='app') {?>
					<li class="active"><a href="app.php">Application</a></li>
                	<li><a href="species.php">Species</a></li>
                	<li><a href="about.php">About</a></li>
				<?php } elseif ($_smarty_tpl->tpl_vars['active']->value=='species') {?>
					<li><a href="app.php">Application</a></li>
                	<li class="active"><a href="species.php">Species</a></li>
                	<li><a href="about.php">About</a></li>
				<?php } else { ?>
					<li><a href="app.php">Application</a></li>
                	<li><a href="species.php">Species</a></li>
                	<li class="active"><a href="about.php">About</a></li>
				<?php }?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin.html">Control Panel</a></li>
            </ul>
        </div>
    </div>
</nav><?php }} ?>
