<?php
include_once('startup.php');
include_once('model.php');

// ��������� ����������, ����������� � ��, ������ ������.
startup();

if ($art=articles_get($_GET['id']))
	{
		$title = $art['title'];
		$content = $art['content'];
	}
	
// ���������.
header('Content-type: text/html; charset=windows-1251');

// ����� � ������.
include('theme/article.php');