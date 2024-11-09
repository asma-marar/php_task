<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
     $sentence ='I am a full stack developer at orange coding academy';
     $searchWord = 'Orange';

     if (stripos($sentence, $searchWord) !== false) {
        echo "<h3>Result:</h3>";
        echo "<strong>Word Found!</strong>";
    } else {
        echo "<h3>Result:</h3>";
        echo "<strong>Word Not Found!</strong>";
    }
?>
</body>

</html>