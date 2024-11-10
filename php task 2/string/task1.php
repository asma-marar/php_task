<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

$s1 = 'dragonball';
$s2 = 'dragonboll';
$diff_char='';
for ($i = 0; $i < strlen($s1); $i++) {
    if($s1[$i]!==$s2[$i])
    $diff_char = $s1[$i];
    }

    echo $diff_char;
?>


</body>

</html>