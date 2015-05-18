<?php

// $_FILES is available just like $_GET, $_POST and $_REQUEST

// the first key 'file' is actually the name from the input form
// the second key 'type' is made available by PHP
if($_FILES['file']['type'] == 'image/jpeg')
{
    // tmp_name is the absolute path where the uploaded file is temporarily store
    // we move it from the uploaded path to the final destination.
	move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
}
else
{
    // stop script if a jpeg wasn't uploaded
	exit();
}
		
// a dump to show what's made available for each file upload
echo "<pre>";
var_dump($_FILES['file']);