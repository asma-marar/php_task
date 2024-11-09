<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td {
        border: 1px solid black;
        padding: 10px;
    }
    </style>
</head>

<body>
    <table>
        <?php
        for ($i = 1; $i <= 6; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 6; $j++) {
                echo "<td>" . $i . ' * ' . $j . ' = ' . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>


    </table>
</body>

</html>