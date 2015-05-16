<?php
/** 
File: wk2sandbox.php

This file is used for creating some PHP Script that I play with for week 02 lesson in COMP1920

Author:  John Elash
Last Modified: May 05, 2015
*/
// dates section
$thedate = date("l");   echo $thedate . "<br />";  //prints the full textual day of week
$thedate = date("F");   echo $thedate . "<br />";  //prints the full textual month
$thedate = date("d");   echo $thedate . "<br />";  //prints the two digit day of month
$thedate = date("F l"); echo $thedate . "<br />";  //prints Month TextualDayofWk
$thedate = date("l F"); echo $thedate . "<br />";  //prints TextualDayofWk Month
$thedate = date("l F d"); echo $thedate . "<br />"; //prints TextualDayofWk Month DD

//operators section
$counter = 25;
$counter++;
echo $counter . "<br />";


$counter = 28.2;
$counter++;
echo "$counter . <br />";

$modulusvariable = 30;
$modulusvariable2 = 30.3;
$modulusvariable3 = 30.9;
$modulusvariable4 = 31.9;

echo $modulusvariable % 7 . "<br />";
echo $modulusvariable2 % 7  . "<br />";
echo $modulusvariable3 % 7  . "<br />";
echo $modulusvariable4 % 7  . "<br />";

$var1 = 100;
$var2 = 22;
$var2 = $var1 / 9;
echo $var2;
echo $var1 / 11;
?>

