<?php /* Smarty version Smarty-3.1.21, created on 2022-07-17 20:21:02
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/buttons/save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147075498162d444fe873699-18650449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37b4027031b19eceee5b43d0fe2c0c5000ea565d' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/buttons/save.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '147075498162d444fe873699-18650449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d444fe882502_69387145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d444fe882502_69387145')) {function content_62d444fe882502_69387145($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>
<?php }} ?>