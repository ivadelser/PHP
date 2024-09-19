<?php
function comprobarHora($hora){
    $tiempos = explode(":", $hora);
    list($horas, $minutos, $segundos) = $tiempos;
    if(count($tiempos) != 3){
        echo "Este formato de hora no es válido";
    }else if($horas >= 24 || $horas < 0){
        echo "La hora no es válida";
    }else if($minutos >= 60 || $minutos < 0){
        echo "Los minutos no son válidos";
    }else if($segundos >= 60 || $segundos <0 ){
        echo "Los segundos no son válidos";
    }else{
        echo "La hora $hora sí es válida";
    }
}
comprobarHora("23:44:45");

?>