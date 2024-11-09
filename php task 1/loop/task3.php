<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php
    echo "Task 3 <br>";

    $char = 'A';

    for ($i = 5; $i >= 1; $i--) {
        for ($j = 0; $j < 5; $j++) {
            if ($j < $i-1)
                echo 'A' . ' ';
            else
                echo $char . ' ';

        }
        echo '<br>';
        $char++;
    }
    ?>
</body>

</html>