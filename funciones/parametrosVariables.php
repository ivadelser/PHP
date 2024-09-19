<?php
    function mayor(...$numeros){
            $array = func_get_args();
            rsort($array);
            echo $array[0];
    }
    mayor(5,4,2,10,7,5,21,3);
?>