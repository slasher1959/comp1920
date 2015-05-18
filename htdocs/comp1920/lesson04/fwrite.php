<?php
//    if($myTestFile = fopen("./examples/gary.txt", "r")) {
    if($myTestFile = fopen("./johne.txt", "a+")) {
        echo "Successfully opened the file<br />";
        echo '$myTestFile value is: '. $myTestFile . "<br />";
        var_dump($myTestFile);
    } else  {
        echo "Not Successfully opened the file<br />";
        echo '$myTestFile value is: '. $myTestFile . "<br />";
        var_dump($myTestFile);
    }

    if($writeWasOK = fwrite($myTestFile, "This is a line I'm writing to the file after the initial...I've expanded it\n")) {
        echo "Successfully written to the file<br />";
        echo '$writeWasOK value is: '. $writeWasOK . "<br />";
        var_dump($writeWasOK);
    } else {
        echo "NOT Successfully written to the file<br />";
        echo '$writeWasOK value is: '. $writeWasOK . "<br />";
        var_dump($writeWasOK);        
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
