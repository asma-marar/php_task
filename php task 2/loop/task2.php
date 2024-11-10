<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$str ="Orange Coding Academy";
$count = 0;
$str = strtolower($str);
for ($i = 0; $i < strlen($str) ; $i++) {
    if($str[$i] == "c"){
        $count++;
    }
}

echo " ".$count."";
?>
</body>

</html>