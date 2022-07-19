<?php /* Smarty version Smarty-3.1.21, created on 2022-07-19 23:30:10
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178381937762d714524df2f5-86902680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cb37a1e3f6ed52c18e9cc1ebba68038415a6c5f' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions.pre.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '178381937762d714524df2f5-86902680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'navigation_accordion' => 0,
    'show_last_viewed_items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d714524f7e68_01229484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d714524f7e68_01229484')) {function content_62d714524f7e68_01229484($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars['navigation_accordion'] = new Smarty_variable($_smarty_tpl->tpl_vars['navigation_accordion']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['navigation_accordion'] = clone $_smarty_tpl->tpl_vars['navigation_accordion'];?>
    <?php $_smarty_tpl->tpl_vars['show_last_viewed_items'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_last_viewed_items']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_last_viewed_items'] = clone $_smarty_tpl->tpl_vars['show_last_viewed_items'];?>
<?php }?>
<?php }} ?>
