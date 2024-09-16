<?php
    for($i = 0; $i<=100; $i++){
        if ($i<100){
            echo "$i, ";
        } else {
            echo "$i";
        }
    }
    echo "<br>"
    $num = 10;
    while ($num >=0){
        if($num>0){
            echo "$num-";
        }else{
            echo $num;
        }
        $num--;
    }
?>