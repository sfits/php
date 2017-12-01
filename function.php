<?php
// загрузка файлов на сервер
$uploaddir = __DIR__ . '/img/';
$uploadfile = $uploaddir . basename($_FILES['img']['name']); 
if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
	header("Location: index.php");
	echo 'Downloaded <br> <a href="index.php"><= Go back</a>';
}

if ($_GET['file']) {
	echo '<img src="img/' . $_GET['file'] . '"></a>';
}

$newFile = basename($_FILES['img']['name']);
$imgs [] = $newFile;

