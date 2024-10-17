<?php
    if(isset($_COOKIE["user"])){
        echo "Bienvenido ". $_COOKIE["user"];
    }else{
        $nombre = "Iván Delgado";
        setcookie("user", $nombre, time() + 10);
        echo "Acabo de crear la cookie, recarga para ver la cookie";
    }
?>