<?php /* Smarty version Smarty-3.1.21, created on 2022-07-30 21:45:29
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124224634962e57c49d072b5-36684148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '124224634962e57c49d072b5-36684148',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62e57c49d0c322_82712724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62e57c49d0c322_82712724')) {function content_62e57c49d0c322_82712724($_smarty_tpl) {?><?php
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
