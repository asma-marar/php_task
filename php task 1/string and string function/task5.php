<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $email = 'info@orange.com';


    $username = strstr($email, '@', true);


    echo $username;
    ?>
</body>

</html>