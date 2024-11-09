<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$num1 = 20;
$num2 = 30;
$operation = "add";

switch ($operation) {
    case 'add':
    echo $num1 + $num2;
        break;
    case 'sub':
        echo $num1 - $num2;
    case 'mult':
        echo $num1*$num2;
        break;
        case 'div':
            echo $num1 / $num2;
            break;
    default:
        echo "Invalid operation";
        break;
}
?>
</body>

</html>