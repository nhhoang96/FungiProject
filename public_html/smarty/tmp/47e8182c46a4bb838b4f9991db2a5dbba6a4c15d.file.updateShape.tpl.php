<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-03 20:24:14
         compiled from "smarty\views\updateShape.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214165728e983ac07d1-30293235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47e8182c46a4bb838b4f9991db2a5dbba6a4c15d' => 
    array (
      0 => 'smarty\\views\\updateShape.tpl',
      1 => 1462299852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214165728e983ac07d1-30293235',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5728e983d68016_44522739',
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
<?php if ($_valid && !is_callable('content_5728e983d68016_44522739')) {function content_5728e983d68016_44522739($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



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

        <input type="submit" class="btn btn-default btn-md add form-control" value="Update" name="updateShape">
    </form>
    
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
