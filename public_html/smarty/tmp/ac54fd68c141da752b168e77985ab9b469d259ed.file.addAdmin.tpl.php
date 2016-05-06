<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-06 20:31:55
         compiled from "smarty\views\addAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15407572ce31b4e0b67-63607054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac54fd68c141da752b168e77985ab9b469d259ed' => 
    array (
      0 => 'smarty\\views\\addAdmin.tpl',
      1 => 1462302522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15407572ce31b4e0b67-63607054',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572ce31b522f46_78890901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572ce31b522f46_78890901')) {function content_572ce31b522f46_78890901($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


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
