<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-03 22:28:16
         compiled from "smarty\views\addAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1743857280cedc6c512-73959529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5126ec9810b23dfde0adbebcd241b13c139ebc46' => 
    array (
      0 => 'smarty\\views\\addAdmin.tpl',
      1 => 1462304781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1743857280cedc6c512-73959529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57280cedcaf0c4_27047214',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57280cedcaf0c4_27047214')) {function content_57280cedcaf0c4_27047214($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


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
