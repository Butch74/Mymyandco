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
{if $categories_tabs}
<!-- Block categories module -->
<div class="block">
	
	<div class="widget-heading title_block">
		{if isset($widget_heading)&&!empty($widget_heading)}
			{$widget_heading|escape:'html':'UTF-8'}
		{/if}
		<ul id="catProductsTabs" class="cattabs float-sm-right">
		  {foreach $categories_tabs as $key=>$category}
			<li class="nav-item{if $key == 0} active{/if}">
				<a href="#cattab{$category.category_obj->id|escape:'html':'UTF-8'}" data-toggle="tab">
					{if $category.category_info && $category.category_info.icon_class}	
						<i class="material-icons">{$category.category_info.icon_class|escape:'html':'UTF-8'}</i>
					{elseif $category.category_info && $category.category_info.icon}
						<img src="{$category.category_info.icon|escape:'htmlall':'UTF-8'}" alt="{$category.category_obj->name|escape:'html':'UTF-8'}">
					{/if}
					<span>{$category.category_obj->name|escape:'html':'UTF-8'}</span>
				</a>
			</li>
		  {/foreach}
		</ul>	
	</div>
	

	<div class="block_content pts-tab">
		{if !empty($categories_tabs)} 
		<div id="catProductsTabsContent" class="tab-content">
			 {foreach $categories_tabs as $key=>$category}
				<div class="tab-pane{if $key == 0} active{/if}" id="cattab{$category.category_obj->id|escape:'html':'UTF-8'}">
					{assign var="tabname" value="categoriestabs_{$category.category_obj->id|escape:'html':'UTF-8'}"} 
					{if isset($display_mode) && $display_mode == 'carousel'}
						{include file="{$items_owl_carousel_tpl}" items=$category.products}
					{else}
						{include file="{$items_normal_tpl}" items=$category.products}
					{/if}
				</div>
			{/foreach}
			</div>
 
		{/if}
	</div>
</div>
<!-- /Block categories module -->
{/if}
