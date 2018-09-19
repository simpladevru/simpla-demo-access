<?php /* Smarty version Smarty-3.1.18, created on 2018-09-19 13:22:53
         compiled from "/Users/davinci/Server/www/simpla/simpla-demo-access/design/default/html/cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:650356825ba2237d9dce07-77148328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67ed4839e11f65385f4c41ba3e8a78677f385501' => 
    array (
      0 => '/Users/davinci/Server/www/simpla/simpla-demo-access/design/default/html/cart_informer.tpl',
      1 => 1492708202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '650356825ba2237d9dce07-77148328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ba2237d9f5a22_13987613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba2237d9f5a22_13987613')) {function content_5ba2237d9f5a22_13987613($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>
	В <a href="./cart/">корзине</a>
	<?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['cart']->value->total_products,'товар','товаров','товара');?>

	на <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->total_price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

<?php } else { ?>
	Корзина пуста
<?php }?>
<?php }} ?>
