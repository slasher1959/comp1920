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

    if($fileWasClosed = fclose($myTestFile)) {
        echo "File was successfully closed<br />";
        echo '$fileWasClosed value is: ' . $fileWasClosed . "<br />";
        var_dump($fileWasClosed);
    } else {
        echo "File was NOT successfully closed<br />";
        echo '$fileWasClosed value is: ' . $fileWasClosed . "<br />";
        var_dump($fileWasClosed); 
        exit("Script ended prematurely<br />");       
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
