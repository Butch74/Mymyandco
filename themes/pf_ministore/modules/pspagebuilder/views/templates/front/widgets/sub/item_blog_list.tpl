{*
* Pts Prestashop Theme Framework for Prestashop 1.7.x
*
* @package   pspagebuilder
* @version   6.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2016 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
<div class="blog_container space-50 ">
	{if $item.image && $show_image}
	<div class="blog-image float-xs-left">
		<a href="{$item.link|escape:'html':'UTF-8'}" title="{$item.title|escape:'html':'UTF-8'}" class="link">
			<img src="{$item.preview_url|escape:'html':'UTF-8'}" title="{$item.title|escape:'html':'UTF-8'}" class="img-responsive"/>
		</a>
	</div>
	{/if}
	<div class="blog-meta media-body">
		{if $show_title_blog}
			<h5 class="blog-title">
				<a href="{$item.link|escape:'html':'UTF-8'}" title="{$item.title|escape:'html':'UTF-8'}">{$item.title|escape:'html':'UTF-8'}</a>
			</h5>
		{/if}
		{if $show_category}
			<span class="blog-cat text-xs-left"> <span class="icon-list">{l s='In' d='Shop.Theme'}</span> 
				<a href="{$item.category_link|escape:'html':'UTF-8'}" title="{$item.category_title|escape:'html':'UTF-8'}">{$item.category_title|escape:'html':'UTF-8'}</a>
			</span>
		{/if}
		{if $show_author}
			<span class="blog-author"><span class="icon-list">{l s='By' d='Shop.Theme'}</span>
				<a href="{$item.author_link|escape:'html':'UTF-8'}" title="{$item.author|escape:'html':'UTF-8'}">{$item.author|escape:'html':'UTF-8'}</a>
			</span>
		{/if}
		{if $show_dateadd}
			<span class="blog-created"><span class=""></span>
				{strtotime($item.date_add)|escape:'html':'UTF-8'|date_format}
			</span>
		{/if}
		{if $show_comment}<span class="blog-ctncomment">
			<span class="icon-comment"> {l s='Comment' d='Shop.Theme'}:</span> {$item.comment_count|escape:'html':'UTF-8'}</span>
		{/if}
		{if $show_description}
			<div class="blog-shortinfo">
				{$item.description|strip_tags|truncate:80|escape:'html':'UTF-8'}
			</div>
		{/if}
		{if $show_readmore}
			<div class="readmore">
				<p>
					<a href="{$item.link|escape:'html':'UTF-8'}" title="{$item.title|escape:'html':'UTF-8'}" class="btn btn-default">{l s='Read more' d='Shop.Theme'}</a>
				</p>
			</div>
		{/if}
	</div>
</div>