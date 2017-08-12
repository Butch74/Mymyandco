{**************************************
       HEADER 1
***************************************}

<div class="header1">
{block name='header_nav'}
  <nav class="header-nav">
    <div class="hidden-lg-up text-xs-center header-mobile mobile"> 
      <button class="canvas-menu btn float-xs-left" data-toggle="offcanvas" type="button"><span class="material-icons">dehaze</span>
      </button> 
      <div class="setting-nav float-xs-left">
        <div id="_mobile_currency_selector"></div>
        <div id="_mobile_language_selector"></div>
      </div>
      <div class="float-xs-right" id="_mobile_cart"></div>
      
      <div class="float-xs-right" id="_mobile_search"></div> 
      <div class="float-xs-right" id="_mobile_user_info"></div>
      <div class="top-logo" id="_mobile_logo"></div>

    </div>
  </nav>
{/block}
{block name='header_top'}
  <div class="header-top  hidden-md-down">
      <div class="row space-padding-tb-10 ">
      
        <div class="header_logo col-lg-2 col-md-3 col-sm-12 col-xs-12" id="_desktop_logo">
          <div class="{if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}logo-theme{else}logo-store{/if}">
            <a href="{$urls.base_url}" title="{$shop.name}">
              <img class="logo img-responsive" src="{$shop.logo}" {if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}hidden{/if} alt="{$shop.name}">
            </a>
          </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
          <div class="container">
            <div class="row">
              <div id="_desktop_menu" class="ps-desktop-megamenu">
                  {hook h="displayMainmenu"} 
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12 right-nav position-static">
          {hook h='displayNav2'}
          {hook h='displayTop'}
        </div>

      </div>
  </div> 
  {hook h='displayNavFullWidth'}
{/block}
</div>

