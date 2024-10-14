<?php
    function numero_random($numeros, $max){
        $vector_numeros = [];
        for($i = 0; $i<$numeros;$i++){
            $nuevo_numero = rand(1, $max);
            if(in_array( $nuevo_numero, $vector_numeros)){
                $i--;
            }else{
                $vector_numeros[] = $nuevo_numero;
            }
        }
        sort($vector_numeros);
        $vector_numeros = implode(" ", $vector_numeros);
        echo ($vector_numeros);
    }
    echo "Primitiva: ";
    numero_random(6, 49);
?>