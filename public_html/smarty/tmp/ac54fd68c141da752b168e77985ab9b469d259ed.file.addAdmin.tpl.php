<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-03 03:31:06
         compiled from "smarty\views\addAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268465727e5decb6878-27988077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac54fd68c141da752b168e77985ab9b469d259ed' => 
    array (
      0 => 'smarty\\views\\addAdmin.tpl',
      1 => 1462239063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268465727e5decb6878-27988077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5727e5ded728c3_43549372',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5727e5ded728c3_43549372')) {function content_5727e5ded728c3_43549372($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--Add new admin-->
    <form action="addAdmin.php" method="post" id="newAdmin">
        <h3>New Admin:</h3>
            Email:
            <input type="text" name="newAdmin" class="form-control"><br>
            <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addAdmin">
            <p>-eb1338 is now an admin.-</p><br>
    </form>

        
            
            
            
                
                
                    
                        
                    
                
            

            
                
            

            
            
            
        

        
            
            
            
                
                    
                        
                    
                
            

            
            
            
        
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>


<?php }} ?>
