<?php
/**
 * stringtoregexpr.php
 *
 * This is a file where I practice, learn, using a regular expression function to split a string into an array
 *
 * @author:  John Elash
 * Date:   May 18, 2015
 * @version:  V1.0
 */
$jasonString = "jason,harrison,A0012345,jason_harrison@bcit.ca,http://webapps.bcit.ca/comp1920";
$tomString = "tom,jones,A00121212,tom@jones.com,http://www.tomjones.com";

$jasonArray = preg_split("#,#", $jasonString);

print_r($jasonArray);

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
