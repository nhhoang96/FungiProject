<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-09 06:43:13
         compiled from "smarty\templates\glossary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26616572fb048429bc3-06442169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c72a0d4b9a3542cb1ce929337f4341ff0c7bf55' => 
    array (
      0 => 'smarty\\templates\\glossary.tpl',
      1 => 1462768991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26616572fb048429bc3-06442169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572fb04847e8e8_93974022',
  'variables' => 
  array (
    'terms' => 0,
    'term' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572fb04847e8e8_93974022')) {function content_572fb04847e8e8_93974022($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Glossary",'pageName'=>"glossary"), 0);?>


<body>

<div class="container">
    <div class="page-header">
        <h1 class="glossarytitle">Glossary</h1>
    </div>

    <p>As with any specialized area of study,
        mycology employs specialized words to convey
        specific meanings. While highly technical language
        is minimized in the keys, the user should understand
        the specialized terms that are used. Taking the time
        to do this will greatly facilitate the use of the keys
        and understanding of the species descriptions.
        The specialized terms found in the keys are defined here and,
        in cases where a picture is worth a thousand words,
        the term is illustrated as well.
    </p><hr>
    <table class="table table-striped">

        <thead class="thead-default">
            <tr class="row">
                <th class="col-md-3">Term</th>
                <th class="col-md-9">Definition</th>
            <tr>
        </thead>

        <tbody>
            <?php  $_smarty_tpl->tpl_vars['term'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['term']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['terms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['term']->key => $_smarty_tpl->tpl_vars['term']->value) {
$_smarty_tpl->tpl_vars['term']->_loop = true;
?>
                <tr class="row">
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['term']->value['Term'];?>
</strong></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['term']->value['Def'];?>
<br>

                        <table class="row">
                            <tr class="col-md-4">
                                    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['term']->value['Images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                                        <?php if (!is_null($_smarty_tpl->tpl_vars['image']->value['Image_Name'])&&!empty($_smarty_tpl->tpl_vars['image']->value['Image_Name'])) {?>
                                            <th class="col-md-12 multiple-images">
                                                <img src="img/<?php echo $_smarty_tpl->tpl_vars['image']->value['Image_Name'];?>
" class="glossarypic"><br>
                                                <?php echo $_smarty_tpl->tpl_vars['image']->value['Caption'];?>

                                            </th>
                                        <?php }?>
                                    <?php } ?>
                            </tr>
                        </table>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
<?php }} ?>
