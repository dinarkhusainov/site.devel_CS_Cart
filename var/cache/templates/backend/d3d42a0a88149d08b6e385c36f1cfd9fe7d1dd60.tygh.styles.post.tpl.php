<?php /* Smarty version Smarty-3.1.21, created on 2022-07-18 16:45:44
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6643814862d56408433b84-70191548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3d42a0a88149d08b6e385c36f1cfd9fe7d1dd60' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6643814862d56408433b84-70191548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_locator_shipping' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d5640843eb88_70423417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d5640843eb88_70423417')) {function content_62d5640843eb88_70423417($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/function.style.php';
?><?php if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value&&$_smarty_tpl->tpl_vars['shipping']->value['company_id']==0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>
