<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>varaible.php</title>
</head>
<body>
    

    <?php
    $var1 = "Fahad";
    $var2 = 23;
    $var3 = 2;
    $VAR4 = 4;

    echo "\nhello ," . ($var2<$var3 ? $var1 :"unknow\n");
    if ($VAR4 == 4) {
        echo "\nhello ," . ($var2>$var3 ? $var1 :"unknow\n");
    }
    ?>
</body>
</html>