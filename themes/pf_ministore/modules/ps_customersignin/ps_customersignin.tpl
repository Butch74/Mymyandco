<div id="_desktop_user_info">
  <div class="user-info">
    {if $logged}
    <div class="dropdown js-dropdown">
        <a
          data-target="#" 
          data-toggle="dropdown" 
          aria-haspopup="true" 
          aria-expanded="false"
          rel="nofollow"
        >
          <i class="material-icons">person</i>
        </a>
      <div class="dropdown-menu">
       <a
          class="logout"
          href="{$logout_url}"
          rel="nofollow"
          title="{l s='Sign out' d='Shop.Theme.CustomerAccount'}"
        >
          <i class="material-icons">person</i>
          {l s='Sign out' d='Shop.Theme.Actions'}
        </a>
        <a
          class="account"
          href="{$my_account_url}"
          title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}"
          rel="nofollow"
        >
          <span>{$customerName}</span>
        </a>
      </div>
    </div>
      
    {else}
      <a
        href="{$my_account_url}"
        title="{l s='Log in to your customer account' d='Shop.Theme.CustomerAccount'}"
        rel="nofollow"
      >
        <i class="material-icons">person</i>
        <!-- <span class="hidden-sm-down">{l s='Sign in' d='Shop.Theme.Actions'}</span> -->
      </a>
    {/if}
  </div>
</div>