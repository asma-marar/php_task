<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $shuffled = str_shuffle($characters);
    $passwordLength = 10;
    $password = substr($shuffled, 0, $passwordLength);
    echo $password;
    ?>

</body>

</html>