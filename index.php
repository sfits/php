<?php

require_once 'model/db.php';

if ($_GET['file']) {
    $content = 'templates/photo.php';
} else {
    $content = 'templates/list.php';
}

if (isset($_FILES['img'])) {
    upload();
}

include 'templates/main.php';