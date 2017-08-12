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
<div class="feature-box  block  {$text_align|escape:'html':'UTF-8'}">

            <div class="fbox-content">  
                    {if isset($iconurl) && $iconfile}
                        <div class="fbox-image">    
                                
                            {if isset($linkurl) && $linkurl}
                             <a href="{$linkurl|escape:'html':'UTF-8'}" title="{if isset($widget_heading)&&!empty($widget_heading)}{$widget_heading|escape:'html':'UTF-8'}{/if}">
                            {/if}
                            <img class="fa" src="{$iconurl|escape:'html':'UTF-8'}" alt="{l s='icon' mod='pspagebuilder'}">  
                            {if isset($linkurl) && $linkurl}
                            </a>
                            {/if}
                  
                        </div>
                        {elseif $iconclass}
                         <div class="fbox-icon">    
                            {if isset($linkurl) && $linkurl}
                             <a href="{$linkurl|escape:'html':'UTF-8'}" title="{if isset($widget_heading)&&!empty($widget_heading)}{$widget_heading|escape:'html':'UTF-8'}{/if}">
                            {/if}
                                <i class="material-icons">{$iconclass|escape:'html':'UTF-8'}</i>
                            {if isset($linkurl) && $linkurl}
                            </a>
                            {/if}      
                        </div>
                    {/if}
                     <div class="fbox-body">   
                        {if isset($widget_heading)&&!empty($widget_heading)}
                            {if isset($linkurl) && $linkurl}
                                     <a href="{$linkurl|escape:'html':'UTF-8'}" title="{if isset($widget_heading)&&!empty($widget_heading)}{$widget_heading|escape:'html':'UTF-8'}{/if}">
                            {/if}

                                <h4 class="fbox-title">
                                    {$widget_heading|escape:'html':'UTF-8'}
                                </h4>
                            {if isset($linkurl) && $linkurl}
                                </a>
                            {/if}
                        {/if}
                        {if isset($sub_title)&& !empty($sub_title)}
                            <div class="subtitle">{$sub_title}</div>
                        {/if}

                  
                        {if isset($htmlcontent) && $htmlcontent}
                         <div class="description">{$htmlcontent}{* HTML, cannot escape *}</div>
                        {/if}
                    </div>    
                </div>  

</div>