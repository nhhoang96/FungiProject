<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-07 00:19:19
         compiled from "smarty\views\updateSpecies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2356457280e70108af8-25069815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baf8ca1a3b193f031e5bbe1581f3da6690cc5603' => 
    array (
      0 => 'smarty\\views\\updateSpecies.tpl',
      1 => 1462573157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2356457280e70108af8-25069815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57280e701804b2_48520847',
  'variables' => 
  array (
    'speciesID' => 0,
    'commonName' => 0,
    'speciesArray' => 0,
    'key' => 0,
    'item' => 0,
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
<?php if ($_valid && !is_callable('content_57280e701804b2_48520847')) {function content_57280e701804b2_48520847($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--Update species-->
    <form action="updateSpecies.php" method="post" id="updateSpecies" enctype="multipart/form-data">
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
        Images:<br>
        <div id="container1" class="container">
        <?php if (isset($_smarty_tpl->tpl_vars['photoName']->value)) {?>
            <img class="pic glossarypic" src="img/<?php echo $_smarty_tpl->tpl_vars['photoName']->value;?>
">
        <?php }?>

        </div>
        
        <div id="addingImages">
            <div class="uploadDiv">
                <input name="file[]" type="file" id="file"/>
            </div>
            Caption: <input type="text" name = "caption"/><br>
            </div>
        <input type="button" id="addDiv" value="Add More Photo"/><br><br>

        <input type="submit" class="btn btn-default btn-md add form-control" value="Update" name="updateSpecies">
        <input type="submit" name="reset" value="Reset">

        <hr>


    </form>


   <--- JQuery function to upload more images--->
    <?php echo '<script'; ?>
>
        var uploadDiv = "<div class='uploadDiv'><input name='file[]' type='file' id='file'/></div>Caption: <input type='text' name = 'caption'/><br>"

        $("#addDiv").click(function() {
            $("#addingImages").append(uploadDiv);
        });

    <?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
