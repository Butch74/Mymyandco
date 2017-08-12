<article class="product-miniature js-product-miniature {if Configuration::get('PTS_CP_PRODUCT_LAYOUT') == 'swap'}swap-image{/if}" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="left-block">
      <div class="product-image-container image">
        {block name='product_thumbnail'}
          <a href="{$product.url}" class="thumbnail product-thumbnail">
            <img src = "{$product.cover.bySize.home_default.url}" alt = "{$product.cover.legend}" data-full-size-image-url = "{$product.cover.large.url}" >
          </a>
        {/block}
        {hook h='displayProductListSwap' product=$product}
      </div>

      {block name='product_flags'}
        <ul class="product-flags">
          {foreach from=$product.flags item=flag}
            <li class="{$flag.type}"><span>{$flag.label}</span></li>
          {/foreach}
        </ul>
      {/block}

      {block name='product_list_actions'}
        <div class="product-list-actions">
          <div>
          <div class="add-to-cart">
            {if $product.add_to_cart_url && isset($configuration) && !$configuration.is_catalog && $product.availability != 'unavailable'}
              <form action="{$urls.pages.cart}" method="post">
                  <input type="hidden" name="token" value="{$static_token}">
                  <input type="hidden" name="id_product" value="{$product.id}">
                  <button
                    class="btn add-to-cart {if $product.availability == 'unavailable'}disabled{/if}"
                    data-button-action="add-to-cart"
                    type="submit"
                    title = "{if {$product.availability} == 'available' }{l s='Add to cart' d='Shop.Theme.Actions'}{else}{$product.availability_message}{/if}"
                  >
                    <i class="fa  fa-shopping-bag"></i>
                  </button>
                </form>
              {else}
                  <a
                    class = "add-to-cart {if $product.availability == 'unavailable'}disabled{/if}"
                    href  = "{$product.url}"
                    rel   = "nofollow"
                    title = "{$product.availability_message}"
                  ><i class="material-icons">file_download</i></a>
              {/if}
           
          </div>

          <div class="quick-view">
            <a href="#"  data-link-action="quickview" title="{l s='Quick view' d='Shop.Theme'}">
              <i class="fa fa-eye"></i>
            </a>
          </div>
          
          <div class="zoom">
            <a class="open-popup-link magnific_item" title="{$product.name}" href="{$product.cover.large.url}" target="_blank"><i class="material-icons zoom-in">zoom_in</i></a>
          </div>
          
          {hook h='displayProductListFunctionalButtons' product=$product}
        </div>
        </div>
      {/block}
    </div>
    <div class="right-block product-description  clearfix">
      <div class="product-meta">
        {block name='product_name'}
          <h4 class="product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h4>
        {/block}
      </div>

      {block name='product_variants'}
        {if $product.main_variants}
          {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
        {/if}
      {/block}
      {if $product.show_price}
        {block name='product_price_and_shipping'}
          <div class="product-price-and-shipping">
            {if $product.has_discount}
              {hook h='displayProductPriceBlock' product=$product type="old_price"}

              <span class="regular-price">{$product.regular_price}</span>
              
              <!-- {if $product.discount_type === 'percentage'}
                <span class="discount-percentage">{$product.discount_percentage}</span>
              {/if} -->
              
            {/if}

            {hook h='displayProductPriceBlock' product=$product type="before_price"}

            <span itemprop="price" class="price">{$product.price}</span>

            {hook h='displayProductPriceBlock' product=$product type='unit_price'}

            {hook h='displayProductPriceBlock' product=$product type='weight'}
          </div>
        {/block}
      {/if}

      {block name='product_description_short'}
        <div class="product-description-short" itemprop="description">{$product.description_short nofilter}</div>
      {/block}

      {block name='product_availability'}
        {if $product.show_availability}
          {* availability may take the values "available" or "unavailable" *}
          <span class="product-availability {$product.availability}">{$product.availability_message}</span>
        {/if}
      {/block}


      {if isset($product.js)}
          <div class="pts-countdown-{$product.id_product|escape:'html':'UTF-8'} item-countdown">
              {if $product.js == 'unlimited'}<div class="labelexpired">{l s='Unlimited' d='Shop.Theme'}</div>{/if}
          </div>
          {if $product.js != 'unlimited'} 
              <script type="text/javascript">
                  {literal}
                  jQuery(document).ready(function($) {{/literal}
                      $(".pts-countdown-{$product.id_product|escape:'html':'UTF-8'}").lofCountDown({literal}{{/literal}
                          TargetDate:"{$product.js.month|escape:'html':'UTF-8'}/{$product.js.day|escape:'html':'UTF-8'}/{$product.js.year|escape:'html':'UTF-8'} {$product.js.hour|escape:'html':'UTF-8'}:{$product.js.minute|escape:'html':'UTF-8'}:{$product.js.seconds|escape:'html':'UTF-8'}",
                          DisplayFormat:"<div><div><div class=\"countdown_num\">%%D%% </div><span>{l s='Days'}</span></div><div><div class=\"countdown_num\">%%H%% </div><span>{l s='Hrs'}</span></div><div><div class=\"countdown_num\">%%M%%</div> <span>{l s='Mins'}</span></div><div><div class=\"countdown_num\">%%S%%</div><span> {l s='Secs'}</span></div></div>",
                          FinishMessage: "{$product.finish|escape:'html':'UTF-8'}"
                      {literal}
                      });
                  });
                  {/literal}
              </script>
          {/if}
      {/if}

    </div>
  </div>
</article>
