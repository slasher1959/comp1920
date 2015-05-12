<?php
/** 
File: wk2sandbox.php

This file is used for creating some PHP Script that I play with for week 02 lesson in COMP1920

Author:  John Elash
Last Modified: May 05, 2015
*/

/*
$thedate = date("l");   echo $thedate . "<br />";  //prints the full textual day of week
$thedate = date("F");   echo $thedate . "<br />";  //prints the full textual month
$thedate = date("d");   echo $thedate . "<br />";  //prints the two digit day of month
$thedate = date("F l"); echo $thedate . "<br />";  //prints Month TextualDayofWk
$thedate = date("l F"); echo $thedate . "<br />";  //prints TextualDayofWk Month
$thedate = date("l F d"); echo $thedate . "<br />"; //prints TextualDayofWk Month DD
*/

$thedate = date("l F d Y H:i:s");
echo "$thedate<br />";

?>

