<?php /* Smarty version Smarty-3.1.21, created on 2022-07-26 00:11:40
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/addons/call_requests/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123898573962df070c4c3fb3-69757315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44a0a794262e1184826e080822ad4d9470982182' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/addons/call_requests/hooks/index/scripts.post.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '123898573962df070c4c3fb3-69757315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62df070c4ce349_87679221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62df070c4ce349_87679221')) {function content_62df070c4ce349_87679221($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/block.inline_script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/call_requests/index.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['call_requests']['phone_mask']) {?>
    Tygh.call_phone_mask = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['call_requests']['phone_mask'], ENT_QUOTES, 'UTF-8');?>
'
<?php }?>
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
