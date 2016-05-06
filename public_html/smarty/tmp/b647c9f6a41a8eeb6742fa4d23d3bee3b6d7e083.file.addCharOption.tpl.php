<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-05 21:23:56
         compiled from "smarty\views\addCharOption.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27627572b9dccde1962-31076618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b647c9f6a41a8eeb6742fa4d23d3bee3b6d7e083' => 
    array (
      0 => 'smarty\\views\\addCharOption.tpl',
      1 => 1462459842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27627572b9dccde1962-31076618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'charID' => 0,
    'charArray' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572b9dcce3a879_45307182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572b9dcce3a879_45307182')) {function content_572b9dcce3a879_45307182($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--Add Characteristic Option-->
    <form action="addCharOption.php" method="post" id="addCharOption">
        <h3>Add Characteristic Option:</h3><br>
        Characteristic Association:
        <select name="charID" class="form-control">
            <?php if (!isset($_smarty_tpl->tpl_vars['charID']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['charArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

        Name:
        <input type="text" class="form-control" name="newOptName"><br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addCharOpt">
        <input type="submit" name="reset" value="Reset">
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
