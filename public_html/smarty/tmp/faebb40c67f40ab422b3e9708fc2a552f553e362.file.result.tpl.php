<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-06 01:14:21
         compiled from "smarty\views\result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272556f46928e03a34-13963118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faebb40c67f40ab422b3e9708fc2a552f553e362' => 
    array (
      0 => 'smarty\\views\\result.tpl',
      1 => 1459883148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272556f46928e03a34-13963118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f4692905b1a2_89114385',
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
    'photoName' => 0,
    'caption' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f4692905b1a2_89114385')) {function content_56f4692905b1a2_89114385($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sciName']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1), 0);?>

<!--Fungi Team 2015-->
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
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-4">
				<!--
				<img src="<?php echo $_smarty_tpl->tpl_vars['photoName']->value;?>
" alt="Chania">
				<h5><?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
</h5> -->
				<a href="<?php echo $_smarty_tpl->tpl_vars['photoName']->value;?>
" data-lightbox="<?php echo $_smarty_tpl->tpl_vars['photoName']->value;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['photoName']->value;?>
" class="thumbnail" alt="Chania"></a>
				
			</div>
		</div> <!-- end row -->
	</div>
		
</body><?php }} ?>
