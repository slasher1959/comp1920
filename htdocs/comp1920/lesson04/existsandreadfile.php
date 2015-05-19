<?php
/**
 * existsandreadfile.php
 *
 * a script that tests for a file existing and if it exists will read it and output it at the same time
 *
 * @author:  John Elash
 * Date:   May 18, 2015
 * @version:  V1.0
 */

$theFile = "johne.txt";

if(file_exists($theFile)) {
    echo readfile($theFile);
} else {
    echo "file doesn't exist.  terminated!<br />";
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
