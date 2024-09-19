<?php
function frasesImpares($frase){
    for($i = 0; $i<= strlen($frase); $i++){
        if($i%2!=0){
            str_replace($frase, "", $i, 1);
        }
    }
    echo $frase;
}

$frase = "Hola a todos";
echo "Esta es la frase inicial: $frase<br>";
frasesImpares($frase);
?>