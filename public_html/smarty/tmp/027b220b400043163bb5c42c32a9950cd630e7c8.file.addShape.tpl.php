<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-19 03:40:47
         compiled from "smarty\views\addShape.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129157156962574c41-26288091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '027b220b400043163bb5c42c32a9950cd630e7c8' => 
    array (
      0 => 'smarty\\views\\addShape.tpl',
      1 => 1461030046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129157156962574c41-26288091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_571569625d3fe5_14471434',
  'variables' => 
  array (
    'editShapeID' => 0,
    'editShapeName' => 0,
    'shapeArray' => 0,
    'key' => 0,
    'item' => 0,
    'editShapeDescription' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571569625d3fe5_14471434')) {function content_571569625d3fe5_14471434($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



<div class="container">

<h2>Admin Dashboard</h2>

<ul class="nav nav-pills admin-nav adminNavBar">
<li><a class="tab" href="admin.php">Edit Admin</a></li>
<li><a class="tab" href="addShape.php">Edit Shape</a></li>
<li><a class="tab" href="addSpecies.php">Edit Species</a></li>
<li><a class="tab" href="logout.php">Logout</a></li>

</ul>

<div class="col-lg-12 form-group dashboard" id="editShape">
<form action="addShape.php" method="post" id="newShape" enctype="multipart/form-data">
<h3>New Shape:</h3>
<div class="updates">
Name:
<input type="text" name="shapeName" class="form-control"><br>
Description:
<input type="text" name="description" class="form-control"><br>


Upload Image:
<input type="file" name="myimage"><br>
<input type="submit" name="addShape"  class="btn btn-default btn-md add form-control" value="Upload">
<p>-New shape has been created.-</p>
</div>
<hr>
</form>

<form action="addShape.php" method="post" id="updateShape" enctype="multipart/form-data">

<h3>Update Shape:</h3>
<div class="updates">
Shape Association:
<select name="shapeID" class="form-control">
<?php if (isset($_smarty_tpl->tpl_vars['editShapeID']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['editShapeID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['editShapeName']->value;?>
</option><?php }?>
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

<div class="updates">
Name:
<input type="text" class="form-control" name="updateShapeName" <?php if (isset($_smarty_tpl->tpl_vars['editShapeName']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['editShapeName']->value;?>
"<?php }?>><br>
Description:
<input type="text" class="form-control" name="updateShapeDescription" <?php if (isset($_smarty_tpl->tpl_vars['editShapeDescription']->value)) {?>
value="<?php echo $_smarty_tpl->tpl_vars['editShapeDescription']->value;?>
"<?php }?>><br>
Update Image:
<input type="file" name="myimage"><br>
<input type="submit" class="btn btn-default btn-md add form-control" value="Update" name="updateShape">
<p>-Shape is now updated.-</p>
</div>

</div>
<hr>
</form>
<form action="addShape.php" method="post" id="deleteShape">
<h3>Delete Shape:</h3>
<div class="updates">
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
</select><br>
<input type="submit" class="btn btn-default btn-md add form-control" value="Delete" name="deleteShape">

<p>-Shape is now deleted.-</p>
</div>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
