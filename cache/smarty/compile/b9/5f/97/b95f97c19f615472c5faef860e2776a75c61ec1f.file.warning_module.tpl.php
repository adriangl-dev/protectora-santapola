<?php /* Smarty version Smarty-3.1.19, created on 2019-03-11 12:20:16
         compiled from "/var/www/protectorasantapola/paneldecontrol/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3738226455c86447087f170-19623065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b95f97c19f615472c5faef860e2776a75c61ec1f' => 
    array (
      0 => '/var/www/protectorasantapola/paneldecontrol/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1550000747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3738226455c86447087f170-19623065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c8644708862c5_01742138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8644708862c5_01742138')) {function content_5c8644708862c5_01742138($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
