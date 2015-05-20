<?php
    echo "in read.php<br />";
    $messageBoardFile = "messageboard.text";
    if (file_exists($messageBoardFile) !== true) {
        echo "doesn't exist";
        $myFile = fopen($messageBoardFile, "a");
        fclose($myFile);
    } 

    $myFileArray = file($messageBoardFile);
    if (count($myFileArray) == 0) {
        echo "File: $messageBoardFile has no posts to display<br />";
    } else {
        foreach ($myFileArray as $myFileArrayLine) {
            echo nl2br($myFileArrayLine);
            echo nl2br("and another\n and still another\nyet another");
        }
    }
    echo "<pre>"; 
    var_dump($myFileArray); 
    echo "</pre>";  

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
