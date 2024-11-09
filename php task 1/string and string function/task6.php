<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $string = 'info@orange.com';

    $lastThreeChars = substr($string, -3);
    
    echo $lastThreeChars;
?>
</body>

</html>