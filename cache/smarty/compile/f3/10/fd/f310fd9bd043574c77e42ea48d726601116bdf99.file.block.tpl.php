<?php /* Smarty version Smarty-3.1.19, created on 2021-01-20 11:54:04
         compiled from "/var/www/protectorasantapola/public_html/themes/pos_petsyshop/modules/posstaticblocks/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29417740360080bcc0e9751-46945485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f310fd9bd043574c77e42ea48d726601116bdf99' => 
    array (
      0 => '/var/www/protectorasantapola/public_html/themes/pos_petsyshop/modules/posstaticblocks/block.tpl',
      1 => 1556915561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29417740360080bcc0e9751-46945485',
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
  'unifunc' => 'content_60080bcc10fb91_07661542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60080bcc10fb91_07661542')) {function content_60080bcc10fb91_07661542($_smarty_tpl) {?>
		<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['staticblocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['block']->value['active']==1) {?>
				<p class ="title_block"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp1),$_smarty_tpl);?>
 </p>
			      
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

			<?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module']==1) {?>
			      <?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

			 <?php }?>
		<?php } ?><?php }} ?>
