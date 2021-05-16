<?php /* Smarty version Smarty-3.1.19, created on 2019-02-12 22:12:45
         compiled from "/var/www/protectorasantapola/themes/pos_petsyshop/modules/posproductcates/productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16045347425c6336cde5fd57-31207360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c75f233dda658ee01983f6545cf1230ab31a49a9' => 
    array (
      0 => '/var/www/protectorasantapola/themes/pos_petsyshop/modules/posproductcates/productscategory.tpl',
      1 => 1550000748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16045347425c6336cde5fd57-31207360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
    'categoryProduct' => 0,
    'link' => 0,
    'slideOptions' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c6336ce02d2d9_92053437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6336ce02d2d9_92053437')) {function content_5c6336ce02d2d9_92053437($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false) {?>
<div class="clearfix blockposproductcategory">
    <div class="blockposproductcategory-title">
	    <div class="blockposproductcategory-title-inner">
			
            
			<h2 class="posproductcategory_h2"><?php echo smartyTranslate(array('s'=>'Other Products ','mod'=>'posproductcates'),$_smarty_tpl);?>
</h2>
        </div>   
    </div>           
	<div id="posproductcategory_list">
            <div class="flexslider carousel">
                    <ul class ="slides">
                            <?php  $_smarty_tpl->tpl_vars['categoryProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoryProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoryProduct']->key => $_smarty_tpl->tpl_vars['categoryProduct']->value) {
$_smarty_tpl->tpl_vars['categoryProduct']->_loop = true;
?>
                                   <li >
                                        <div class="posproductcategory-item-inner">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
" class="lnk_img" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['id_image'],'pos_product'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
" /></a>
                                            <p class="product_name">
                                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoryProduct']->value['name'],14,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
                                            </p>
                                            <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_des']==1) {?>
                                                <div class="product_desc"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More','mod'=>'posproductcates'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['categoryProduct']->value['description_short']),65,'...');?>
</a></div>
                                            <?php }?>

                                            <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                            <p class="price_display">
                                                    <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
                                            </p>
                                            <?php } else { ?>
                                            <br />
                                            <?php }?>
                                            <?php if (($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['categoryProduct']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['categoryProduct']->value['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['categoryProduct']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                                            <?php if (($_smarty_tpl->tpl_vars['categoryProduct']->value['quantity']>0||$_smarty_tpl->tpl_vars['categoryProduct']->value['allow_oosp'])) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_addtocart']==1) {?>
                                                                    <a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'UTF-8', true);?>
?qty=1&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posproductcates'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posproductcates'),$_smarty_tpl);?>
</a>
                                                            <?php }?>
                                                            <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_addtocart']==1) {?>
                                                                    <span class="exclusive"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'posproductcates'),$_smarty_tpl);?>
</span>
                                                            <?php }?>
                                                            <?php }?>
                                            <?php } else { ?>
                                                            <div style="height:23px;"></div>
                                            <?php }?>
                                        </div>    
                                    </li>
                            <?php } ?>
                    </ul>
                </div>
            </div>
	
</div>
<?php }?>

<script type="text/javascript">
    $(document).ready(function()
    { 
            $('#posproductcategory_list .flexslider').flexslider({
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
    });
</script><?php }} ?>
