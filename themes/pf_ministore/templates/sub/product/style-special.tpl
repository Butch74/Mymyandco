{if !empty($products)}
	<div class="product-block clearfix" >
		<div class="product-container row" itemscope="" itemtype="https://schema.org/Product">
			<div class="product-image-container image col-xs-12 col-sm-7">
				<a class="img product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
					<img class="replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" />
					{if isset($iteration)}<span class="hidden count">{$iteration}</span>{/if}
				</a>					
			</div>
      <div class="product-content col-xs-12 col-sm-5">
        {hook h='displayProductListReviews' product=$product}
        <h4 class="name media-heading" itemprop="name">
           {if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}
						<a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >
							{$product.name|truncate:45:'...'|escape:'html':'UTF-8'}
						</a>
        </h4>
        {if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
					<div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="content_price price">
						{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
							<span itemprop="price" class="product-price {if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}new-price {/if}">
								{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
							</span>
							{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
								<span class="old-price">
									{displayWtPrice p=$product.price_without_reduction}
								</span>
								
							{/if}
							<meta itemprop="priceCurrency" content="{$priceDisplay}" />								
						{/if}
					</div>
				{/if}
        <div class="product-description description">{$product.description_short|strip_tags:'UTF-8'|truncate:140:'...'}</div>
        {if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.customizable != 2 && !$PS_CATALOG_MODE}
					<div class="addtocart clearfix">
						{if (!isset($product.customization_required) || !$product.customization_required) && ($product.allow_oosp || $product.quantity > 0)}
							{capture}add=1&amp;id_product={$product.id_product|intval}{if isset($static_token)}&amp;token={$static_token}{/if}{/capture}
							<a class="button ajax_add_to_cart_button btn btn-lg btn-default" href="{$link->getPageLink('cart', true, NULL, $smarty.capture.default, false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}" data-minimal_quantity="{if isset($product.product_attribute_minimal_quantity) && $product.product_attribute_minimal_quantity >= 1}{$product.product_attribute_minimal_quantity|intval}{else}{$product.minimal_quantity|intval}{/if}">
								{l s='Add to cart'}
							</a>
						{else}
							<a class="button ajax_add_to_cart_button btn-lg btn btn-default disabled"  title="{l s='Add to cart'}" href="#">
								{l s='Add to cart'}
							</a>
						{/if}
					</div>
				{/if}
    	</div>					
		</div><!-- .product-container> -->
	</div>				
{/if}