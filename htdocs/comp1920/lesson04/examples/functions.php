<?php
/**
 * To address the class question about return values in functions
 * and how to build HTML with PHP.
 */

// function that prints out a select box
function arrayToSelect($d)
{
    // start off with the opening select tag
	$theSelect = "<select name=\"mySelect\">";

    // traverse through each element from the incoming array
	foreach($d as $element)
	{
        // concatenate it onto the select box as an option element
		$theSelect = $theSelect."<option>" .$element."</option>";
	}

    // end with closing select tag
	$theSelect = $theSelect . "</select>";

    // return the entire
	return $theSelect;
}

// an array of countries that we want as the options
$countries[] = "canada";
$countries[] = "fiji";
$countries[] = "england";

// we echo because the function returns a string that looks like
// <select><option</option> ... </select>
echo arrayToSelect($countries); // pass in the array $countries

