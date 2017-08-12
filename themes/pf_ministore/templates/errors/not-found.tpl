{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<section id="content" class="page-content page-not-found row">
	
	<h1>404</h1>
	<h2><span>{l s='Page Not Found' d='Shop.Theme'}<span></h2>
	<div class="content-404">
		  <p>{l s='You may have mis-typed the URL. Or the page has been removed. Actually, there is nothing to see here... Click on the links below to do something, Thanks!' d='Shop.Theme'}</p> 
	</div>
	<div class="buttons space-padding-top-40">
		<a class="btn" href="{$urls.pages.index}" title="{l s='Home'}"><span>{l s='Continue shopping'}</span></a>
		<a class="btn btn-secondary" href="{$link->getPageLink(contact, true)|escape:'html'}" title="{l s='Contact'}"><span>{l s='Contact Us'}</span></a>
	</div>

	  {hook h='displayNotFound'}
  
</section>
