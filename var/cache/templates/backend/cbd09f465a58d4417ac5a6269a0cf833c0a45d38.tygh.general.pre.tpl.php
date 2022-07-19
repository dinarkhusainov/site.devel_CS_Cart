<?php /* Smarty version Smarty-3.1.21, created on 2022-07-19 23:30:10
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/general.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48991612162d71452b80a20-48093976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd09f465a58d4417ac5a6269a0cf833c0a45d38' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/general.pre.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '48991612162d71452b80a20-48093976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'navigation_accordion' => 0,
    'show_company' => 0,
    'show_menu_descriptions' => 0,
    'show_addon_icon' => 0,
    'show_menu_caret' => 0,
    'enable_sticky_scroll' => 0,
    'enable_search_collapse' => 0,
    'enable_onclick_menu' => 0,
    'show_languages_in_header_menu' => 0,
    'show_currencies_in_header_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d71452ba4572_62790504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d71452ba4572_62790504')) {function content_62d71452ba4572_62790504($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars['navigation_accordion'] = new Smarty_variable($_smarty_tpl->tpl_vars['navigation_accordion']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['navigation_accordion'] = clone $_smarty_tpl->tpl_vars['navigation_accordion'];?>
    <?php $_smarty_tpl->tpl_vars['show_company'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_company']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_company'] = clone $_smarty_tpl->tpl_vars['show_company'];?>
    <?php $_smarty_tpl->tpl_vars['show_menu_descriptions'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_menu_descriptions']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_menu_descriptions'] = clone $_smarty_tpl->tpl_vars['show_menu_descriptions'];?>
    <?php $_smarty_tpl->tpl_vars['show_addon_icon'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_addon_icon']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_addon_icon'] = clone $_smarty_tpl->tpl_vars['show_addon_icon'];?>
    <?php $_smarty_tpl->tpl_vars['show_menu_caret'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_menu_caret']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_menu_caret'] = clone $_smarty_tpl->tpl_vars['show_menu_caret'];?>
    <?php $_smarty_tpl->tpl_vars['enable_sticky_scroll'] = new Smarty_variable($_smarty_tpl->tpl_vars['enable_sticky_scroll']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['enable_sticky_scroll'] = clone $_smarty_tpl->tpl_vars['enable_sticky_scroll'];?>
    <?php $_smarty_tpl->tpl_vars['enable_search_collapse'] = new Smarty_variable($_smarty_tpl->tpl_vars['enable_search_collapse']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['enable_search_collapse'] = clone $_smarty_tpl->tpl_vars['enable_search_collapse'];?>
    <?php $_smarty_tpl->tpl_vars['enable_onclick_menu'] = new Smarty_variable($_smarty_tpl->tpl_vars['enable_onclick_menu']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['enable_onclick_menu'] = clone $_smarty_tpl->tpl_vars['enable_onclick_menu'];?>
    <?php $_smarty_tpl->tpl_vars['show_languages_in_header_menu'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_languages_in_header_menu']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_languages_in_header_menu'] = clone $_smarty_tpl->tpl_vars['show_languages_in_header_menu'];?>
    <?php $_smarty_tpl->tpl_vars['show_currencies_in_header_menu'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_currencies_in_header_menu']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_currencies_in_header_menu'] = clone $_smarty_tpl->tpl_vars['show_currencies_in_header_menu'];?>
<?php }?>
<?php }} ?>
