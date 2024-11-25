
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD con PHP usando Programación Orientada a Objetos</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <?php
        $nombre = $_COOKIE["name"];
    ?>
    <header style="display: flex;">
        <h1 style="margin:auto; margin-top: 5px;">Te damos la bienvenida <?php echo $nombre ?></h1>
        <a href="formulario_login.php" style="border: 3px solid black; border-radius: 5px; position: absolute; align-content: center; text-align:center; right: 10px; top: 10px; height: 40px; width: 100px ; color: black; text-decoration: none;">Cerrar Sesión</button></a>
    </header>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
               
