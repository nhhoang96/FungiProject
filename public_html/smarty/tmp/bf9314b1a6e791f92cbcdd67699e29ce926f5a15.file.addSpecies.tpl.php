<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-07 04:44:19
         compiled from "smarty\templates\addSpecies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22735572d568315d9a7-24392860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf9314b1a6e791f92cbcdd67699e29ce926f5a15' => 
    array (
      0 => 'smarty\\templates\\addSpecies.tpl',
      1 => 1462308484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22735572d568315d9a7-24392860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shapeArray' => 0,
    'key' => 0,
    'item' => 0,
    'photoName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572d56831b59a9_01822826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572d56831b59a9_01822826')) {function content_572d56831b59a9_01822826($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

        Add Image:<br>
        <?php if (isset($_smarty_tpl->tpl_vars['photoName']->value)) {?>
            <img class="pic glossarypic" src="img/<?php echo $_smarty_tpl->tpl_vars['photoName']->value;?>
">
        <?php }?>
        
        <div id="addingImages">
            <div class="uploadDiv">
                <input name="file[]" type="file" id="file"/>
            </div>
            Caption: <input type="text" name = "caption"/><br>
        </div>
        <input type="button" id="addDiv" value="Add More Photo"/>

        <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addSpecies">
    </form>

    <?php echo '<script'; ?>
>
        var uploadDiv = "<div class='uploadDiv'><input name='file[]' type='file' id='file'/></div>Caption: <input type='text' name = 'caption'/><br>"

        $("#addDiv").click(function() {
            $("#addingImages").append(uploadDiv);
        });

    <?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>

<?php }} ?>
