<?php /* Smarty version Smarty-3.1.19, created on 2019-03-09 23:52:00
         compiled from "/var/www/protectorasantapola/themes/pos_petsyshop/contact-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19283820945c844390a049c2-73459311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0d02699b0499d7974508b5a4c1484db7beb20d2' => 
    array (
      0 => '/var/www/protectorasantapola/themes/pos_petsyshop/contact-form.tpl',
      1 => 1552171915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19283820945c844390a049c2-73459311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customerThread' => 0,
    'confirmation' => 0,
    'base_dir' => 0,
    'img_dir' => 0,
    'alreadySent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c844390a35ac2_92263971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c844390a35ac2_92263971')) {function content_5c844390a35ac2_92263971($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-title"><?php echo smartyTranslate(array('s'=>'Customer service'),$_smarty_tpl);?>
 - <?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value)&&$_smarty_tpl->tpl_vars['customerThread']->value) {?><?php echo smartyTranslate(array('s'=>'Your reply'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Contact us'),$_smarty_tpl);?>
<?php }?></h1>

<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
	<p><?php echo smartyTranslate(array('s'=>'Your message has been successfully sent to our team.'),$_smarty_tpl);?>
</p>
	<ul class="footer_links">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
"><img class="icon" alt="" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/home.gif"/></a><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>
	</ul>
<?php } elseif (isset($_smarty_tpl->tpl_vars['alreadySent']->value)) {?>
	<p><?php echo smartyTranslate(array('s'=>'Your message has already been sent.'),$_smarty_tpl);?>
</p>
	<ul class="footer_links">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
"><img class="icon" alt="" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/home.gif"/></a><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>
	</ul>
<?php } else { ?>
	<p class="bold"><?php echo smartyTranslate(array('s'=>'For questions about an order or for more information about our products'),$_smarty_tpl);?>
.</p>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<?php }?>
<?php }} ?>
