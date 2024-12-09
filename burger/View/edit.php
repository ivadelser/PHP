<h1>Editar Hamburgesa</h1>
<form method="POST" action="index.php?action=edit&id=<?= $burger['id']?>">
    <label for="name">Nombre:</label>
    <input type="text" name="name" value="<?= $burger['name'] ?>" required>
    <br>
    <label for="description">Descripción:</label>
    <input type="text" name="description" value="<?= $burger['description'] ?>" required>
    <br>
    <label for="price">Precio:</label>
    <input type="text" name="price" value="<?= $burger['price'] ?>" required>
    <br>
    <label for="image">Imagen:</label>
    <input type="text" name="image" value="<?= $burger['image'] ?>" required>
    <br>
    <label for="category">Categoría:</label>
    <input type="text" name="category" value="<?= $burger['category'] ?>" required>
    <br>
    <button type="submit">Actualizar</button>
</form>