<?php
    function numero_random($numeros, $max){
        $vector_numeros = [];
        $vector_estrellas = [];
        for($i = 0; $i<$numeros;$i++){
            $nuevo_numero = rand(1, $max);
            if(in_array($nuevo_numero, $vector_numeros)){
                $i--;
            }else{
                $vector_numeros[] = $nuevo_numero;
            }
        }
        for($i = 0; $i<2;$i++){
            $numero_estrella = rand(1, 9);
            if(in_array($numero_estrella, $vector_estrellas)){
                $i--;
            }else{
                $vector_estrellas[] = $numero_estrella;
            }
            
        }

        sort($vector_numeros);
        sort($vector_estrellas);
        $vector_numeros = implode(" ", $vector_numeros);
        $vector_estrellas = implode(" ", $vector_estrellas);
        echo ($vector_numeros);
        echo "<br>Numeros estrellas: ";
        echo ($vector_estrellas);
    }
    echo "Euromillón: ";
    numero_random(5, 50);
?>