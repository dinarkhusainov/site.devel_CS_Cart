<?php /* Smarty version Smarty-3.1.21, created on 2022-07-17 20:21:00
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_data_premoderation/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91894208662d444fc9f6f10-99164254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9caa3ceb0ab2fb5cd39d9cd6e1f1dd54c2b93223' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/addons/vendor_data_premoderation/hooks/index/styles.post.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '91894208662d444fc9f6f10-99164254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d444fca09893_40229904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d444fca09893_40229904')) {function content_62d444fca09893_40229904($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/function.style.php';
?><?php echo smarty_function_style(array('src'=>"addons/vendor_data_premoderation/styles.less"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['addon']->value['addon']=="vendor_data_premoderation") {?>
    <?php echo smarty_function_style(array('src'=>"addons/vendor_data_premoderation/vendor_data_premoderation.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
