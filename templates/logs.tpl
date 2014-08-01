{* Smarty *}

{include file='header.tpl'}

{if isset($logs)}

	{foreach $logs as $log}
	
		<div class="logentry">
			<div class="title">
				<a href="index.php?action=log&id={$log.id}">{$log.title}</a>
			</div>
			<div class="content">
				{$log.content}
			</div>
			<div class="tags">
				{foreach $log.tags as $tag}
					<a href="#" style="background-color: #{$tag.bgcolor};color: #{$tag.color};border-color: #{$tag.color};">{$tag.name}</a>
				{/foreach}
			</div>
		</div>
	
	{/foreach}

{else}

	No logs found.

{/if}

{include file='footer.tpl'}