<?php /* Smarty version Smarty-3.1.21, created on 2022-07-26 00:11:39
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions_wrapper.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140261268462df070b38cb21-74970034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d562af7f93dbf0eb112b9bd8dc8c9be6b5fe588' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions_wrapper.pre.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '140261268462df070b38cb21-74970034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'enable_sticky_scroll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62df070b3fd808_85599147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62df070b3fd808_85599147')) {function content_62df070b3fd808_85599147($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars['enable_sticky_scroll'] = new Smarty_variable($_smarty_tpl->tpl_vars['enable_sticky_scroll']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['enable_sticky_scroll'] = clone $_smarty_tpl->tpl_vars['enable_sticky_scroll'];?>
<?php }?>
<?php }} ?>
