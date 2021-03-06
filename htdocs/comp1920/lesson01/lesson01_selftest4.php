<?php
/** 
File: lesson01_selftest.php

Used to test a little of my PHP Knowledge learned so far

Author:  John Elash
Last Modified: May 03, 2015
*/

/*
Variable Definitions 
*/
 
$firstname = "John";
$lastname = "Elash";
$age = 55;
$shoesize = 9.5;
$male = true;
$female = false;

var_dump($firstname, $lastname, $age, $shoesize, $male, $female);
echo ("<br />");

if(is_int($firstname)) {
	echo "a string";
} else {
	echo "not a string";
}

if($male) {
	echo "<br/>" . $firstname. " " . $lastname . " is " . $age . " years old, wears size " . $shoesize . " shoes, and is male.<br />" . "the end!<br />";
}

/* define some constants and then check if they are defined */
define("TURKEY", "I am a Turkey!<br />");
define("CHICKEN", "..and I am a Chicken, ha ha!!!!<br />");

if(defined("TURKEY")) {
	echo TURKEY;
}

if(defined("CHICKEN")) {
	echo CHICKEN;
}

/*
if($male) {
	echo $firstname . " " $lastname . "is " . $age . " years old, wears size " . $shoesize . " shoes, and is male.<br />" . "the end!";
}
*/

?>