<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php



$numbers = range(11, 10);
shuffle($numbers);
$randomNumbers = array_slice($numbers, 0, 10);
echo implode(' ', $randomNumbers);
?>

</body>

</html>