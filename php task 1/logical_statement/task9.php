<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function grade($arr){
        $avg = array_sum($arr)/count($arr);
        $grade="";
        switch ($avg) {
                case $avg < 60:
                    $grade = "F";
                break;
                case $avg < 70:
                    $grade = "D";
                break;
                case $avg < 80:
                    $grade = "C";
                break;
                case $avg < 90:
                    $grade = "B";
                break;
         
            default:
              $grade = "A";
                break;
        }

        return $grade;
    }

    echo"Grade is ".grade([60,86,95,63,55,74,79,62,50]);
    ?>
</body>

</html>