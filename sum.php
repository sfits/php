<?php

$num = $_GET['file'];
$imgs = [1=>'1.jpg', 2=>'2.jpg', 3=>'3.jpg', 4=>'4.jpg'];

echo '<img src="/img/' . $imgs[$num] . '"></a>';