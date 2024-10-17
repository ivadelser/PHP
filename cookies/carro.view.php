<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
    <style>

    </style>
</head>
<body>
    <?php include "carro.php";?>
    <ul>
        <?php foreach($articulos as $articulo): ?>
            <li>
                <form method="post">
                    <button type="submit" name="articulo" value="<?php $articulo["id"];?>">
                        <?php echo $articulo["nombre"];?> - <?php echo $articulo["precio"];?>
                    </button>
                </form>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>