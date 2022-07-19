<?php /* Smarty version Smarty-3.1.21, created on 2022-07-19 23:30:08
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201757614262d71450db9753-03619176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73b4647e0aabb6e03487cd26ab8114f85ccafe84' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '201757614262d71450db9753-03619176',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d71450dbf7a9_36538305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d71450dbf7a9_36538305')) {function content_62d71450dbf7a9_36538305($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/function.style.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
