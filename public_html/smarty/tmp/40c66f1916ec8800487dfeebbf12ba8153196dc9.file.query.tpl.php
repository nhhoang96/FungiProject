<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-10 01:10:42
         compiled from "smarty\templates\multiKey.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134705730ce72e128a7-14811622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40c66f1916ec8800487dfeebbf12ba8153196dc9' => 
    array (
      0 => 'smarty\\templates\\multiKey.tpl',
      1 => 1462835421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134705730ce72e128a7-14811622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5730ce72ea4fe7_52988563',
  'variables' => 
  array (
    'id' => 0,
    'charList' => 0,
    'charID' => 0,
    'char' => 0,
    'opt' => 0,
    'success' => 0,
    'scientificName' => 0,
    'i' => 0,
    'urlToBePassed' => 0,
    'sciName' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5730ce72ea4fe7_52988563')) {function content_5730ce72ea4fe7_52988563($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Key",'pageName'=>"query"), 0);?>

<link href="css/query.css" type=text/css rel="stylesheet" />


<form action="multiKey.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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
		
		<input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectSpecies">
	</div>

</form>
<?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?><h3><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</h3><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['scientificName']->value)) {?>
	<h3>Species:</h3> <ul>
	<?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['scientificName']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp1+1 - (1) : 1-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<li><a href='result.php?name=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['urlToBePassed']->value[$_tmp2];?>
' class="nothing"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['scientificName']->value[$_tmp3];?>
 </a>

		</li>
	<?php }} ?>
</ul>
<?php }?>

<br>

<?php if (isset($_smarty_tpl->tpl_vars['sciName']->value)) {?>
	All species will display until selections are made.<br><h3>Species:</h3> <ul>

	<?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['sciName']->value);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp4+1 - (1) : 1-($_tmp4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<li><a href='result.php?name=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['url']->value[$_tmp5];?>
'> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sciName']->value[$_tmp6];?>
 </a>
		</li>
	<?php }} ?>
</ul>
<?php }?>
</html><?php }} ?>
