<h1>Agregar Hamburgesa</h1>
<form method="post" action="index.php?action=create">
    <label for="name">Nombre:</label>
    <input type="text" name="name" required>
    <br>
    <label for="description">Descripción:</label>
    <input type="text" name="description" required>
    <br>
    <label for="price">Precio:</label>
    <input type="text" name="price" required>
    <br>
    <label for="image">Imagen:</label>
    <input type="text" name="image" required>
    <br>
    <label for="category">Categoría:</label>
    <input type="text" name="category" required>
    <br>
    <button type="submit">Guardar</button>
</form>