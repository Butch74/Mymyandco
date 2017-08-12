{*
 *  Ps Prestashop SliderShow for Prestashop 1.6.x
 *
 * @package   pssliderlayer
 * @version   3.0
 * @author    http://www.prestabrain.com
 * @copyright Copyright (C) October 2013 PrestaBrain.com <@emai:prestabrain@gmail.com>
 *               
 * @license   GNU General Public License version 2
*}

{if isset($no_follow) AND $no_follow}
	{assign var='no_follow_text' value='rel="nofollow"'}
{else}
	{assign var='no_follow_text' value=''}
{/if}

{if isset($p) AND $p}
	 

	<!-- Pagination -->
	<div id="pagination{if isset($paginationId)}_{$paginationId|escape:'html':'UTF-8'}{/if}" class="pagination row clearfix">
     
	{if $start!=$stop}
		<ul class="page-list">
		{if $p != 1}
			{assign var='p_previous' value=$p-1}
			<li id="pagination_previous{if isset($paginationId)}_{$paginationId|escape:'html':'UTF-8'}{/if}" class="pagination_previous">
				<a {$no_follow_text|escape:'html':'UTF-8'} href="{$link->goPage($requestPage, $p_previous)|escape:'html':'UTF-8'}">
					<i class="material-icons">navigate_before</i> {l s='Previous' mod='psblog'}</a>
			</li>
		{else}
			{assign var='p_previous' value=$p-1}
			<li id="pagination_previous{if isset($paginationId)}_{$paginationId|escape:'html':'UTF-8'}{/if}" class="disabled pagination_previous"><a class="disabled" href="{$link->goPage($requestPage, $p_previous)|escape:'html':'UTF-8'}" ><i class="material-icons">navigate_before</i> {l s='Previous' mod='psblog'}</a></li>
		{/if}
		{if $start==3}
			<li><a {$no_follow_text|escape:'html':'UTF-8'}  href="{$link->goPage($requestPage, 1)|escape:'html':'UTF-8'}"><span>1</span></a></li>
			<li><a {$no_follow_text|escape:'html':'UTF-8'}  href="{$link->goPage($requestPage, 2)|escape:'html':'UTF-8'}"><span>2</span></a></li>
		{/if}
		{if $start==2}
			<li><a {$no_follow_text|escape:'html':'UTF-8'}  href="{$link->goPage($requestPage, 1)|escape:'html':'UTF-8'}"><span>1</span></a></li>
		{/if}
		{if $start>3}
			<li><a {$no_follow_text|escape:'html':'UTF-8'}  href="{$link->goPage($requestPage, 1)|escape:'html':'UTF-8'}"><span>1</span></a></li>
			<li class="truncate"><span><span>...</span></span></li>
		{/if}
		{section name=pagination start=$start loop=$stop+1 step=1}
			{if $p == $smarty.section.pagination.index}
				<li class="active current"><span><span>{$p|escape:'html':'UTF-8'}</span></span></li>
			{else}
				<li><a {$no_follow_text|escape:'html':'UTF-8'} href="{$link->goPage($requestPage, $smarty.section.pagination.index)|escape:'html':'UTF-8'}"><span>{$smarty.section.pagination.index|escape:'html':'UTF-8'}</span></a></li>
			{/if}
		{/section}
		{if $pages_nb>$stop+2}
			<li class="truncate"><span><span>...</span></span></li>
			<li><a href="{$link->goPage($requestPage, $pages_nb)|escape:'html':'UTF-8'}"><span>{$pages_nb|intval}</span></a></li>
		{/if}
		{if $pages_nb==$stop+1}
			<li><a href="{$link->goPage($requestPage, $pages_nb)|escape:'html':'UTF-8'}"><span>{$pages_nb|intval}</span></a></li>
		{/if}
		{if $pages_nb==$stop+2}
			<li><a href="{$link->goPage($requestPage, $pages_nb-1)|escape:'html':'UTF-8'}"><span>{$pages_nb-1|intval}</span></a></li>
			<li><a href="{$link->goPage($requestPage, $pages_nb)|escape:'html':'UTF-8'}"><span>{$pages_nb|intval}</span></a></li>
		{/if}
		{if $pages_nb > 1 AND $p != $pages_nb}
			{assign var='p_next' value=$p+1}
			<li id="pagination_next{if isset($paginationId)}_{$paginationId|escape:'html':'UTF-8'}{/if}" class="pagination_next"><a {$no_follow_text|escape:'html':'UTF-8'} href="{$link->goPage($requestPage, $p_next)|escape:'html':'UTF-8'}">{l s='Next' mod='psblog'} <i class="material-icons">navigate_next</i></a></li>
		{else}
			{assign var='p_next' value=$p+1}
			<li id="pagination_next{if isset($paginationId)}_{$paginationId|escape:'html':'UTF-8'}{/if}" class="disabled pagination_next"><a class="disabled" href="{$link->goPage($requestPage, $p_next)|escape:'html':'UTF-8'}">{l s='Next' mod='psblog'} <i class="material-icons">navigate_next</i></a></li>
		{/if}
		</ul>
	{/if}
		<div class="product-count text-xs-right">
	    	{if ($n*$p) < $nb_items }
	    		{assign var='blogShowing' value=$n*$p}
	        {else}
	        	{assign var='blogShowing' value=($n*$p-$nb_items-$n*$p)*-1}
	        {/if}
	        {if $p==1}
	        	{assign var='blogShowingStart' value=1}
	        {else}
	        	{assign var='blogShowingStart' value=$n*$p-$n+1}
	        {/if}
	        {if $nb_items > 1}
	        	{l s='Showing %1$d - %2$d of %3$d items' mod='psblog' sprintf=[$blogShowingStart, $blogShowing, $nb_items]}
			{else}
	        	{l s='Showing %1$d - %2$d of 1 item' mod='psblog' sprintf=[$blogShowingStart, $blogShowing]}
	       	{/if}
	    </div>
	</div>
    
    

	<!-- /Pagination -->
{/if}
