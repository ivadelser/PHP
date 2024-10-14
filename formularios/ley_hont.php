<?php
    function votos($partidos, $votos, $escaños){
        $votos_escaños = [];
        $votos_mayores = [];
        $letra_inicial='A';
        for($i=1;$i<=$escaños;$i++){
            for($j=1;$j<=$partidos;$j++){
                $votos_escaños[$j][$i] = round(($votos[$j-1]/$i), 1);
                $votos_mayores[] = $votos_escaños[$j][$i];
            }
        }
        rsort($votos_mayores);
        $votos_mayores = array_slice($votos_mayores, 0, $escaños);
        include "ley_hont.view.php";
    }
    $votos = [500000, 300000, 150000, 50000, 45000];
    votos(5, $votos, 7);
?>