<?php
require_once 'config.php';

// Подключение к БД.
mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD)
or die('No connect with data base');
mysql_select_db(DB_NAME) or die('No data base');
