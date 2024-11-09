<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
$colors = array("red","blue", "white","yellow");

$newColors = array_map('strtoupper', $colors);

foreach ($newColors as $color) {
    echo ''. $color .' ';
}
    ?>
</body>

</html>