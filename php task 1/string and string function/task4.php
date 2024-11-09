<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $url = 'http://www.orange.com/index.php';
    $path = parse_url($url, PHP_URL_PATH);
    $filename = basename($path);
    echo $filename;
    ?>
</body>

</html>