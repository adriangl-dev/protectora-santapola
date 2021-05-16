<?php /* Smarty version Smarty-3.1.19, created on 2019-03-31 10:01:06
         compiled from "/var/www/protectorasantapola/paneldecontrol/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2755411225ca073c2612b08-05915788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9f33b434acbf5378610ad7cdf0107d4e92d7cfd' => 
    array (
      0 => '/var/www/protectorasantapola/paneldecontrol/themes/default/template/content.tpl',
      1 => 1550000747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2755411225ca073c2612b08-05915788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ca073c261a762_56270591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca073c261a762_56270591')) {function content_5ca073c261a762_56270591($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
