<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de arrays</title>
</head>
<body>
<?php
    $numeros=[];
    for($i = 0;$i<50;$i++){
    $numeros[$i] = rand(0, 99);
    }
    sort($numeros);
    print_r($numeros);
    
    echo "<br>";
    echo "La media de nuestro vector es: " . array_sum($numeros)/count($numeros);
    echo "<br>";
    echo "el numero mas pequeño es: $numeros[0]";
    echo "<br>";
    echo "El numero mas alto es: $numeros[49]";
?>    
</body>
</html>
