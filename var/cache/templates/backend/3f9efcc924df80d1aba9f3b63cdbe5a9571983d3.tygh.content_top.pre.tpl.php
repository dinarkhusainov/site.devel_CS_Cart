<?php /* Smarty version Smarty-3.1.21, created on 2022-07-19 23:30:10
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_panel_configurator/hooks/index/content_top.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112774111462d7145273d908-65930684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f9efcc924df80d1aba9f3b63cdbe5a9571983d3' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_panel_configurator/hooks/index/content_top.pre.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '112774111462d7145273d908-65930684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'select_languages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d7145275f6d2_63216848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d7145275f6d2_63216848')) {function content_62d7145275f6d2_63216848($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars['select_languages'] = new Smarty_variable($_smarty_tpl->tpl_vars['select_languages']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['select_languages'] = clone $_smarty_tpl->tpl_vars['select_languages'];?>
<?php }?>
<?php }} ?>
