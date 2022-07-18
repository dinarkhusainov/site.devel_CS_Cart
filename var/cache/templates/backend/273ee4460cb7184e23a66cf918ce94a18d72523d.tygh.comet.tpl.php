<?php /* Smarty version Smarty-3.1.21, created on 2022-07-18 16:45:46
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78010612062d5640ab22798-70751179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '273ee4460cb7184e23a66cf918ce94a18d72523d' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/common/comet.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '78010612062d5640ab22798-70751179',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d5640ab26604_93430276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d5640ab26604_93430276')) {function content_62d5640ab26604_93430276($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
