<?php
/**
File:  elash-john_lab02-2.php

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
	echo date("j", $currentDateTime) . " is an Even number.";
} else {
	echo date("j", $currentDateTime) . " is an Odd number.";
}

echo "<br />";

/** Part3:  Report the square of the D of run date of this script and subsequently
 * print out the numbers from zero thru that square value, except for the number 5
 */

$squared = date("j", $currentDateTime) * date("j", $currentDateTime);

if ($squared > 100) {
	echo "You will have a lucky day <br />";
} else {
	echo "You will have an ordinary day <br />";
}

for ($printNum = 0; $printNum <= $squared; $printNum++) {
	 if ($printNum == 5) {
		 continue;
	 } else {
		 echo $printNum . "<br />";
	 }
}
echo "<br />";

echo ucfirst("end of ") . ucfirst("file") . "<br />"; 

?>