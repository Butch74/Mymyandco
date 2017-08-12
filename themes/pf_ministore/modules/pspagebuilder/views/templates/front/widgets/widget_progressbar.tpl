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
{if $prog_type}
	<div class="widget-progress-bar {$addition_cls|escape:'html':'UTF-8'} block {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
		{if isset($widget_heading)&&!empty($widget_heading)}
			<h4 class="title_block">
				{$widget_heading|escape:'html':'UTF-8'}
			</h4>
		{/if}
		<div class="widget-inner block_content">
				{if $success}
					{assign var=success value="|"|explode:"$success"}
					{if $prog_label}
			    	<div class="text-xs-center">{l s='Reticulating splines…' d='Shop.Theme'}{$success.1|escape:'html':'UTF-8'}%</div>
			    {/if}
					<progress class="progress {$prog_type|escape:'html':'UTF-8'} progress-{$success.0|escape:'html':'UTF-8'}" max="{$success.3|escape:'html':'UTF-8'}" value="{$success.1|escape:'html':'UTF-8'}" aria-valuemin="{$success.2|escape:'html':'UTF-8'}">
					</progress>
				{/if}	

				{if $info}
					{assign var=info value="|"|explode:"$info"}
					{if $prog_label}
			    	<div class="text-xs-center">{l s='Reticulating splines…' d='Shop.Theme'}{$info.1|escape:'html':'UTF-8'}%</div>
			    {/if}
					<progress class="progress {$prog_type|escape:'html':'UTF-8'} progress-{$info.0|escape:'html':'UTF-8'}" max="{$info.3|escape:'html':'UTF-8'}" value="{$info.1|escape:'html':'UTF-8'}" aria-valuemin="{$success.2|escape:'html':'UTF-8'}">
					</progress>
				{/if}				

				{if $warning}
					{assign var=warning value="|"|explode:"$warning"}
					{if $prog_label}
			    	<div class="text-xs-center">{l s='Reticulating splines…' d='Shop.Theme'}{$warning.1|escape:'html':'UTF-8'}%</div>
			    {/if}
					<progress class="progress {$prog_type|escape:'html':'UTF-8'} progress-{$warning.0|escape:'html':'UTF-8'}" max="{$warning.3|escape:'html':'UTF-8'}" value="{$warning.1|escape:'html':'UTF-8'}" aria-valuemin="{$success.2|escape:'html':'UTF-8'}">
					</progress>
				{/if}				
				{if $danger}
					{assign var=danger value="|"|explode:"$danger"}
					{if $prog_label}
			    	<div class="text-xs-center">{l s='Reticulating splines…' d='Shop.Theme'}{$danger.1|escape:'html':'UTF-8'}%</div>
			    {/if}
					<progress class="progress {$prog_type|escape:'html':'UTF-8'} progress-{$danger.0|escape:'html':'UTF-8'}" max="{$danger.3|escape:'html':'UTF-8'}" value="{$danger.1|escape:'html':'UTF-8'}" aria-valuemin="{$success.2|escape:'html':'UTF-8'}">
					</progress>
				{/if}
		</div>
	</div>
{/if}