<?php

/* Framework for creating a select element in a form on an HTML page
Params: $theArray - select option values to use in the select element

returns:  $theSelect - the HTML created that will display the select element for a form

*/

function arrayToSelect($theArray){
 $theSelect = "<select name = \"mySelect\">";
 foreach($theArray as $element){
  $theSelect = $theSelect . "<option>". $element . "</option>";
 }
 $theSelect = $theSelect . "</select>";
 return $theSelect;
}

$countries[] = "Canada";
$countries[] = "Fiji";
$countries[] = "England";
$countries[] = "Brazil";
$countries[] = "New Zealand";

echo arrayToSelect($countries); 

?>
