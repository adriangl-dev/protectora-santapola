<?php /* Smarty version Smarty-3.1.19, created on 2021-01-20 11:54:06
         compiled from "/var/www/protectorasantapola/public_html/themes/pos_petsyshop/modules/posstaticfooter/block_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16835756260080bce5654a0-31708945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd88f1308e73042a84cf445382c23893542329ca0' => 
    array (
      0 => '/var/www/protectorasantapola/public_html/themes/pos_petsyshop/modules/posstaticfooter/block_footer.tpl',
      1 => 1556915561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16835756260080bce5654a0-31708945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'staticblocks' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60080bce5ad228_08752107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60080bce5ad228_08752107')) {function content_60080bce5ad228_08752107($_smarty_tpl) {?><div class="footer-static row-fluid">
	<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['staticblocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['block']->value['active']==1) {?>
			<p class ="title_block"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
<?php $_tmp6=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp6),$_smarty_tpl);?>
 </p>
		      
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

		<?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module']==1) {?>
		      <?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

		 <?php }?>
	<?php } ?>
</div>

<?php }} ?>
