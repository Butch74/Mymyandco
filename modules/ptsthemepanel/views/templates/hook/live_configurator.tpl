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
 <div id="pts-panelthemechanger" class="hidden-md-down pts-paneltool themechanger">


		<div class=" pts-panelbutton">
			<i class="fa fa-gear"></i>
		</div>
		<div class="paneltool editortool pts-panelcontent">
		 	<h3 class="editortool-title">{l s='Custom Theme Profiles Management' d='Modules.Ptsthemepanel.Shop'}</h3>
			<div class="pts-customize panelcontent">
			<ul class="nav nav-tabs pts-tabs">
				<li class="nav-item"><a class="nav-link" href="#tab-theme">{l s='Theme Skins' d='Modules.Ptsthemepanel.Shop'}</a></li> 
				<li class="nav-item"><a class="nav-link" href="#tab-setting">{l s='Layouts' d='Modules.Ptsthemepanel.Shop'}</a></li> 
			</ul>
			<div class="tab-content" >
				<div class="tab-pane active" id="tab-setting">
					<form action="#" method="post" id="panethemelayoutfrm">
						<div class="pts-panelcollapse"  id="custom-accordionlayouts" role="tablist" aria-multiselectable="true">
							<div class="card">
								<div style="background: #ccc;" class="card-header">
									<h6 class="mb-0">
                        		<a data-toggle="collapse" aria-expanded="true"  data-parent="#custom-accordionlayouts" href="#collapse_indexlayout">{l s='Homepage Layout' d='Modules.Ptsthemepanel.Shop'}</a>
                        	</h6>
								</div>
								<div id="collapse_indexlayout" class="collapse" role="tabpanel">
									<div class="card-block">
										<div class="form-group">
                                   	<label>{l s='Select Layout' d='Modules.Ptsthemepanel.Shop'}</label>
                                  	<select name="index_layout" data-match="index_layout" class="input-setting google-font-changer form-control" data-selector="index_layout" data-attrs="index_layout" >
		                              {foreach $available_layouts as $key => $layout}
													<option {if $theme_data.theme_settings.layouts.index == $key} selected="selected" {/if} value="{$key}">{$layout.name}</option>
												{/foreach}
											</select>
		                        </div>
									</div>
								</div>
							</div>
							<div class="card">
								<div style="background: #ccc;" class="card-header">
									<h6 class="mb-0">
                        		<a data-toggle="collapse" aria-expanded="true"  data-parent="#custom-accordionlayouts" href="#collapse_categorylayout">{l s='Category Layout' d='Modules.Ptsthemepanel.Shop'}</a>
                        	</h6>
								</div>
								<div id="collapse_categorylayout" class="collapse" role="tabpanel">
									<div class="card-block">
										<div class="form-group">
                                   	<label>{l s='Select Layout' d='Modules.Ptsthemepanel.Shop'}</label>
                                  	<select name="category_layout" data-match="category_layout" class="input-setting google-font-changer form-control" data-selector="category_layout" data-attrs="category_layout" >
		                              {foreach $available_layouts as $key => $layout}
													<option {if $theme_data.theme_settings.layouts.category == $key} selected="selected" {/if} value="{$key}">{$layout.name}</option>
												{/foreach}
											</select>
		                        </div>
									</div>
								</div>
							</div>
							<div class="card">
								<div style="background: #ccc;" class="card-header">
									<h6 class="mb-0">
                        		<a data-toggle="collapse" aria-expanded="true"  data-parent="#custom-accordionlayouts" href="#collapse_productlayout">{l s='Product Layout' d='Modules.Ptsthemepanel.Shop'}</a>
                        	</h6>
								</div>
								<div id="collapse_productlayout" class="collapse" role="tabpanel">
									<div class="card-block">
										<div class="form-group">
                                   	<label>{l s='Select Layout' d='Modules.Ptsthemepanel.Shop'}</label>
                                  	<select name="product_layout" data-match="product_layout" class="input-setting google-font-changer form-control" data-selector="product_layout" data-attrs="product_layout" >
		                              {foreach $available_layouts as $key => $layout}
													<option {if $theme_data.theme_settings.layouts.product == $key} selected="selected" {/if} value="{$key}">{$layout.name}</option>
												{/foreach}
											</select>
		                        </div>
									</div>
								</div>
							</div>
							<div class="card">
								<div style="background: #ccc;" class="card-header">
									<h6 class="mb-0">
                        		<a data-toggle="collapse" aria-expanded="true"  data-parent="#custom-accordionlayouts" href="#collapse_contactlayout">{l s='Contact Layout' d='Modules.Ptsthemepanel.Shop'}</a>
                        	</h6>
								</div>
								<div id="collapse_contactlayout" class="collapse" role="tabpanel">
									<div class="card-block">
										<div class="form-group">
                                   	<label>{l s='Select Layout' d='Modules.Ptsthemepanel.Shop'}</label>
                                  	<select name="contact_layout" data-match="contact_layout" class="input-setting google-font-changer form-control" data-selector="contactlayout" data-attrs="contact_layout" >
		                              {foreach $available_layouts as $key => $layout}
													<option {if $theme_data.theme_settings.layouts.contact == $key} selected="selected" {/if} value="{$key}">{$layout.name}</option>
												{/foreach}
											</select>
		                        </div>
									</div>
								</div>
							</div>
						</div>
						{if $isliveeditor}
						<div class="btn-tools">
							<button type="submit" class="btn btn-warning" name="submitLiveThemeLayout">{l s='Save Layout' d='Modules.Ptsthemepanel.Shop'}</button>
						</div>
						{/if}
					</form>
				</div>
				<div class="tab-pane active" id="tab-theme">
					<form action="#" method="post" id="panethemesettingfrm">
						<div class="form-group">
							<div class="pts-paneltitle"><label>{l s='RTL Mode' d='Modules.Ptsthemepanel.Shop'}</label>
								<select name="rtl_mode" id="pts-themelangrtl" class="form-control">
									<option value="0">{l s='No' d='Modules.Ptsthemepanel.Shop'}</option>
									<option value="1">{l s='Yes' d='Modules.Ptsthemepanel.Shop'}</option>
									
								</select>
							</div>
						</div>
						{if isset($headers) && $headers}
				 			<div class="pts-paneltitle"><label>{l s='Headers' d='Modules.Ptsthemepanel.Shop'}</label></div>
				 			<div class="form-group">
					 			<select name="headers">
					 				{foreach from=$headers item=foder}
					 					<option value="{$foder|escape:'html':'UTF-8'}"{if $header == $foder} selected="selected"{/if}>{$foder|escape:'html':'UTF-8'}</option>
					 				{/foreach}
					 			</select>
							</div>
				 		{/if}

			
				 		<div class="pts-paneltitle"><label>{l s='Theme Skins' d='Modules.Ptsthemepanel.Shop'}</label></div>
						<div class="form-group">
							{if isset($themes)}
								<div id="pts-themecollection" class="themecollection row clearfix">
									{foreach $themes as $theme}
										<div class="col-sm-6 theme-{$theme.skin|escape:'htmlall':'UTF-8'} btn-switchskin" data-theme="{$theme.skin|escape:'htmlall':'UTF-8'}">
											<div class="theme-preview" >
												<img class="img-fluid" src="{$theme.preview|escape:'htmlall':'UTF-8'}" alt="">
											</div>
											{if $theme.rehook && $isliveeditor}	
											<div class="clearfix">
												<label for="">{l s='Re-Hook, Config' d='Modules.Ptsthemepanel.Shop'}</label> 
												 {l s='Yes' d='Modules.Ptsthemepanel.Shop'}: <input type="radio" name="{$theme.skin|escape:'html':'UTF-8'}_rehook" value="1">
												 {l s='No' d='Modules.Ptsthemepanel.Shop'}: <input checked="checked" type="radio" name="{$theme.skin|escape:'html':'UTF-8'}_rehook" value="0"> 
											</div>
											{/if}
										</div>	
									{/foreach}
								</div>
							{/if}
							<input type="hidden" name="themeskin" value="{$themeskin|escape:'html':'UTF-8'}"/>
				 		</div>
				 		
				 		{if $isliveeditor}
						<div class="btn-tools">
							
							<button type="button" class="btn btn-primary" id="btn-resettheme" name="resetLiveConfigurator">{l s='Reset' d='Modules.Ptsthemepanel.Shop'}</button>
							<button type="submit" class="btn btn-warning" name="submitLiveThemeChanger">{l s='Save' d='Modules.Ptsthemepanel.Shop'}</button>
						</div>
						{else}
							<button type="submit" class="btn btn-primary" id="btn-resettheme" name="resetDemoTheme">{l s='Reset' d='Modules.Ptsthemepanel.Shop'}</button>
							<button type="submit" class="btn btn-warning" name="applyCustomSkinChanger">{l s='Apple Change Now' d='Modules.Ptsthemepanel.Shop'}</button>
						{/if}
		 				
					</form>
				</div>
			</div>
		</div></div>
</div>