<?php /* Smarty version Smarty-3.1.19, created on 2019-05-03 21:37:39
         compiled from "/var/www/protectorasantapola/themes/pos_petsyshop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:781598275ccc98837c5112-97998810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1760fc779a7e8e23047199a03b49f11002fdf72f' => 
    array (
      0 => '/var/www/protectorasantapola/themes/pos_petsyshop/footer.tpl',
      1 => 1550000748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '781598275ccc98837c5112-97998810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'page_name' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ccc98838004e1_39575857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccc98838004e1_39575857')) {function content_5ccc98838004e1_39575857($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
				</div>
<!-- Right -->
							<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='category'||$_smarty_tpl->tpl_vars['page_name']->value=='product'||$_smarty_tpl->tpl_vars['page_name']->value=='contact'||$_smarty_tpl->tpl_vars['page_name']->value=='my-account'||$_smarty_tpl->tpl_vars['page_name']->value=='address'||$_smarty_tpl->tpl_vars['page_name']->value=='addresses'||$_smarty_tpl->tpl_vars['page_name']->value=='history'||$_smarty_tpl->tpl_vars['page_name']->value=='order-slip'||$_smarty_tpl->tpl_vars['page_name']->value=='identity'||$_smarty_tpl->tpl_vars['page_name']->value=='module-cheque-payment'||$_smarty_tpl->tpl_vars['page_name']->value=='order-confirmation'||$_smarty_tpl->tpl_vars['page_name']->value=='search'||$_smarty_tpl->tpl_vars['page_name']->value=='prices-drop'||$_smarty_tpl->tpl_vars['page_name']->value=='cms'||$_smarty_tpl->tpl_vars['page_name']->value=='sitemap'||$_smarty_tpl->tpl_vars['page_name']->value=='stores'||$_smarty_tpl->tpl_vars['page_name']->value=='products-comparison') {?>
							    <div id="right_column" class="col-right span3">
							        <?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

							    </div>
								
							<?php }?>
			
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- Footer -->
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"brandSlider"),$_smarty_tpl);?>

			<div id="footer">
				<div class="pos-footer-top">
					<div class="container">
						<div class="container-inner">
							<div class="pos-footer-static">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter1"),$_smarty_tpl);?>

							</div>	
						</div>
					</div>
				</div>
				<div class="pos-footer-center">
					<div class="container">
						<div class="container-inner">
							<div class="pos-footer">
								<div class="row-fluid">
									<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

								</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="pos-footer-bottom">
					<div class="container">
						<div class="container-inner">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter2"),$_smarty_tpl);?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
	<div id="scrollTop">
		<a href="#top"></a>
	</div>
	</body>
</html>
<?php }} ?>
