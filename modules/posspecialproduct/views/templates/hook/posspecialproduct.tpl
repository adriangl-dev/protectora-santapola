{if $page_name == 'index'}
<div class ="row-fluid block_gift_special">
<div class ="span4">
	<div id ="block_customer">{hook h = 'homeBlock2'}  </div>
</div>
<div class ="span8">
<div class="pos-special-product" >
	<div class="pos-special-product-title"><h2>{l s ={$slideOptions.title_slide}}</h2></div>
	<div class="flexslider carousel">
		<ul class="slides" >
			{foreach from=$products item=product name=products}
                            <li class="ajax_block_product {if $smarty.foreach.products.first}first_item{elseif $smarty.foreach.products.last}last_item{/if} {if $smarty.foreach.products.index % 2}alternate_item{else}item{/if} clearfix">
                                    <div class="center_block">
                                            <a href="{$product.link|escape:'htmlall':'UTF-8'}" class="product_img_link" title="{$product.name|escape:'htmlall':'UTF-8'}">
                                                    <img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.legend|escape:'htmlall':'UTF-8'}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} />
                                            </a>
                                            <h3>{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}<a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h3>
                                            {if $slideOptions.show_des ==1 }
                                                 <p class="product_desc"><a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}" >{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}</a></p>
                                            {/if}
                                    </div>
                                   
                                    <div class="right_block">
                                            {if $slideOptions.show_price ==1 }  
                                            {if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}<span class="on_sale">{l s='On sale!'}</span>
                                            {elseif isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}<span class="discount">{l s='Reduced price!'}</span>{/if}
                                            {if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
                                               
                                            <div class="content_price">
                                                    {if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}<span class="price" style="display: inline;">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span><br />{/if}
                                                    {if isset($product.available_for_order) && $product.available_for_order && !isset($restricted_country_mode)}<span class="availability">{if ($product.allow_oosp || $product.quantity > 0)}{l s=''}{elseif (isset($product.quantity_all_versions) && $product.quantity_all_versions > 0)}{l s='Product available with different options'}{else}{l s='Out of stock'}{/if}</span>{/if}
                                            </div>
                                            {/if}
                                            {if isset($product.online_only) && $product.online_only}<span class="online_only">{l s='Online only'}</span>{/if}
                                            {/if}
                                               {if $slideOptions.show_addtocart ==1 }
                                            {if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
                                                    {if ($product.allow_oosp || $product.quantity > 0)}
                                                            {if isset($static_token)}
                                                                    <a class="button ajax_add_to_cart_button exclusive" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html'}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
                                                            {else}
                                                                    <a class="button ajax_add_to_cart_button exclusive" rel="ajax_id_product_{$product.id_product|intval}" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}", false)|escape:'html'}" title="{l s='Add to cart'}"><span></span>{l s='Add to cart'}</a>
                                                            {/if}						
                                                    {else}
                                                            <span class="exclusive"><span></span>{l s='Add to cart'}</span><br />
                                                    {/if}
                                            {/if}
                                            {/if}
                                    </div>
                                
                            </li>
	{/foreach}
		</ul>
	</div>
	</div>
</div>
	<script type="text/javascript">
		$('.pos-special-product .flexslider').flexslider({
			slideshow: {if $slideOptions.auto_slide != 1}{$slideOptions.auto_slide}{else}1{/if},
			itemWidth:{if $slideOptions.width_item != ''}{$slideOptions.width_item}{else}250{/if},
			itemMargin: 0,
			minItems: {if $slideOptions.min_item != ''}{$slideOptions.min_item}{else}3{/if},
			maxItems: {if $slideOptions.max_item != ''}{$slideOptions.max_item}{else}8{/if},
			slideshowSpeed:  {if $slideOptions.speed_slide != ''}{$slideOptions.speed_slide}{else}5000{/if},
			animationSpeed: {if $slideOptions.a_speed != ''}{$slideOptions.a_speed}{else}1000{/if},
			directionNav: {if $slideOptions.show_nexback != 0}{$slideOptions.show_nexback}{else}false{/if},
			animation: "slide",
                        controlNav: {if $slideOptions.show_control != 0}{$slideOptions.show_control}{else}false{/if},
		});
	</script>
		 
</div>
{/if}