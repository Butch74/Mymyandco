{if !empty($products)}
  <article class="product-miniature {if Configuration::get('PTS_CP_PRODUCT_LAYOUT') == 'swap'}swap-image{/if} js-product-miniature media" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container ">
    <div class="left-block float-xs-left">
      <div class="product-image-container image">
        {block name='product_thumbnail'}
          <a href="{$product.url}" class="thumbnail product-thumbnail">
            <img src = "{$product.cover.bySize.medium_default.url}" alt = "{$product.cover.legend}" data-full-size-image-url = "{$product.cover.small.url}" >
          </a>
        {/block}
        {hook h='displayProductListSwap' product=$product}
      </div>
    </div>
    <div class="right-block product-description  clearfix media-right">
      <div class="product-meta">
        {block name='product_name'}
          <h4 class="product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h4>
        {/block}
        {if $product.show_price}
          {block name='product_price_and_shipping'}
            <div class="product-price-and-shipping">
              {hook h='displayProductPriceBlock' product=$product type="before_price"}
              <span itemprop="price" class="price">{$product.price}</span>
              {if $product.has_discount}
                  {hook h='displayProductPriceBlock' product=$product type="old_price"}
                  <span class="regular-price">{$product.regular_price}</span>
              {/if}
                 
              {hook h='displayProductPriceBlock' product=$product type='unit_price'}
              {hook h='displayProductPriceBlock' product=$product type='weight'}
              
            </div>
          {/block}
        {/if}
      </div>

      <div class="quick-view">
        <a href="#"  data-link-action="quickview" title="{l s='Quick view' d='Shop.Theme'}">
          <span>{l s='Quick view' d='Shop.Theme'}</span>
        </a>
      </div>

      {block name='product_description_short'}
        <div class="product-description-short" itemprop="description">{$product.description_short nofilter}</div>
      {/block}
    </div>
  </div>
</article>

{/if}