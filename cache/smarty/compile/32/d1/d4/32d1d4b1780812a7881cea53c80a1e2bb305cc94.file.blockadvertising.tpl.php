<?php /* Smarty version Smarty-3.1.19, created on 2019-05-03 21:37:39
         compiled from "/var/www/protectorasantapola/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4466590405ccc9883480c29-34712762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32d1d4b1780812a7881cea53c80a1e2bb305cc94' => 
    array (
      0 => '/var/www/protectorasantapola/modules/blockadvertising/blockadvertising.tpl',
      1 => 1550000744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4466590405ccc9883480c29-34712762',
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
  'unifunc' => 'content_5ccc9883489315_91946320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccc9883489315_91946320')) {function content_5ccc9883489315_91946320($_smarty_tpl) {?>

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
