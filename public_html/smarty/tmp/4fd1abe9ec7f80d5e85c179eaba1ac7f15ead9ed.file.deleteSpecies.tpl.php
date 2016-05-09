<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-08 22:14:55
         compiled from "smarty\templates\deleteSpecies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20641572f9e3f49a727-25011174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fd1abe9ec7f80d5e85c179eaba1ac7f15ead9ed' => 
    array (
      0 => 'smarty\\templates\\deleteSpecies.tpl',
      1 => 1462557444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20641572f9e3f49a727-25011174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'speciesArray' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572f9e3f4dc1b6_02711207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572f9e3f4dc1b6_02711207')) {function content_572f9e3f4dc1b6_02711207($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



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
