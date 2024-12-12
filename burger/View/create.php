<?php require "View/header.php";?>
<style>
    body{
        margin:10px;
    }
</style>
<h1>Agregar Hamburgesa</h1>
<form method="post" action="index.php?action=create">
    <label for="name">Nombre:</label>
    <input type="text" class='form-control' name="name" required>
    <br>
    <label for="description">Descripción:</label>
    <input type="text" class='form-control' name="description" required>
    <br>
    <label for="price">Precio:</label>
    <input type="text" class='form-control' name="price" required>
    <br>
    <label for="image">Imagen:</label>
    <input type="text" class='form-control' name="image" required>
    <br>
    <label for="category">Categoría:</label>
    <input type="text" class='form-control' name="category" required>
    <br>
    <button class='btn btn-success' type="submit">Guardar</button>
</form>