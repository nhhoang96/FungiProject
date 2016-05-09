<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-09 06:43:42
         compiled from "smarty\templates\app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22819573013d8dfcc31-97167572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83bec7ab8208b8656707631e046540a64ae070c3' => 
    array (
      0 => 'smarty\\templates\\app.tpl',
      1 => 1462769021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22819573013d8dfcc31-97167572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_573013d8e457a9_06271502',
  'variables' => 
  array (
    'shapeData' => 0,
    'shape' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573013d8e457a9_06271502')) {function content_573013d8e457a9_06271502($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Select Shape"), 0);?>


	<div class="container">

		<div class="page-header">
			<h1 class="glossarytitle">Shape Key</h1>
		</div>
		<p>The Fungi in this database are organized in 10 categories. Read and choose the descriptions and choose the shape
		that best fits your specimen.</p>
		<hr>

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
" class="btn btn-default btn-md form-control space">Key</a>
					
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
