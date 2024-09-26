<?php
function frasesImpares($frase){
    
    for($i = 0; $i<= strlen($frase); $i++){
        if($i%2!=0){
            $fraseimpar.=$frase[$i];
        }
    }
    return $fraseimpar;
}

$frase = "Hola a todos";
echo "Esta es la frase inicial: $frase<br>";
echo frasesImpares($frase);
?>