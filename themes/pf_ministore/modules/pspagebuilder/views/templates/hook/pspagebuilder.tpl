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
{$ime = time()}
<div id="pts{$prefix|escape:'html':'UTF-8'}{$time|escape:'html':'UTF-8'}" class="{$prefix|escape:'html':'UTF-8'} clearfix">
    {include file="$layout_tpl" rows=$layout}
</div>