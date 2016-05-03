<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-03 03:16:29
         compiled from "smarty\views\adminNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96125727e8dc273229-92202946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd81ed9bd473125ba77c52b9c29f0bc6a994e6536' => 
    array (
      0 => 'smarty\\views\\adminNav.tpl',
      1 => 1462238147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96125727e8dc273229-92202946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5727e8dc277ef2_92078929',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5727e8dc277ef2_92078929')) {function content_5727e8dc277ef2_92078929($_smarty_tpl) {?><h2>Admin Dashboard</h2>
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
        </ul>
    </li>
    
    
    
    <li><a class="tab" href="logout.php">Logout</a></li>
</ul>
<?php }} ?>
