<?php /* Smarty version Smarty-3.1.19, created on 2019-02-12 22:11:15
         compiled from "/var/www/protectorasantapola/themes/pos_petsyshop/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1232378805c633673d0f248-65136043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c3578b14cb9bc1c9a627286a6c54ce48462076' => 
    array (
      0 => '/var/www/protectorasantapola/themes/pos_petsyshop/modules/blocksearch/blocksearch-top.tpl',
      1 => 1550000748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1232378805c633673d0f248-65136043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'ENT_QUOTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c633673d37ac0_36064756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c633673d37ac0_36064756')) {function content_5c633673d37ac0_36064756($_smarty_tpl) {?>
<!-- block seach mobile -->
<?php if (isset($_smarty_tpl->tpl_vars['hook_mobile']->value)) {?>
<div class="input_search" data-role="fieldcontain">
 <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox">
  <input type="hidden" name="controller" value="search" />
  <input type="hidden" name="orderby" value="position" />
  <input type="hidden" name="orderway" value="desc" />
  <input class="search_query" type="search" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php if (isset($_GET['search_query'])) {?><?php echo stripslashes(htmlentities($_GET['search_query'],$_smarty_tpl->tpl_vars['ENT_QUOTES']->value,'utf-8'));?>
<?php }?>" />
 </form>
</div>
<?php } else { ?>
<!-- Block search module TOP -->

<div class = "block-search-top">
 <div class ="icon-search">
  <div class="icon-search-content">
    <div id="search_block_top">
     <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox">
      <p>
       <label for="search_query_top"><!-- image on background --></label>
       <input type="hidden" name="controller" value="search" />
       <input type="hidden" name="orderby" value="position" />
       <input type="hidden" name="orderway" value="desc" />
       <input class="search_query" type="text" id="search_query_top" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo stripslashes(htmlentities($_GET['search_query'],$_smarty_tpl->tpl_vars['ENT_QUOTES']->value,'utf-8'));?>
<?php }?>" />
       <input type="submit" name="submit_search" value="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" class="button" />
      </p>
     </form>
     </div>
  </div>
 </div>
</div>

 <div class = "block-search-top">
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="5RYBRMDBMWTJ2">
	<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
	<img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
  </form>
 </div>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/blocksearch-instantsearch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }?>
<script type="text/javascript">
 $(document).ready(function(){
  $('#search_block_top').css('display','none');
  $('.icon-search').live('hover',function() {
   $('#search_block_top').slideToggle();
  });
 })
</script>
<!-- /Block search module TOP --><?php }} ?>
