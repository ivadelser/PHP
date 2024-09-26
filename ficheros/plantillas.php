<?php
    $fp = fopen("plantillas.csv", "r");
    $lista = [];
    while (!feof($fp)){
        $linea = explode(',',fgets($fp));
        $lista[]=$linea;
    }
    fclose($fp);
    $header = array_shift($lista);
    $nueva_lista = [];
    foreach($lista as $fila){
        $l = array_combine($header, $fila);
        $nueva_lista[] = $l;
    }
    $ordenarDorsal[]=usort($nueva_lista, function($a, $b){
        return $a['Dorsal'] <=> $b['Dorsal'];
    });
include('plantillas.view.php')
?>