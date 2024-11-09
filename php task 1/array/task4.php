<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
$arr = array(1,2,3,4,5);
$loc = 4;
$item = "$";

array_splice($arr, $loc, 0, $item);

for ($i = 0; $i < count($arr); $i++){
    echo $arr[$i]."";

}
?>

</body>

</html>