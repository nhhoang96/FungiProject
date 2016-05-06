<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-03 21:11:40
         compiled from "smarty\views\addSpecies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2865757226f933c4fb8-50046478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85296f76beeff27e1ac232f4ca8f99d53e6bbef2' => 
    array (
      0 => 'smarty\\views\\addSpecies.tpl',
      1 => 1462299922,
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57226f93492f53_54722748')) {function content_57226f93492f53_54722748($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



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
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>

<?php }} ?>
