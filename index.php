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
$imgs = [1=>'1.jpg', 2=>'2.jpg', 3=>'3.jpg', 4=>'4.jpg'];
	foreach ($imgs as $num => $img) {
		echo '<a href="sum.php?file=' . $num . '"><img src="/img/' . $imgs[$num] . '"></a>';
	}
?>

</body>
</html>