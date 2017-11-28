<?php
echo '<div class="wrap"><div class="main">';
$dayofmonth = date('t');
for ($i = 1; $i <= $dayofmonth; $i++) {
	echo '<div class="win">' . $i . '</div>';
}
echo '</div></div>';