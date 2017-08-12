{*
* Pts Prestashop Theme Framework for Prestashop 1.7.x
*
* @package   pspagebuilder
* @version   5.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2016 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}

	<a class="instagram {if $img_click_type == "i_link"}instagramlink{else}instagrampopup{/if}" href="{$item.link}" target="_blank" title="">
		<img href="{$item.images.low_resolution.url}"  class="{if $img_click_type != "i_link"}magnific_item{/if} img-fluid" src="{$item.images.standard_resolution.url}" alt="">
	</a>
							