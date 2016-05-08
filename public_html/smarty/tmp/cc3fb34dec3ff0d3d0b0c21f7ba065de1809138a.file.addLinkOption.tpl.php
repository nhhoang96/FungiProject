<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-07 04:40:28
         compiled from "smarty\views\addLinkOption.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14156572d559c067ab3-83291332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc3fb34dec3ff0d3d0b0c21f7ba065de1809138a' => 
    array (
      0 => 'smarty\\views\\addLinkOption.tpl',
      1 => 1462459842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14156572d559c067ab3-83291332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'speciesID' => 0,
    'commonName' => 0,
    'speciesArray' => 0,
    'key' => 0,
    'item' => 0,
    'charList' => 0,
    'char' => 0,
    'opt' => 0,
    'options' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572d559c0f2162_48575851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572d559c0f2162_48575851')) {function content_572d559c0f2162_48575851($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>

<div class="container">

<?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <form action="addLinkOption.php" method="post" id="linkOption">
        <h3>Link Characteristic Options to Species:</h3><br>
        Species Association:
        <select name="speciesID" class="form-control">
            <?php if (isset($_smarty_tpl->tpl_vars['speciesID']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['speciesID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['commonName']->value;?>
</option><?php }?>
            <?php if (!isset($_smarty_tpl->tpl_vars['speciesID']->value)) {?>
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
            <?php }?>
        </select><br>
        <?php if (!isset($_smarty_tpl->tpl_vars['speciesID']->value)) {?>
            <input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectSpecies">
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['speciesID']->value)) {?>
        Name:

        <table id="example">
            <thead>
            <tr>
                <th> Characteristic</th>
                <th> Option_Name</th>
            </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['char'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['char']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['charList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['char']->key => $_smarty_tpl->tpl_vars['char']->value) {
$_smarty_tpl->tpl_vars['char']->_loop = true;
?>
                <?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['char']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value) {
$_smarty_tpl->tpl_vars['opt']->_loop = true;
?>
                    <tr>
                        <td> <?php echo $_smarty_tpl->tpl_vars['char']->value['Name'];?>
</td>
                        <td>
                            <input type="checkbox" name="optionIDs[]" value="<?php echo $_smarty_tpl->tpl_vars['opt']->value['Opt_ID'];?>
"
                                    <?php if (isset($_smarty_tpl->tpl_vars['options']->value)) {
$_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
if ($_smarty_tpl->tpl_vars['opt']->value['Opt_ID']==$_smarty_tpl->tpl_vars['option']->value) {?>checked<?php }
}
}?>>
                            <?php echo $_smarty_tpl->tpl_vars['opt']->value['Opt_Name'];?>

                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
            </tbody>
        </table>
        <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>
            $(document).ready(function(){
                $("#example").DataTable();
            });
        <?php echo '</script'; ?>
>

        <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addLinks">
        <?php }?>
        <input type="submit" name="reset" value="Reset">
    </form>


    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
