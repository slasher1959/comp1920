<?php

$countries[] = "Canada";    // index 0
$countries[] = "USA";       // index 1
$countries[] = "China";
$countries[] = "Japan";
$countries[] = "Gary";
$countries[] = "Tong";      // index 5

// remove element at index 4
unset($countries[4]);

// add a new element with the index of 4
$countries[4] = "COMP";

// check to see if an element at index 4 is set
if(isset($countries[4]))
{
    // print out the string we set at index 4
	echo $countries[4];
    echo "<br>";
}

// loop through all elements in the array
for($i = 0; $i < count($countries); $i++)
{
    // using $i as your index, iterate through the array
    echo $countries[$i];
    echo "<br>";
}

echo "<pre>";  // <pre> just here for some formatting (or lack there of)
var_dump($countries);   // dump the contents of the array

// add another string to our array with an index of "b"
$countries["b"] = "New Country";

// because "b" is not an integer, the for loop with an integer counter won't catch it

// foreach loop doesn't require knowledge of the keys nor the size
foreach ($countries as $country)
{
    // each item in the array is aliased as $country
    echo $country;
    echo "<br>";
}

?>
