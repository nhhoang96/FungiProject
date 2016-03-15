<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-15 20:12:54
         compiled from "smarty\views\app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2910356d740be3e1f94-74629209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '922bedafa0f12982e1afd703cad018c347615e8e' => 
    array (
      0 => 'smarty\\views\\app.tpl',
      1 => 1458069150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2910356d740be3e1f94-74629209',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56d740be4150c4_57280434',
  'variables' => 
  array (
    'shapeData' => 0,
    'shape' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d740be4150c4_57280434')) {function content_56d740be4150c4_57280434($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Select Shape",'active'=>"app"), 0);?>




<body>

<div class="container">
	<?php  $_smarty_tpl->tpl_vars['shape'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shape']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shapeData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shape']->key => $_smarty_tpl->tpl_vars['shape']->value) {
$_smarty_tpl->tpl_vars['shape']->_loop = true;
?>
  <div class="row">

	<div class="col-sm-6">


      

          <div class="face back">

            <div class="well well-sm inner">

				<img src="img/<?php echo $_smarty_tpl->tpl_vars['shape']->value['Image'];?>
" class="img-rounded">
				<h2>
					<?php echo $_smarty_tpl->tpl_vars['shape']->value['Name'];?>

				</h2>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['shape']->value['Description'];?>


				</p>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['shape']->value["Shape_Category_ID"];?>

				</p>
				
			</div>

            
				
				
				
				
				
			  <?php echo $_smarty_tpl->tpl_vars['shape']->value["Shape_Category_ID"];?>

			</div>
			  
          </div> <!-- end face back -->
        </div>	<!-- end card -->
	  </div>
	</div> <!-- end col-sm-6 -->
	<?php } ?>

</body>
</html><?php }} ?>
