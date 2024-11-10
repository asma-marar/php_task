<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$originalString = 'The brown fox';
$insertString = 'quick';

$position = strpos($originalString, 'brown');
$newString = substr_replace($originalString, $insertString . ' ', $position, 0);
echo $newString;


$originalString = 'The quick brown fox';
$words = explode(' ', $originalString);
$firstWord = $words[0];


echo $firstWord;
?>

</body>

</html>