<?php /* Smarty version Smarty-3.1.21, created on 2022-07-26 00:11:40
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/views/setup_wizard/components/widget_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90417605262df070c091496-39981366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5419597e31e52df693f2ef4f03684dbb79e3030' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/views/setup_wizard/components/widget_content.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '90417605262df070c091496-39981366',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62df070c0e87d8_03414963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62df070c0e87d8_03414963')) {function content_62df070c0e87d8_03414963($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.store_setup_wizard_short','sw.marketplace_setup_wizard'));
?>
<div class="hidden">
    <div class="setup-wizard-panel no-js">
        <a class="handle open cm-ajax" id="opener_sw_wizard_opener" data-ca-target-id="sw_wizard_container" data-ca-event-name="setupwizard" href="<?php echo htmlspecialchars(fn_url("setup_wizard.manage"), ENT_QUOTES, 'UTF-8');?>
">
            <span class="mobile-visible">
                <?php echo $_smarty_tpl->__("sw.store_setup_wizard_short");?>

            </span>
            <span class="mobile-hidden">
                <?php echo $_smarty_tpl->__("sw.marketplace_setup_wizard");?>

            </span>
        </a>

        <a class="handle close" id="sw_wizard_closer" href="#"></a>
        <div class="setup-wizard-content" id="sw_wizard_container"><!--sw_wizard_container--></div>
    </div>
</div>

<?php }} ?>
