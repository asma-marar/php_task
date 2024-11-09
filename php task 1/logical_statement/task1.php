<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $firstInteger = 10;
    $secondInteger =10;
$right_sum = false;
    if( $firstInteger + $secondInteger == 30) {
    $right_sum = true;
    }

    echo $right_sum ? "true" : "false";
    ?>
</body>

</html>