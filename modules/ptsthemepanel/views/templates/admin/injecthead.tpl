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
<div class="hidden-xs-up hidden"><div id="ptswarninginstall">
	<div class="bootstrap" style="width:550px; margin:20px;">  
	<div class="alert alert-danger" >

		<h4>{l s='You have been switched to new theme for your store.' d='Modules.Ptsthemepanel.Admin'}</h4>
		<p>{l s='May be you need install default data samples and data configurations for modules to take look same as our demo' d='Modules.Ptsthemepanel.Admin' d='Modules.Ptsthemepanel.Admin'}</p>
	</div>
	 <p>
	 	<a href="{$url|escape:'html':'UTF-8'}#sitetools" class="btn btn-lg btn-danger">{l s='Install Sample Now' d='Modules.Ptsthemepanel.Admin'}<br><em style="font-size:10px">{l s='Automatic Install Sample in Theme Control Panel' d='Modules.Ptsthemepanel.Admin'}</em></a> 
	 	<a href="{$url|escape:'html':'UTF-8'}" class="btn btn-lg btn-info">{l s='UserGuide' d='Modules.Ptsthemepanel.Admin'}<br><em style="font-size:10px">{l s='Manually Installing Sample Via Reading Guides' d='Modules.Ptsthemepanel.Admin'} </em></a> 
	 </p>
	 <p>
	 	<em>!!!{l s='Close this popup it will be not showed in next time' d='Modules.Ptsthemepanel.Admin'}</em>
	 </p>
</div></div></div>
<script type="text/javascript">
		
		jQuery.fancybox( {
			onStart:function () { 
					delay(9000);
			},
			padding: "0px",
			autoScale: true,
			transitionIn: "fade",

			transitionOut: "fade",
			showCloseButton: false,
			type: "inline",
			href: "#ptswarninginstall",
			afterClose:function(){	
				$.ajax({
					url: "{$url|escape:'html':'UTF-8'}&closePopup=1"
				}).done(function() {
				 
				});	 	
			} 
		});
		jQuery("#ptswarninginstall").trigger("click"); 


</script>