{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!-- block seach mobile -->
{if isset($hook_mobile)}
<div class="input_search" data-role="fieldcontain">
 <form method="get" action="{$link->getPageLink('search')|escape:'html'}" id="searchbox">
  <input type="hidden" name="controller" value="search" />
  <input type="hidden" name="orderby" value="position" />
  <input type="hidden" name="orderway" value="desc" />
  <input class="search_query" type="search" id="search_query_top" name="search_query" placeholder="{l s='Search' mod='blocksearch'}" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|htmlentities:$ENT_QUOTES:'utf-8'|stripslashes}{/if}" />
 </form>
</div>
{else}
<!-- Block search module TOP -->

<div class = "block-search-top">
 <div class ="icon-search">
  <div class="icon-search-content">
    <div id="search_block_top">
     <form method="get" action="{$link->getPageLink('search')|escape:'html'}" id="searchbox">
      <p>
       <label for="search_query_top"><!-- image on background --></label>
       <input type="hidden" name="controller" value="search" />
       <input type="hidden" name="orderby" value="position" />
       <input type="hidden" name="orderway" value="desc" />
       <input class="search_query" type="text" id="search_query_top" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|htmlentities:$ENT_QUOTES:'utf-8'|stripslashes}{/if}" />
       <input type="submit" name="submit_search" value="{l s='Search' mod='blocksearch'}" class="button" />
      </p>
     </form>
     </div>
  </div>
 </div>
</div>

 <div class = "block-search-top">
  <!-- <form action="PayPal.Me/protesantapola" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="5RYBRMDBMWTJ2">
	<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
	<img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
  </form> -->
<a href="http://PayPal.Me/protesantapola"><img src = "https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" target="_blank" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet."></a>
 </div>
 
{include file="$self/blocksearch-instantsearch.tpl"}
{/if}
<script type="text/javascript">
 $(document).ready(function(){
  $('#search_block_top').css('display','none');
  $('.icon-search').live('hover',function() {
   $('#search_block_top').slideToggle();
  });
 })
</script>
<!-- /Block search module TOP -->
