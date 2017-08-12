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

{if isset($products) && !empty($products)}
<div class="widget-products {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if} block-highlighted block">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</h4>
	{/if}
	{$key=rand()}
	<div class="pts-flashsale-{$key|escape:'html':'UTF-8'} pts-flashsale"></div>
	<div class="widget-inner block_content">
		{if isset($products) AND $products}
	 		{$tabname=rand()+count($products)}
			{if isset($display_mode) && $display_mode == 'carousel'}
				{include file="{$items_owl_carousel_tpl}" items=$products}
			{else}
				{include file="{$items_normal_tpl}" items=$products}
			{/if}
		{/if}
	</div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".pts-flashsale-{$key|escape:'html':'UTF-8'}").lofCountDown({
            TargetDate:"{$dates.month|escape:'html':'UTF-8'}/{$dates.day|escape:'html':'UTF-8'}/{$dates.year|escape:'html':'UTF-8'} {$dates.hour|escape:'html':'UTF-8'}:{$dates.minute|escape:'html':'UTF-8'}:{$dates.seconds|escape:'html':'UTF-8'}",
            DisplayFormat:"<ul><li><div class=\"countdown_num\">%%D%% </div><div>{l s='Days' d='Shop.Theme'}</div></li><li><div class=\"countdown_num\">%%H%% </div><div>{l s='Hours' d='Shop.Theme'}</div></li><li><div class=\"countdown_num\">%%M%%</div> <div>{l s='Minutes' d='Shop.Theme'}</div></li><li><div class=\"countdown_num\">%%S%%</div><div> {l s='Seconds' d='Shop.Theme'}</div></li></ul>",
            FinishMessage: ""
        });
    });
</script>
{/if}