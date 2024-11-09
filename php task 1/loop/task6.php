<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function fact($num)
    {
        $fact = 1;
        for ($i = $num; $i > 1; $i--) {
            $fact *= $i;
        }

        return $fact;
    }

    echo fact(5);
    ?>
</body>

</html>