<?php /* Smarty version Smarty-3.1.21, created on 2022-07-26 00:11:39
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/addons/product_reviews/hooks/index/actions.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203326564262df070b414986-04835646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651362e8241509f723ebc410ce2023090468f28a' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/addons/product_reviews/hooks/index/actions.pre.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '203326564262df070b414986-04835646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62df070b432a87_51957907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62df070b432a87_51957907')) {function content_62df070b432a87_51957907($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/modifier.enum.php';
?>


<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']==='reviews'&&($_smarty_tpl->tpl_vars['runtime']->value['mode']==='manage'&&$_smarty_tpl->tpl_vars['addons']->value['product_reviews']['split_reviews_by_storefronts']!==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['runtime']->value['mode']==='update')) {?>
    <?php $_smarty_tpl->tpl_vars['select_storefront'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['select_storefront'] = clone $_smarty_tpl->tpl_vars['select_storefront'];?>
<?php }?>
<?php }} ?>
