<?php /* Smarty version Smarty-3.1.21, created on 2022-07-30 22:42:04
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/views/companies/components/picker/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197632309962e5898c755827-93029261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ee29260f63889635676331a7e4cb1b15b50c5f5' => 
    array (
      0 => '/home/dinar/public_html/site.devel/design/backend/templates/views/companies/components/picker/item.tpl',
      1 => 1643359537,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '197632309962e5898c755827-93029261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62e5898c7599f7_37006412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62e5898c7599f7_37006412')) {function content_62e5898c7599f7_37006412($_smarty_tpl) {?><div class="object-picker__companies-main">
    <div class="object-picker__companies-name">
        <div class="object-picker__companies-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 <span>${data.name}</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }} ?>
