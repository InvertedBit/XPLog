{* Smarty *}
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="static/css/style.css" />
</head>
<body>

<div id="wrapper">
<div id="header">
	<h1>{$page.title}</h1>
</div>
<div id="menu">

	{foreach from=$menuArr item=item}
		<a href="{$item.link}">{$item.title}</a>
	{/foreach}

</div>
<div id="content">
{if isset($error)}
	<div class="error">
	<span class="title">{$error.title}</span>
	<br />
	<span class="text">
	{$error.text}
	</div>
{/if}