<?php

// suppresses the error message that we can't divide by 0
@print( 10 / 0);

echo "hello ";

$a = 2;

if($a == 1)
{
	echo "world";
}
else
{
	exit();
}

// this doesn't get printed because script was stopped from the exit()
echo "<br>";
echo "Gary";