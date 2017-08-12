{*
* Pts Prestashop Theme Framework for Prestashop 1.6.x
*
* @package   pspagebuilder
* @version   5.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
{if $categories_info}
	{if isset($columns)}
		{if $columns == 5}
			{assign var='nbItemsPerLine' value=$columns} 
		{else}
			{assign var='nbItemsPerLine' value=12/$columns}
		{/if}
	{else}
		{assign var='columns' value=4}
		{assign var='nbItemsPerLine' value=4}
	{/if}
	{if isset($nbr_desktops)}
		{if $nbr_desktops == 5}
			{assign var='nbItemsPerLineDesktop' value=$nbr_desktops} 
		{else}
			{assign var='nbItemsPerLineDesktop' value=12/$nbr_desktops}
		{/if}
	{else}
		{assign var='nbItemsPerLineDesktop' value=4}
	{/if}
	{if isset($nbr_tablets)}
		{assign var='nbItemsPerLineTablet' value=12/$nbr_tablets}
	{else}
		{assign var='nbItemsPerLineTablet' value=3}
	{/if}
	{if isset($nbr_mobile)}
		{assign var='nbItemsPerLineMobile' value=12/$nbr_mobile}
	{else}
		{assign var='nbItemsPerLineMobile' value=2} 
	{/if}

	<!-- Block categories module -->
	<div class="block {$addition_cls|escape:'html':'UTF-8'} block-borderbox">
		{if isset($widget_heading)&&!empty($widget_heading)}
		<div class="widget-heading title_block">
			{$widget_heading|escape:'html':'UTF-8'}
		</div>
		{/if}
		<div class="block_content boxcarousel">
			<div class="{if isset($list_mode) && $list_mode}{$list_mode|escape:'html':'UTF-8'}{/if} {if isset($class) && $class} {$class}{/if}">
				<div class="row">
					{foreach from=$categories_info item=cat name=categories_info_name}
						<div class="owl-wrapper col-lg-{if $nbItemsPerLine==5}cus-{/if}{$nbItemsPerLine|escape:'html':'UTF-8'} col-md-{if $nbItemsPerLineDesktop==5}cus-{/if}{$nbItemsPerLineDesktop|escape:'html':'UTF-8'} col-sm-{$nbItemsPerLineTablet|escape:'html':'UTF-8'} col-xs-{$nbItemsPerLineMobile|escape:'html':'UTF-8'} col-xs-cus-12 {if $smarty.foreach.items_name.iteration%(12/$nbItemsPerLine) == 1} first-in-line{/if}{if $smarty.foreach.items_name.iteration%(12/$nbItemsPerLineTablet) == 1} first-item-of-tablet-line{/if} {if $smarty.foreach.items_name.iteration%(12/$nbItemsPerLineMobile) == 1} first-item-of-mobile-line{/if} ">
							<div class="item">
								
								<div class="categories-info">
									
									<div class="categories-info-img">
										{if $show_image && ($cat.id_image || (isset($cat.icon) && $cat.icon) || (isset($cat.icon_class) && $cat.icon_class))}
											<a href="{$link->getCategoryLink({$cat.id_category|escape:'htmlall':'UTF-8'})|escape:'htmlall':'UTF-8'}" title="{$cat.name|escape:'htmlall':'UTF-8'}">
													{if isset($cat.icon) && $cat.icon}
															<img src="{$cat.icon|escape:'html':'UTF-8'}" alt="{$cat.name|escape:'html':'UTF-8'}" />
													{elseif isset($cat.icon_class) && $cat.icon_class}
															<icon class="{$cat.icon_class}"></icon>
													{elseif $cat.id_image}
														<img src="{$link->getCatImageLink($cat.link_rewrite, $cat.id_image, 'category_default')|escape:'html':'UTF-8'}" alt="{$cat.name|escape:'html':'UTF-8'}" />
													{/if}
												
											</a>
										{/if}
										<div class="categories-info-top">
											{if $show_cat_title}
												<h3><a href="{$link->getCategoryLink({$cat.id_category|escape:'htmlall':'UTF-8'})|escape:'htmlall':'UTF-8'}" title="{$cat.name|escape:'htmlall':'UTF-8'}">{$cat.name|escape:'html':'UTF-8'}</a></h3>
											{/if}
											{if $show_nb_product}
													<span class="product-number">{$cat.nb_products|escape:'htmlall':'UTF-8'} {l s='items' mod='pspagebuilder'}</span>
											{/if}
										</div>
									</div>
									{if $show_sub_category ||  $show_description}
										<div class="categories-info-content">
											
		                                    {if $show_sub_category && $cat.subcategories}
												<ul class="sub-categories">
													{foreach from=$cat.subcategories item=subcategory name=subcategory_name}
														<li><i class="material-icons">check</i><a href="{$link->getCategoryLink({$subcategory.id_category|escape:'htmlall':'UTF-8'})|escape:'htmlall':'UTF-8'}" title="{$subcategory.name|escape:'htmlall':'UTF-8'}">{$subcategory.name|escape:'htmlall':'UTF-8'}</a></li>
													{/foreach}
												</ul>
											{/if}
											{if $show_description}
		                                            <span class="des-cate">{$cat.description|strip_tags:'UTF-8'|truncate:{$limit_description|escape:'htmlall':'UTF-8'}|escape:'htmlall':'UTF-8'}</span>
		                                    {/if}

		                                    {if $show_shopnow}
		                                    	<div class="btn btn-shopnow"><a href="{$link->getCategoryLink({$cat.id_category|escape:'htmlall':'UTF-8'})|escape:'htmlall':'UTF-8'}" title="{l s='Shop Now!' mod='pspagebuilder'}"> <i class="material-icons">trending_flat</i></a></div>
		                                    {/if} 

										</div>
									{/if}
									

								</div>
								                             
							</div>
						</div>
					{/foreach}
				</div>		
			</div>
		</div>
	</div>
<!-- /Block categories module -->
{/if}

