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
{block name='header'}
{block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
        <div class="hidden-md-down">
          <div class="float-xs-left">
            {hook h='displayNav1'}
          </div>
          <div class="float-xs-right right-nav">
              {hook h='displayNav2'}
              {if class_exists('PtsthemePanel')}
                <div id="_desktop_search">
                  {plugin module='ps_searchbar' hook='displayTop'}
                </div>    
              {/if}
          </div>
        </div>
        <div class="hidden-lg-up text-xs-center mobile"> 
          <button class="btn canvas-menu float-xs-left" data-toggle="offcanvas" type="button"><span class="material-icons">dehaze</span>
          </button> 
          <div class="float-xs-left" id="_mobile_search">
            {plugin module='ps_searchbar' hook='displayTop'}
          </div>                 
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
    </div>
  </nav>
{/block}
{block name='header_top'}
  <div class="header-top  hidden-md-down">
    <div class="container">
      <div class="float-xs-left " id="_desktop_logo">
        <div class="{if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}logo-theme{else}logo-store{/if}">
          <a href="{$urls.base_url}" title="{$shop.name}">
            <img class="logo img-responsive" src="{$shop.logo}" {if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}hidden{/if} alt="{$shop.name}">
          </a>
        </div>
      </div>
      <div class="position-static float-xs-right">
          {hook h='displayTop'}
          <div class="clearfix"></div>
      </div>
      <div id="_desktop_menu" class="ps-desktop-megamenu">
          {hook h="displayMainmenu"}
      </div> 
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div> 
    {hook h='displayNavFullWidth'}
  {/block}
{/block}
