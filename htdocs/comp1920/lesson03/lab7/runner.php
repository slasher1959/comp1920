<?php
/**
 * runner.php
 *
 * Comp1920 Lab7 driver file
 *
 * Author:  John Elash
 * Date:   May 14, 2015, 2015
 *
 */

require_once("array.php");

$myMagicalBeautifulItems = array(
  "Living and Working in Seoul, Korea for two years", 
  "the birth of my daughter, Holli",
  "moving to BC from Saskatchewan",
  "being accepted into the computer programmer retraining program while working for SaskTel in 1985",
  "being able to travel extensively, to South East Asia, and thru Europe",
  "being remarried in 2007 in Cabo San Lucas, Mexico",
  "having my daughter grow up and be successful, and ambitious",
  "working with students as a volunteer for the \"Leaders of Tomorrow\" organization",
  "representing my company, TELUS, as a speaker at the World Billing Conference in Miami, Florida",
  "working as a volunteer for the Winter 2010 Olympic Organizating committee"
);
  
echo "<br /><br />";  //empty lines printed for format reasons only

echo createHtmlSelect($myMagicalBeautifulItems);

?>
