<?php /* Smarty version Smarty-3.1.21, created on 2022-07-17 20:21:02
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/buttons/button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:427183462d444fe888314-87851834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a5c92c016c3d68dbe39b73955533078d012ac10' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/buttons/button.tpl',
      1 => 1643359538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '427183462d444fe888314-87851834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_role' => 0,
    'but_permission_data' => 0,
    'but_name' => 0,
    'but_href' => 0,
    'method' => 0,
    'r' => 0,
    'but_group' => 0,
    'but_type' => 0,
    'but_id' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
    'allow_href' => 0,
    'but_text' => 0,
    'tabindex' => 0,
    'but_external_click_id' => 0,
    'but_target_form' => 0,
    'but_target_id' => 0,
    'but_check_filter' => 0,
    'but_disabled' => 0,
    'but_confirm_text' => 0,
    'but_target' => 0,
    'title' => 0,
    'but_icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62d444feb59e81_27766188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62d444feb59e81_27766188')) {function content_62d444feb59e81_27766188($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/dinar/public_html/site.devel/app/functions/smarty_plugins/function.include_ext.php';
?><?php if ($_smarty_tpl->tpl_vars['but_role']->value=="text") {?>
    <?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable('', null, 0);?>
    <?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable("btn", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['but_permission_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars['r'] = new Smarty_variable($_smarty_tpl->tpl_vars['but_permission_data']->value, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['but_name']->value) {?>
    <?php $_smarty_tpl->tpl_vars['r'] = new Smarty_variable($_smarty_tpl->tpl_vars['but_name']->value, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['r'] = new Smarty_variable($_smarty_tpl->tpl_vars['but_href']->value, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["method"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['method']->value)===null||$tmp==='' ? "POST" : $tmp), null, 0);?>
<?php if (fn_check_view_permissions($_smarty_tpl->tpl_vars['r']->value,$_smarty_tpl->tpl_vars['method']->value)) {?>

<?php if ($_smarty_tpl->tpl_vars['but_group']->value) {?><div class="btn-group"><?php }?>

<?php if ($_smarty_tpl->tpl_vars['but_role']->value=="submit"||$_smarty_tpl->tpl_vars['but_role']->value=="button_main"||$_smarty_tpl->tpl_vars['but_type']->value||$_smarty_tpl->tpl_vars['but_role']->value=="big") {?> 
    <input <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
} else { ?> btn-primary<?php }?>" type="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_type']->value)===null||$tmp==='' ? "submit" : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>tabindex="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_check_filter']->value) {?> data-ca-check-filter="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_check_filter']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_disabled']->value) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_confirm_text']->value) {?>data-ca-confirm-text="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_confirm_text']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> />

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value&&$_smarty_tpl->tpl_vars['but_role']->value!="submit"&&$_smarty_tpl->tpl_vars['but_role']->value!="action"&&$_smarty_tpl->tpl_vars['but_role']->value!="submit-link"&&$_smarty_tpl->tpl_vars['but_role']->value!="advanced-search"&&$_smarty_tpl->tpl_vars['but_role']->value!="button"&&$_smarty_tpl->tpl_vars['but_role']->value!="submit-button"&&$_smarty_tpl->tpl_vars['but_role']->value!="button-icon") {?> 
    <a <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }
if ($_smarty_tpl->tpl_vars['but_target']->value) {?> target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['but_icon']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>
</a>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="action"||$_smarty_tpl->tpl_vars['but_role']->value=="advanced-search"||$_smarty_tpl->tpl_vars['but_role']->value=="submit-link") {?> 
    <a <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="btn<?php if ($_smarty_tpl->tpl_vars['but_role']->value=="submit-link") {?> btn-primary cm-submit<?php }
if ($_smarty_tpl->tpl_vars['but_meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['but_icon']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>
</a>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="submit-button") {?>
    <button type="submit" <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="btn btn-primary cm-submit<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>" form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['but_disabled']->value) {?>disabled="disabled"<?php }?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['but_icon']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>
</button>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="button") {?>
    <input <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="button" <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>tabindex="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> />

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="button-icon") {?>
    <button <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="button" <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>tabindex="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['but_icon']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>
</button>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value=="icon") {?> 
    <a <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>
</a>

<?php } elseif (!$_smarty_tpl->tpl_vars['but_role']->value||!$_smarty_tpl->tpl_vars['but_name']->value) {?> 
    <input <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>" type="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_type']->value)===null||$tmp==='' ? "submit" : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>tabindex="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_disabled']->value) {?>disabled="disabled"<?php }?>  />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['but_group']->value) {?></div><?php }?>
<?php }?>
<?php }} ?>
