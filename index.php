<?php
include_once('startup.php');
include_once('model.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

// Извлечение статей.
$articles = articles_all();

// Вывод в шаблон.
include('theme/index.php');
