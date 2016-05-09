<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-08 23:31:53
         compiled from "smarty\templates\adminNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2980572fb04995eb71-57780602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c66c1355a38cef2cdcf8db3ef045828486d5edc2' => 
    array (
      0 => 'smarty\\templates\\adminNav.tpl',
      1 => 1462743056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2980572fb04995eb71-57780602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572fb04996ef20_32501265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572fb04996ef20_32501265')) {function content_572fb04996ef20_32501265($_smarty_tpl) {?><h2>Admin Dashboard</h2>
<hr>

<!--Navigation-->
<ul class="nav nav-pills admin-nav adminNavBar">
    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="addAdmin.php">New Admin</a></li>
            <li><a href="deleteAdmin.php">Delete Admin</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Shape <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="addShape.php">New Shape</a></li>
            <li><a href="updateShape.php">Update Shape</a></li>
            <li><a href="deleteShape.php">Delete Shape</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Species <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="addSpecies.php">New Species</a></li>
            <li><a href="updateSpecies.php">Update Species</a></li>
            <li><a href="deleteSpecies.php">Delete Species</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Characteristic <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="addCharacteristic.php">New Characteristic</a></li>
            <li><a href="addCharOption.php">New Characteristic Option</a></li>
            <li><a href="addLinkOption.php">Link Characteristic Options</a></li>
        </ul>
    </li>
    
    
    
    <li><a class="tab" href="logout.php">Logout</a></li>
</ul>

<?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?><h3><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</h3><?php }?><?php }} ?>
