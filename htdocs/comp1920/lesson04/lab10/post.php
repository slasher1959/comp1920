<?php
/**
 * post.php
 *
 * COMP1950 lab10 - processes the post data, and adds info to de-marcate that 
 * post info (prefix it).  Write the post to the post capture file
 *
 * @author:  John Elash
 * Date:   MMM DD, 2015
 * @version:  V1.0
 */

$msgBoardFile = "messageboard.txt";
//check if file exists and if it does not create it
if((file_exists($msgBoardFile)) !== TRUE) {
    $newMsgBoardFile = fopen($msgBoardFile, "a"); 
    fclose($newMsgBoardFile);
}
// set up date time to include in post file as part of post entry
date_default_timezone_set("America/Vancouver");
$date_time = date("F j, Y G:i:s", time());

// write the post to the file
if (($mbf = fopen($msgBoardFile, "a")) !== FALSE) {
    fwrite($mbf, "\n-----");
    fwrite($mbf, "\n$date_time");
    fwrite($mbf, "\n" . $_POST['thepost']);
    fclose($mbf);
} 

?>
<!--
Use HTML to provide a confirmation message and link back to the start of the application 
-->
<p>Thank you for your post!</p>
<a href="./read_post.html" target="_self">Back to Read-Post Page</a>
