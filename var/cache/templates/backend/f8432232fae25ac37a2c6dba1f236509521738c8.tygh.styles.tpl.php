<?php /* Smarty version Smarty-3.1.21, created on 2022-07-17 20:21:00
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/common/styles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173884909762d444fc92c451-08279155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8432232fae25ac37a2c6dba1f236509521738c8' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/common/styles.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '173884909762d444fc92c451-08279155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_direction' => 0,
    'is_setup_wizard_panel_available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d444fc96edc1_40884824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d444fc96edc1_40884824')) {function content_62d444fc96edc1_40884824($_smarty_tpl) {?><?php if (!is_callable('smarty_block_styles')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/block.styles.php';
if (!is_callable('smarty_function_style')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_block_hook')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/block.hook.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('styles', array()); $_block_repeat=true; echo smarty_block_styles(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_style(array('src'=>"ui/jqueryui.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/select2/select2.min.css"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:styles")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="vendor") {?>
            <?php echo smarty_function_style(array('src'=>"config_vendor.less"),$_smarty_tpl);?>

        <?php }?>
        <?php echo smarty_function_style(array('src'=>"glyphs.css"),$_smarty_tpl);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/statuses/components/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>(defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null)), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['language_direction']->value=='rtl') {?>
            <?php echo smarty_function_style(array('src'=>"rtl.less"),$_smarty_tpl);?>

        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:styles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php echo smarty_function_style(array('src'=>"font-awesome.css"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['is_setup_wizard_panel_available']->value) {?>
        <?php echo smarty_function_style(array('src'=>"/js/lib/ladda-bootstrap/dist/ladda-themeless.css"),$_smarty_tpl);?>

    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>