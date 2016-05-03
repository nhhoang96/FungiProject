<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-03 03:25:57
         compiled from "smarty\views\addCharacteristic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1892357239f9f05d788-18877876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd51e7fc1c02919de2e3b1cc6f10fa6ae531772f1' => 
    array (
      0 => 'smarty\\views\\addCharacteristic.tpl',
      1 => 1462238745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1892357239f9f05d788-18877876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57239f9f0c2ec1_80695622',
  'variables' => 
  array (
    'charShapeID' => 0,
    'charShapeName' => 0,
    'shapeArray' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57239f9f0c2ec1_80695622')) {function content_57239f9f0c2ec1_80695622($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--Add Characteristic-->
    <form action="addCharacteristic.php" method="post" id="addCharacteristic">
        <h3>Add Characteristic:</h3><br>
        Shape Association:
        <select name="shapeID" class="form-control">
            <?php if (isset($_smarty_tpl->tpl_vars['charShapeID']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['charShapeID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['charShapeName']->value;?>
</option><?php }?>
            <?php if (!isset($_smarty_tpl->tpl_vars['charShapeID']->value)) {?>
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

        <?php if (!isset($_smarty_tpl->tpl_vars['charShapeID']->value)) {?>
            <input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectCharShape">
        <?php }?>

        Name:
        <input type="text" class="form-control" name="newCharName"><br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addChar">
    </form>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
