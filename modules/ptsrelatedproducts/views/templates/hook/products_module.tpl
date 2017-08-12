{if !isset($product_style)}
	{$product_style = Configuration::get('PTS_CP_PRODUCT_STYLE')}
{/if}
<div class="{if isset($carousel_style) && $carousel_style} {$carousel_style}{/if} widget-content owl-carousel-play" data-ride="owlcarousel">
 	{if count($items) > $carousel_item}
	 	<div class="carousel-controls">
		 	<a class="left carousel-control left_carousel" href="#">
		 		<span class="fa  fa-angle-left "></span>
		 	</a>
			<a class="right carousel-control right_carousel" href="#">
				<span class="fa fa-angle-right"></span>
			</a>
		</div>
	{/if}
	<div class="owl-carousel {if isset($class) && $class} {$class}{/if} {if isset($list_mode) && $list_mode}{$list_mode|escape:'html':'UTF-8'}{/if}" data-columns="{$carousel_item|escape:'html':'UTF-8'}" data-pagination="false" data-navigation="true"
		{if isset($nbr_desktops)}data-desktop="[1200,{$nbr_desktops|escape:'html':'UTF-8'}]"{/if}
		{if isset($nbr_tablets)}data-tablet="[768,{$nbr_tablets|escape:'html':'UTF-8'}]"{/if}
		{if isset($nbr_mobile)}data-mobile="[768,{$nbr_mobile|escape:'html':'UTF-8'}]"{/if} >
		{foreach from=$items item=item name=item_name}
			<div class="item">
				{if isset($is_pagebuilder)}
					{include file="modules/ptsrelatedproducts/views/templates/hook/{$list_mode_tpl}" product=$item}
				{else}
					{if isset($product_style) && !empty($product_style)}
						{block name='product_miniature'}
              {include file='modules/ptsrelatedproducts/views/templates/hook/{$product_style}.tpl' product=$item class=''}
            {/block}
					{else}
						{block name='product_miniature'}
							{include file="modules/ptsrelatedproducts/views/templates/hook/style1.tpl" product=$item class=''}
						{/block}
					{/if}
				{/if}
			</div>
		{/foreach}
	</div>
</div>