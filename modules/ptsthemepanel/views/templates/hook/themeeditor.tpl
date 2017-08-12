{*
* Pts Prestashop Theme Framework for Prestashop 1.6.x
*
* @package   ptsthemepanel
* @version   1.6
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}


<div id="pts-paneltool" class="hidden-md-down pts-paneltool">


	<div class=" pts-panelbutton">
		<i class="fa fa-magic"></i>
	</div>

<div class="paneltool editortool pts-panelcontent">
<form  enctype="multipart/form-data" action="#" id="formliveedittheme" method="post">



<div id="ptscustomize" class="pts-customize panelcontent editortool clearfix">
	 
	<h3 class="pts-customize-title">
		 {l s='Custom Theme Profiles Management' d='Modules.Ptsthemepanel.Shop'}
	</h3>
	<div class="buttons-action row">

		<div class="col-sm-12">
			<select id="saved-files" name="saved_file">
				{foreach $profiles as $profile => $data}
				<option value="{$profile|escape:'html':'UTF-8'}" {if $profile==$selectedprofile} selected="selected" {/if}>{$profile|escape:'html':'UTF-8'}</option>
				{/foreach}
			</select> 
		</div>
	</div>

		<div id="profiles-selectors" class="profiles-selectors clearfix">
			<p> {l s='Select A Profile' d='Modules.Ptsthemepanel.Shop'}</p>
			{foreach $profiles as $profile => $data}
			<div class="profile-item" id="preview-{$profile}" data-value="{$profile}">
				{if !empty($data)}
					{foreach $data as  $itm}
					<div class="color-item" style="background-color:{$itm->val}"></div>
					{/foreach}
				{else}
				<div class="no-colors"></div>
				{/if}
				<div class="profile-name">{$profile|escape:'html':'UTF-8'}</div>
			</div>
			{/foreach}
		</div>	

		{if $isliveeditor}
		<div class="buttons-group clearfix"> 

			<input type="hidden" id="action-mode" name="action-mode"/>	
 	 
			<div class="pull-right">
				<button type="submit" name="submitPtsLiveConfiguratorInActiveProfile" class="btn btn-danger btn-sm" value="1">
					{l s='InActive This' d='Modules.Ptsthemepanel.Shop'}
				</button>

				
				<button type="submit" name="submitPtsLiveConfiguratorActiveProfile" class="btn btn-success btn-sm" value="1">
					{l s='Active This' d='Modules.Ptsthemepanel.Shop'}
				</button>	
				<button type="submit" name="submitPtsLiveConfigurator" class="btn btn-warning btn-sm" value="1">
					{l s='Save Profile' d='Modules.Ptsthemepanel.Shop'}
				</button>	 
			</div>
		
		</div>	
		{/if}


	<div class="wrapper  clearfix"><div id="customize-form">
	<div class="groups">
	 
		<div class="clearfix" id="customize-body">
				<ul class="nav nav-tabs pts-tabs">
				  {foreach $xmlselectors as $for => $output}
		       	  <li class="nav-item"><a class="nav-link" href="#tab-{$for|escape:'html':'UTF-8'}">{$for|escape:'html':'UTF-8'}</a></li> 
	       	      {/foreach}  
		        </ul>
		        <div class="tab-content" > 
		        	 {foreach $xmlselectors as $for => $items}
		            <div class="tab-pane" id="tab-{$for|escape:'html':'UTF-8'}">
		            	{if !empty($items)}
		            	<div class="pts-panelcollapse"  id="custom-accordion{$for|escape:'html':'UTF-8'}" role="tablist" aria-multiselectable="true">
		            	{foreach $items as $group}
		            	    <div class="card">
                               	<div class="p-card-header">
	                              	<div class="mb-0">
	                              		<a data-toggle="collapse" aria-expanded="true"  data-parent="#custom-accordion{$for|escape:'html':'UTF-8'}" href="#collapse{$group.match|escape:'html':'UTF-8'}">{$group.header|escape:'html':'UTF-8'}</a>
	                              	</div>
	                            </div>
	                            <div id="collapse{$group.match|escape:'html':'UTF-8'}" class="collapse" role="tabpanel">
	                                <div class="card-block">
	                              	{foreach $group.selector as $item}
									
									  {if isset($item.type)&&$item.type=="image"}	
									  <div class="form-group background-images"> 
											<label>{$item.label|escape:'html':'UTF-8'}</label>
											<a class="clear-bg" href="#"><span class="fa fa-eraser"></span></a>
											<input value="" type="hidden" name="customize[{$group.match|escape:'html':'UTF-8'}][]" data-match="{$group.match|escape:'html':'UTF-8'}" class="form-control input-setting" data-selector="{$item.selector|escape:'html':'UTF-8'}" data-attrs="background-image">

											<div class="clearfix"></div>
											 <p><em style="font-size:10px">Those Images in folder YOURTHEME/assets/img/patterns/</em></p>
											<div class="bi-wrapper clearfix">
											{foreach $patterns as $pattern}
											<div style="background:url('{$backgroundImageURL|escape:'html':'UTF-8'}{$pattern|escape:'html':'UTF-8'}') no-repeat center center;" class="pull-left" data-image="{$backgroundImageURL|escape:'html':'UTF-8'}{$pattern|escape:'html':'UTF-8'}" data-val="../../img/patterns/{$pattern|escape:'html':'UTF-8'}">

											</div>
											{/foreach}
	                                    </div>
	                                  </div>
	                                  {elseif $item.type=="fontfamily"}
	                                   <div class="form-group">
	                                   	<label>{$item.label|escape:'html':'UTF-8'}</label>
	                                  	<select name="customize[{$group.match|escape:'html':'UTF-8'}][]" data-match="{$group.match|escape:'html':'UTF-8'}" class="input-setting google-font-changer form-control" data-selector="{$item.selector|escape:'html':'UTF-8'}" data-attrs="{$item.attrs|escape:'html':'UTF-8'}" >
											<option value="inherit">Inherit</option>
											{foreach from=$fonts key=k item=font}
											<option value="{$font.value|escape:'html':'UTF-8'}" data-fw="{implode(',',$font.fw)}">{$font.label|escape:'html':'UTF-8'}</option>
											{/foreach}
										</select>	<a href="#" class="clear-bg"><span class="fa fa-eraser"></span></a>
	                                  </div>
	                             

	                                  {elseif $item.type=="fontsize"}
	                                   <div class="form-group">
	                                   	<label>{$item.label|escape:'html':'UTF-8'}</label>
	                                  	<select  name="customize[{$group.match|escape:'html':'UTF-8'}][]" data-match="{$group.match|escape:'html':'UTF-8'}" class="input-setting form-control" data-selector="{$item.selector|escape:'html':'UTF-8'}" data-attrs="{$item.attrs|escape:'html':'UTF-8'}">
											<option value="">Inherit</option>
											{for $i=9 to 36}
											<option value="{$i|escape:'html':'UTF-8'}px">{$i|escape:'html':'UTF-8'}</option>
											{/for}
										</select>	<a href="#" class="clear-bg"><span class="fa fa-eraser"></span></a>
	                                  </div>
	                                  {else}
	                                  <div class="form-group">
										<label>{$item.label|escape:'html':'UTF-8'}</label>
										<input value="" size="10" name="customize[{$group.match|escape:'html':'UTF-8'}][]" data-match="{$group.match|escape:'html':'UTF-8'}" type="text" class="form-control input-setting" data-selector="{$item.selector|escape:'html':'UTF-8'}" data-attrs="{$item.attrs|escape:'html':'UTF-8'}"><a href="#" class="clear-bg"><span class="fa fa-eraser"></span></a>
									</div>
	                                  {/if}


									{/foreach}
	                              </div>
	                            </div>
		                    </div>          	
		            	{/foreach}
		           		 </div>
		            	{/if}
		            </div>
	           		{/foreach}
		        </div>    	
		    </div>    


	</div>

</div></div></div>
</form>

</div>

</div>
 

 <script type="text/javascript">
$(document).ready( function(){
	 $('#pts-paneltool').PtsPanelTools({ url:'{$customizeFolderURL|escape:'html':'UTF-8'}', 'profile': '{$selectedprofile|escape:'html':'UTF-8'}' } );
});
</script>