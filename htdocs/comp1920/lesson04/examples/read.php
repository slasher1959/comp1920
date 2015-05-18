<?php

// read each line from the file tong.txt
// put each line as an element into the $contents array
$contents = file("tong.txt");

// traverse through the $contents array
foreach($contents as $line) // alias each element as $line
{
    // because each line has a CSV, we can split it further with regular expressions
    // words is now an array with each comma separated value as its element
	$words = preg_split("/,/", $line);

    // with a nested loop, we now go through the array of words
	foreach ($words as $word)
	{
        // using skills from previous labs, we can perform a search and match
		if($word == "gary")
		{
            // found the word gary
			echo "found gary";

            // stop script
			exit();
		}
	}
}

