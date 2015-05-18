<?php
/**
 * fileintoarray.php
 *
 * practice writing the code that reads a file into an array
 *
 * @author:  John Elash
 * Date:   May 18, 2015
 * @version: V1.0
 */

$fileArrayOfMine = file("johne.txt");

foreach ($fileArrayOfMine as $fileArrayLineNum => $fileLine) {
    echo "Line Number: " . ($fileArrayLineNum + 1) . ".  Line Value: " . $fileLine . "<br />";
}

print_r($fileArrayOfMine);
echo "<br /> --- The End ---";

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
