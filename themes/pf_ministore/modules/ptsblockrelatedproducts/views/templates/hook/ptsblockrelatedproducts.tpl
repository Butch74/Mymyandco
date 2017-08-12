{*
* Pts Prestashop Theme Framework for Prestashop 1.6.x
*
* @package   ptsblockrelatedproducts
* @version   5.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
{if $products|@count gt 0 }
<div id="relatedproducts" class="block products_block exclusive ptsblockrelatedproducts carousel">
		<h3 class="title_block">{l s='Related products' mod='ptsblockrelatedproducts'}</h3>
		<div class="block_content">	
			{if !empty($products )}
				{$tabname="ptsblockrelatedproducts"}
				{$columns = 4}
				{$nbr_desktops = 4}
				{$nbr_tablets = 2}
				{$nbr_mobile = 1}
				{include file="sub/products_module.tpl" product=$product class=''}
			{/if}
		</div>
</div>
{/if}
 