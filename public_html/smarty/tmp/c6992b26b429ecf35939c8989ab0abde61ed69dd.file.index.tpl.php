<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-01 20:59:53
         compiled from "smarty\views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1516556d5f4b9e874a2-12714013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6992b26b429ecf35939c8989ab0abde61ed69dd' => 
    array (
      0 => 'smarty\\views\\index.tpl',
      1 => 1456861816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1516556d5f4b9e874a2-12714013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56d5f4b9f332d0_26272063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d5f4b9f332d0_26272063')) {function content_56d5f4b9f332d0_26272063($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fungi</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS from Dark theme-->
    <link href="css/darkTheme.css" rel="stylesheet">

    <!-- Custom Fonts from FontAwesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Use the Tools</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Support Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Fungi</h1>
                        <p class="intro-text">A free tool for identifying fungi.<br>From the Messiah College CIS Department,<br>in Collaboration with Biology Professor Gary Emberger</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Links -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Try our Fungi Identifiers</h2>
				<br></br>
                <p><a href="http://camelot.cs.messiah.edu/~fungiadmin/app.php" class="btn btn-default btn-lg">Visit the New, Redesigned Tool</a></p>
                <p><a href="https://www.messiah.edu/Oakes/fungi_on_wood/" class="btn btn-default btn-lg">Take Me Back to the Old Tool!</a></p>
                <p>Fungi allows anyone with internet access to interactively select and identify various species of fungus.</p>
            </div>
        </div>
    </section>

    <!-- Support Us Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Support our Team</h2>
					<br></br>
					<br></br>
                    <p>You can support Messiah College's CIS department by visiting the link below!</p>
                    <a href="http://www.messiah.edu/info/20204/department_of_information_and_mathematical_sciences" target="_blank" class="btn btn-default btn-lg">Visit MC CIS</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact the Fungi Team</h2>
                <p>Feel free to provide feedback to this tool. As a team, we strive to provide the best possible product and would love to hear anything you have to say - even if it's just hello!</p>
                <p><a href="mailto:bl1254@messiah.edu"></a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
						<a href="mailto:fungi@mcfungi.com" class="btn btn-default btn-lg""><i class ="fa fa-envelope fa-fw"></i> <span class="network-name"> E-Mail</span></a>
                    
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Messiah College 2014</p>
        </div>
    </footer>

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>

    <!-- Core Bootstrap JS -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- JavaScript Plugin -->
    <?php echo '<script'; ?>
 src="js/jquery.easing.min.js"><?php echo '</script'; ?>
>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1ToYK5qP_bqRg5Ivw_siqFYQLtR_USlY"><?php echo '</script'; ?>
>

    <!-- Some Extra Stuff -->
    <?php echo '<script'; ?>
 src="js/theme.js"><?php echo '</script'; ?>
>

</body>

</html>

<?php }} ?>
