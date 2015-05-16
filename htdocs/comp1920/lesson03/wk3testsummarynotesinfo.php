<?php
$myarray[ ] = 17;
$myarray[ ] = “is”;
$myarray[ ] = “the”;
$myarray[ ] = “favourite”;
$myarray[ ] = “number”;

var_dump($myarray);
echo "<br />";
print_r($myarray);
echo "<br />";

unset($myarray[3]);

var_dump($myarray);
echo "<br />";
print_r($myarray);
echo "<br />";

sort($myarray);
var_dump($myarray);
echo "<br />";
print_r($myarray);
echo "<br />";


?>
