<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-19 19:59:22
         compiled from "smarty\views\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3102756fcc9b137a8c1-54886213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27bb35c13ce46335f3383051d3a612d39da6ca88' => 
    array (
      0 => 'smarty\\views\\admin.tpl',
      1 => 1461088723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3102756fcc9b137a8c1-54886213',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56fcc9b13c3067_32066125',
  'variables' => 
  array (
    'adminArray' => 0,
    'key' => 0,
    'item' => 0,
    'charShapeID' => 0,
    'charShapeName' => 0,
    'shapeArray' => 0,
    'charID' => 0,
    'charArray' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fcc9b13c3067_32066125')) {function content_56fcc9b13c3067_32066125($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


<div class="container">
    
    <h2>Admin Dashboard</h2>
    <hr>

    <ul class="nav nav-pills admin-nav adminNavBar">
            <li><a class="tab" href="admin.php">Edit Admin</a></li>
            <li><a class="tab" href="addShape.php">Edit Shape</a></li>
            <li><a class="tab" href="addSpecies.php">Edit Species</a></li>
            <li><a class="tab" href="logout.php">Logout</a></li>
    </ul>

    <div class="col-lg-12 form-group dashboard" id="editAdmin">

        <form action="admin.php" method="post" id="newAdmin">
            <h3>New Admin:</h3>
            <div class="updates">
                Email:
                <input type="text" name="newAdmin" class="form-control"><br>
                
                <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addAdmin">
                <p>-eb1338 is now an admin.-</p><br>
            </div>
            <hr>
        </form>

        <form action="admin.php" method="post" id="deleteAdmin">
            <h3>Delete Admin:</h3>
            <div class="updates">
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
                <p>-sweaver is no longer an admin.-</p>
            </div>
        </form>
    </div>

        <form action="admin.php" method="post" id="addCharacteristic">
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

        <form action="admin.php" method="post" id="addCharOption">
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
        </form>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
