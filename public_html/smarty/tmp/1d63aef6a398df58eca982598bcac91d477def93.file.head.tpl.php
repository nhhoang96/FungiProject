<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-06 19:58:01
         compiled from "smarty\views\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26894572cdb29c8a014-05903459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d63aef6a398df58eca982598bcac91d477def93' => 
    array (
      0 => 'smarty\\views\\head.tpl',
      1 => 1462556719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26894572cdb29c8a014-05903459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'pageName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572cdb29c91354_55958675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572cdb29c91354_55958675')) {function content_572cdb29c91354_55958675($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
	<link href="css/index.css" type=text/css rel="stylesheet" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.css">
	<!--Change stylesheet based on page-->
    <link href="css/application.css" type="text/css" rel="stylesheet" />
	<link href="css/about.css" type=text/css rel="stylesheet" />
	<link href="css/result.css" type=text/css rel="stylesheet" />
	<link href="css/lightbox.css" type=text/css rel="stylesheet" />
	<link href="css/cards.css" type=text/css rel="stylesheet" />
    <link href="css/glossary.css" type=text/css rel="stylesheet" />
    <link href="css/admin.css" type=text/css rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

</head>

<body id="<?php echo $_smarty_tpl->tpl_vars['pageName']->value;?>
">
    <!--navigation-->
    <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
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
                <li class="admin"><a href="addAdmin.php">Control Panel</a></li>
            </ul>
            </div>
        </div>

    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
> <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

    </nav>
<?php }} ?>
