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

<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="f-col span3">
    {hook h = "blockFooter3"}
	
	{*Virgy MOD 05/04/15*}
	{*<h2 class="title_block">{l s='Newsletter' mod='blocknewsletter'}</h2>
	<div class="block_content">
	{if isset($msg) && $msg}
		<p class="{if $nw_error}warning_inline{else}success_inline{/if}">{$msg}</p>
	{/if}
		<p class="newletter-header">{l s='Sign Up for Our Newsletter:' mod='blocknewsletter'}</p>
		<form action="{$link->getPageLink('index')|escape:'html'}" method="post">
			<p>
				<input class="inputNew" id="newsletter-input" type="text" name="email" size="18" value="{if isset($value) && $value}{$value}{else}{l s='your e-mail' mod='blocknewsletter'}{/if}" />
				<input type="submit" value="{l s='Subscribe' mod='blocknewsletter'}" class="button_mini" name="submitNewsletter" />
				<input type="hidden" name="action" value="0" />
			</p>
		</form>
	</div>*}
	{*****}
</div>
<!-- /Block Newsletter module-->

<script type="text/javascript">
    var placeholder = "{l s='your e-mail' mod='blocknewsletter' js=1}";
        $(document).ready(function() {ldelim}
            $('#newsletter-input').on({ldelim}
                focus: function() {ldelim}
                    if ($(this).val() == placeholder) {ldelim}
                        $(this).val('');
                    {rdelim}
                {rdelim},
                blur: function() {ldelim}
                    if ($(this).val() == '') {ldelim}
                        $(this).val(placeholder);
                    {rdelim}
                {rdelim}
            {rdelim});

            {if isset($msg)}
                $('#columns').before('<div class="clearfix"></div><p class="{if $nw_error}warning{else}success{/if}">{l s="Newsletter:" js=1 mod="blocknewsletter"} {$msg}</p>');
            {/if}
        });
</script>
