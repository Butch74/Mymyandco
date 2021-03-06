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


{if $testimonials}

<!-- Block categories module -->
<div class="block {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<div class="widget-heading title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</div>
	{/if}
	<div class="widget-inner block_content clearfix">
		{if isset($display_mode) && $display_mode == 'carousel'}
			{include file="{$items_owl_carousel_tpl}" items=$testimonials}
		{else}
			{include file="{$items_normal_tpl}" items=$testimonials}
		{/if}

	</div>
</div>
<!-- /Block categories module -->
{/if}

