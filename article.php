<?php
include_once('startup.php');
include_once('model.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();
$title = 'PHP. Уровень 2';
$art=articles_get($_GET['id']);

// Внутренний шаблон.
$content = view_include('theme/v_article.php', $art);
include ('view.php');
