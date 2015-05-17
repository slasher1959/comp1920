<?php
    move_uploaded_file($_FILES['userfile']['tmp_name'], "./received_file_dir/".$_FILES['userfile']['name']);
    echo "<pre>" . "formatted text using pre<br />";
    var_dump($_FILES);
    echo "</pre>";

    echo "non formatted text follows<br />";
    var_dump($_FILES);

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
