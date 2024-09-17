<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array asociativo</title>
</head>
<body>
    <?php
    $vector=[];
    $contador = array('M' => 0, 'F' => 0);
    for($i = 0; $i<100; $i++){
        $vector[$i] = rand(0, 1);
        if($vector[$i] == 0){
            $vector[$i] = 'M';
        }else{
            $vector[$i] = 'F';
        }
    }

    for($i = 0; $i <count($vector); $i++){
        if($vector[$i] == 'M'){
            $contador['M']++;
        }else{
            $contador['F']++;
        }
    }
    print_r($vector);
    echo "<br>Este es el contador: ";
    print_r($contador);
    ?>
</body>
</html>