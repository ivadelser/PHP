<?php require "View/header.php"?>
<style>
    th, td, h1{
        text-align: center;
    }
</style>
<h1>Lista de Items</h1>
<a class="btn btn-primary" href="index.php?action=create" style="position:absolute; top: 10px; left: 15px;">Agregar Item</a>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Categoría</th>
        <th>Acciones</th> 
    </tr>
    <?php foreach ($burger as $tableBurger): ?>
        <tr>
            <td><?= $tableBurger["id"] ?></td>
            <td><?= $tableBurger["name"] ?></td>
            <td><?= $tableBurger["description"] ?></td>
            <td><?= $tableBurger["price"] ?></td>
            <td><img src="Imagenes/<?= $tableBurger["image"] ?>" style="width: 150px" ></style></td>
            <td><?= $tableBurger["category"] ?></td>
            <td><a class="btn btn-primary" href="index.php?action=edit&id=<?= $tableBurger['id']?>">Editar</a>
            <a class="btn btn-primary" href="index.php?action=delete&id=<?= $tableBurger['id'] ?>" onclick="return confirm('Estás seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
</table>
























