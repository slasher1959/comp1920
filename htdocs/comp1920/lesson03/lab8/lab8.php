<?php
/**
 * lab8.php
 *
 * This php script will process a form per requirements of Lab8 in BCIT course COMP1920
 *
 * Author:  John Elash
 * Date:   May 14, 2015
 *
 */

/*
the following function will check form fields for validity and print appropriate messages

returns:  no values are returned

*/

function processMyForm() {
	
	if (!isset($_POST['last'])) {
		echo "Please type a last name<br />";
		return;
	}
	
	if (!(isset($_POST['number'])) || ($_POST['number'] == "")) {
		echo "Please type a password<br />";
		return;
	} elseif ($_POST['number'] != "comp1920") {
		echo "Invalid password, sorry<br />";
		return;
	}
	
	echo "Your favourite sport is: " . $_POST['sport'] . " ...that's what you said<br />";

	if (isset($_POST['junk'])) {
		echo "Junk mail will now be sent to you in perpetuity, thank you<br />";
	}
	
	if (($_POST['provinces'] == "bc") || ($_POST['provinces'] == "pei")) {
		echo "isn't the ocean wonderful?<br />";
	}
	
	echo "Your meaning of life is: " . strtoupper($_POST['meaning_of_life']) . "<br /> END OF LAB8 SCRIPT";
	
}

processMyForm();

?>
