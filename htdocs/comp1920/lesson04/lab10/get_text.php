<?php
/**
 * get_text.php
 *
 * This script file simply gets user info that will be a "post" and then send that to another script to process the post
 *
 * @author:  John Elash
 * Date:   May 20, 2015
 * @version:  V1.0
 */
?>
<!--
We are really using regular HTML to display a form to capture the post here, not PHP itself
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
         <form action="post.php" method="post" name="lab10_form2">
                <textarea name="thepost" rows="20" cols="80" autofocus="autofocus" placeholder="Enter your Post in the windows"></textarea><br />
                <input type="submit" name="submitpostrequest" value="Submit Query">
        </form>        
    </body>
</html>