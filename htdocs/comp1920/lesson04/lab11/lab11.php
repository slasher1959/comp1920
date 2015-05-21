<?php
/**
 * lab11.php
 *
 * This script file:
 * 1) uses comma-delimited files to store data
 * 2) cuts the information from the file(s) into arrays
 * 3) uses the array information to display the contents of the file into an HTML table
 *
 * @author:  John Elash
 * Date:   May 20, 2015
 * @version:  V1.0
 */
$lab11file = "personaldata.txt";
$fileContentsArray = file($lab11file) or exit("Error opening the file: " . $lab11file);

echo "<table border=\"1\">";
foreach($fileContentsArray as $contentsArrayLine) {
//NOTE: Lab instructions stated to use split() function but it has been deprecated, SO USED preg_split
    $one_persons_data = preg_split("/,/", $contentsArrayLine);
    echo "<tr>";
    foreach($one_persons_data as $one_persons_data_item) {
        echo "<td>" . $one_persons_data_item . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>