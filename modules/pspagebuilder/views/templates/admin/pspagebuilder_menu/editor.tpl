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
<script type="text/javascript">
    if (current_id_tab === undefined) {
      var current_id_tab = '';
    }
</script>
<div class="bootstrap">
{if isset($export_msg) && $export_msg}
  <div class="alert alert-success">
    <button data-dismiss="alert" class="close" type="button">×</button>
    {$export_msg|escape:'html':'UTF-8'}
  </div>
{/if}
<div class="pagebuilder-editor"> 
        
        <div id="othertoolpanel" style="display:none" class="container"><form action="{$profile_link|escape:'html':'UTF-8'}" method="post" enctype="multipart/form-data" id="submitpspagebuilderImport">
          <div class="panel panel-default">
            <div class="panel-heading">{l s='Profiles Tools' mod='pspagebuilder'}</div>
            <div class="panel-body">

                <div class="alert alert-info">
                  {l s='Import a profile layout, please select a file and put its profile name' mod='pspagebuilder'}
                </div>

            
                  <div class="form-group clearfix">
                    <label for="condition" class="control-label col-lg-3">   
                        {l s='Profile Name' mod='pspagebuilder'}
                    </label>
                    <div class="col-lg-3">
                      <input type="text" name="import_name" />
                    </div>
                  </div>
                  <div class="form-group"> 
                    <label for="condition" class="control-label col-lg-3">   
                        {l s='Select A File:' mod='pspagebuilder'} 
                    </label>
                    <div class="col-lg-3">
                          <input type="file" name="import_file"/>
                    </div>
                  </div>  
               
            </div>
            <div class="panel-footer">
                <button class="btn btn-default pull-left" name="submitpspagebuilderImport" type="submit"><i class="process-icon-save"></i> {l s='Import' mod='pspagebuilder'}</button>
            </div>

          </div> </form>  
        </div>


        <form action="{$savelayout|escape:'html':'UTF-8'}" method="post"   id="frmsavealll">
        
   
        <div id="screenview" class="container"><div class="row">

             
               <div class="col-lg-3"> <div class="screenview-title">{l s='Design In:' mod='pspagebuilder'}</div>
                 <div class="btn-group button-alignments">
                    <button  class="btn btn-default active ptstooltip" data-option="large-screen" type="button" data-toggle="tooltip" data-placement="top" title="Large Devices, Wide Screens"><span class="icon icon-desktop"></span></button>
                    <button  class="btn btn-default ptstooltip" data-option="medium-screen" type="button" data-toggle="tooltip" data-placement="top" title="Medium Devices, Desktops"><span class="icon icon-laptop"></span></button>
                    <button   class="btn btn-default ptstooltip"  data-option="tablet-screen" type="button" data-toggle="tooltip" data-placement="top" title="Small Devices, Tablets"> <span class="icon icon-tablet"></span></button>
                    <button  class="btn btn-default ptstooltip"  data-option="mobile-screen"  type="button" data-toggle="tooltip" data-placement="top" title="Extra Small Devices, Phones"><span class="icon icon-mobile"></span> </button>
                  </div> 
                </div>
                <div class="col-lg-2">
                  <div>{l s='Enable Grid' mod='pspagebuilder'}</div>
                  <div>
                    <div class="btn-group button-enablegrid">
                      <button  class="btn btn-default " onclick="$('#layout-builder').addClass('grid-editor');"  type="button"><span class="icon icon-check-square"></span></button>
                      <button  class="btn btn-default " onclick="$('#layout-builder').removeClass('grid-editor');"  type="button"><span class="icon icon-check-square-o"></span></button>
                    </div> 
                  </div>
                </div>

                  <div class="col-lg-6 pull-right">
                  
                   <div class="input-group pull-left">
                      <div>{l s='Profile Name:' mod='pspagebuilder'} 
                         <a title="{l s='Click This To Set Active' mod='pspagebuilder'}" class="setdefault pull-right {if $profile->isDefault()}active{/if}" href="{$profile_link|escape:'html':'UTF-8'}&id_pagebuilderprofile={$profile->id|escape:'html':'UTF-8'}&setdefault=1&ajax=true" data-id="{$profile->id|escape:'html':'UTF-8'}"> <span class="icon-star"></span></a>
                      </div>
                      <input type="text" name="name" class="form-control" size="25" value="{$profile->name|escape:'html':'UTF-8'}">

                  </div>

                    <div class="pull-right">
                       <input type="hidden" name="savelayoutbuilder" value="1">
                       <input type="hidden" name="id_pagebuilderprofile" value="{$id_pagebuilderprofile|escape:'html':'UTF-8'}">
                        <div>{l s='Switch To A Profile:' mod='pspagebuilder'}</div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                         <span class="icon-rocket"></span> {l s='Layout Profiles:' mod='pspagebuilder'}   <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" id="listprofiles" role="menu">
                          <li class="clearfix">
                            <a href="{$profile_link|escape:'html':'UTF-8'}">{l s='Create New A Profile' mod='pspagebuilder'}</a>
                          </li>

                         {foreach from=$profiles item=item name=profile}
                          <li class="clearfix {if $id_pagebuilderprofile==$item.id}active{/if}">  
                            <a s='Click This To Set Active' {if $id_pagebuilderprofile==$item.id}class="active"{/if} href="{$profile_link|escape:'html':'UTF-8'}&id_pagebuilderprofile={$item.id|escape:'html':'UTF-8'}">{$item.name|escape:'html':'UTF-8'}</a>
                             <a {l s='Click This To Set Active' mod='pspagebuilder'} class="setdefault pull-right {if $item.isdefault}active{/if}" href="{$profile_link|escape:'html':'UTF-8'}&id_pagebuilderprofile={$item.id|escape:'html':'UTF-8'}&setdefault=1&ajax=true" data-id="{$item.id|escape:'html':'UTF-8'}"> <span class="icon-star"></span></a>
                            <a  title="{l s='Delete This' mod='pspagebuilder'}" class="delete pull-right" href="{$profile_link|escape:'html':'UTF-8'}&id_pagebuilderprofile={$item.id|escape:'html':'UTF-8'}" data-id="{$item.id|escape:'html':'UTF-8'}"> <span class="icon-trash"></span></a>
                          </li>
                         {/foreach}
                        </ul>
                      </div>

                      <div class="pull-right">
                        <div> <button onclick="$('#othertoolpanel').toggle();" type="button" id="othertool" class="btn btn-default">
                          <span class="icon-wrench"></span> {l s='Tools' mod='pspagebuilder'}</button>
                        </div>
                      </div>

                    </div>  
                  </div>

           </div></div>

      
        <hr>
        {if !$moduleInShop && $profile->id}
            <div class="alert alert-warning">
                <button data-dismiss="alert" class="close" type="button"></button>
                {l s='This profile has not saved with this shop yet. If you want use this profile for this shop, you need click to "Save Layout Profile" button.' mod='pspagebuilder'}
            </div>
          {/if}
          <div class="layout-builder-wrapper">
              
                <div id="layout-builder">
                <div class="inner"></div>

                <ul class="suggess-add-row-tools suggess-row-container">
                    <li>
                      <div  class="heading"> {l s='Add Row' mod='pspagebuilder'} </div>
                    </li>  
                    <li class="add-row sg-row ptstooltip" data-columns="12|0|0" data-toggle="tooltip" data-placement="bottom" title="Add 1 Column In Row">
                        <div class="col-width col-width-30"></div>
                    </li> 
                    
                    <li class="add-row sg-row ptstooltip" data-columns="6|6|0" data-toggle="tooltip" data-placement="bottom" title="Add 2 Column In Row">
                        <div class="col-width col-width-15"></div>
                        <div class="col-width col-width-15"></div>
                    </li> 

                    <li class="add-row sg-row ptstooltip" data-columns="4|4|4" data-toggle="tooltip" data-placement="bottom" title="Add 3 Column In Row">
                        <div class="col-width col-width-10"></div>
                        <div class="col-width col-width-10"></div>
                        <div class="col-width col-width-10"></div>
                    </li> 

                     <li class="add-row sg-row ptstooltip" data-columns="3|3|3|3" data-toggle="tooltip" data-placement="bottom" title="Add 4 Column In Row">
                        <div class="col-width col-width-5"></div>
                        <div class="col-width col-width-5"></div>
                        <div class="col-width col-width-5"></div>
                        <div class="col-width col-width-5"></div>
                    </li> 

                    <li class="add-row sg-row ptstooltip" data-columns="4|8" data-toggle="tooltip" data-placement="bottom" title="Add 4 Column In Row">
                        <div class="col-width col-width-10"></div>
                        <div class="col-width col-width-30"></div>
                    </li> 

                     <li class="add-row sg-row ptstooltip" data-columns="8|4" data-toggle="tooltip" data-placement="bottom" title="Add 4 Column In Row">
                        <div class="col-width col-width-30"></div>
                        <div class="col-width col-width-10"></div>
                    </li> 


                </ul> 
              </div>
              
          </div>    
      
        </form>
       </div>

  
          
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
                                         <div class="row">
                                              <div class="inpt-setting col-sm-4 fly-buttons">
                                                  <label> {l s='Background Color' mod='pspagebuilder'}:   </label>
                                                  <div class="inpt-setting-color">
                                                   <input type="text" name="bgcolor" class="input-color"  data-hex="true"/>
                                                 </div>
                                              </div>  

                                            <div class="inpt-setting col-sm-4 fly-buttons">
                                                <label> {l s='Text Color' mod='pspagebuilder'}:   </label>
                                                <div class="inpt-setting-color">
                                                  <input type="text" name="textcolor" class="input-color"  data-hex="true"/>
                                               </div>
                                            </div>  

                                              <div class="inpt-setting col-sm-4 fly-buttons">
                                                <label> {l s='Font Size' mod='pspagebuilder'}:   </label>
                                                <input type="text" name="fontsize" class="auto-correct" data-suffix="cm"  data-hex="true"/>
                                            </div>  
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
                                              <label> {l s='Class' mod='pspagebuilder'}: </label>
                                              <input type="text" name="cls" />
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
                                      

                                        <div class="inpt-setting fly-buttons">
                                            <p> <label> {l s='Margin' mod='pspagebuilder'}:   </label> </p>
                                            <div class="box-alignment">
                                                <input type="text" name="margin[top]"    class="input-text auto-correct i-top" data-suffix="px" data-hex="true"/>
                                                 <input type="text" name="margin[right]"  class="input-text auto-correct i-right" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="margin[bottom]" class="input-text auto-correct i-bottom" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="margin[left]"   class="input-text auto-correct i-left" data-suffix="px" data-hex="true"/>
                                               
                                            </div>    
                                        </div>

                                        <div class="inpt-setting fly-buttons">
                                            <p><label> {l s='Padding' mod='pspagebuilder'}:   </label> </p>
                                            <div class="box-alignment">
                                                <input type="text" name="padding[top]"    class="input-text auto-correct i-top" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="padding[right]"  class="input-text auto-correct i-right" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="padding[bottom]" class="input-text auto-correct i-bottom" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="padding[left]"   class="input-text auto-correct i-left" data-suffix="px" data-hex="true"/>
                                               
                                            </div>   
                                        </div>

                                       

                                        <div class="inpt-setting fly-buttons">
                                            <p><label> {l s='Border' mod='pspagebuilder'}:   </label> </p>
                                            <div class="row">
                                                <div class="col-sm-4"> <input type="text" name="border[width]"    class="input-text auto-correct" data-suffix="px" data-hex="true"/></div> 
                                                <div class="col-sm-4"> 
                                                  <select  name="border[type]" >
                                                            <option value="">{l s='None' mod='pspagebuilder'}</option>
                                                            <option value="hidden">{l s='hidden' mod='pspagebuilder'}</option>
                                                            <option value="dotted">{l s='dotted' mod='pspagebuilder'}</option>
                                                            <option value="dashed">{l s='dashed' mod='pspagebuilder'}</option>
                                                            <option value="solid">{l s='solid' mod='pspagebuilder'}</option>
                                                            <option value="double">{l s='double' mod='pspagebuilder'}</option>
                                                            <option value="groove">{l s='groove' mod='pspagebuilder'}</option>
                                                            <option value="ridge">{l s='ridge' mod='pspagebuilder'}</option>
                                                            <option value="inset">{l s='inset' mod='pspagebuilder'}</option>
                                                            <option value="outset">{l s='outset' mod='pspagebuilder'}</option>
                                                            <option value="inherit">{l s='inherit' mod='pspagebuilder'}</option>
                                                  </select>
                                                 

                                                </div> 
                                                <div class="col-sm-4">
                                                  <div class=" inpt-setting-color"> 
                                                  <input type="text" name="border[color]" class="input-color" data-suffix="px" data-hex="true"/></div> 
                                                </div>
                                            </div>   
                                        </div>
                                          <div class="inpt-setting fly-buttons">
                                            <p><label> {l s='Border Radius' mod='pspagebuilder'}:   </label> </p>
                                            <div class="box-alignment">
                                                <input type="text" name="bradius[top]"    class="input-text auto-correct i-top" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="bradius[right]"  class="input-text auto-correct i-right" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="bradius[bottom]" class="input-text auto-correct i-bottom" data-suffix="px" data-hex="true"/>
                                                <input type="text" name="bradius[left]"   class="input-text auto-correct i-left" data-suffix="px" data-hex="true"/>
                                               
                                            </div>   
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
    

 

  
          <div id="col-builder"  class="popover right">
            <div class="arrow"></div>
            <div class="popover-title">{l s='Column Setting' mod='pspagebuilder'} <span class="wpo-close"></span></div>
                   <div class="popover-content clearfix">
                   <form action="" name="frmcol">

                       <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#col-general" aria-controls="col-general" role="tab" data-toggle="tab">{l s='General' mod='pspagebuilder'}</a></li>
                              <li role="presentation"><a href="#col-adjustment" aria-controls="col-adjustment" role="tab" data-toggle="tab">{l s='Design' mod='pspagebuilder'}</a></li>
                               
                            </ul>

                            <div class="tab-content">

                                  <div role="tabpanel" class="tab-pane active" id="col-general">
                                           <div class="row-form">
                                              
                                                
                                                <div class="row">
                                              <div class="inpt-setting col-sm-4 fly-buttons">
                                                    <label> {l s='Background Color' mod='pspagebuilder'}:   </label>
                                                    <div class="inpt-setting-color">
                                                     <input type="text" name="bgcolor" class="input-color"  data-hex="true"/>
                                                   </div>
                                                </div>  

                                              <div class="inpt-setting col-sm-4 fly-buttons">
                                                  <label> {l s='Text Color' mod='pspagebuilder'}:   </label>
                                                  <div class="inpt-setting-color">
                                                    <input type="text" name="textcolor" class="input-color"  data-hex="true"/>
                                                 </div>
                                              </div>  

                                              <div class="inpt-setting col-sm-4 fly-buttons">
                                                      <label> {l s='Font Size' mod='pspagebuilder'}:   </label>
                                                      <input type="text" name="fontsize" class="auto-correct" data-suffix="cm"  data-hex="true"/>
                                                  </div>  
                                              </div>  
                                                <div class="inpt-setting fly-buttons">
                                                <label> {l s='Image' mod='pspagebuilder'}: </label>
                                                {$time = time()}
                                                  <input type="text" name="bgimage" id="uploadimage{$time|escape:'html':'UTF-8'}" class="imageuploaded"/>
                  
                                                </div> 
                                                <div class="inpt-setting">
                                                  <label> {l s='Class' mod='pspagebuilder'}: </label>
                                                  <input type="text" name="cls" />
                                                </div> 
                                                <div class="inpt-setting">
                                                   <label>
                                                    {l s='Column Style' mod='pspagebuilder'}:
                                                     <select name="sfxcls">
                                                        {foreach from=$sfxclss.col item=clxcol name=clxcol}
                                                        <option value="{$clxcol|escape:'html':'UTF-8'}">{$clxcol|escape:'html':'UTF-8'}</option>
                                                        {/foreach}
                                                     </select>
                                                     </label>
                                                 </div> 
                                              
                                            </div>
                                  </div>

                                  <div role="tabpanel" class="tab-pane" id="col-adjustment">
                                           <div class="row-form">
                                      

                                                <div class="inpt-setting fly-buttons">
                                                    <p> <label> {l s='Margin' mod='pspagebuilder'}:   </label> </p>
                                                    <div class="box-alignment">
                                                        <input type="text" name="margin[top]"    class="input-text auto-correct i-top" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="margin[right]"  class="input-text auto-correct i-right" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="margin[bottom]" class="input-text auto-correct i-bottom" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="margin[left]"   class="input-text auto-correct i-left" data-suffix="px" data-hex="true"/>
                                                        
                                                    </div>    
                                                </div>

                                                <div class="inpt-setting fly-buttons">
                                                    <p><label> {l s='Padding' mod='pspagebuilder'}:   </label> </p>
                                                    <div class="box-alignment">
                                                        <input type="text" name="padding[top]"    class="input-text auto-correct i-top" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="padding[right]"  class="input-text auto-correct i-right" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="padding[bottom]" class="input-text auto-correct i-bottom" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="padding[left]"   class="input-text auto-correct i-left" data-suffix="px" data-hex="true"/>
                                                        
                                                    </div>   
                                                </div>

                                               

                                                <div class="inpt-setting fly-buttons">
                                                    <p><label> {l s='Border' mod='pspagebuilder'}:   </label> </p>
                                                    <div class="row">
                                                        <div class="col-sm-4"> <input type="text" name="border[width]"    class="input-text auto-correct" data-suffix="px" data-hex="true"/></div> 
                                                        <div class="col-sm-4"> 
                                                          <select  name="border[type]" >
                                                                    <option value="">{l s='None' mod='pspagebuilder'}</option>
                                                                    <option value="hidden">{l s='hidden' mod='pspagebuilder'}</option>
                                                                    <option value="dotted">{l s='dotted' mod='pspagebuilder'}</option>
                                                                    <option value="dashed">{l s='dashed' mod='pspagebuilder'}</option>
                                                                    <option value="solid">{l s='solid' mod='pspagebuilder'}</option>
                                                                    <option value="double">{l s='double' mod='pspagebuilder'}</option>
                                                                    <option value="groove">{l s='groove' mod='pspagebuilder'}</option>
                                                                    <option value="ridge">{l s='ridge' mod='pspagebuilder'}</option>
                                                                    <option value="inset">{l s='inset' mod='pspagebuilder'}</option>
                                                                    <option value="outset">{l s='outset' mod='pspagebuilder'}</option>
                                                                    <option value="inherit">{l s='inherit' mod='pspagebuilder'}</option>
                                                          </select>
                                                         

                                                        </div> 
                                                        <div class="col-sm-4">
                                                          <div class=" inpt-setting-color"> 
                                                          <input type="text" name="border[color]" class="input-color" data-suffix="px" data-hex="true"/></div> 
                                                        </div>
                                                    </div>   
                                                </div>
                                                  <div class="inpt-setting fly-buttons">
                                                    <p><label> {l s='Border Radius' mod='pspagebuilder'}:   </label> </p>
                                                    <div class="box-alignment">
                                                        <input type="text" name="bradius[top]"    class="input-text auto-correct i-top" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="bradius[bottom]" class="input-text auto-correct i-bottom" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="bradius[left]"   class="input-text auto-correct i-left" data-suffix="px" data-hex="true"/>
                                                        <input type="text" name="bradius[right]"  class="input-text auto-correct i-right" data-suffix="px" data-hex="true"/>
                                                    </div>   
                                                </div>

                                          </div>  
                                  </div>

                            <hr>
                            <div class="inpt-setting">
                                  <button type="submit" class="btn btn-primary">  {l s='Save' mod='pspagebuilder'}</button>  
                           </div> 


                        </div>
                    </form>
              </div>
        </div>
        <div id="custom-width-columns" class="popover top">
    <div class="arrow"></div>
    <div class="popover-title">{l s='Custom Width Columns' mod='pspagebuilder'}<span class="wpo-close"></span></div>
    <div class="popover-content clearfix">
       <ul class="suggess-add-row-tools suggess-row-container">
            <li class="add-row sg-row ptstooltip" data-columns="12|0|0" data-toggle="tooltip" data-placement="top" title="{l s='Add 1 Column: 12|0|0' mod='pspagebuilder'}">
                <div class="col-width col-width-30"></div>
            </li> 
            
            <li class="add-row sg-row ptstooltip" data-columns="6|6|0" data-toggle="tooltip" data-placement="top" title="{l s='Add 2 Columns: 6|6|0' mod='pspagebuilder'}">
                <div class="col-width col-width-15"></div>
                <div class="col-width col-width-15"></div>
            </li> 

    
            <li class="add-row sg-row ptstooltip" data-columns="4|8" data-toggle="tooltip" data-placement="top" title="{l s='Add 2 Columns: 4|8' mod='pspagebuilder'}">
                <div class="col-width col-width-10"></div>
                <div class="col-width col-width-30"></div>
            </li> 


            <li class="add-row sg-row ptstooltip" data-columns="8|4" data-toggle="tooltip" data-placement="top" title="{l s='Add 2 Columns: 8|4' mod='pspagebuilder'}">
                <div class="col-width col-width-30"></div>
                <div class="col-width col-width-10"></div>
            </li> 


             <li class="add-row sg-row ptstooltip" data-columns="5|7" data-toggle="tooltip" data-placement="top" title="{l s='Add 2 Columns: 5|7' mod='pspagebuilder'}">
                <div class="col-width col-width-10"></div>
                <div class="col-width col-width-30"></div>
            </li> 


            <li class="add-row sg-row ptstooltip" data-columns="4|4|4" data-toggle="tooltip" data-placement="top" title="{l s='Add 3 Columns: 4|4|4' mod='pspagebuilder'}">
                <div class="col-width col-width-10"></div>
                <div class="col-width col-width-10"></div>
                <div class="col-width col-width-10"></div>
            </li> 


            <li class="add-row sg-row ptstooltip" data-columns="3|6|3" data-toggle="tooltip" data-placement="top" title="{l s='Add 3 Columns: 3|6|3' mod='pspagebuilder'}">
                <div class="col-width col-width-10"></div>
                <div class="col-width col-width-30"></div>
                <div class="col-width col-width-10"></div>
            </li> 

            <li class="add-row sg-row ptstooltip" data-columns="3|3|3|3" data-toggle="tooltip" data-placement="top" title="{l s='Add 4 Columns: 3|3|3|3' mod='pspagebuilder'}">
                <div class="col-width col-width-5"></div>
                <div class="col-width col-width-5"></div>
                <div class="col-width col-width-5"></div>
                <div class="col-width col-width-5"></div>
            </li> 

      </ul>   
        <hr>
        <form class="form-inline">
         
           <label>{l s='Enter your custom width: (3|3|3|3)'}</label>  
          <div class="input-group">
 
            <input type="text" class="form-control"  placeholder="4|4|4">
            <div class="input-group-addon text-primary">Apply</div>
          </div>


         
        </form>              
    </div>  
  </div>  
       <script type="text/javascript">
           $(".imageuploaded").WPO_Gallery({ gallery:false,preview:false,widgetaction:false});
        </script>

       <script type="text/javascript">
           $(".ptstooltip").tooltip();
    
      $(document).ready(function() {
          var config = { 
              {* URL, cannot escape *}
              urlwidgets: listwidgets,
              urlwidget: widgetform,
              urlwidgetdata: widgetdata,
               controller:'AdminPspagebuilderMenu' 
          };
          
          $("#layout-builder").WPO_Layout(config, '{$layoutjson}'{* HTML, cannot escape *});
      });


      $("#listprofiles a.delete").click(function() {
          var $a = $(this);
          if (confirm('{l s='Are you sure to delete this?' mod='pspagebuilder'}')) {
              $.ajax({
                url:  $a.attr('href'),
                data:{
                  rand:Math.random(),
                  controller : 'AdminPspagebuilderMenu',
                  action : 'deleteProfile',
                  ajax : true,
                  id_tab : current_id_tab
                },
                type:'post',
                dataType:'json'
              }).done(function(output) {
                 if (output.id == $('[name=id_pagebuilderprofile]').val()) {
                    location.href = PS_PAGEbuilder_URL;
                 }else {
                    $a.parent().remove();
                 } 
              });

              return false;
          }
           return false;
      });
     </script>    </div>