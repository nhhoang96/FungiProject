<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-06 22:40:49
=======
<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-06 22:40:49
         compiled from "smarty\templates\updateShape.tpl" */ ?>
=======
<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-07 21:06:52
>>>>>>> 06d297aaf03db40f1248c1b39ba5045b0199bee5
         compiled from "smarty\views\updateShape.tpl" */ ?>
>>>>>>> 2dfc690b47791314e3d0e87c32033748467b9b0a
<?php /*%%SmartyHeaderCode:29449572cdb29c0c0e4-06200615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47e8182c46a4bb838b4f9991db2a5dbba6a4c15d' => 
    array (
<<<<<<< HEAD
      0 => 'smarty\\templates\\updateShape.tpl',
      1 => 1462567246,
=======
      0 => 'smarty\\views\\updateShape.tpl',
<<<<<<< HEAD
      1 => 1462567246,
=======
      1 => 1462648008,
>>>>>>> 2dfc690b47791314e3d0e87c32033748467b9b0a
>>>>>>> 06d297aaf03db40f1248c1b39ba5045b0199bee5
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29449572cdb29c0c0e4-06200615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572cdb29c73b96_37332712',
  'variables' => 
  array (
    'editShapeID' => 0,
    'editShapeName' => 0,
    'shapeArray' => 0,
    'key' => 0,
    'item' => 0,
    'editShapeDescription' => 0,
    'editShapeImage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572cdb29c73b96_37332712')) {function content_572cdb29c73b96_37332712($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--Update Shape-->
    <form action="updateShape.php" method="post" id="updateShape" enctype="multipart/form-data">
        <h3>Update Shape:</h3>
        Shape Association:
        <select name="shapeID" class="form-control">

            <?php if (isset($_smarty_tpl->tpl_vars['editShapeID']->value)) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['editShapeID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['editShapeName']->value;?>
</option>
            <?php }?>

            <?php if (!isset($_smarty_tpl->tpl_vars['editShapeID']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shapeArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                <?php } ?>
            <?php }?>
        </select><br>

        <?php if (!isset($_smarty_tpl->tpl_vars['editShapeID']->value)) {?>
            <input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectShape">
        <?php }?>

        Name:
        <input type="text" class="form-control" name="updateShapeName"
               <?php if (isset($_smarty_tpl->tpl_vars['editShapeName']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['editShapeName']->value;?>
"<?php }?>>
        <br>

        Description:
            <textarea class="form-control" name="updateShapeDescription">
                <?php if (isset($_smarty_tpl->tpl_vars['editShapeDescription']->value)) {
echo $_smarty_tpl->tpl_vars['editShapeDescription']->value;
}?>
            </textarea>
        <br>

        Update Image:<br>
        <?php if (isset($_smarty_tpl->tpl_vars['editShapeImage']->value)) {?>
            <img class="pic glossarypic" src="img/<?php echo $_smarty_tpl->tpl_vars['editShapeImage']->value;?>
">
        <?php }?>
        <input type="file" name="myimage"><br>

        <input type="submit" class="btn btn-default btn-md add form-control resetSpace" value="Update" name="updateShape">
        <input type="submit" class="btn btn-danger btn-md add form-control" name="reset" value="Reset">
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
