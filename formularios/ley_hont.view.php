<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ley de hont</title>
    <link rel="stylesheet" href="ley_hont.php">
    <style>
        table{
            border: 1px solid;
        }
        td{
            border: 1px solid;
            background-color: red ;
        }
    </style>
</head>
<body>
    <table>   
        <?php
        echo "<tr>";
        echo "<td style='background-color:gray;'></td>";
        for($i=0;$i<$partidos;$i++){
            echo "<td style='background-color:gray;'>Partido ".(chr(ord($letra_inicial) + ($i)))."</td>";
        }
        echo "</tr>";
        for($i=1;$i<=$escaños;$i++){
            echo "<tr>";
                echo "<td style='background-color:cyan;'>Escaño ".$i."</td>";
            for($j=1;$j<=$partidos;$j++){
                if(in_array($votos_escaños[$j][$i], $votos_mayores)){
                    echo "<td style='background-color: yellow;'>{$votos_escaños[$j][$i]}</td>";    
                    $num_coincide = array_search($votos_escaños[$j][$i], $votos_mayores);
                    unset($votos_mayores[$num_coincide]);
                }else{
                    echo "<td>{$votos_escaños[$j][$i]}</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>