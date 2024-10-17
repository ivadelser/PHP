<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Recordar</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .text{
            max-width: 200px;
        }
    </style>
</head>
<body>
    <?php 
        $nombre = $_COOKIE["name"];
        $pass = $_COOKIE["pass"];
    ?>
    <form action="recordar.php" method="post">
        <div class="text">
            <input type="text" placeholder="Username" name="name" value="<?php echo $nombre; ?>">
        </div>
        <div class="text">
            <input type="password" placeholder="Password" name="pass" value="<?php echo $pass; ?>">
        </div>
        <div>
            <input type="checkbox" name="recordar" id="recordar">Recordar
        </div>
        <div>
            <button type="submit">Login/Register</button>
        </div>
    </form>
</body>
</html>