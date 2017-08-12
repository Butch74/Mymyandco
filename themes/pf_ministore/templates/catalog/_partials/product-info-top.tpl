<div class="product-info-top" data-product="{$product.embedded_attributes|json_encode}">
  {block name='product_reference'}
    {if isset($product_manufacturer->id)}
      <div class="product-manufacturer">
        {if isset($manufacturer_image_url)}
          <label class="label">{l s='Brand:' d='Shop.Theme.Catalog'}</label>
          <span>
            <a href="{$product_brand_url}">{$product_manufacturer->name}</a>
          </span>
        {/if}
      </div>
    {/if}
    {if isset($product.reference_to_display)}
      <div class="product-reference">
        <label class="label">{l s='Reference:' d='Shop.Theme.Catalog'} </label>
        <span itemprop="sku">{$product.reference_to_display}</span>
      </div>
    {/if}
    {/block}
    {block name='product_quantities'}
      {if $product.show_quantities}
        <div class="product-quantities">
          <label class="label">{l s='In stock:' d='Shop.Theme.Catalog'}</label>
          <span>{$product.quantity} {$product.quantity_label}</span>
        </div>
      {/if}
    {/block}
    {block name='product_availability_date'}
      {if $product.availability_date}
        <div class="product-availability-date">
          <label>{l s='Availability date:' d='Shop.Theme.Catalog'} </label>
          <span>{$product.availability_date}</span>
        </div>
      {/if}
    {/block}
    {block name='product_out_of_stock'}
      <div class="product-out-of-stock">
        {hook h='actionProductOutOfStock' product=$product}
      </div>
    {/block}

    {block name='product_condition'}
      {if $product.condition}
        <div class="product-condition">
          <label class="label">{l s='Condition' d='Shop.Theme.Catalog'} </label>
          <link itemprop="itemCondition" href="{$product.condition.schema_url}"/>
          <span>{$product.condition.label}</span>
        </div>
      {/if}
    {/block}
</div>
