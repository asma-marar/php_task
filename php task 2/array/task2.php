<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = array();

    for ($i = 200; $i <= 250; $i++) {
        if ($i % 4 == 0) {
            array_push($arr, $i);
        }
    }

    print_r($arr);
    ?>
</body>

</html>