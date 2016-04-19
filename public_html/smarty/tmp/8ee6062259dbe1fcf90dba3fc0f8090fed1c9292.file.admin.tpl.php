<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-18 23:42:28
         compiled from "smarty\views\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145756faef358e4023-78477155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ee6062259dbe1fcf90dba3fc0f8090fed1c9292' => 
    array (
      0 => 'smarty\\views\\admin.tpl',
      1 => 1461009244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145756faef358e4023-78477155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56faef36ba74d2_05705178',
  'variables' => 
  array (
    'adminArray' => 0,
    'key' => 0,
    'item' => 0,
    'editShapeID' => 0,
    'editShapeName' => 0,
    'shapeArray' => 0,
    'editShapeDescription' => 0,
    'charShapeID' => 0,
    'charShapeName' => 0,
    'charID' => 0,
    'charName' => 0,
    'charArray' => 0,
    'speciesID' => 0,
    'commonName' => 0,
    'speciesArray' => 0,
    'scientificName' => 0,
    'nameDerivation' => 0,
    'phylum' => 0,
    'order' => 0,
    'family' => 0,
    'comments' => 0,
    'woodSubstrate' => 0,
    'dimensions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56faef36ba74d2_05705178')) {function content_56faef36ba74d2_05705178($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>

<div class="container">
    
    <h2>Admin Dashboard</h2>
    <hr>

    
        
            
            
            
            
        
    
    


    <ul class="nav nav-pills admin-nav adminNavBar">
            <li><a class="tab" onclick="admin()">Edit Admin</a></li>
            <li><a class="tab" onclick="test()">Edit Shape</a></li>
            <li><a class="tab" onclick="species()">Edit Species</a></li>
            <li><a class="tab" href="#">Logout</a></li>


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
    <div class="col-lg-12 form-group dashboard" id="editShape">
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
                <?php if (isset($_smarty_tpl->tpl_vars['charID']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['charID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['charName']->value;?>
</option><?php }?>
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

            <?php if (!isset($_smarty_tpl->tpl_vars['charID']->value)) {?>
                <input type="submit" class="btn btn-default btn-md add form-control" value="Select" name="selectCharOpt">
            <?php }?>

            Name:
            <input type="text" class="form-control" name="newOptName"><br>
            <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addCharOpt">
        </form>
    </div>
    </div>
    <div class="col-lg-12 dashboard" id="editSpecies">
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
        <form action="admin.php" method="post" id="updateSpecies" enctype="multipart/form-data">
            <h3>Update Species:</h3>
            <div class="updates">
                <select name="editSpecies" class="form-control">
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
                Scientific Name:
                <input type="text" class="form-control" name="scientificName" <?php if (isset($_smarty_tpl->tpl_vars['scientificName']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['scientificName']->value;?>
"<?php }?>><br>
                Common Name:
                <input type="text" name="commonName" class="form-control" <?php if (isset($_smarty_tpl->tpl_vars['commonName']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['commonName']->value;?>
"<?php }?>><br>
                Name Derivation:
                <input type="text" class="form-control" name="nameDerivation" <?php if (isset($_smarty_tpl->tpl_vars['nameDerivation']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['nameDerivation']->value;?>
"<?php }?>><br>
                Phylum:
                <input type="text" class="form-control" name="phylum" <?php if (isset($_smarty_tpl->tpl_vars['phylum']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['phylum']->value;?>
"<?php }?>><br>
                Order:
                <input type="text" class="form-control" name="order" <?php if (isset($_smarty_tpl->tpl_vars['order']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
"<?php }?>><br>
                Family:
                <input type="text" class="form-control" name="family" <?php if (isset($_smarty_tpl->tpl_vars['family']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['family']->value;?>
"<?php }?>><br>
                Comment:
                <input type="text" class="form-control" name="comments" <?php if (isset($_smarty_tpl->tpl_vars['comments']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['comments']->value;?>
"<?php }?>><br>
                Wood Substrate:
                <input type="text" class="form-control" name="woodSubstrate" <?php if (isset($_smarty_tpl->tpl_vars['woodSubstrate']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['woodSubstrate']->value;?>
"<?php }?>><br>
                Dimensions:
                <input type="text" class="form-control" name="dimensions" <?php if (isset($_smarty_tpl->tpl_vars['dimensions']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value;?>
"<?php }?>><br>
                <input type="submit" class="btn btn-default btn-md add form-control" value="Update" name="updateSpecies">
                <p>-Shape is now updated.-</p>
            </div>
            <hr>
        </form>
        <form action="admin.php" method="post" enctype="multipart/form-data" id="deleteSpecies">
            <h3>Delete Species:</h3>
            <div class="updates">
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
