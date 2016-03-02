<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-02 02:36:46
         compiled from "smarty\views\app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129556d643ae433481-80527822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8c9941a7d82b26aca2027cae5b06fe7a8beff46' => 
    array (
      0 => 'smarty\\views\\app.tpl',
      1 => 1456859282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129556d643ae433481-80527822',
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
  'unifunc' => 'content_56d643ae617af3_01313105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d643ae617af3_01313105')) {function content_56d643ae617af3_01313105($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Select Shape",'active'=>"app"), 0);?>

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
