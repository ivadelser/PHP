<?php
function intercambia(&$a, &$b){
    $aux = $a;
    $a = $b;
    $b = $aux;
    echo "<br>a = $a y b = $b";
}
$a = 10;
$b = 20;
echo "a = $a y b = $b";
intercambia($a, $b);
?>