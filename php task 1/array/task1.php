<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>

        <?php
        $colors = array('white', 'green', 'red');

        for ($i = 0; $i < count($colors); $i++) {
            echo "<li>$colors[$i]</li>";
        }
        ?>

    </ul>
</body>

</html>