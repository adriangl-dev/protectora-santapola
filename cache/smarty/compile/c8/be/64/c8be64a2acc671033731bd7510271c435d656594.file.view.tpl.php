<?php /* Smarty version Smarty-3.1.19, created on 2019-12-09 08:25:22
         compiled from "/var/www/protectorasantapola/public_html/paneldecontrol/themes/default/template/controllers/dashboard/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20005978625dedf6e2156752-76729610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8be64a2acc671033731bd7510271c435d656594' => 
    array (
      0 => '/var/www/protectorasantapola/public_html/paneldecontrol/themes/default/template/controllers/dashboard/helpers/view/view.tpl',
      1 => 1556915561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20005978625dedf6e2156752-76729610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'dashboard_use_push' => 0,
    'warning' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dedf6e2164944_77640436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dedf6e2164944_77640436')) {function content_5dedf6e2164944_77640436($_smarty_tpl) {?>
<script>
	var dashboard_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard');?>
';
	var adminstats_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminStats');?>
';
	var no_results_translation = '<?php echo smartyTranslate(array('s'=>'No result','js'=>1),$_smarty_tpl);?>
';
	var dashboard_use_push = '<?php echo intval($_smarty_tpl->tpl_vars['dashboard_use_push']->value);?>
';
	var read_more = '<?php echo smartyTranslate(array('s'=>'Read more','js'=>1),$_smarty_tpl);?>
';
</script>
<div id="dashboard">
	<div class="row">
		<div class="col-lg-12">
<?php if ($_smarty_tpl->tpl_vars['warning']->value) {?>
			<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</div>
<?php }?>
			
			<div id="dashboard_container">
				<div style="text-align:center">
					<h1>Bienvenido al panel de control de la web de la Protectora de Animales</h1>
					<img style="margin:33px;" src="http://www.protectorasantapola.org/Portada.png"/>
					<p>Guía de cómo usar este panel de control --> <a href="#">próximamente</a></p>
					<p>Documentos para descargar (contratos, formularios, fichas, solicitudes...) ---> <a 
href="http://www.protectorasantapola.org/documentos/documentos.html">aquí</a>
				</div>
			</div>
<?php }} ?>
