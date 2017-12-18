<?php

class StartUp
{
	function startup()
	{
		// Настройки подключения к БД.
		$hostname = 'localhost'; 
		$username = 'root'; 
		$password = '';
		$dbName = 'localhost';
		
		// Подключение к БД.
		mysql_connect($hostname, $username, $password) or die('No connect with data base'); 
		mysql_select_db($dbName) or die('No data base');

		// Открытие сессии.
		session_start();
			
	}
}
