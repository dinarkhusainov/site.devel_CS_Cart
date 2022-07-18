<?php /* Smarty version Smarty-3.1.21, created on 2022-07-18 16:45:45
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/common/last_viewed_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58433195962d56409e1e784-21252045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba80bdef70c38936a4175df73aa20e6c4c632819' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/common/last_viewed_items.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '58433195962d56409e1e784-21252045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_last_viewed_items' => 0,
    'breadcrumbs' => 0,
    'bc' => 0,
    'last_edited_items' => 0,
    'lnk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d56409e5e148_79995340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d56409e5e148_79995340')) {function content_62d56409e5e148_79995340($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_modifier_sizeof')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/modifier.sizeof.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
?>
<?php $_smarty_tpl->tpl_vars['show_last_viewed_items'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_last_viewed_items']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<div class="btn-group" id="last_edited_items">
    <a class="btn cm-back-link"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-arrow-left"),$_smarty_tpl);?>
</a>
    <?php if ($_smarty_tpl->tpl_vars['show_last_viewed_items']->value) {?>
        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
        <ul class="dropdown-menu">
        <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['breadcrumbs']->value)>=1) {?>
            <?php  $_smarty_tpl->tpl_vars["bc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bc"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bc"]->key => $_smarty_tpl->tpl_vars["bc"]->value) {
$_smarty_tpl->tpl_vars["bc"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["bc"]->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['bc']->value['link']) {?>
                    <li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['bc']->value['link']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bc']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <?php } else { ?>
                    <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bc']->value['title'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
            <?php } ?>
            <li class="divider"></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['last_edited_items']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['lnk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lnk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_edited_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lnk']->key => $_smarty_tpl->tpl_vars['lnk']->value) {
$_smarty_tpl->tpl_vars['lnk']->_loop = true;
?>
                <li><a <?php if ($_smarty_tpl->tpl_vars['lnk']->value['icon']) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lnk']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['lnk']->value['url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['lnk']->value['name']), ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['lnk']->value['name']),40);?>
</a></li>
            <?php } ?>
        <?php } else { ?>
            <li><a><?php echo $_smarty_tpl->__("no_items");?>
</a></li>
        <?php }?>
        </ul>
    <?php }?>
<!--last_edited_items--></div>
<?php }} ?>
