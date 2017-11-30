<!DOCTYPE html>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css"/>
	<title></title>
</head>
<body><?php
function writeData()
{
    if ($_POST['message']) {
    	$file = file('db.txt');
    	$file[] .= "\n" . $_POST['message'];
    	file_put_contents('db.txt', $file);
    	// header("Location: index.php");
     //    exit;
    }

}
writeData();

function readData() 
{
	$file = file('db.txt');
	foreach ($file as $line) {
		echo $line . '<br>';
	}
}
readData();
?>

<br><br>
<form action="" method="post" valuse="s">
	Add you message <br>
	<input type="text" name="message"><br>
	<input type="submit" value="Send">
</form>
<br><br>

</body>
</html>
