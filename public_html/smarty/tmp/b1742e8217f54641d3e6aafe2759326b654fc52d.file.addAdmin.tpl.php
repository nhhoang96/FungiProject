<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-08 23:31:53
         compiled from "smarty\templates\addAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27446572fb0498e6287-89337424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1742e8217f54641d3e6aafe2759326b654fc52d' => 
    array (
      0 => 'smarty\\templates\\addAdmin.tpl',
      1 => 1462743056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27446572fb0498e6287-89337424',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572fb049927488_45815970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572fb049927488_45815970')) {function content_572fb049927488_45815970($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


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
