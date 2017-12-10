<?php

require_once 'db_connect.php';

function displayAll()
{
	$r = mysql_query("SELECT * FROM articles");

	while ($myRow = mysql_fetch_array($r)){
	   echo 'id: ' . $myRow ['id_article'] . '<br> title: ' . $myRow['title'] . '<br> content: ' . $myRow['content'] . '<br><a href="?delete=' . $myRow ['id_article'] . '">Delete Article</a><br>' . '<a href="?up=' . $myRow ['id_article'] . '">Update Article</a><br><hr>';
	}
}

function addArticle($title, $content) 
{
	if ((!empty($_POST['title'])) && (!empty($_POST['content']))) {
		$r = mysql_query ("INSERT INTO articles SET title = '$title', content= '$content'");
		header("Location: index.php");
        exit;
	}
}	
addArticle($_POST['title'], $_POST['content']);

function delete()
{
	$deletion = $_GET['delete'];
	$r = mysql_query ("DELETE FROM articles WHERE id_article = $deletion");
}
delete();

function update()
{
	if (isset($_GET['up'])) {
		$titleUpdate = $_POST['tUpdate'];
		$contentUpdate = $_POST['cUpdate'];
		$updation = $_GET['up'];

		$r = mysql_query("SELECT * FROM articles WHERE id_article = '$updation'");

		while ($myRow = mysql_fetch_array($r)){
	    	echo '<form action="" method="POST">
			<textarea rows="1" cols="45" name="tUpdate">' . $myRow['title']. '</textarea><br>
			<textarea rows="10" cols="45" name="cUpdate">' . $myRow['content']. '</textarea><br>
			<input type="submit" name="update" value="update">
			</form>';
		}

		$r = mysql_query ("UPDATE articles SET title = '$titleUpdate', content = '$contentUpdate' WHERE id_article = '$updation'");
			// header("Location: index.php");
	  //       exit;
	}
}
update();