<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function printPattern($n) {
        $alphabet = range('A', 'Z');
        
        
        for ($i = 0; $i < $n; $i++) {

            for ($j = $n - $i; $j > 1; $j--) {
                echo "&nbsp; ";
            }
          
            for ($j = 0; $j <= $i; $j++) {
                echo $alphabet[$j] . " ";
            }
            echo "<br>";
        }
        
        for ($i = $n - 2; $i >= 0; $i--) {
         
            for ($j = $n - $i; $j > 1; $j--) {
                echo "&nbsp; ";
            }
            for ($j = 0; $j <= $i; $j++) {
                echo $alphabet[$j] . " ";
            }
            echo "<br>";
        }
    }

    printPattern(5);
    ?>
</body>

</html>