<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-10 16:24:43
         compiled from "smarty\templates\updateSpecies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:647572f9e4284b323-65037815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35e6fa7fa1767c0985881084719a58a694f9acbb' => 
    array (
      0 => 'smarty\\templates\\updateSpecies.tpl',
      1 => 1462889512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '647572f9e4284b323-65037815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572f9e428cb7b2_61082361',
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
    'photos' => 0,
    'pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572f9e428cb7b2_61082361')) {function content_572f9e428cb7b2_61082361($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



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
        <?php if (isset($_smarty_tpl->tpl_vars['speciesID']->value)) {?>
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
        <textarea type="text" class="form-control" name="comments">
               <?php if (isset($_smarty_tpl->tpl_vars['comments']->value)) {
echo $_smarty_tpl->tpl_vars['comments']->value;
}?>
        </textarea><br>
        Wood Substrate:
        <input type="text" class="form-control" name="woodSubstrate"
               <?php if (isset($_smarty_tpl->tpl_vars['woodSubstrate']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['woodSubstrate']->value;?>
"<?php }?>><br>
        Dimensions:
        <input type="text" class="form-control" name="dimensions"
               <?php if (isset($_smarty_tpl->tpl_vars['dimensions']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value;?>
"<?php }?>><br>

        Image:<br>


        <?php if (isset($_smarty_tpl->tpl_vars['photos']->value)) {?>
            <?php if (!is_null($_smarty_tpl->tpl_vars['photos']->value)) {?>
                <?php if (!empty($_smarty_tpl->tpl_vars['photos']->value)) {?>
                    <div class="hs">
                        <div class="showcase">
                            <ul style="width:2000px;">
                                <table>
                                    <tr class="row">
                                        <?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value) {
$_smarty_tpl->tpl_vars['pic']->_loop = true;
?>
                                            <th class = "col-md-1 imageBox">
                                                <img src="img/<?php echo $_smarty_tpl->tpl_vars['pic']->value['Photo_Name'];?>
" width="250" height="200"><br>
                                                <input name="checkbox[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['pic']->value['Photo_ID'];?>
"/>
                                                <div class="col-md-12">
                                                    <?php echo $_smarty_tpl->tpl_vars['pic']->value['Caption'];?>

                                                </div>
                                            </th>
                                        <?php } ?>
                                    </tr>
                                </table>
                            </ul>
                        </div>
                    </div>
                <?php }?>
            <?php }?>
        <?php }?>

        <p>**Check boxes to delete image</p>


<div id="addingImages">
            <div class="uploadDiv">
                <input name="file[]" type="file" id="file"/>
            </div>
            Caption: <input type="text" class="form-control" name="caption[0]"/><br>
            </div>
        <input type="button" id="addDiv" class="btn btn-default form-control sub resetSpace" value="Add Another Photo">
        <input type="submit" class="btn btn-default btn-md add form-control resetSpace" value="Update" name="updateSpecies">
        <input type="submit" class="btn btn-danger btn-md add form-control" name="reset" value="Reset">
<?php }?>
    </form>
    <?php echo '<script'; ?>
>
        var count = 0;
    <?php echo '</script'; ?>
>

    <!--- JQuery function to upload more images--->
    <?php echo '<script'; ?>
>

        $("#addDiv").click(function() {
            count = count + 1;
            var uploadDiv = "<div class='uploadDiv'><input name='file[]' type='file' id='file'/></div>" +
                    "Caption: <input type='text' class='form-control'  name='caption["+count+"]'/><br>";
            $("#addingImages").append(uploadDiv);
        });

    <?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
