<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
function calculateElectricityBill($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill += ($units - 50) * 5.00;
    } elseif ($units <= 250) {
        $bill = 50 * 2.50;
        $bill += 100 * 5.00;
        $bill += ($units - 150) * 6.20;
    } else {
        $bill = 50 * 2.50;
        $bill += 100 * 5.00;
        $bill += 100 * 6.20;
       
        $bill += ($units - 250) * 7.50;
    }

    return $bill;
}


$units = 280;  
$billAmount = calculateElectricityBill($units);
echo "Total electricity bill for $units units is: " . number_format($billAmount, 2) . " JOD";
?>


</body>

</html>