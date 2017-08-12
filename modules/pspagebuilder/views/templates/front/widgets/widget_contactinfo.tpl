{*
* Pts Prestashop Theme Framework for Prestashop 1.6.x
*
* @package   pspagebuilder
* @version   5.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
<div class="block block-contactinfo">
	{if isset($widget_heading)&&!empty($widget_heading)}
		<h4 class="title_block">
			{$widget_heading|escape:'html':'UTF-8'}
		</h4>
	{/if}
	<div class="widget-wrap">
		<ul class="nav">
			{if isset($imageurl)&& $imageurl !=''}
				<li class="nav-item contact-banner">
					<img class="img-responsive" src="{$imageurl|escape:'html':'UTF-8'}" alt="">				
				</li>
			{/if}
			{if !empty($contactadress)}				
				<li class="nav-item contact-adress">
					{if !empty($iconadress) }
						<span class="adress-icon contact-icon"><i class="material-icons">{$iconadress|escape:'html':'UTF-8'}</i></span>
					{/if}
					{if !empty($contactadress) }
						<span class="adress">{$contactadress|escape:'html':'UTF-8'}</span>
					{/if}
				</li>
			{/if}			
			{if !empty($contactphone)}				
				<li class="nav-item contact-phone">
					{if !empty($iconphone) }
						<span class="phone-icon contact-icon"><i class="material-icons">{$iconphone|escape:'html':'UTF-8'}</i></span>
					{/if}
					
					<span class="phone">{$contactphone|escape:'html':'UTF-8'}</span>
					
				</li>
			{/if}		
			{if !empty($contactemail)}				
				<li class="nav-item contact-email">
					{if !empty($iconemail) }
						<span class="email-icon contact-icon"><i class="material-icons">{$iconemail|escape:'html':'UTF-8'}</i></span>
					{/if}
					
					<span class="email">{$contactemail|escape:'html':'UTF-8'}</span>
				</li>
			{/if}
		</ul>
	</div>
</div>

