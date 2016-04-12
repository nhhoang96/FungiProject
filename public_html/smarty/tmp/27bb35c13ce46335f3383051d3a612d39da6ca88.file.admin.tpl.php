<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-05 21:03:43
         compiled from "smarty\views\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3102756fcc9b137a8c1-54886213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27bb35c13ce46335f3383051d3a612d39da6ca88' => 
    array (
      0 => 'smarty\\views\\admin.tpl',
      1 => 1459882726,
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
    'editShapeID' => 0,
    'editShapeName' => 0,
    'shapeArray' => 0,
    'editShapeDescription' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fcc9b13c3067_32066125')) {function content_56fcc9b13c3067_32066125($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin"), 0);?>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>

<div class="container">
    
    <h2>Admin Dashboard</h2>
    <hr>
    <div class="col-sm-2 admin">
        <ul class="nav nav-tabs nav-stacked edits">
            <li><a onclick="admin()" class="tab"><h4>Edit Admin</h4><hr></a></li>
            <li><a onclick="test()"   class="tab"><h4>Edit Shape</h4><hr></a></li>
            <li><a onclick="species()"   class="tab"><h4>Edit Species</h4><hr></a></li>
            <li><a class="tab"><h4>Logout</h4><hr></a></li>

        </ul>
    </div>
    <div class="col-lg-10 form-group dashboard" id="editAdmin">
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
    <div class="col-lg-10 form-group dashboard" id="editShape">
        <form action="admin.php" method="post" id="newShape" enctype="multipart/form-data">
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

        <form action="admin.php" method="post" id="updateShape" enctype="multipart/form-data">

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
        <form action="admin.php" method="post" id="deleteShape">
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
    <div class="col-lg-10 dashboard" id="editSpecies">
        <form action="admin.php" method="post" id="newSpecies" enctype="multipart/form-data">
            <h3>New Species:</h3>
            <div class="updates">
                Scientific Name:
                <input type="text" name="commonName" class="form-control"><br>
                Common Name:
                <input type="text" class="form-control" name="nameDerivation"><br>
                Name Derivation:
                <input type="text" class="form-control" name="scientificName"><br>
                Phylum:
                <input type="text" class="form-control" name="phylum"><br>
                Order:
                <input type="text" class="form-control" name="order"><br>
                Family:
                <input type="text" class="form-control" name="family"><br>
                Comment:
                <input type="text" class="form-control" name="comments"><br>
                Wood Substrate:
                <input type="text" class="form-control" name="woodSubstrate"><br>
                Dimensions:
                <input type="text" class="form-control" name="dimensions"><br>
                Photo:
                <input type="file" name="myimage"><br>
                Shape Association:
                <select name="shape" class="form-control">
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
                
                <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addSpecies">
                <p>-New species has been created.-</p>
            </div>
            <hr>
        </form>
        <form id="updateSpecies">
            <h3>Update Species:</h3>
            <div class="updates">
                <select name="shape" class="form-control">
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
                <a class="btn btn-default btn-md add form-control">Select</a>
                Name:
                <input type="text" class="form-control"><br>
                Description:
                <input type="text" class="form-control"><br>
                <a class="btn btn-default btn-md add form-control">Update</a>
                <p>-Shape is now updated.-</p>
            </div>
            <hr>
        </form>
        <form id="deleteSpecies">
            <h3>Delete Species:</h3>
            <div class="updates">
                <select name="shapes" class="form-control">
                    <option>Club, Coral, Leafy</option>
                    <option>Poroid</option>
                    <option>Cup and Saucer</option>
                    <option>Gilled</option>
                    <option>Crust and Parchment</option>
                </select><br>
                <a class="btn btn-default btn-md add form-control">Delete</a>

                <p>-Shape is now deleted.-</p>
            </div>
        </form>
    </div>

    <?php echo '<script'; ?>
 src="js/admin.js"><?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
