<?php /* Smarty version Smarty-3.1.19, created on 2019-02-24 18:36:12
         compiled from "/var/www/protectorasantapola/paneldecontrol/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10463293925c72d60c1b7ca7-84414566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d8b80d0243f27fe6cf43486c577507c8ded4905' => 
    array (
      0 => '/var/www/protectorasantapola/paneldecontrol/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1550000747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10463293925c72d60c1b7ca7-84414566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c72d60c1bc5f3_45996990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c72d60c1bc5f3_45996990')) {function content_5c72d60c1bc5f3_45996990($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
