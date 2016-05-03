<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-03 20:22:58
         compiled from "smarty\views\addShape.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2998157226f8d096355-79077914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bc6c94f94cd9ff436b6022f8c369e8a93c86530' => 
    array (
      0 => 'smarty\\views\\addShape.tpl',
      1 => 1462299774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2998157226f8d096355-79077914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57226f8d210446_12160393',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57226f8d210446_12160393')) {function content_57226f8d210446_12160393($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--Add new shape-->
    <form action="addShape.php" method="post" id="newShape" enctype="multipart/form-data">
        <h3>New Shape:</h3>
            Name:
        <input type="text" name="shapeName" class="form-control"><br>
            Description:
        <textarea name="description" class="form-control"></textarea><br>
            Image:
        <input type="file" name="myimage"><br>
        <input type="submit" name="addShape"  class="btn btn-default btn-md add form-control" value="Upload">
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
