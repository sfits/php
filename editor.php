<?php
include_once('startup.php');
include_once('model.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

// Извлечение статей.
$articles = articles_all();

// Кодировка.
header('Content-type: text/html; charset=windows-1251');

// Вывод в шаблон.
include('theme/editor.php');
