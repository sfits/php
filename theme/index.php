<?/*
������ ������� ��������
=======================

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
	<b>�������</b> |
	<a href="editor.php">������� ���������</a>
	<hr/>
	<? foreach ($articles as $article): ?>
			<a href="article.php?id=<?=$article['id_article']?>">
				<?=$article['title']?>
			</a>
			<p><?=articles_intro($article)?></p>
	<? endforeach ?>
	<hr/>
	<small><a href="">Copyright</a> &copy;</small>			
</body>
</html>