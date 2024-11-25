<?php
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $usuarios = [
        array("nombre" => "Ivan",
            "password" => "1234"),
        array("nombre" => "Emilio",
            "password" => "1234"),
        array("nombre" => "Jose",
            "password" => "1234")];
    $estaBien = false;
    foreach($usuarios as $usu){
        if($usu["nombre"] === $name && $usu["password"] === $pass){
            $estaBien=true;
            setcookie("name", $name, time() + 5000);
            setcookie("pass", $pass, time() + 5000);
            return include "ok.php";
        }
    }
    if($estaBien===false){
        include "ko.php";
    }
?>