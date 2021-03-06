<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-10 01:14:28
         compiled from "smarty\templates\query.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28509573119d4391164-32834163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12c3f99dc5924c88c1d241b7e136a3c1ffd86de0' => 
    array (
      0 => 'smarty\\templates\\query.tpl',
      1 => 1462768576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28509573119d4391164-32834163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'charList' => 0,
    'charID' => 0,
    'char' => 0,
    'opt' => 0,
    'success' => 0,
    'commonName' => 0,
    'i' => 0,
    'urlToBePassed' => 0,
    'common' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_573119d4636df1_58551626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573119d4636df1_58551626')) {function content_573119d4636df1_58551626($_smarty_tpl) {?><!DOCTYPE html>
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
				<li><a href="admin.php">Control Panel</a></li>
			</ul>
		</div>
	</div>
</nav>

<form action="query.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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
" ><span class="glyphicon glyphicon-th-list">
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
	<div>
		
		<input type="submit" class="btn btn-default btn-md add form-control" value="Remove" name="deleteAdmin">
	</div>

</form>
<?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?><h3><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</h3><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['commonName']->value)) {?>
	<h3>Species:</h3> <ul>
	<?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['commonName']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp1+1 - (1) : 1-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<li><a href='result.php?name=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['urlToBePassed']->value[$_tmp2];?>
'> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['commonName']->value[$_tmp3];?>
 </a>

		</li>
	<?php }} ?>
</ul>
<?php }?>

<br>

<?php if (isset($_smarty_tpl->tpl_vars['common']->value)) {?>
	All species will display until selections are made.<br><h3>Species:</h3> <ul>

	<?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['common']->value);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp4+1 - (1) : 1-($_tmp4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<li><a href='result.php?name=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['url']->value[$_tmp5];?>
'> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['common']->value[$_tmp6];?>
 </a>
		</li>
	<?php }} ?>
</ul>
<?php }?>
</html><?php }} ?>
