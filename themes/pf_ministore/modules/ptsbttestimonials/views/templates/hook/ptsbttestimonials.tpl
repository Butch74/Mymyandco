{*
* Pts Prestashop Theme Framework for Prestashop 1.7.x
*
* @package   ptsbttestimonials
* @version   1.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
<div id="ptsbttestimonials{$ptsbttestimonials_modid|escape:'htmlall':'UTF-8'}" class=" ptsbttestimonials boxcarousel owl-carousel-play" data-ride="owlcarousel" >
	{if count($get_testimonials) > 1}
		<div class="carousel-controls">
            <a class="carousel-control left" href="#ptsbttestimonials{$ptsbttestimonials_modid|escape:'htmlall':'UTF-8'}" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#ptsbttestimonials{$ptsbttestimonials_modid|escape:'htmlall':'UTF-8'}" data-slide="next">&rsaquo;</a>
        </div>
	{/if}
	
	<div class="owl-carousel grid"  data-columns="1" data-pagination="false" data-navigation="true" data-desktop="[1200,1]" data-desktop="[1200,1]" data-desktopsmall="[992,1]" data-tablet="[768,1]" data-mobile="[480,1]" >
		{foreach from=$get_testimonials item=test name=testimonial}
			<div class="{if isset($active) && $active == 1} active{/if} item {if $smarty.foreach.testimonial.first}active{/if}">

				{if $test.name  || $test.content}
					<div class="testimonials-body">
						<div class="testimonials-quote">{$test.content nofilter}</div>
						
						<div class="testimonials-profiles">
							<div class="testimonials-profile">
			                	<h4 class="name">{$test.name|escape:'htmlall':'UTF-8'}</h4>
			                    <!-- <div class="job">{$test.address|escape:'htmlall':'UTF-8'}</div> -->
			                </div>
			            </div>
						
					</div>
				{/if}

			</div>
		{/foreach}
	</div>

	<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none'
		});
	});
	</script>

</div>