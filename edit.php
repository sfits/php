<?php
include_once('startup.php');
include_once('model.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

// Обработка отправки формы.
if (isset($_POST['ed']))
{	
	if (articles_edit($_POST['id'], $_POST['title'], $_POST['content']))
	{
		header('Location: editor.php');
		die();
	}
	$id = $_POST['id'];
	$title = $_POST['title'];
	$content = $_POST['content'];
}
elseif (isset($_POST['dl'])) {
	if (articles_delete($_POST['id']))
	{
		header('Location: editor.php');
		die();
	}
}
else
{
	$art=articles_get($_GET['id']);
	$id = $_GET['id'];
	$title = $art['title'];
	$content = $art['content'];
}


// Вывод в шаблон.
include('theme/edit.php');
