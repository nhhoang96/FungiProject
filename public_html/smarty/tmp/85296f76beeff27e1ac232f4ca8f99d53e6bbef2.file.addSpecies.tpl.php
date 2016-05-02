<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-02 01:11:00
         compiled from "smarty\views\addSpecies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2865757226f933c4fb8-50046478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85296f76beeff27e1ac232f4ca8f99d53e6bbef2' => 
    array (
      0 => 'smarty\\views\\addSpecies.tpl',
      1 => 1462144259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2865757226f933c4fb8-50046478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57226f93492f53_54722748',
  'variables' => 
  array (
    'shapeArray' => 0,
    'key' => 0,
    'item' => 0,
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
    'photoName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57226f93492f53_54722748')) {function content_57226f93492f53_54722748($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



<div class="container">

    <h2>Admin Dashboard</h2>
    <hr>

    <!--Control Panel Navigation-->
    <ul class="nav nav-pills admin-nav adminNavBar">
        <li><a class="tab" href="admin.php">Edit Admin</a></li>
        <li><a class="tab" href="addShape.php">Edit Shape</a></li>
        <li><a class="active" href="addSpecies.php">Edit Species</a></li>
        <li><a class="tab" href="characteristic.php">Edit Characteristic</a></li>
        <li><a class="tab" href="logout.php">Logout</a></li>
    </ul>

    <!--Add new species-->
    <form action="addSpecies.php" method="post" id="newSpecies" enctype="multipart/form-data">
        <h3>New Species:</h3>

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
        Image:
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
        <hr>
    </form>

    <!--Update species-->
    <form action="addSpecies.php" method="post" id="updateSpecies" enctype="multipart/form-data">
        <h3>Update Species:</h3>
        <select name="speciesID" class="form-control">
            <?php if (isset($_smarty_tpl->tpl_vars['speciesID']->value)) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['speciesID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['commonName']->value;?>
</option>
            <?php }?>
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
        <input type="text" class="form-control" name="scientificName"
               <?php if (isset($_smarty_tpl->tpl_vars['scientificName']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['scientificName']->value;?>
"<?php }?>><br>
        Common Name:
        <input type="text" name="commonName" class="form-control"
               <?php if (isset($_smarty_tpl->tpl_vars['commonName']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['commonName']->value;?>
"<?php }?>><br>
        Name Derivation:
        <input type="text" class="form-control" name="nameDerivation"
               <?php if (isset($_smarty_tpl->tpl_vars['nameDerivation']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['nameDerivation']->value;?>
"<?php }?>><br>
        Phylum:
        <input type="text" class="form-control" name="phylum"
               <?php if (isset($_smarty_tpl->tpl_vars['phylum']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['phylum']->value;?>
"<?php }?>><br>
        Order:
        <input type="text" class="form-control" name="order"
               <?php if (isset($_smarty_tpl->tpl_vars['order']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
"<?php }?>><br>
        Family:
        <input type="text" class="form-control" name="family"
               <?php if (isset($_smarty_tpl->tpl_vars['family']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['family']->value;?>
"<?php }?>><br>
        Comment:
        <input type="text" class="form-control" name="comments"
               <?php if (isset($_smarty_tpl->tpl_vars['comments']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['comments']->value;?>
"<?php }?>><br>
        Wood Substrate:
        <input type="text" class="form-control" name="woodSubstrate"
               <?php if (isset($_smarty_tpl->tpl_vars['woodSubstrate']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['woodSubstrate']->value;?>
"<?php }?>><br>
        Dimensions:
        <input type="text" class="form-control" name="dimensions"
               <?php if (isset($_smarty_tpl->tpl_vars['dimensions']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value;?>
"<?php }?>><br>
        Update Image:<br>
        <?php if (isset($_smarty_tpl->tpl_vars['photoName']->value)) {?>
            <img class="pic glossarypic" src="img/<?php echo $_smarty_tpl->tpl_vars['photoName']->value;?>
">
        <?php }?>
        <input type="file" name="myimage"><br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Update" name="updateSpecies">
        <p>-Shape is now updated.-</p>
        <hr>
    </form>

    <!--Delete species-->
    <form action="addspecies.php" method="post" enctype="multipart/form-data" id="deleteSpecies">
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
        <p>-Shape is now deleted.-</p>
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php }} ?>
