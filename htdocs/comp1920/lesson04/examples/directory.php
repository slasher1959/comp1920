<?php

// tests if a file exists - returns true/false
if(file_exists("coding.jpg"))
{
	echo "found coding.jpg<br>";
}

// tests if the folder "1920" exists - returns true/false
if(is_dir("1920"))
{
	echo "1920 is a directory";
}
else
{
	echo "coding.jpg is not a directory";
}

// grabs everything in the current directory
// and throws it into the array $directory
// . is current directory, .. is up one level
$directory = scandir(".");

// because directory is an array,
// we can traverse it like any other array
foreach($directory as $d)
{
    // simple echo for demonstration
    // keep in mind you can test the current item with file_exists() and is_dir()
	echo $d."<br>";
}