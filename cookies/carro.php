<?php
    
    $articulos = array(
        array("id"=>1, "nombre"=>"Zapatillas Nike", "precio"=>100),
        array("id"=>2, "nombre"=>"Sudadera Adidas", "precio"=>36),
        array("id"=>3, "nombre"=>"Pala padel Head", "precio"=>110),
        array("id"=>4, "nombre"=>"Bolso Dolce & Gabbana", "precio"=>145),
    );

    session_start();
    if (isset($_GET['id'])){
        $idArticulo = $_GET['id'];
        foreach ($articulos as $articulo){
            if ($articulo['id'] == $idArticulo){
                $_SESSION['Carrito'] []= $articulo;
                break;
            }
        }
    }
    $totalEuros = 0;

    if (isset($_SESSION['Carrito'])){
        foreach ($_SESSION['Carrito'] as $precioArt){
            $totalEuros += $precioArt['precio'];
        }
    }

    if (isset($_GET['vaciar']) && $_GET['vaciar'] == 'true') {
        unset($_SESSION['Carrito']);  
        session_destroy();
        $totalEuros = 0;
    }
    
    include('carro.view.php')
?>