<?php /* Smarty version Smarty-3.1.21, created on 2022-07-18 16:45:46
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29449451762d5640a292de9-59842504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20879395547f964d28045dc1440699d7b0bd10ad' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '29449451762d5640a292de9-59842504',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d5640a29e341_94315884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d5640a29e341_94315884')) {function content_62d5640a29e341_94315884($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/function.include_ext.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center" href="#">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign help-center__show-help-center--icon"),$_smarty_tpl);?>

        </a>
    </div>
<?php }?>
<?php }} ?>
