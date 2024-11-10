<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $array = array(2,  10, 12, 6);
    $min = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] !== 0 && $array[$i] < $min) {
            $min = $array[$i];
        }
    }

    echo "The smallest number is: $min";
    ?>
</body>

</html>