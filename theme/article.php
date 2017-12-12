<?php
    /*
    Шаблон просмотра статьи
    =======================
    
    статья:
    article_id - идентификатор
    article_title - заголвок
    article_text - текст
    */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title><?=$article['article_title'] ?></title>
	<link rel="stylesheet" type="text/css" media="screen" href="theme/style.css" /> 
</head>
<body>
	<h1>Blog</h1>
	<br/>
	<a href="index.php">Главная</a> |
	<a href="editor.php">Консоль редактора</a>
	<hr/>
	<h1><?=$title?></h1>
	<p><?=$content?></p>
	<hr/>
	<small><a href="">Copyright</a> &copy;</small>			
</body>
</html>
