<?php//// Ñïèñîê âñåõ ñòàòåé//function articles_all(){	// Çàïðîñ.	$query = "SELECT * FROM articles ORDER BY id_article DESC";	$result = mysql_query($query);								if (!$result)		die(mysql_error());		// Èçâëå÷åíèå èç ÁÄ.	$n = mysql_num_rows($result);	$articles = array();	for ($i = 0; $i < $n; $i++)	{		$row = mysql_fetch_assoc($result);				$articles[] = $row;	}		return $articles;}//// Êîíêðåòíàÿ ñòàòüÿ//function articles_get($id_article){	// Çàïðîñ.	$query = "SELECT * FROM articles WHERE id_article ='$id_article'";	$result = mysql_query($query);								if (!$result)		die(mysql_error());	if (mysql_num_rows($result)>0) {	// Èçâëå÷åíèå èç ÁÄ.		$row = mysql_fetch_assoc($result);			return $row;	}	else return false;}//// Äîáàâèòü ñòàòüþ//function articles_new($title, $content){	// Ïîäãîòîâêà.	$title = trim($title);	$content = trim($content);	// Ïðîâåðêà.	if ($title == '')		return false;		// Çàïðîñ.	$t = "INSERT INTO articles (title, content) VALUES ('%s', '%s')";		$query = sprintf($t, 	                 mysql_real_escape_string($title),	                 mysql_real_escape_string($content));		$result = mysql_query($query);	if (!$result)		die(mysql_error());			return true;}//// Èçìåíèòü ñòàòüþ//function articles_edit($id_article, $title, $content){// Ïîäãîòîâêà.	$title = trim($title);	$content = trim($content);	// Ïðîâåðêà.	if (!$id_article) return false;	if ($title == '')		return false;		// Çàïðîñ.	$t = "UPDATE articles SET title='%s', content='%s' WHERE id_article='%d'";		$query = sprintf($t, 	                 mysql_real_escape_string($title),	                 mysql_real_escape_string($content),					 mysql_real_escape_string($id_article));		$result = mysql_query($query);	if (!$result)		die(mysql_error());			return true;}//// Óäàëèòü ñòàòüþ//function articles_delete($id_article){if (!$id_article) return false;$t = "DELETE from  articles WHERE id_article='%d'";$query = sprintf($t, mysql_real_escape_string($id_article));		$result = mysql_query($query);	if (!$result)		die(mysql_error());			return true;}//// Êîðîòêîå îïèñàíèå ñòàòüè//function articles_intro($article){$max_chars = 250;$quote = $article['content'];if (strlen($quote) <= $max_chars)	return $quote;$ret = substr($quote,0,$max_chars);$i=$max_chars;	while (($ch=$quote[$i]) !=' ') {		$ret .= $ch;		$i++;	}return $ret.'...';}