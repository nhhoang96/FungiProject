<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-09 05:49:49
         compiled from "smarty\templates\addAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20252572f9e37ed1bd0-41305120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67446e4e1605d6224c65af2642c9b148e7c7d802' => 
    array (
      0 => 'smarty\\templates\\addAdmin.tpl',
      1 => 1462764653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20252572f9e37ed1bd0-41305120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572f9e37f09b49_14083881',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572f9e37f09b49_14083881')) {function content_572f9e37f09b49_14083881($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--Add new admin-->
    <form action="addAdmin.php" method="post" id="newAdmin">
        <h3>New Admin:</h3>
            Email:
            <input type="text" name="newAdmin" class="form-control"><br>
            <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addAdmin">
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>


<?php }} ?>
