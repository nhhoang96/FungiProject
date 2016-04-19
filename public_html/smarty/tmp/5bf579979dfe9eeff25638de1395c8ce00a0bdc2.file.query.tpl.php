<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-05 20:54:16
         compiled from "smarty\views\query.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31435570409d8031df9-56667227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bf579979dfe9eeff25638de1395c8ce00a0bdc2' => 
    array (
      0 => 'smarty\\views\\query.tpl',
      1 => 1459881804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31435570409d8031df9-56667227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'serverID' => 0,
    'charList' => 0,
    'charID' => 0,
    'char' => 0,
    'id' => 0,
    'opt' => 0,
    'urlToBePassed' => 0,
    'commonName' => 0,
    'url' => 0,
    'common' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_570409d80b6b19_56650717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570409d80b6b19_56650717')) {function content_570409d80b6b19_56650717($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Fungi Query</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

	<link href="css/cards.css" type=text/css rel="stylesheet" />

	<link href="css/navigation.css" type=text/css rel="stylesheet" />
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/cards.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/collapse.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.css">
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/locale/bootstrap-table-zh-CN.min.js"><?php echo '</script'; ?>
>
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
			<a href="app.php" class="navbar-brand">Fungi Growing on Wood</a>
		</div>
		<!-- Collection of nav links and other content for toggling -->
		<div id="navbarCollapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="app.php">Application</a></li>
				<li><a href="species.php">Species</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="admin.html">Control Panel</a></li>
			</ul>
		</div>
	</div>
</nav>

<form action ="<?php echo $_smarty_tpl->tpl_vars['serverID']->value;?>
" method="post">
	<?php  $_smarty_tpl->tpl_vars['char'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['char']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['charList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['char']->key => $_smarty_tpl->tpl_vars['char']->value) {
$_smarty_tpl->tpl_vars['char']->_loop = true;
?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['charID']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['char']->value['ID']==$_smarty_tpl->tpl_vars['id']->value) {?>
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"	><span class="glyphicon glyphicon-th-list">
							</span> <?php echo $_smarty_tpl->tpl_vars['char']->value['Name'];?>
 </a>
						<?php }?>
					<?php } ?>

				</h4>
			</div>
			<?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['charID']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['char']->value['ID']==$_smarty_tpl->tpl_vars['id']->value) {?>
			<div id="collapse<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  class="panel-collapse collapse">
				<?php }?>
				<?php } ?>
				<div class="list-group">
					<?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['char']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value) {
$_smarty_tpl->tpl_vars['opt']->_loop = true;
?>
						<input type="checkbox" name=<?php echo $_smarty_tpl->tpl_vars['char']->value['Name'];?>
 value=<?php echo $_smarty_tpl->tpl_vars['opt']->value['Opt_ID'];?>
 onchange= "summary()"> <?php echo $_smarty_tpl->tpl_vars['opt']->value['Opt_Name'];?>
<br>

					<?php } ?>
				</div>

			</div>

		</div>
	<?php } ?>
	<input  type = "submit" name = "submit" value = "Submit">

</form>
<h3>Species:</h3> <ul>
	<?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['urlToBePassed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
?>
	<?php  $_smarty_tpl->tpl_vars['common'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['common']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commonName']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['common']->key => $_smarty_tpl->tpl_vars['common']->value) {
$_smarty_tpl->tpl_vars['common']->_loop = true;
?>
	<li><a href='result.php?name=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['common']->value;?>
</a>
		<?php } ?>
		<?php } ?>
	</li>
</ul>
<br> All species will display until selections are made.<br><h3>Species:</h3> <ul>
	<?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['urlToBePassed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['url']->value;?>

		<?php } ?>
	</li>

</ul>

	
		
			
			
		
	

</html><?php }} ?>
