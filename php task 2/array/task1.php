<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    $colors = array("RED", "BLUE", "WHITE", "YELLOW");

    foreach ($colors as $key => $color) {
        $colors[$key] = strtolower($color);
    }

    print_r($colors);
?>
</body>

</html>