<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
function removeDuplicates($array) {
    $result = array(); 
    $seen = array();    

    foreach ($array as $value) {
        if (!isset($seen[$value])) {
            $seen[$value] = true; 
        }
    }

    return $result;
}

$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = removeDuplicates($array);


print_r($array1);
?>

</body>

</html>