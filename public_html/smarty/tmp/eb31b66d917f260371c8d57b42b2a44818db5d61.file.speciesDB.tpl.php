<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-09 05:53:46
         compiled from "smarty\templates\speciesDB.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5055573009ca719fe6-79133644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb31b66d917f260371c8d57b42b2a44818db5d61' => 
    array (
      0 => 'smarty\\templates\\speciesDB.tpl',
      1 => 1462588386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5055573009ca719fe6-79133644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'resultCount' => 0,
    'data' => 0,
    'newdata' => 0,
    'fungus' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_573009ca76bca6_45817624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573009ca76bca6_45817624')) {function content_573009ca76bca6_45817624($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_table')) include 'C:\\Users\\lenovo\\Desktop\\Fungi\\public_html\\smarty\\libs\\plugins\\function.html_table.php';
?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Species List"), 0);?>


<!--Fungi Team 2015-->
<link href="css/species.css" type=text/css rel="stylesheet" />

	<div class="container">
		<div class="page-header">

			<h1 id="species-list" class="speciesTitle"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 Species List</h1>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['resultCount']->value>0) {?>
		<!--<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value,'cols'=>5,'table_attr'=>"class=table"),$_smarty_tpl);?>
 -->
		<!--
		<table data-toggle="table" data-sort-name="sci_name"
			   data-sort-order="desc" class="table table-striped table-hover">
		<thead>
			<tr>
				<th data-field="sci_name" data-sortable="true">Scientific Name</th>
				<th data-field="common_name" data-sortable="true">Common Name</th>
				<th data-field="phylum" data-sortable="true">Phylum</th>
				<th data-field="order" data-sortable="true">Order</th>
				<th data-field="family" data-sortable="true">Family</th>
			</tr>
		</thead> -->
		
		<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Scientific Name</th>
				<th>Common Name</th>
				<th>Phylum</th>
				<th>Order</th>
				<th>Family</th>
			</tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['fungus'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fungus']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fungus']->key => $_smarty_tpl->tpl_vars['fungus']->value) {
$_smarty_tpl->tpl_vars['fungus']->_loop = true;
?>
			<tbody>
			<tr>
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fungus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
				<td>
				<?php echo $_smarty_tpl->tpl_vars['info']->value;?>

				</td>	
			<?php } ?>
			</tr>
			</tbody>
		<?php } ?>
		</table>
		<?php } else { ?> No Species Found
		<?php }?>

		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div>
</body><?php }} ?>
