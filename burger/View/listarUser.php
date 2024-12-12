<?php require "View/header.php"?>
<style>
    th, td, h1{
        text-align: center;
    }
</style>
<h1>Lista de Categorias</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $tableCategories): ?>
        <tr>
            <td><a href="index.php?action=listarProductos&id=<?= $tableCategories['id'] ?>" style="text-decoration:none; color: black;"><?= $tableCategories["name"] ?></a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>