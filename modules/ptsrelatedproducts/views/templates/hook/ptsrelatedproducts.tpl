{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="block ps_categoryproducts clearfix">
  <h3 class="title_block">
    {l s='You May Also Like..' d='Modules.Categoryproducts.Shop'}
    <!-- {if $products|@count == 1}
      {l s='%s other product in the same category:' sprintf=[$products|@count] d='Modules.Categoryproducts.Shop'}
    {else}
      {l s='%s other products in the same category:' sprintf=[$products|@count] d='Modules.Categoryproducts.Shop'}
    {/if} -->
  </h3>
  <div class="block_content">
      {$carousel_item = $params.cols_desktop}
      {$nbr_desktops = $params.cols_desktop}
      {$nbr_tablets = $params.cols_tablet}
      {$nbr_mobile = $params.cols_mobile}
      {include file="module:ptsrelatedproducts/views/templates/hook/products_module.tpl" items=$products class="products-block grid {if isset($product_style) && !empty($product_style)}{$product_style}{else}style1{/if}"}
  </div>
</div>
