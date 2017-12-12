<?php
include_once('startup.php');
include_once('model.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

if ($art=articles_get($_GET['id']))
	{
		$title = $art['title'];
		$content = $art['content'];
	}
	
// Кодировка.
header('Content-type: text/html; charset=windows-1251');

// Вывод в шаблон.
include('theme/article.php');
