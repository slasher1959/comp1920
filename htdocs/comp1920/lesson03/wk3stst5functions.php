<?php
/* Testing a simple function

returns a number doubled in value from what was iput

*/
function doubleTheNumber($theNumber = 0) {
	return $theNumber * 2;
}

$age = 33;
$double = doubleTheNumber($age);
echo "\$age is $age and if you double it, you get $double<br />";
?>
