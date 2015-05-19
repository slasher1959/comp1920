<?php
    $testDirectoryName = "./";
    if(is_dir($testDirectoryName)) {
        echo "yup, it's a directory: $testDirectoryName and the directory name/info is<br />";
        $myDirectory = dir($testDirectoryName);
        var_dump($myDirectory);
    } else {
        echo "Nope, it's not a directory: $testDirectoryName<br />";
    }
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
