<script type="text/javascript" src="{$js_path}"></script>
<div id="viewed-products_block_left" class="block products_block">
	<h4 class="title_block">{l s={$slideOptions.title_slide} }</h4>
	<div class="block_content">
		<div class="bxslider_view_product">
			{foreach from=$productsViewedObj item=viewedProduct name=myLoop}
				<div class="slide">
					<a href="{$viewedProduct->product_link|escape:'html'}" title="{l s='About' mode='posviewproduct'} {$viewedProduct->name|escape:html:'UTF-8'}" class="content_img">
					<img src="{if isset($viewedProduct->id_image) && $viewedProduct->id_image}{$link->getImageLink($viewedProduct->link_rewrite, $viewedProduct->cover, 'medium_default')}{else}{$img_prod_dir}{$lang_iso}-default-medium_default.jpg{/if}" alt="{$viewedProduct->legend|escape:html:'UTF-8'}" />
					</a>
					<div class="text_desc">
						<h5 class="s_title_block"><a href="{$viewedProduct->product_link|escape:'html'}" title="{l s='About' mode='posviewproduct'} {$viewedProduct->name|escape:html:'UTF-8'}">{$viewedProduct->name|truncate:14:'...'|escape:html:'UTF-8'}</a></h5>
						<p><a href="{$viewedProduct->product_link|escape:'html'}" title="{l s='About' mode='posviewproduct'} {$viewedProduct->name|escape:html:'UTF-8'}">{$viewedProduct->description_short|strip_tags:'UTF-8'|truncate:44}</a></p>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
</div>
<script type ='text/javascript'>
    $(document).ready(function(){ 
          $('.bxslider_view_product').bxSlider({
                slideWidth: '{if $slideOptions.width_item != ''}{$slideOptions.width_item}{else}250{/if}',
                minSlides: '{if $slideOptions.min_item != ''}{$slideOptions.min_item}{else}3{/if}',
                maxSlides: '{if $slideOptions.max_item != ''}{$slideOptions.max_item}{else}8{/if}',
                startSlide: 0,
                mode: '{if $slideOptions.mode_dir != ''}{$slideOptions.mode_dir}{else}vertical{/if}',
                auto: {if $slideOptions.auto_slide != 0}{$slideOptions.auto_slide}{else}false{/if},
                controls: {if $slideOptions.show_nexback != 0}{$slideOptions.show_nexback}{else}false{/if},
                pager: {if $slideOptions.show_control != 0}{$slideOptions.show_control}{else}false{/if},
		slideMargin: 5,
                speed:'{if $slideOptions.speed_slide != ''}{$slideOptions.speed_slide}{else}5000{/if}',
                pause:  '{if $slideOptions.a_speed != ''}{$slideOptions.a_speed}{else}1000{/if}'
             
          });
        });
</script>
