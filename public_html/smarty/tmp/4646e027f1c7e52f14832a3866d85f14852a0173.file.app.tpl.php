<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-11 17:57:21
         compiled from "smarty\views\app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25263570409050cddd0-49724208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4646e027f1c7e52f14832a3866d85f14852a0173' => 
    array (
      0 => 'smarty\\views\\app.tpl',
      1 => 1460054826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25263570409050cddd0-49724208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57040905171ef8_41601861',
  'variables' => 
  array (
    'shapeData' => 0,
    'shape' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57040905171ef8_41601861')) {function content_57040905171ef8_41601861($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Select Shape"), 0);?>


<body>
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
				<div class="col-lg-12 sort">
					<a href="query.php?id=<?php echo $_smarty_tpl->tpl_vars['shape']->value['Shape_Category_ID'];?>
" class="btn btn-default btn-md">Multi-Access Key</a>
					
					<a href="species.php?id=<?php echo $_smarty_tpl->tpl_vars['shape']->value['Shape_Category_ID'];?>
" class="btn btn-default btn-md">Species List</a>
				</div>

			
		</div>
		<?php } ?>

		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div>



  

	


      

          

            

				
				
					
				
				
					

				
				
					
				
				
			

            
				
				
				
				
				
			  
			
			  
          
        
	  
	

</body>
</html><?php }} ?>
