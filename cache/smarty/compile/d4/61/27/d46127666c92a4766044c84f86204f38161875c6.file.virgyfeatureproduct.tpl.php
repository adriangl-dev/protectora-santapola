<?php /* Smarty version Smarty-3.1.19, created on 2019-05-03 21:24:32
         compiled from "/var/www/protectorasantapola/modules/virgyfeatureproduct/virgyfeatureproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1699332455ccc957023ef37-59056001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd46127666c92a4766044c84f86204f38161875c6' => 
    array (
      0 => '/var/www/protectorasantapola/modules/virgyfeatureproduct/virgyfeatureproduct.tpl',
      1 => 1552329567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1699332455ccc957023ef37-59056001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'nbItemsPerLine' => 0,
    'totModulo' => 0,
    'product' => 0,
    'link' => 0,
    'slideOptions' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ccc957033e435_68989109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccc957033e435_68989109')) {function content_5ccc957033e435_68989109($_smarty_tpl) {?><!-- Begin Virgyfeatured module-->
<!-- Display Perros en adopción in homepage-->
<div class="pos-feature-product row-fluid">
	<?php if (count($_smarty_tpl->tpl_vars['products']->value)>=1) {?>
	<div class="flexslider carousel span9">
		<ul class="slides">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posFeatureProducts']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posFeatureProducts']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posFeatureProducts']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posFeatureProducts']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posFeatureProducts']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<li class=" feature-productslider-item ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['last']) {?>last_item<?php } else { ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?>last_item_of_line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1) {?> <?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['posFeatureProducts']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)) {?>last_line<?php }?>">
					<div class="featureproductslider-item-inner">
					
						
						
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="product_image"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'pos_product'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
						
						<h5 class="s_title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],35,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h5>
	                                        <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_des']==1) {?>
	                                            <div class="product_desc"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),65,'...');?>
</a></div>
	                                        <?php }?>
						<div>
						<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description']),180);?>
<br/><br/><a style="color:#0093dd;" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">Ver más</div>
	                                            <a class="lnk_more" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More View','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'View More','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
</a>
	                                            <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_price']==1) {?>                                            
	                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?><p class="price_container"><span class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span></p><?php } else { ?><div style="height:21px;"></div><?php }?>
	                                            <?php }?>
	                                            <?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
	                                                    <?php if (($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
	                                                    <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_addtocart']==1) {?>
	                                                        <a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'UTF-8', true);?>
?qty=1&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
</a>
	                                                    <?php }?>
	                                                    <?php } else { ?>
	                                                    <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_addtocart']==1) {?>
	                                                        <span class="exclusive"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
</span>
	                                                    <?php }?>
	                                                    <?php }?>
	                                            <?php } else { ?>
	                                                    <div style="height:23px;"></div>
	                                            <?php }?>
						</div>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div>
	<a href="https://protectorasantapola.org/index.php?id_category=13&controller=category">
		<div class="pos-feature-product-title span3">
			<div class="pos-feature-product-title-inner">
				<p class="title"><?php echo smartyTranslate(array('s'=>' Ver más perros en adopción','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
</p>
				<p><?php echo smartyTranslate(array('s'=>' Haz click aquí para ver más perros que están deseando conocerte','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
</p>
				
				
			</div>
		</div>
	</a>
	<?php } else { ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No products for this new products.','mod'=>'posfeatureproduct'),$_smarty_tpl);?>
</p>
	<?php }?>
	<script type="text/javascript">
		$('.pos-feature-product .flexslider').flexslider({
            slideshow: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['auto_slide']!=1) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['auto_slide'];?>
<?php } else { ?>1<?php }?>,
            itemWidth:<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['width_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['width_item'];?>
<?php } else { ?>250<?php }?>,
			itemMargin: 20,
			minItems: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['min_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['min_item'];?>
<?php } else { ?>3<?php }?>,
			maxItems: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['max_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['max_item'];?>
<?php } else { ?>8<?php }?>,
			slideshowSpeed:  <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide'];?>
<?php } else { ?>5000<?php }?>,
			animationSpeed: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['a_speed']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['a_speed'];?>
<?php } else { ?>1000<?php }?>,
			directionNav: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_nexback']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_nexback'];?>
<?php } else { ?>false<?php }?>,
			animation: "slide",
            controlNav: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_control']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_control'];?>
<?php } else { ?>false<?php }?>,
		});
	</script>
		 
</div>
<!--End Virgyfeatured module-->
<?php }} ?>
