<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
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
?>

</body>

</html>
