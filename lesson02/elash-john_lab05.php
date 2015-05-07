<?php
/**
File:  elash-john_lab05.php

This PHP script is to demo my knowledge of PHP using dates, operators, conditionals, and loops

Author: John Elash
Last Modified:  May 06, 2015
*/

// Part1:  get current date and print it out in format TEXTDayofWk, TextMonth D, YYYY
date_default_timezone_set("America/Vancouver");
$currentDateTime = time();
echo "Today is " . date("l, F j, Y", $currentDateTime) . "<br />";

// Part2: report if the run date, day of month if even or odd
$evenOrOdd = date("j") % 2;

if ($evenOrOdd == 0)	{
	echo date("j") . " is an Even number.";
} else {
	echo date("j") . " is an Odd number.";
}

echo $evenOrOdd . "<br />"; 
?>