<?php /* Smarty version Smarty-3.1.21, created on 2022-07-19 23:30:11
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_communication/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60292950762d714531ea843-65262218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58d0b38d42ae0ae6bf2bd9b3505c5772c0b7f792' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_communication/hooks/index/scripts.post.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '60292950762d714531ea843-65262218',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d714531ec260_89062329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d714531ec260_89062329')) {function content_62d714531ec260_89062329($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/vendor_communication/backend/vendor_communication.js"),$_smarty_tpl);?>
<?php }} ?>
