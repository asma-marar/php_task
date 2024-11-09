<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
function isPrime($num){
    if($num <= 1){
        return false;
    }
    
    for($i = 2; $i < sqrt($num); $i++){
        if($num % $i == 0){
            return false;
        }
    }

    return true;
}

echo isPrime(5)? "true" : "false";  
?>

</body>

</html>