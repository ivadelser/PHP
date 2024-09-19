<?php
    function contador($a, $b){
        if($a < $b){
            for($i = $a;$i <= $b;$i++){
                if($i<$b){
                    echo "$i, ";
                }else{
                    echo "$i";
                }
            }
        } else{
            for($i = $b;$i <= $a;$i++){
                if($i<$a){
                    echo "$i, ";
                }else{
                    echo "$i";
                }
            }
        }
        
    }
    contador(4, 18);
?>