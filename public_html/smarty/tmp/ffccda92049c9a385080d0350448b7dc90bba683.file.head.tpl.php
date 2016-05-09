<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-08 23:31:50
         compiled from "smarty\templates\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14421572fb0467e3976-77370803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffccda92049c9a385080d0350448b7dc90bba683' => 
    array (
      0 => 'smarty\\templates\\head.tpl',
      1 => 1462743056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14421572fb0467e3976-77370803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'pageName' => 0,
    'isAdmin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572fb046817bd7_92526948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572fb046817bd7_92526948')) {function content_572fb046817bd7_92526948($_smarty_tpl) {?><!DOCTYPE html>
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
    
    
    <link href="css/head.css" type=text/css rel="stylesheet" />
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
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="admin"><a href="addAdmin.php">Control Panel</a></li>
                    <?php if (isset($_smarty_tpl->tpl_vars['isAdmin']->value)) {?>
                    <li><button id="helpBtn" class="btn btn-default">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    </button>
                    </li>
                    <?php }?>
                </ul>
                <div>
                    <?php if (isset($_smarty_tpl->tpl_vars['isAdmin']->value)) {?>

                        <div id="help"><?php echo $_smarty_tpl->getSubTemplate ("userGuide.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>

                    <?php }?>
                </div>
            </div>
        </div>

    </div>

    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
> <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $("#helpBtn").click(function(){
            $("#help").toggle();
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>

</nav>
<?php }} ?>
