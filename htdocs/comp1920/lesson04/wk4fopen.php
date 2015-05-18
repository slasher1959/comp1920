<?php
//    if($myTestFile = fopen("./examples/gary.txt", "r")) {
    if($myTestFile = fopen("./examples/garynot.txt", "r")) {
        echo "Successfully opened the file<br />";
        echo '$myTestFile value is: '. $myTestFile . "<br />";
        var_dump($myTestFile);
    } else  {
        echo "Not Successfully opened the file<br />";
        echo '$myTestFile value is: '. $myTestFile . "<br />";
        var_dump($myTestFile);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
