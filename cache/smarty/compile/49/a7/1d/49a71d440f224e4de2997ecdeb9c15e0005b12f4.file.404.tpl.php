<?php /* Smarty version Smarty-3.1.19, created on 2020-08-27 04:05:00
         compiled from "/var/www/protectorasantapola/public_html/themes/pos_petsyshop/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7339433755f4714ccb3cfd5-85980742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49a71d440f224e4de2997ecdeb9c15e0005b12f4' => 
    array (
      0 => '/var/www/protectorasantapola/public_html/themes/pos_petsyshop/404.tpl',
      1 => 1556915561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7339433755f4714ccb3cfd5-85980742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'base_dir' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f4714ccb4f6c5_99022139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f4714ccb4f6c5_99022139')) {function content_5f4714ccb4f6c5_99022139($_smarty_tpl) {?>
<div class="pagenotfound">
	<h1><?php echo smartyTranslate(array('s'=>'This page is not available'),$_smarty_tpl);?>
</h1>

	<p>
		<?php echo smartyTranslate(array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl);?>

	</p>

	<h3><?php echo smartyTranslate(array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl);?>
</h3>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'ISO-8859-1', true);?>
" method="post" class="std">
		<fieldset>
			<p>
				<label for="search"><?php echo smartyTranslate(array('s'=>'Search our product catalog:'),$_smarty_tpl);?>
</label>
				<input id="search_query" name="search_query" type="text" />
				<input type="submit" name="Submit" value="OK" class="button_small" />
			</p>
		</fieldset>
	</form>

	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/home.gif" alt="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
" class="icon" /> <?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></p>
</div><?php }} ?>
