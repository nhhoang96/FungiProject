<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-06 19:58:10
         compiled from "smarty\views\deleteSpecies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83565729213e5e5885-91522324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d1c53d163947480cff4ba104567c6bbe3cba032' => 
    array (
      0 => 'smarty\\views\\deleteSpecies.tpl',
      1 => 1462557444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83565729213e5e5885-91522324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5729213e62b603_28095733',
  'variables' => 
  array (
    'speciesArray' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5729213e62b603_28095733')) {function content_5729213e62b603_28095733($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--Delete species-->
    <form action="deleteSpecies.php" method="post" enctype="multipart/form-data" id="deleteSpecies">
        <h3>Delete Species:</h3>
        <select name="removedSpecies" class="form-control">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['speciesArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
            <?php } ?>
        </select><br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Delete" name="deleteSpecies">
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>
<?php }} ?>
