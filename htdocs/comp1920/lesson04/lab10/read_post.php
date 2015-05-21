<?php
/**
 * read_post.php
 *
 * For COMP1920 Lab10
 * This script reads the form input and then will direct the user to a read or post function
 * based on that input
 *
 * @author:  John Elash
 * Date:   May 20, 2015
 * @version:  V1.0
 */

if(isset($_POST['read_or_post'])) {
    if  ($_POST['read_or_post'] == "read") {
        header("Location:./read.php");  //redirect browser/user agent to open another php script
    } else {
        header("Location:./get_text.php"); //redirect browser/user agent to open another php script
    }
}   else {
    echo "You have not made a selection.  Please try again<br />";
}
?>
