<?php
/**
 * XXXFILENAME.php
 *
 * XXXDescription
 *
 * @author:  John Elash
 * Date:   MMM DD, 2015
 * @version:  V1.0
 */
//echo "<pre>"; 
//var_dump($_POST); 
//echo "</pre>";
if(isset($_POST['read_or_post'])) {
    if  ($_POST['read_or_post'] == "read") {
        header("Location:./read.php");
    } else {
        header("Location:./get_text.php");
    }
}   else {
    echo "not set<br />";
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
