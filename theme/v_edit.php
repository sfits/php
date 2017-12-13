	<a href="index.php">Главная</a> |
	<a href="editor.php">Консоль редактора</a>
	<hr/>
	<form method="post">
		Название:
		<br/>
		<input type="text" name="title" value="<?=$title?>" />
		<br/>
		<br/>
		Содержание:
		<br/>
		<textarea name="content"><?=$content?></textarea>
		<br/>
		<input type="hidden" name="id" value="<?=$id?>" />
		<input type="submit" name = "edit" value="Сохранить" />
		<input type="submit" name = "delete" value="Удалить" />
	</form>