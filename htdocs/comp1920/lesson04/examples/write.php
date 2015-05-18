<?php

// create a file pointer aka file handler to the file gary.txt
// the mode a+ allows for writing. look up the full definition and other modes in the notes
$fp = fopen("gary.txt", "a+");

// fwrite will send a string to the file pointer.
// because the file pointer was declared to interact with gary.txt (via fopen), we're writing to gary.txt
fwrite($fp, "some text");

// be sure to close your pointer - this frees up gary.txt for other programs/scripts
fclose($fp);
