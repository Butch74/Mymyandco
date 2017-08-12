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

{if $PS_SC_TWITTER || $PS_SC_FACEBOOK || $PS_SC_GOOGLE || $PS_SC_PINTEREST}
<div class="widget-socialshare block {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<div class="widget-heading title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</div>
	{/if}
	<div class="widget-inner block_content">
		<p class="ptssocialsharing_product list-inline no-print">
			{if $PS_SC_TWITTER}
				<button type="button" class="btn btn-twitter" onclick="ptssocialsharing_twitter_click('{$pagename|addslashes|escape:'html':'UTF-8'} {$pagelink|addslashes|escape:'html':'UTF-8'}');">
					<i class="icon-twitter"></i> <span>Tweet</span>
				</button>
			{/if}
			{if $PS_SC_FACEBOOK}
				<button type="button" class="btn btn-facebook" onclick="ptssocialsharing_facebook_click();">
					<i class="icon-facebook"></i><span> facebook</span>
				</button>
			{/if}
			{if $PS_SC_GOOGLE}
				<button type="button" class="btn btn-google-plus" onclick="ptssocialsharing_google_click();">
					<i class="icon-google-plus"></i> <span>Google+</span>
				</button>
			{/if}
			{if $PS_SC_PINTEREST}
				<button type="button" class="btn btn-pinterest" onclick="ptssocialsharing_pinterest_click();">
					<i class="icon-pinterest"></i> <span>Pinterest</span>
				</button>
			{/if}
		</p>
	</div>
</div>
{/if}