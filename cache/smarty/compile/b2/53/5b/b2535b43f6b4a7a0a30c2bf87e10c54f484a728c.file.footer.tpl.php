<?php /* Smarty version Smarty-3.1.19, created on 2021-01-20 11:54:06
         compiled from "/var/www/protectorasantapola/public_html/themes/pos_petsyshop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8063375460080bce428413-19820537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2535b43f6b4a7a0a30c2bf87e10c54f484a728c' => 
    array (
      0 => '/var/www/protectorasantapola/public_html/themes/pos_petsyshop/footer.tpl',
      1 => 1556915561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8063375460080bce428413-19820537',
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
  'unifunc' => 'content_60080bce45d658_51225010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60080bce45d658_51225010')) {function content_60080bce45d658_51225010($_smarty_tpl) {?>

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
