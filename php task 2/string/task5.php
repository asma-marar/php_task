<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $string = "0000657022.24";
    $ans = "";
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] != "0") {
            $ans .= $string[$i];
        }
    }
    echo $ans;
    ?>
</body>

</html>