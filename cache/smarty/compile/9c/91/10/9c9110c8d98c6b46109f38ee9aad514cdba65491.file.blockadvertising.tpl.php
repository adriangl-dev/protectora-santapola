<?php /* Smarty version Smarty-3.1.19, created on 2021-01-20 11:54:03
         compiled from "/var/www/protectorasantapola/public_html/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58808738260080bcb763a08-22534068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c9110c8d98c6b46109f38ee9aad514cdba65491' => 
    array (
      0 => '/var/www/protectorasantapola/public_html/modules/blockadvertising/blockadvertising.tpl',
      1 => 1556915561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58808738260080bcb763a08-22534068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60080bcb798002_21337454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60080bcb798002_21337454')) {function content_60080bcb798002_21337454($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>
