<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-03 20:22:55
         compiled from "smarty\views\deleteAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170405727eb51748ad0-58858673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9dbed400126025f6562e3e19d27b00fd63ea7cb' => 
    array (
      0 => 'smarty\\views\\deleteAdmin.tpl',
      1 => 1462299774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170405727eb51748ad0-58858673',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5727eb5178b6f1_80921896',
  'variables' => 
  array (
    'adminArray' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5727eb5178b6f1_80921896')) {function content_5727eb5178b6f1_80921896($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--Delete admin-->
    <form action="deleteAdmin.php" method="post" id="deleteAdmin">
        <h3>Delete Admin:</h3>
        Email:
        <select name="removeAdmin" class="form-control">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['adminArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
            <?php } ?>
        </select><br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Remove" name="deleteAdmin">
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
