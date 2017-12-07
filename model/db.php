<?php

// вывод всей галлереи
function display()
{
	if ($handle = opendir('img')) {
	    while (false !== ($file = readdir($handle))) { 
	        $files = explode(' ', $file);
	        if ($file != "." && $file != "..") { 
	            echo '<a href="?file=' . $file . '"><img src="../img/' . $file . '"></a>';
	        }
	    }
	    closedir($handle);
	}
}

// загрузка файлов на сервер
function upload() {
	// проверка расширения файла
	$str = $_FILES['img']['name'];
	$dot = substr(strstr($str, '.'), 1, strlen($str));

	$uploaddir =  __DIR__ . '/../img/';
	if (($dot == 'jpg') or ($dot == 'jpeg') or ($dot == 'bmp')) {
		$uploadfile = $uploaddir . basename($_FILES['img']['name']);
		if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
			header("Location: /../index.php");
			exit();
		}
	}
}
