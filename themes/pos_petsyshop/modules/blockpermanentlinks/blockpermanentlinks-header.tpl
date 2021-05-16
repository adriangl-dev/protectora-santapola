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

<!-- Block permanent links module HEADER -->
<ul id="header_links">

 {*Virgy ADD*}
 <li><a class="link-mycart" href="https://protectorasantapola.org/index.php?id_cms=6&controller=cms" title="{l s='Sobre nosotros' mod='blockcart'}">{l s='Quienes somos' mod='blockcart'}</a></li>
 {*<li id="header_link_contact"><a class="link-contact" href="{$link->getPageLink('contact', true)|escape:'html'}" title="{l s='Contact' mod='blockpermanentlinks'}">{l s='Contact' mod='blockpermanentlinks'}</a></li>*}
 <li id="header_link_colabore"><a class="link-contact" href="https://protectorasantapola.org/index.php?id_cms=12&controller=cms" title="{l s='Colabora' mod='blockpermanentlinks'}">{l s='Colabora' mod='blockpermanentlinks'}</a></li>
{* <li id="header_link_colabore" class="last"><a class="link-contact" href="https://protectorasantapola.org/index.php?id_cms=15&controller=cms" title="{l s='Carrera más animal' mod='blockpermanentlinks'}">{l s='Carrera más animal' mod='blockpermanentlinks'}</a></li>*}

 
 {********}
 
 {*<li id="header_link_contact"><a class="link-contact" href="{$link->getPageLink('contact', true)|escape:'html'}" title="{l s='Contact' mod='blockpermanentlinks'}">{l s='Contact' mod='blockpermanentlinks'}</a></li>*}
 {$context = Context::getContext()}

 {*<li><a class="link-wishlist" href="{$context->link->getModuleLink('blockwishlist', 'mywishlist')}" title="{l s='My wishlist' mod='blockwishlist'}">{l s='My wishlist' mod='blockwishlist'}</a></li>*}
 {*<li><a class="link-myaccount" href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='My account' mod='blockmyaccount'}">{l s='My account' mod='blockmyaccount'}</a></li>*}
 {*<li><a class="link-mycart" href="{$link->getPageLink('order', true)|escape:'html'}" title="{l s='My cart' mod='blockcart'}">{l s='My cart' mod='blockcart'}</a></li>*}
 {*{if $logged}
   <!--<a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>-->
   <li class="last"><a class="link-out" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html'}" title="{l s='Log me out' mod='blockuserinfo'}" class="logout" rel="nofollow">{l s='Log out' mod='blockuserinfo'}</a></li>
  {else}
   <li class="last"><a class="link-login" href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='Login to your customer account' mod='blockuserinfo'}" class="login" rel="nofollow">{l s='Login' mod='blockuserinfo'}</a></li>
 {/if}*}
 
</ul>
<!-- /Block permanent links module HEADER -->
