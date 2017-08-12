<div id="_desktop_cart">
   <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
      <div class="header">
      {if $cart.products_count > 0}
        <a rel="nofollow" href="{$cart_url}">
      {/if}
        <span class="cart-label">{l s='My Cart' d='Shop.Theme.Checkout'}</span>
        <i class="fa fa-shopping-bag"></i>
        <span class="cart-products-count">{$cart.products_count}</span>
      {if $cart.products_count > 0}
        </a>
      {/if}
    </div>
      {if $cart.products_count > 0}
         <div class="ps_cartcontent hidden-md-down">
            <div class="wrapper">
                  {foreach from=$cart.products item='product'}
                     <div class="car-product clearfix">
                        <a href="{$product.url}" class="cart-image float-xs-left">
                           <img class="img-fluid" src = "{$product.cover.bySize.small_default.url}" alt = "{$product.cover.legend}" data-full-size-image-url = "{$product.cover.large.url}" >
                        </a>  
                        <h6 class="cart-name"><a href="{$product.url}" title="{$product.name}">{$product.name}</a></h6>
                        <span class="cart-quantity"><label>{l s='Qty:' d='Shop.Theme'}</label>{$product.quantity_wanted}</span>
                        <span class="cart-price price">{$product.price_tax_exc}</span>                           
                      </div>
                  {/foreach}
                  <div class="cart-group">
                     <div class="cart_shopping text-xs-right price clearfix"><label class="float-xs-left">{l s='Shipping' d='Shop.Theme'}</label>{$cart.subtotals.shipping.value}</div>
                     <div class="cart_total text-xs-right price clearfix"><label class="float-xs-left">{l s='Total' d='Shop.Theme'}</label>{$cart.totals.total.value}</div>
                     <div class="cart-buttons clearfix"><a rel="nofollow" href="{$cart_url}"> {l s='Check out' d='Shop.Theme'}</a></div>
                  </div>
            </div>
         </div>
      {/if}
   </div>
</div>
