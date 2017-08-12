{if !isset($product_style)}
	{$product_style = Configuration::get('PTS_CP_PRODUCT_STYLE')}
{/if}

{if !empty($items)}
<div class="boxcarousel  products_block carousel slide {if isset($class)} {$class} {/if}" id="{$tabname}">
	{if count($items)>4}
		<div class="carousel-controls">
		 	<a class="carousel-control left" href="#{$tabname}"   data-slide="prev"><span class="icon icon-angle-left"></span></a>
			<a class="carousel-control right" href="#{$tabname}"  data-slide="next"><span class="icon icon-angle-right"></span></a>
		</div>
	{/if}
	<div class="carousel-inner">
	{$mproducts=array_chunk($items,4)}
	{foreach from=$mproducts item=items name=mypLoop}
			<div class="product-special {if isset($class) && $class} {$class}{/if}{if isset($active) && $active == 1} active{/if} item {if $smarty.foreach.mypLoop.first}active{/if} ">
					<div class=" owl-wrapper row">
						{foreach from=$items item=product name=products}
							{if $smarty.foreach.products.first}
								<div class="col-xs-12 col-sm-8 col-md-8 first">
									<div class="owl-item ajax_block_product">
											{include file="$tpl_dir./sub/product/style-special.tpl" product=$product class=''}
									</div>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 last list1" >
									<div class="row">
							{else} 
										<div class="owl-item ajax_block_product col-xs-12 col-sm-12 col-md-12">
												{include file="$tpl_dir./sub/product/style-list.tpl" product=$product class=''}
										</div>
 									{if $smarty.foreach.products.last}
											</div>
										</div>
									{/if}
							{/if}					
						{/foreach}
				</div>
			</div>
	{/foreach}
	</div>
</div>
{/if}
{literal}
  <script type="text/javascript">
  $(document).ready(function() {
      $('#{/literal}{$tabname}'{literal}).each(function(){
          $(this).carousel({
              pause: 'true',
              interval: 118000
          });
      });
  });
  </script>
 {/literal}
