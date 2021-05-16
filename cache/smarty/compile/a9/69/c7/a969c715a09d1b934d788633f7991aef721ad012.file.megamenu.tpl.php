<?php /* Smarty version Smarty-3.1.19, created on 2021-01-20 11:54:06
         compiled from "/var/www/protectorasantapola/public_html/themes/pos_petsyshop/modules/posmegamenu/megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116210428560080bce1287e0-73400964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a969c715a09d1b934d788633f7991aef721ad012' => 
    array (
      0 => '/var/www/protectorasantapola/public_html/themes/pos_petsyshop/modules/posmegamenu/megamenu.tpl',
      1 => 1556915561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116210428560080bce1287e0-73400964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockCategTree' => 0,
    'isDhtml' => 0,
    'child' => 0,
    'megamenu' => 0,
    'effect' => 0,
    'top_offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60080bce14f1e4_38701873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60080bce14f1e4_38701873')) {function content_60080bce14f1e4_38701873($_smarty_tpl) {?>
<!-- Block categories module -->
<?php if ($_smarty_tpl->tpl_vars['blockCategTree']->value!='') {?>
	<div class="ma-nav-mobile-container hidden-desktop">
		<div class="container">
			<div class="container-inner">
				<div class="navbar">
					<div id="navbar-inner" class="navbar-inner navbar-inactive">
						<a class="btn btn-navbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<span class="brand"><?php echo smartyTranslate(array('s'=>'Categorías'),$_smarty_tpl);?>
</span>
						<ul id="ma-mobilemenu" class="tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>  mobilemenu nav-collapse collapse">
							<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']) {?>
									<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

								<?php } else { ?>
									<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

								<?php }?>
							<?php } ?>
						</ul>
		                                <script type="text/javascript">
		                                // <![CDATA[
		                                        // we hide the tree only if JavaScript is activated
		                                        $('div#categories_block_left ul.dhtml').hide();
		                                // ]]>
		                                </script>
		                </div>                
					</div>
				</div>
		</div>
</div>
<?php }?>
<!-- /Block categories module -->

<div class="nav-container visible-desktop">
	<div class="container">
	    <div id="pt_custommenu" class="pt_custommenu">
	        <?php echo $_smarty_tpl->tpl_vars['megamenu']->value;?>

	    </div>
	</div>    
</div>

<script type="text/javascript">
//<![CDATA[
var CUSTOMMENU_POPUP_EFFECT = <?php echo $_smarty_tpl->tpl_vars['effect']->value;?>
;
var CUSTOMMENU_POPUP_TOP_OFFSET = <?php echo $_smarty_tpl->tpl_vars['top_offset']->value;?>
;
//]]>
</script><?php }} ?>
