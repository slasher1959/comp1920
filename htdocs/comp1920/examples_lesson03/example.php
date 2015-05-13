<?php

// grab the file functions and use the code in it
include "functions.php";

// the following line does the same thing except it STOPS execution if the file doesn't exist
// require "functions.php";

// sayHi is now available, even though it's in another file
sayHi("Tong");


?>
