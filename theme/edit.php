<?/*
������ �������� ��������� ������
=======================
$title - ���������
$content - ����������
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>Blog</title>
	<meta content="text/html; charset=Windows-1251" http-equiv="content-type">	
	<link rel="stylesheet" type="text/css" media="screen" href="theme/style.css" /> 
</head>
<body>
	<h1>Blog</h1>
	<br/>
	<a href="index.php">�������</a> |
	<a href="editor.php">������� ���������</a>
	<hr/>
	<h1>��������� ������</h1>
	<form method="post">
		��������:
		<br/>
		<input type="text" name="title" value="<?=$title?>" />
		<br/>
		<br/>
		����������:
		<br/>
		<textarea name="content"><?=$content?></textarea>
		<br/>
		<input type="hidden" name="id" value="<?=$id?>" />
		<input type="submit" name = "ed" value="���������" />
		<input type="submit" name = "dl" value="�������" />
	</form>
	<hr/>
	<small><a href="">Copyright</a> &copy;</small>			
</body>
</html>
