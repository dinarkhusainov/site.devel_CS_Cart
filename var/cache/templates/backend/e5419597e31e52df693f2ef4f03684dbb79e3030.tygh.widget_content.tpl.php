<?php /* Smarty version Smarty-3.1.21, created on 2022-07-30 22:42:04
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/views/setup_wizard/components/widget_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192953775162e5898c950e75-50800281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '192953775162e5898c950e75-50800281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62e5898c9579e0_56720167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62e5898c9579e0_56720167')) {function content_62e5898c9579e0_56720167($_smarty_tpl) {?><?php
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
