<?/*
Базовый Шаблон страницы 
=======================
$title - заголовок
$content - содержание
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" media="screen" href="theme/style.css" /> 
</head>
<body>
	<h1><?=$title?></h1>
	<br/>
	<?=$content?></p>
	<hr/>
	<small><a href="">Copyright</a> &copy;</small>			
</body>
</html>
