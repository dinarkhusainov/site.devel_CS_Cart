<?php /* Smarty version Smarty-3.1.21, created on 2022-07-26 00:11:39
         compiled from "/home/dinar/public_html/site.devel/design/backend/templates/views/companies/components/picker/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48943742662df070bcb9f26-98436881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '48943742662df070bcb9f26-98436881',
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
  'unifunc' => 'content_62df070bcbf531_14343566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62df070bcbf531_14343566')) {function content_62df070bcbf531_14343566($_smarty_tpl) {?><div class="object-picker__companies-main">
    <div class="object-picker__companies-name">
        <div class="object-picker__companies-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 <span>${data.name}</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }} ?>
