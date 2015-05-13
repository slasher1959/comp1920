<?php
/**
 * XXXFILENAME.php
 *
 * XXXDescription
 *
 * Author:  John Elash
 * Date:   MMM DD, 2015
 *
 */

echo "school: " . $_POST['school'] . "<br />";
echo $_POST['male'] . "<br />";
echo $_POST['human'] . "<br />";
echo "<pre>";
print_r($_POST['birthplace']);
echo "</pre><br />";
echo $_POST['submit_info_x'] . " :You clicked this pixel location on the X Axis.<br />";
echo $_POST['submit_info_y'] . " :And You clicked this pixel location on the Y Axis.<br />";

echo "Now dump the form using a foreach loop<br />";

foreach($_POST as $myforminput) {
	echo "$myforminput<br />";
}

print_r($_POST);
?>
