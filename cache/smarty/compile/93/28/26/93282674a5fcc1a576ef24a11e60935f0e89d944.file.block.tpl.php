<?php /* Smarty version Smarty-3.1.19, created on 2019-05-03 21:24:32
         compiled from "/var/www/protectorasantapola/themes/pos_petsyshop/modules/posstaticblocks/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10020513475ccc95703475e4-05035417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93282674a5fcc1a576ef24a11e60935f0e89d944' => 
    array (
      0 => '/var/www/protectorasantapola/themes/pos_petsyshop/modules/posstaticblocks/block.tpl',
      1 => 1550000748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10020513475ccc95703475e4-05035417',
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
  'unifunc' => 'content_5ccc9570366ab8_06196685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccc9570366ab8_06196685')) {function content_5ccc9570366ab8_06196685($_smarty_tpl) {?>
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
