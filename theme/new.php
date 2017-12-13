<?/*
Шаблон страницы добавления новой статьи
=======================
$title - заголовок
$content - содержание
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>Blog</title>
	<!-- <meta content="text/html; charset=Windows-1251" http-equiv="content-type">	 -->
	<link rel="stylesheet" type="text/css" media="screen" href="theme/style.css" /> 
</head>
<body>
	<h1>Blog</h1>
	<br/>
	<a href="index.php">Главная</a> |
	<a href="editor.php">Консоль редактора</a>
	<hr/>
	<h1>Новая статья</h1>
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
		<input type="submit" value="Добавить" />
	</form>
	<hr/>
	<small><a href="">Copyright</a> &copy;</small>			
</body>
</html>
