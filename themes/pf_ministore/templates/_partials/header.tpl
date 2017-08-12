{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{if !isset($header_cp)}
  {$header_cp = Configuration::get('PTS_CP_HEADER')}
{/if}

 {if $header_cp && file_exists("$CURRENT_THEMEDIR./templates/sub/headers/{$header_cp}.tpl")}
  {if $header_cp == 'header1'}
    {include file='sub/headers/header1.tpl' }
  {/if}
{else}
<div class="header-default">
{block name='header_nav'}
  <nav class="header-nav">
    <div class="container hidden-md-down">
      <div class="row nav-top">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 left-nav flex-items-xs-left">
          {hook h='displayNav2'}
        </div>
        <div class="col-md- perfect-center" id="_desktop_logo">
          <div class="{if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}logo-theme{else}logo-store{/if}">
            <a href="{$urls.base_url}" title="{$shop.name}">
              <img class="logo img-responsive" src="{$shop.logo}" {if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}hidden{/if} alt="{$shop.name}">
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xs-12 right-nav position-static">
          {hook h='displayTop'}
        </div>
      </div>
    </div>

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
      <div class="mobile-social">
        {if class_exists('PtsthemePanel')}
                {plugin module='ps_socialfollow' hook='displayFooter'}
              {/if}
      </div>
    </div>
  </nav>
{/block}
{block name='header_top'}
  <div class="header-top  hidden-md-down">
    <div class="container">
      
    	<div id="_desktop_menu" class="ps-desktop-megamenu">
    	    {hook h="displayMainmenu"}
    	</div> 

    </div>
  </div> 
  {hook h='displayNavFullWidth'}
{/block}
</div>
{/if}

