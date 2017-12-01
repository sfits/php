<?php

// вывод картинки по клику
if ($_GET['file']) {
	echo '<img src="img/' . $_GET['file'] . '"></a>';
} else {
	header("Location: index.php");
}

// проверка расширения файла
$str = $_FILES['img']['name'];
$dot = substr(strstr($str, '.'), 1, strlen($str));

// загрузка файлов на сервер
$uploaddir = __DIR__ . '/img/';
if (($dot == 'jpg') or ($dot == 'jpeg') or ($dot == 'bmp')) {
	$uploadfile = $uploaddir . basename($_FILES['img']['name']);
	if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
		header("Location: index.php");
	}
}
