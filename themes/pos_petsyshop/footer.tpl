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

		{if !$content_only}
				</div>
<!-- Right -->
							{if $page_name =='category' || $page_name =='product' || $page_name =='contact' || $page_name =='my-account'
							|| $page_name =='address' || $page_name =='addresses' ||
							$page_name =='history' || $page_name =='order-slip' || 
							$page_name =='identity' || $page_name =='module-cheque-payment' || $page_name =='order-confirmation' || $page_name =='search' || $page_name =='prices-drop' || $page_name =='cms'
							|| $page_name =='sitemap' || $page_name =='stores'
							|| $page_name=='products-comparison'
						}
							    <div id="right_column" class="col-right span3">
							        {$HOOK_RIGHT_COLUMN}
							    </div>
								
							{/if}
			
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- Footer -->
				{hook h = "brandSlider"}
			<div id="footer">
				<div class="pos-footer-top">
					<div class="container">
						<div class="container-inner">
							<div class="pos-footer-static">
								{hook h = "blockFooter1"}
							</div>	
						</div>
					</div>
				</div>
				<div class="pos-footer-center">
					<div class="container">
						<div class="container-inner">
							<div class="pos-footer">
								<div class="row-fluid">
									{$HOOK_FOOTER}
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="pos-footer-bottom">
					<div class="container">
						<div class="container-inner">
							{hook h = "blockFooter2"}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{/if}
	<div id="scrollTop">
		<a href="#top"></a>
	</div>
	</body>
</html>
