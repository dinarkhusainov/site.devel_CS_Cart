<?php /* Smarty version Smarty-3.1.21, created on 2022-07-17 20:21:03
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/profile_menu_extra_item.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95361005262d444ffde0bc8-08603698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a389a0ec9b652af0e3ec01a6842cc2fd0c15e6d7' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/profile_menu_extra_item.pre.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '95361005262d444ffde0bc8-08603698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d444ffe08bb1_66413839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d444ffe08bb1_66413839')) {function content_62d444ffe08bb1_66413839($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_panel_configurator.seller_info'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php if (fn_check_view_permissions("companies.update","GET")) {?>  
        <li><a href="<?php echo htmlspecialchars(fn_url("companies.update&company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_panel_configurator.seller_info");?>
</a></li>
    <?php }?>
<?php }?><?php }} ?>
