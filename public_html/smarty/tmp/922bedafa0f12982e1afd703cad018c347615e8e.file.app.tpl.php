<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-07 16:38:57
         compiled from "smarty\views\app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26301572dfe013c5264-78106142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '922bedafa0f12982e1afd703cad018c347615e8e' => 
    array (
      0 => 'smarty\\views\\app.tpl',
      1 => 1462136541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26301572dfe013c5264-78106142',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shapeData' => 0,
    'shape' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572dfe015237a3_41382772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572dfe015237a3_41382772')) {function content_572dfe015237a3_41382772($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Select Shape"), 0);?>


	<div class="container">

		<?php  $_smarty_tpl->tpl_vars['shape'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shape']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shapeData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shape']->key => $_smarty_tpl->tpl_vars['shape']->value) {
$_smarty_tpl->tpl_vars['shape']->_loop = true;
?>

			<div class="col-lg-6 shape">
				<div class="left">
					<img class="pic" src="img/<?php echo $_smarty_tpl->tpl_vars['shape']->value['Image'];?>
">
				</div>
				<div class="right">

					<h2 class="app"><?php echo $_smarty_tpl->tpl_vars['shape']->value['Name'];?>
</h2>
					<p><?php echo $_smarty_tpl->tpl_vars['shape']->value['Description'];?>
</p>
				</div>
				<div class="col-lg-6 paragraph_1">
					<a href="query.php?id=<?php echo $_smarty_tpl->tpl_vars['shape']->value['Shape_Category_ID'];?>
" class="btn btn-default btn-md form-control space">Multi-Access Key</a>
					
					</div>
					<div class="col-lg-6 paragraph_2">

					<a href="species.php?id=<?php echo $_smarty_tpl->tpl_vars['shape']->value['Shape_Category_ID'];?>
" class="btn btn-default btn-md form-control">
						Species List</a>
				</div>
			</div>
		<?php } ?>

		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div>
</body>
</html><?php }} ?>
