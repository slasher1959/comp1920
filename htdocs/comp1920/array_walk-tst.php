<!DOCTYPE html>
<html>
<body>
<?php
function writeElementToScreen($element)
{
 echo "$element<P>";
}

$countries[0] = "Canada";
$countries[1] = "Fiji";
$countries[2] = "England";

array_walk($countries, writeElementToScreen); 
?>
</body>
</html>