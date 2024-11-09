<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $x = 12;
    $y = 10;
    echo "Before swapping: x = $x, y = $y <br>";
    function swap(&$a, &$b)
    {
        $temp = 0;
        $temp = $a;

        $a = $b;
        $b = $temp;


    }

    swap($x, $y);

    echo "After swapping: x = $x, y = $y <br>";
    ?>

</body>

</html>