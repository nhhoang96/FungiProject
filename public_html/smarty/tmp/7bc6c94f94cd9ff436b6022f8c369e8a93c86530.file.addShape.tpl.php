<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-06 19:59:01
         compiled from "smarty\templates\addShape.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18829572cdb6506b406-35913049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bc6c94f94cd9ff436b6022f8c369e8a93c86530' => 
    array (
      0 => 'smarty\\templates\\addShape.tpl',
      1 => 1462299774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18829572cdb6506b406-35913049',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572cdb650c5564_03748389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572cdb650c5564_03748389')) {function content_572cdb650c5564_03748389($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



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
