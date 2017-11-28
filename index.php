
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="GET">
	<input type="text" name="letter">
</form>
<?php

$cities = ['Odessa', 'Kiro', 'Lugansk'];

function Get($cities) {
	foreach ($cities as $city) {
		$letter = substr($city, 0, 1);
		$getLetter = substr($_GET['letter'], 0, 1);
		if ($letter == $getLetter) {
			return $city;
		}
	}
}
echo Get($cities);

?>
</body>
</html>
