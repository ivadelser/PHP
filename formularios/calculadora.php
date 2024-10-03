<?php
    $x = $_GET["x"];
    $y = $_GET["y"];
    $suma = $x + $y;
    $resta = $x - $y;
    $multiplicacion = $x * $y;
    $division = $x / $y;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        table{
            text-align: center;
            margin: auto;
        }
    </style>
</head>
<body>
    <?php
        print_r($_GET);
        echo "<br><table border = '1'>";
            echo "<tr><td>Valores</td><td>Suma</td><td>Resta</td><td>Multiplicación</td><td>División</td></tr>";
            echo "<tr><td>{$x} y {$y}</td><td>$suma</td><td>$resta</td><td>$multiplicacion</td><td>$division</td></tr>";
        echo "</table><br>";
        print_r($_SERVER);
    ?>
</body>
</html>