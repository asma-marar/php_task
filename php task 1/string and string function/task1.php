<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $inputString = "Hello";
    $uppercase = strtoupper($inputString);
    $lowercase = strtolower($inputString);
    $capitalized = ucfirst($inputString);
    $titleCase = ucwords($inputString);
    echo "Uppercase: $uppercase <br>";
    echo "Lowercase: $lowercase <br>";
    echo "Capitalized: $capitalized <br>";
    echo "Title Case: $titleCase <br>";
    ?>
</body>

</html>