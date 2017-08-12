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

<div class="widget-social block {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<div class="widget-heading title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</div>
	{/if}
	<div class="widget-inner block_content">
		<ul class="bo-social-icons">
			{if $facebook_url != ''}<li class="facebook"><a class="_blank" href="{$facebook_url|escape:'html':'UTF-8'}"><i class="bo-social-facebook fa fa-facebook"></i><span>{l s='Facebook' d='Shop.Theme'}</span></a></li>{/if}
			{if $twitter_url != ''}<li class="twitter"><a class="_blank" href="{$twitter_url|escape:'html':'UTF-8'}"><i class="bo-social-twitter fa fa-twitter"></i><span>{l s='Twitter' d='Shop.Theme'}</span></a></li>{/if}
			{if $rss_url != ''}<li class="rss"><a class="_blank" href="{$rss_url|escape:'html':'UTF-8'}"><i class="bo-social-rss fa fa-rss"></i><span>{l s='RSS' d='Shop.Theme'}</span></a></li>{/if}
			{if $youtube_url != ''}<li class="youtube"><a class="_blank" href="{$youtube_url|escape:'html':'UTF-8'}"><i class="bo-social-youtube fa fa-youtube"></i><span>{l s='YouTube' d='Shop.Theme'}</span></a></li>{/if}
			{if $google_plus_url != ''}<li class="google_plus"><a class="_blank" href="{$google_plus_url|escape:'html':'UTF-8'}"><i class="bo-social-google fa fa-google-plus"></i><span>{l s='Google+' d='Shop.Theme'}</span></a></li>{/if}
			{if $pinterest_url != ''}<li class="pinterest"><a class="_blank" href="{$pinterest_url|escape:'html':'UTF-8'}"><i class="bo-social-pinterest fa fa-pinterest-p"></i><span>{l s='Pinterest' d='Shop.Theme'}</span></a></li>{/if}
			{if $vimeo_url != ''}<li class="vimeo"><a href="{$vimeo_url|escape:'html':'UTF-8'}"><i class="bo-social-vimeo fa fa-vimeo"></i><span>{l s='Vimeo' d='Shop.Theme'}</span></a></li>{/if}
			{if $instagram_url != ''}<li class="instagram"><a class="_blank" href="{$instagram_url|escape:'html':'UTF-8'}"><i class="bo-social-instagram fa fa-instagram"></i><span>{l s='Instagram' d='Shop.Theme'}</span></a></li>{/if}
		</ul>
	</div>
</div>