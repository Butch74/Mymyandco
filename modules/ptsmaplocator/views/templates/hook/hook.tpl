{*
* Pts Prestashop Theme Framework for Prestashop 1.6.x
*
* @package   ptsmaplocator
* @version   1.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
<div class="box ptsmaplocator">
    <h3 class="page-subheading">{l s='Map Locator' mod='ptsmaplocator'}</h3>
    <div class="box-content">
        {if !empty($pts_description)}
            <div class="description">
            {$pts_description nofilter}</div>
        {/if}
        <div class="maplocator">
            <div id="directory-main-bar-{$mod_id|escape:'htmlall':'UTF-8'}" class="gmap"></div>
        </div>
        
        <div class="box-shop">
            {if isset($pts_stores)}
                {assign var='i' value=0}
                {foreach $pts_stores as $key=>$location}
                    {math equation="x + y"  x=$i  y=1 assign=i}
                    <div class="item-location" id="location-{$location["id_store"]|escape:'htmlall':'UTF-8'}" data-id="shop{$i|escape:'htmlall':'UTF-8'}" data-lat="{$location["latitude"]|escape:'htmlall':'UTF-8'}" data-lon="{$location["longitude"]|escape:'htmlall':'UTF-8'}">
                        <div class="shop-title">
                            <i class="icon-map-marker"></i>{$location['name']|escape:'htmlall':'UTF-8'}
                        </div>
                        <div class="shop-address">{$location['address1']|escape:'htmlall':'UTF-8'}</div>
                    </div>
                {/foreach}
            {/if}
        </div>
    </div>
</div>

<script type="text/javascript">
var markers = {$markers nofilter};
var pts_height = {$pts_height|escape:'htmlall':'UTF-8'}
var mod_id = {$mod_id nofilter};
var store_json = {$store_json nofilter};
</script>
