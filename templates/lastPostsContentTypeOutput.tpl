<ul class="cmsThreadList">
	{foreach from=$list item=item}
		<li class="box32">
			{if $item->getUserProfile()->getAvatar()}<a href="{link controller="User" object=$item->getUserProfile()}{/link}" class="framed">{@$item->getUserProfile()->getAvatar()->getImageTag(32)}</a>{else}<span class="icon icon-file icon32"></span>{/if}
			<div class="details">
				<div class="containerHeadline">
					<h3><a class="wbbTopicLink" href="{link controller='Thread' object=$item application='wbb'}{/link}">{$item->topic}</a></h3>
				</div>
				<small>
				{if $item->userID}<a href="{link controller='User' object=$item->getUserProfile()->getDecoratedObject()}{/link}" class="userLink" data-user-id="{@$item->userID}">{$item->username}</a>{else}{$item->username}{/if}
					- {@$item->lastPostTime|time}
				</small>
			</div>
		</li>
	{/foreach}
</ul>
