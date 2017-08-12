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

<div  id="row-builder" class="popover bottom">
      <div class="arrow"></div>
      <div class="popover-title">{l s='Row Setting' mod='pspagebuilder'}<span class="wpo-close"></span></div>
      <div class="popover-content clearfix">
         <form action="" name="frmrow">
          <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#row-general" aria-controls="row-general" role="tab" data-toggle="tab">{l s='General' mod='pspagebuilder'}</a></li>
                  <li role="presentation"><a href="#row-adjustment" aria-controls="row-adjustment" role="tab" data-toggle="tab">{l s='Design' mod='pspagebuilder'}</a></li>
                   
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="row-general">
                          <div class="row-form">
                             
                                <div class="inpt-setting fly-buttons">
                                    <label> {l s='Background Color' mod='pspagebuilder'}:   </label>
                                    <input type="text" name="bgcolor" class="input-color"  data-hex="true"/>
                                  </div>  
                                <div class="inpt-setting fly-buttons">
                                <label> {l s='Image' mod='pspagebuilder'}: </label>
                                {$time = time()}
                                  <input type="text" name="bgimage" id="uploadimage{$time|escape:'html':'UTF-8'}" class="imageuploaded"/>
                                
                                </div>  
                                <div class="inpt-setting">
                                <label>{l s='Fullwidth' mod='pspagebuilder'}: </label>
                                 <select name="fullwidth">
                                    <option value="1">{l s='Yes' mod='pspagebuilder'}</option>
                                    <option value="0">{l s='No' mod='pspagebuilder'}</option>
                                 </select>
                                </div>

                                <div class="inpt-setting">
                                <label>{l s='Parallax Style' mod='pspagebuilder'}: </label>
                                 <select name="parallax">
                                    <option value="1">{l s='Yes' mod='pspagebuilder'}</option>
                                    <option value="0">{l s='No' mod='pspagebuilder'}</option>
                                 </select>
                                </div>

                                  <div class="inpt-setting">
                                    <label>
                                        {l s='Row Style' mod='pspagebuilder'}:
                                         <select name="sfxcls">
                                             {foreach from=$sfxclss.row item=clxrow name=clxrow}
                                                <option value="{$clxrow|escape:'html':'UTF-8'}">{$clxrow|escape:'html':'UTF-8'}</option>
                                            {/foreach}
                                         </select>
                                     </label>
                                 </div> 
                            </div>


                  </div>
                 
                  <div role="tabpanel" class="tab-pane" id="row-adjustment">
                       <div class="row-form">
                           <div class="inpt-setting">
                                <label> {l s='Class' mod='pspagebuilder'}: </label>
                                <input type="text" name="cls" />
                            </div> 

                            <div class="inpt-setting fly-buttons">
                                <label> {l s='Margin' mod='pspagebuilder'}:   </label>
                                <input type="text" name="margin" class="input-text"  data-hex="true"/>
                            </div>

                             <div class="inpt-setting fly-buttons">
                                <label> {l s='Padding' mod='pspagebuilder'}:   </label>
                                <input type="text" name="padding" class="input-text"  data-hex="true"/>
                            </div>

                      </div>  
                  </div>
                 
                </div>

          </div>

          <hr>
        
            <div class="inpt-setting">
               <button type="submit" class="btn btn-sm btn-primary">{l s='Save' mod='pspagebuilder'}</button>     
          </div>
                
          </form>
        </div>
 </div>     
    