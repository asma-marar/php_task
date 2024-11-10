<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $strings = array("abcd", "abc", "de", "hjjj", "g", "wer");

    $shortestLength = strlen($strings[0]);
    $longestLength = strlen($strings[0]);

    foreach ($strings as $string) {
        $stringLength = strlen($string);

        if ($stringLength < $shortestLength) {
            $shortestLength = $stringLength;
        }

        if ($stringLength > $longestLength) {
            $longestLength = $stringLength;
        }
    }


    echo "Shortest string length: $shortestLength\n";
    echo "Longest string length: $longestLength\n";
    ?>

</body>

</html>