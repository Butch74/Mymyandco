{*
* Pts Prestashop Theme Framework for Prestashop 1.7.x
*
* @package   pspagebuilder
* @version   6.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2016 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
{if isset($products) && !empty($products)}
	<div class="widget-products block-highlighted {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if} block">
		{if isset($widget_heading)&&!empty($widget_heading)}
			<h4 class="title_block">
				{$widget_heading|escape:'html':'UTF-8'}
			</h4>
		{/if}
		{if isset($subtitle) && $subtitle}
			<div class="subtitle">{$subtitle|escape:'html':'UTF-8'}</div>
		{/if}
		<div class="widget-inner block_content">
			{if isset($description) && $description || isset($banner_imagefile) && $banner_imagefile && $bannerurl }
				<div class="widget-products-swap">
					{if isset($description) && $description}
						<div class="widget-products-desc">
							{$description nofilter}{* HTML, cannot escape *}
						</div>
					{/if}
					{if isset($banner_imagefile) && $banner_imagefile && $bannerurl}
						<div class="widget-products-img">
							<img src="{$bannerurl|escape:'html':'UTF-8'}" alt="{if isset($widget_heading)&&!empty($widget_heading)}{$widget_heading|escape:'html':'UTF-8'}{else}banner{/if}">
						</div>
					{/if}
				</div>
			{/if}
			<div class="widget-inner block_content">
				{if isset($products) AND $products}
			 		{$tabname=rand()+count($products)}
			 		{if isset($display_mode) && $display_mode == 'carousel'}
						{include file="{$items_owl_carousel_tpl}" items=$products class="products-block list_{$list_type} {if isset($list_mode) && $list_mode == 'grid'}{if isset($product_style) && !empty($product_style)}{$product_style}{else}style1{/if}{else}list{/if}" carousel_style="boxcarousel"}
					{else}
						{include file="{$items_normal_tpl}" items=$products class="products-block list_{$list_type} {if isset($list_mode) && $list_mode == 'grid'}{if isset($product_style) && !empty($product_style)}{$product_style}{else}style1{/if}{else}list{/if}"}
					{/if}
				{/if}
			</div>
		</div>
	</div>
{/if}
