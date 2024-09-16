<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contadores</h1>
    <p>Este contador va de 0 a 100</p>
<?php
    for($i = 0; $i<=100; $i++){
        if ($i<100){
            echo "$i, ";
        } else {
            echo "$i";
        }
    }
?>
    <p>Este contador va del 10 al 0</p>
<?php
    $num = 10;
    while ($num >=0){
        if($num>0){
            echo "$num-";
        }else{
            echo $num;
        }
        $num--;
    }
?>
</body>
</html>