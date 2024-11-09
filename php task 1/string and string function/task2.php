<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numericString  = "085119";
     $hours = substr($numericString, 0, 2);
     $minutes = substr($numericString, 2, 2);
     $seconds = substr($numericString, 4, 2);

     // Format the output
    echo $formattedDate = "$hours:$minutes:$seconds";
?>

</body>

</html>