<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-05 20:52:37
         compiled from "smarty\views\addTemplate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2908257040975bfee50-90112288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '039314cb230bbe411d276733b7f7b3a6582f1436' => 
    array (
      0 => 'smarty\\views\\addTemplate.tpl',
      1 => 1459881803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2908257040975bfee50-90112288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'msg3' => 0,
    'shapeArray' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57040975c83b79_28896787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57040975c83b79_28896787')) {function content_57040975c83b79_28896787($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'active'=>"admin"), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
echo $_smarty_tpl->tpl_vars['msg']->value;
}?>
<?php if (isset($_smarty_tpl->tpl_vars['msg3']->value)) {
echo $_smarty_tpl->tpl_vars['msg3']->value;
}?>

<h1> Add Shape Form</h1>

<form action="addShape.php" method="post">
    Shape Name:
    <input type="text" name="shapeName"><br>
    Shape Description:
    <input type="text" name="description"><br>
    Photo:
    
    <input type="submit" class="btn" value="Submit" name="submit">
</form>

<h1>Add Species Form</h1>
<form action="addSpecies.php" method="post">
    Common Name:
    <input type="text" name="commonName"><br>
    Name derivation:
    <input type="text" name="nameDerivation"><br>
    Scientific Name:
    <input type="text" name="scientificName"><br>
    Phylum:
    <input type="text" name="phylum"><br>
    Order:
    <input type="text" name="order"><br>
    Family:
    <input type="text" name="family"><br>
    Comment:
    <input type="text" name="comments"><br>
    Wood substrate:
    <input type="text" name="woodSubstrate"><br>
    Dimensions:
    <input type="text" name="dimensions"><br>
    Shape Category:
    <select name="shape">
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
    </select><br>
    <input type="submit" class="btn" value="blue" name="submit">


</form>

</body>
</html><?php }} ?>
