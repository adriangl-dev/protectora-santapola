{if $page_name == 'index'}
<div class="pos-logo-container">    
        <div class="container">
		
			<div id="colaboradores">
				<span>Nuestros colaboradores</span>
			</div>
            <div class="pos-logo">
                <!--div class="pos-logo-title"><h2>{l s='Our Brands' mod='poslogo'}</h2></div> -->
                    <ul class="bxslider">
                        {foreach from=$logos item=logo name=posLogo}
                            <li>
                                <a href ="{$logo.link}">
                                    <img src ="{$base_dir_ssl}img/blocklogo/{$logo.id_pos_logo}.jpg" alt ="{l s="Logo"}" />
                                </a>
                            </li>
                        {/foreach}
                    </ul>
            </div>
        </div>
    </div>
{/if}    
    <script type="text/javascript">
          $('.pos-logo .bxslider').bxSlider({
            auto: {if $slideOptions.auto != 1}{$slideOptions.auto}{else}1{/if},
            slideWidth:{if $slideOptions.width_item != ''}{$slideOptions.width_item}{else}250{/if},
            slideMargin: 0,
            infiniteLoop:false,
            minSlides: {if $slideOptions.min_item != ''}{$slideOptions.min_item}{else}3{/if},
            maxSlides: {if $slideOptions.max_item != ''}{$slideOptions.max_item}{else}8{/if},
            speed:  {if $slideOptions.speed_slide != ''}{$slideOptions.speed_slide}{else}5000{/if},
            pause: {if $slideOptions.a_speed != ''}{$slideOptions.a_speed}{else}1000{/if},
            controls: {if $slideOptions.show_nexback != 0}{$slideOptions.show_nexback}{else}false{/if},
            pager: {if $slideOptions.show_control != 0}{$slideOptions.show_control}{else}false{/if},
        });
    </script>
         <!--  -->
