<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $num1 = 0;
    $num2 = 1;

    echo $num1;
    for ($i = 1; $i <= 9; $i++) {
        echo $num2;

        $sum = $num1 + $num2;
        $num1 = $num2;
        $num2 = $sum;

    }

    ?>
</body>

</html>