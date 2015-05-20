<?php
/**
 * read.php
 *
 * This script file is for lab10 in course COMP1920.
 *
 * Author:  John Elash
 * Date:   May 19, 2015
 *
 */
//    echo "in read.php<br />";
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
        foreach ($myFileArray as $myFileNdx=>$myFileArrayLine) {
            echo nl2br($myFileArrayLine);
//            $tempString = str_replace('and', 'BUT', $myFileArrayLine);
//            echo nl2br($tempString);
//            echo nl2br("and another\n and still another\nyet another") . "<br />";
//            var_dump($myFileArrayLine);
//            echo "<br />";
        }
    }
//    echo "<pre>"; 
//    var_dump($myFileArray); 
//    echo "</pre>";  

?>
