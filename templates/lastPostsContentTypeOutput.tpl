<ul class="cmsThreadList">
	{foreach from=$postList item=post}
		<li class="box32">
			{if $post->lastPoster}
				<a href="{link application='wbb' controller='Thread' object=$post->getDecoratedObject()}action=firstNew{/link}" class="framed jsTooltip" title="{lang}wbb.thread.gotoFirstNewPost{/lang}">{@$post->getLastPosterProfile()->getAvatar()->getImageTag(32)}</a>
			{else}
				<a href="{link application='wbb' controller='Thread' object=$post->getDecoratedObject()}action=firstNew{/link}" class="framed jsTooltip" title="{lang}wbb.thread.gotoFirstNewPost{/lang}">{@$post->getUserProfile()->getAvatar()->getImageTag(32)}</a>
			{/if}
			
			<div class="sidebarBoxHeadline">
				<h3><a href="{link application='wbb' controller='Thread' object=$post->getDecoratedObject()}action=firstNew{/link}" {if $post->getBoard()->getPermission('canReadThread')} class="wbbTopicLink"{/if} data-thread-id="{@$post->threadID}" data-sort-order="DESC" title="{$post->topic}">{$post->topic}</a></h3>
				<small>
					{if $post->lastPoster}
						{if $post->lastPosterID}
							<a href="{link controller='User' object=$post->getLastPosterProfile()->getDecoratedObject()}{/link}" class="userLink" data-user-id="{@$post->getLastPosterProfile()->userID}">{$post->lastPoster}</a>
						{else}
							{$post->lastPoster}
						{/if}
					{else}
						{if $post->userID}
							<a href="{link controller='User' object=$post->getUserProfile()->getDecoratedObject()}{/link}" class="userLink" data-user-id="{@$post->userID}">{$post->username}</a>
						{else}
							{$post->username}
						{/if}
					{/if} - {@$post->lastPostTime|time}</small>
			</div>
		</li>
	{/foreach}
</ul>
