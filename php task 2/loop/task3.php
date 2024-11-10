<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $count =1;
    for ($i=1; $i <=50; $i++) { 
      if($i % 3 == 0 )
        echo "fizz";
    else if($i%5==0)
    echo "buzz";
    else if($i%3==0 && $i%5==0) 
    echo "fizzbuzz";
    else
    echo "$i";
    }
       
    
    ?>
</body>

</html>