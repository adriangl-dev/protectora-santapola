<?php /* Smarty version Smarty-3.1.19, created on 2021-01-20 11:54:01
         compiled from "/var/www/protectorasantapola/public_html/themes/pos_petsyshop/modules/blocklanguages/blocklanguages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66160549660080bc994b654-07909212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b34f9d411a522bb952935e309a90acf03eff669a' => 
    array (
      0 => '/var/www/protectorasantapola/public_html/themes/pos_petsyshop/modules/blocklanguages/blocklanguages.tpl',
      1 => 1556915561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66160549660080bc994b654-07909212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'lang_iso' => 0,
    'indice_lang' => 0,
    'lang_rewrite_urls' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60080bc9996025_16860805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60080bc9996025_16860805')) {function content_60080bc9996025_16860805($_smarty_tpl) {?>

<!-- Block languages module -->
<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
<div id="languages_block_top">
	<div id="countries">
	
<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value) {?>
		<p class="selected_language">
			<span><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</span>
		</p>
	<?php }?>
<?php } ?>
		<ul id="first-languages" class="countries_ul">
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
			<li <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value) {?>class="selected_language"<?php }?>>
			<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value) {?>
				<?php $_smarty_tpl->tpl_vars['indice_lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id_lang'], null, 0);?>
				<?php if (isset($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value])) {?>
					<a href="<?php echo htmlentities($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value], ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
				<?php } else { ?>
					<a href="<?php echo htmlentities($_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']), ENT_QUOTES, 'ISO-8859-1', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">

				<?php }?>
			<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

			<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value) {?>
				</a>
			<?php }?>
			</li>
		<?php } ?>
		</ul>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function () {
 $("#countries").mouseover(function(){
  $(this).addClass("countries_hover");
  $(".countries_ul").addClass("countries_ul_hover");
 });
 $("#countries").mouseout(function(){
  $(this).removeClass("countries_hover");
  $(".countries_ul").removeClass("countries_ul_hover");
 });

});
</script>
<?php }?>
<!-- /Block languages module -->
<?php }} ?>
