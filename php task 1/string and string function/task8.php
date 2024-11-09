<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sentence = 'That new trainee is so genius.';

    $newWord = 'Our';

    $updatedSentence = preg_replace('/^\w+/', $newWord, $sentence);

    echo $updatedSentence;
    ?>

</body>

</html>