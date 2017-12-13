	<b>Главная</b> |
	<a href="editor.php">Консоль редактора</a>
	<hr/>
	<? foreach ($articles as $article): ?>
			<a href="article.php?id=<?=$article['id_article']?>">
				<?=$article['title']?>
			</a>
			<p><?=$article['intro']?>...</p>
	<? endforeach ?>