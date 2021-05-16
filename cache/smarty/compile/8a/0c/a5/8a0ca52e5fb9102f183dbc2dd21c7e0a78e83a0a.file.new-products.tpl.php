<?php /* Smarty version Smarty-3.1.19, created on 2019-05-01 15:52:58
         compiled from "/var/www/protectorasantapola/themes/pos_petsyshop/new-products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4330488105cc9a4ba16dec3-89615708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a0ca52e5fb9102f183dbc2dd21c7e0a78e83a0a' => 
    array (
      0 => '/var/www/protectorasantapola/themes/pos_petsyshop/new-products.tpl',
      1 => 1550000748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4330488105cc9a4ba16dec3-89615708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cc9a4ba1899d2_17755461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc9a4ba1899d2_17755461')) {function content_5cc9a4ba1899d2_17755461($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'New products'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-title"><?php echo smartyTranslate(array('s'=>'New products'),$_smarty_tpl);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
	<div class="content_sortPagiBar">
				<div class="sortPagiBar clearfix">
					<div class="mode-view visible-desktop"></div>
					<div class="product-compare">
						<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
					<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
			</div>
			
			<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

			
			<div class="content_sortPagiBar">
				<div class="sortPagiBar clearfix">
					<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

					<?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

				</div>
				
			</div>
	<?php } else { ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No new products.'),$_smarty_tpl);?>
</p>
<?php }?>
<?php }} ?>
