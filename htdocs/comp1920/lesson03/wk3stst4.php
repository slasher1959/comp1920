<?php
$countries[7] = "Canada";
$countries[17] = "USA";
$countries[48] = "Peru";
$countries[3] = "Bolivia";
$countries[] = "Yugoslavia";
echo "<pre>";
var_dump($countries);
echo "</pre>";

$s2ndcountries = array("Canada", "Fiji", "Bolivia");
echo "<pre>";
var_dump($s2ndcountries);
echo "</pre>";

$thirdcountries = ["Canada", "Fiji", "Bolivia"];
echo "<pre>";
var_dump($thirdcountries);
echo "</pre>";

$fourtharray = [7 => "Canada", "x" => "Fiji", 6 => "Bolivia"];
echo "<pre>";
var_dump($fourtharray);
echo "</pre>";

$fivetimes = array(7 => "Canada", "x" => "Fiji", 6 => "Bolivia");
echo "<pre>";
var_dump($fivetimes);
echo "</pre>";

$countriesmore = ["Canada", "Fiji", "England"];
//$countofcountries = count($countriesmore);
//for ($i = 0; $i < count($countofcountries); $i++) {
for ($i = 0; $i < count($countriesmore); $i++) {
	echo "$countriesmore[$i]<br />";
}

echo "Before deleting<br />";

foreach($countriesmore as $ctemp) {
	echo "$ctemp<br />";
}

echo "After deleting<br />";
unset($countriesmore[1]);

foreach($countriesmore as $ctemp) {
	echo "$ctemp<br />";
}

?>