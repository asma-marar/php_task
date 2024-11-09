<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function maximum($arr){
        $max =0;
    foreach ($arr as $num) {
        if($num > $max){
            $max = $num;
        }
    }

    return $max;
}

echo maximum([1,5,9]);
    ?>
</body>

</html>