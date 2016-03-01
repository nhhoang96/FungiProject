<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-05 13:33:31
         compiled from "smarty/views/app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16824600085537c8c8b1d1c2-08153296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf11c526f63c4ce52df6a9665f37cb2929de8de3' => 
    array (
      0 => 'smarty/views/app.tpl',
      1 => 1430847209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16824600085537c8c8b1d1c2-08153296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5537c8c8c0a180_50140500',
  'variables' => 
  array (
    'shapeData' => 0,
    'shape' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537c8c8c0a180_50140500')) {function content_5537c8c8c0a180_50140500($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Select Shape",'active'=>"app"), 0);?>

<!--Fungi Team 2015-->

<body>
	
<div class="container">
  <div class="row">
    
	<?php  $_smarty_tpl->tpl_vars['shape'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shape']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shapeData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shape']->key => $_smarty_tpl->tpl_vars['shape']->value) {
$_smarty_tpl->tpl_vars['shape']->_loop = true;
?>
	<div class="col-sm-6">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="well well-sm inner">
				<img src="img/<?php echo $_smarty_tpl->tpl_vars['shape']->value['img'];?>
" class="img-rounded">
				<h2>
					<?php echo $_smarty_tpl->tpl_vars['shape']->value['name'];?>

				</h2>
			</div>
          </div> 
          <div class="face back"> 
            <div class="well well-sm inner">
				<img id="birdsnest" src="img/<?php echo $_smarty_tpl->tpl_vars['shape']->value['img'];?>
">
				<p>
				<?php echo $_smarty_tpl->tpl_vars['shape']->value['description'];?>

				</p>
				<p><?php echo $_smarty_tpl->tpl_vars['shape']->value['link'];?>
</p>
			</div>
          </div> <!-- end face back -->
        </div>	<!-- end card -->
      </div> <!-- end flip -->
	</div> <!-- end col-sm-6 -->
	<?php } ?>
	
  </div> <!-- end row -->
</div> <!-- end container -->
	
</body>
</html><?php }} ?>
