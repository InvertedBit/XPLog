{* Smarty *}

{include file='header.tpl'}

<form action="index.php?action=register" method="post">
<table>
<tr>
<td>Title:</td><td><input type="text" name="title" /></td>
</tr>
<tr>
<td>Content:</td><td><textarea class="ckeditor" name="editoraddlog"></textarea></td>
</tr>
<tr>
<td>Tags:</td><td><input type="text" name="tags" /></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="callback" value="Add entry" /></td>
</tr>
</table>
</form>

{include file='footer.tpl'}