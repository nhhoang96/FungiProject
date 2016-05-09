<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-06 20:14:56
         compiled from "smarty\templates\result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4850572cdc8919b979-29294628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faebb40c67f40ab422b3e9708fc2a552f553e362' => 
    array (
      0 => 'smarty\\templates\\result.tpl',
      1 => 1462558495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4850572cdc8919b979-29294628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572cdc8920a6d2_08677963',
  'variables' => 
  array (
    'sciName' => 0,
    'commonName' => 0,
    'nameDerivation' => 0,
    'phylum' => 0,
    'spOrder' => 0,
    'family' => 0,
    'comment' => 0,
    'woodSubstrate' => 0,
    'dimensions' => 0,
    'photos' => 0,
    'pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572cdc8920a6d2_08677963')) {function content_572cdc8920a6d2_08677963($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sciName']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1), 0);?>

<!--Fungi Team 2015-->
<link rel="stylesheet" type="text/css" href="result.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="jquery-1.4.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
		  $(document).ready(function(){
			$('.carousel').carousel();
		  });
<?php echo '</script'; ?>
>
<body>
	<div class="container">
		<div class="page-header">
			<h1 id="species-name"><?php echo $_smarty_tpl->tpl_vars['sciName']->value;?>
</h1>
		</div>
		<div class="row">
			<div class="col-lg-7">
					<p><strong>Common name:</strong> <?php echo $_smarty_tpl->tpl_vars['commonName']->value;?>
</p>
					<p><strong>Name Derivation:</strong> <?php echo $_smarty_tpl->tpl_vars['nameDerivation']->value;?>
</p>
					<p><strong>Phylum:</strong> <?php echo $_smarty_tpl->tpl_vars['phylum']->value;?>
</p>
					<p><strong>Order:</strong> <?php echo $_smarty_tpl->tpl_vars['spOrder']->value;?>
</p>
					<p><strong>Family:</strong> <?php echo $_smarty_tpl->tpl_vars['family']->value;?>
</p>
					<p><strong>Comment:</strong> <?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</p>
					<p><strong>Wood substrate:</strong> <?php echo $_smarty_tpl->tpl_vars['woodSubstrate']->value;?>
</p>
					<p><strong>Dimensions:</strong> <?php echo $_smarty_tpl->tpl_vars['dimensions']->value;?>
</p>

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


				
					
						
							 
							 
							 
							 
					
				

				
					
						
							 
							 
							 
							 
					
				


				
				
				

				
				
				
				
			</div>

		</div> <!-- end row -->
	</div>
		
</body><?php }} ?>
