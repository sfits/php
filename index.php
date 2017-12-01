<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
</head>
<body>

<style type="text/css">
	img {
		border: 1px solid red;
		width: 200px;
		margin: 10px;
	}
</style>

<?php

if ($handle = opendir('img')) {
    while (false !== ($file = readdir($handle))) { 
    	$files = explode(' ', $file);
        if ($file != "." && $file != "..") { 
            echo '<a href="function.php?file=' . $file . '"><img src="/img/' . $file . '"></a>';
        }
    }
    closedir($handle); 
}

?>

<hr><br>
<form action="function.php" method="post" enctype="multipart/form-data">
<input type="file" name="img">
 <input type="submit">
</form>



</body>
</html>