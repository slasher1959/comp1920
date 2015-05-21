<?php
/**
 * read.php
 *
 * This script file reads POSTS from the POSTS file as per COMP1920 Lab10 requiremnts
 *
 * @author:  John Elash
 * Date:   May 19, 2015
 * @version:  V1.0
 */

    $messageBoardFile = "messageboard.txt";
    if (file_exists($messageBoardFile) !== true) {  //test if file exists and create it if it does not
        $myFile = fopen($messageBoardFile, "a");
        fclose($myFile);
    } 

    $myFileArray = file($messageBoardFile);
    if (count($myFileArray) == 0) {
        echo "File: $messageBoardFile has no posts to display<br />";   // if the messageboard is empty display 
    } else {                                                            // this to the user to avoid confusion
        foreach ($myFileArray as $myFileNdx=>$myFileArrayLine) {
            echo nl2br($myFileArrayLine);
        }
    }

    echo "<br /><br />";    //add two breaks to offset the link back to the main page
?>

<!--
Display a link to the main page, not via php, just use regular HTML
-->
<a href="./read_post.html" target="_self">Back to Read-Post Page</a>
