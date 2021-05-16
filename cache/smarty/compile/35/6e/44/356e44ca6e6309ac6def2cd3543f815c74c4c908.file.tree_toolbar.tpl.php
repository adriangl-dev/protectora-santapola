<?php /* Smarty version Smarty-3.1.19, created on 2019-12-09 21:53:39
         compiled from "/var/www/protectorasantapola/public_html/paneldecontrol/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7420214705deeb4536f3ba5-95253643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '356e44ca6e6309ac6def2cd3543f815c74c4c908' => 
    array (
      0 => '/var/www/protectorasantapola/public_html/paneldecontrol/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1556915561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7420214705deeb4536f3ba5-95253643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5deeb4536fd982_75396719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5deeb4536fd982_75396719')) {function content_5deeb4536fd982_75396719($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
