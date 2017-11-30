<?php
// загрузка файлов на сервер
$uploaddir = "D:/openserver/Openserver/domains/test.com/img/";
$uploadfile = $uploaddir . basename($_FILES['img']['name']); 

if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
	// header("Location: index.php");
	echo 'Downloaded';
}

$num = $_GET['file'];
$imgs = [1=>'1.jpg', 2=>'2.jpg', 3=>'3.jpg', 4=>'4.jpg'];

echo '<img src="/img/' . $imgs[$num] . '"></a>';

$newFile = basename($_FILES['img']['name']);
$imgs [] = $newFile;
echo $newFile;