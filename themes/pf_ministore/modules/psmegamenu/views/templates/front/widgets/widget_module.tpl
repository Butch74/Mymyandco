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
{if $content}
	<div class="widget widget-module {$addition_cls|escape:'html':'UTF-8'}">
		<div class="widget-inner">
			 {$content}{* HTML, cannot escape *}
		</div>
	</div>
{/if}