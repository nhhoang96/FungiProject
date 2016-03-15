<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-03 00:37:08
         compiled from "smarty\views\app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2910356d740be3e1f94-74629209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '922bedafa0f12982e1afd703cad018c347615e8e' => 
    array (
      0 => 'smarty\\views\\app.tpl',
      1 => 1456961816,
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
<?php if ($_valid && !is_callable('content_56d740be4150c4_57280434')) {function content_56d740be4150c4_57280434($_smarty_tpl) {?><<<<<<< HEAD
<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

=======
<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Select Shape",'active'=>"app"), 0);?>

<<<<<<< HEAD
<?php echo $_smarty_tpl->getSubTemplate ("index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

=======
<<<<<<< HEAD
=======
>>>>>>> c638ad4d605de8ea0708d4913cd1b1d3e3951cc0


<!--Fungi Team 2015-->
>>>>>>> d28c0e6ab820732dfced5e9f1652cbfca7e4f521
>>>>>>> eb40b79910b6cb79f15b1b1192a8a53e8e58d2b3

<<<<<<< HEAD
=======
<!--Fungi Team 2015-->
<body>
>>>>>>> c638ad4d605de8ea0708d4913cd1b1d3e3951cc0
	
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
