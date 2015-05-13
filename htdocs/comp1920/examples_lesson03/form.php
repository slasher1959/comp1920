<?php

// $_POST is available to grab data that was sent with the post method
// $_POST is an array that you can traverse like any other array
// $_GET grabs data that was sent via get method
// $_REQUEST does both

// grab the value from the input field marked with name="u"
$username = $_POST["u"];

// sanitize our value, in case the user attempted to inject html/javascript
echo strip_tags(trim($username));

echo "<br>";

// print the value of the input that was named r
// this is bad practice but only here for example - you need to sanitize this too
echo $_POST['r'];   // someone can make their own form, name the field "r" and post to your script!

echo "<br>";
echo "<br>";
echo "<br>";

// as with any array, traversing through $_POST is the same
foreach($_POST as $post)
{
    // if the input field named "u" was empty (aka not set), 
	if(!isset($post['u']))
	{
        // send them a message
		echo "Please enter a username";

        // script execution should be stopped here, but we'll cover that next class
	}
}

?>
