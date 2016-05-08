<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-08 22:14:52
         compiled from "smarty\templates\addShape.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9899572f9e3c099748-53704658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33684e4d14c353a17ee97d49307a8dc803093e57' => 
    array (
      0 => 'smarty\\templates\\addShape.tpl',
      1 => 1462304782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9899572f9e3c099748-53704658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572f9e3c0ce663_32260895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572f9e3c0ce663_32260895')) {function content_572f9e3c0ce663_32260895($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



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
