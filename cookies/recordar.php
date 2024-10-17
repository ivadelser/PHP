<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $recordar = $_POST["recordar"];
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        if(isset($recordar)){
            setcookie("name", $name, time() + 1000);
            setcookie("pass", $pass, time() + 1000);
        }else{
            setcookie("name", $name, time() - 1000);
            setcookie("pass", $pass, time() - 1000);
        }
    }
    echo "Bienvenido ". $name;
?>