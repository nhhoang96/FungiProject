<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-07 20:49:17
         compiled from "smarty\views\glossary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28975570407a55345c7-69651566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc3311385686f1bda4a8fa44c9dfb9eeee1aee9' => 
    array (
      0 => 'smarty\\views\\glossary.tpl',
      1 => 1460054955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28975570407a55345c7-69651566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_570407a5535f79_44379073',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570407a5535f79_44379073')) {function content_570407a5535f79_44379073($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Glossary",'pageName'=>"glossary"), 0);?>

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
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Term</th>
                <th>Image</th>
                <th>Definition</th>
            <tr>
        </thead>
        <tbody>
        <tr>
            <td>annulus</td>
            <td><img src="img/baseoftree.jpg" class="glossarypic"></td>
            <td>The ring on the stem of some mushrooms. formed by the separation
            of the partial veil form the margin of the cap.</td>
        </tr>
        </tbody>
    </table>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
<?php }} ?>
