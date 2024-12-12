<?php require "View/header.php"?>
<style>
    body{
        overflow:hidden;
    }
    th, td, h1{
        text-align: center;
    }
    a{
        position: absolute;
        top:10px;
        right:15px;
    }
</style>
<h1>Lista de Items</h1>
<table class="table table-striped">
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Imagen</th>
    </tr>
    <?php foreach ($burger as $tableBurger): if($tableBurger["category"] == $idCategory):?>
        <tr>
            <td><?= $tableBurger["name"] ?></td>
            <td><?= $tableBurger["description"] ?></td>
            <td><?= $tableBurger["price"] ?></td>
            <td><img src="Imagenes/<?= $tableBurger["image"] ?>" style="width: 150px" ></style></td>
        </tr>
        <?php endif;?>
        <?php endforeach; ?>
</table>
<a class="btn btn-primary" href="index.php">Volver</a>
