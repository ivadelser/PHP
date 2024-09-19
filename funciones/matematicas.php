<?php
    function digitos(int $num){
        
        return strlen($num);
    }
    function digitoN(int $num, int $pos){
        if($pos > strlen($num) || $pos < 0){
            echo "Esa posicion no es valida en este numero";
        }else{
            echo "Este es el numero que deseas: substr($num, $pos-1, 1)";
        }
    }
    function quitaPorDetras(int $num, int $cant){
        if(strlen($num)<= $cant){
            echo "Borrarias el numero que me has dado";
        }else{
        $numFin = substr_replace($num, "", -$cant);
        echo "Este es el numero que quedaría: $numFin";
        }
    }
    function quitaPorDelante(int $num, int $cant){
        if(strlen($num)<= $cant){
            echo "Borrarias el numero que me has dado";
        }else{
        $numFin = substr_replace($num, "", 0 ,$cant);
        echo "Este es el numero que quedaría: $numFin";
        }
    }
    //primera función
    echo "Este numero tiene ";
    echo digitos(12)." digitos";
    echo "<br>";
    //segunda función
    digitoN(123, 4);
    echo "<br>";
    //tercera función
    quitaPorDetras(1234, 1);
    echo "<br>";
    //cuarta función
    quitaPorDelante(1234, 3);
?>