<?php
    $fp = fopen("casas_rurales.csv", "r");
    $lista = [];
    while (!feof($fp)){
        $linea = explode(';',fgets($fp));
        $lista[]=$linea;
    }
    fclose($fp);
    $header = array_shift($lista);
    $nueva_lista = [];
    foreach($lista as $fila){
        $l = array_combine($header, $fila);
        $nueva_lista[] = $l;
    }
    foreach($nueva_lista as $elemento){
        if($elemento['telefono'] == ""){
            $contador_descarte+=1;
        }
    }
    include("casasrurales.view.php")
?>