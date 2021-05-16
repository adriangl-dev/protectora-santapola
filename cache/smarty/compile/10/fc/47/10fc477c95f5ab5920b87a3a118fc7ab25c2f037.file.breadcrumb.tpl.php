<?php /* Smarty version Smarty-3.1.19, created on 2020-09-10 17:38:20
         compiled from "/var/www/protectorasantapola/public_html/themes/pos_petsyshop/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13779481855f5a486c5cdda6-17769403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10fc477c95f5ab5920b87a3a118fc7ab25c2f037' => 
    array (
      0 => '/var/www/protectorasantapola/public_html/themes/pos_petsyshop/breadcrumb.tpl',
      1 => 1556915561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13779481855f5a486c5cdda6-17769403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'path' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f5a486c5e7215_37457986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5a486c5e7215_37457986')) {function content_5f5a486c5e7215_37457986($_smarty_tpl) {?>

<!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])) {?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div class="breadcrumb">
	<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a>
	<?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value) {?>
		<span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1) {?>style="display:none;"<?php }?>>
		</span>
		<?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')) {?>
			<span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['path']->value;?>

		<?php }?>
	<?php }?>
</div>
<!-- /Breadcrumb --><?php }} ?>
