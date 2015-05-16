<?php
/*  File: myfunctions.php
 Author: John Elash
 Last modified: May 11, 2015
 This file contains functions I created. These functions are useful in writing web pages
*/

/* The following function converts an array into a string that represents an HTML select 
element:
*/
function arrayToSelect($theArray){
 $theSelect = "<select name = \"mySelect\">";
 foreach($theArray as $element){
  $theSelect = $theSelect . "<option>". $element . "</option>";
 }
 $theSelect = $theSelect . "</select>";
 return $theSelect;
}

/* This function -- doubleTheNumber -- receives one parameter,  
   $someNumber,  doubles it, and returns the doubled value
*/
function doubleTheNumber ($someNumber){
 return $someNumber * 2;
}
