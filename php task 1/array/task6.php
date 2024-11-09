<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73
);
$average = array_sum($temps) / count($temps);
echo "Average Temperature is : " . $average . "<br>";
sort($temps);
echo "List of seven lowest temperatures : ";
for ($i = 0; $i<7; $i++){
    echo"". $temps[$i] ." ";
}

echo "<br>" . "List of seven highest temperatures : ";
for ($i = count($temps)-1; $i> count($temps)-8; $i--){
echo  $temps[$i] ." ";
    
}

?>
</body>

</html>