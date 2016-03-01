<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-27 19:13:11
         compiled from "smarty\views\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3125356d1e7370d1253-82741912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d63aef6a398df58eca982598bcac91d477def93' => 
    array (
      0 => 'smarty\\views\\head.tpl',
      1 => 1456432348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3125356d1e7370d1253-82741912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56d1e7370e7d81_18132314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d1e7370e7d81_18132314')) {function content_56d1e7370e7d81_18132314($_smarty_tpl) {?><!DOCTYPE html>
<html>
<!--Fungi Team 2015-->
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="stylesheet" href="css/index.css">
		
		<?php echo '<script'; ?>
>
			function myFunction() {
				document.getElementById("description").innerHTML = "Bird's Nest: These fungi look like miniature bird's nests with egg-shaped structures inside called peridioles. Bird's nest fungi are small, only 0.5 to 1 cm in diameter. Drops of water splash the peridioles out of the cups, dispersing the fungus.";
			}
		<?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>

		<!-- Bootstrap Core JavaScript -->
		<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

 		<!-- Menu Toggle Script -->
		<?php echo '<script'; ?>
>
			$("#menu-toggle").click(function(e) {
    			e.preventDefault();
    			$("#wrapper").toggleClass("toggled");
 			});
 		<?php echo '</script'; ?>
>
    </head>
	
	<body>
		<div id="header"> </div>

		<div id="menu">
			<ul>
	 			<li><a href="indexcopy.htm">Home</a></li>
	 			<li><a href="introduction_page/introductioncopy.htm">Introduction</a>  </li>
	 			<li><a href="shapekeycopy.htm">Shape Key</a>  </li>
	 			<li> <a href="SpeciesListcopy.htm">Species List</a></li>
	 			<li> <a href=#>Glossary</a></li>
	 			<li> <a href="https://www.messiah.edu/">Messiah College</a></li>
		</ul>
	</div>

<?php }} ?>
