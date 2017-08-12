{if isset($listing.rendered_facets)}
<div id="search_filters_wrapper" class="block hidden-sm-down">
  <div id="search_filter_controls" class="hidden-md-up">
      <span id="_mobile_search_filters_clear_all"></span>
      <button class="btn btn-secondary ok">
        <i class="material-icons">done</i>
        {l s='OK' d='Shop.Theme.Actions'}
      </button>
  </div>
  {$listing.rendered_facets nofilter}
</div>
{/if}
