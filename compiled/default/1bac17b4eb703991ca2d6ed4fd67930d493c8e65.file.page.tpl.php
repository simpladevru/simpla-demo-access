<?php /* Smarty version Smarty-3.1.18, created on 2018-09-19 13:22:53
         compiled from "/Users/davinci/Server/www/simpla/simpla-demo-access/design/default/html/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3854751195ba2237d735b91-52712268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bac17b4eb703991ca2d6ed4fd67930d493c8e65' => 
    array (
      0 => '/Users/davinci/Server/www/simpla/simpla-demo-access/design/default/html/page.tpl',
      1 => 1492708202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3854751195ba2237d735b91-52712268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ba2237d801497_72090194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba2237d801497_72090194')) {function content_5ba2237d801497_72090194($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<!-- Заголовок страницы -->
<h1 data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</h1>

<!-- Тело страницы -->
<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>
<?php }} ?>
