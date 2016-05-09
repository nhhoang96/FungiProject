<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-09 05:12:59
         compiled from "smarty\templates\deleteShape.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110165730003b03e458-05987983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eccd9e69a285f3e106b45a760a607d0daca5ed7' => 
    array (
      0 => 'smarty\\templates\\deleteShape.tpl',
      1 => 1462304782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110165730003b03e458-05987983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shapeArray' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5730003b07eaa8_11643852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5730003b07eaa8_11643852')) {function content_5730003b07eaa8_11643852($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--Delete Shape-->
    <form action="deleteShape.php" method="post" id="deleteShape">
        <h3>Delete Shape:</h3>

        Shape Association:
        <select name="shapeID" class="form-control">
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
        </select>
        <br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Delete" name="deleteShape">
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
