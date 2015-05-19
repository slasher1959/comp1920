<?php
/**
 * rewind.php
 *
 * this script will allow me to practice getting the contents of a directory, so the base skill to be able to process a directory
 * Various functions will be tried in this script
 *
 * @author:  John Elash
 * Date:   May 18, 2015
 * @version:  V1.0
 */
$testDirectoryName = "received_file_dir";

if(is_dir($testDirectoryName))  {
    if($directoryHandle = opendir($testDirectoryName)) {
        $cnt = 0;
        var_dump($directoryHandle);
        while(($fileInDirectory = readdir($directoryHandle)) !== false) {
            $cnt++;
            echo "filename of file $cnt: " . $fileInDirectory . "<br />";
        }
        rewinddir($directoryHandle);
        while(($fileInDirectory = readdir($directoryHandle)) !== false) {
            echo "filename: " . $fileInDirectory . "<br />";
        }
        closedir($directoryHandle);
    }
} else {
    echo "$testDirectoryName is not a directory...try again!<br />";
}

$dir = "examples";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}

$array1ofFiles = scandir($dir, SCANDIR_SORT_ASCENDING);
$array2ofFiles = scandir($dir, SCANDIR_SORT_DESCENDING);

echo "<pre><br />";

print_r($array1ofFiles);
print_r($array2ofFiles);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
