<h1>Lista de Items</h1>
<a href="index.php?action=create">Agregar Item</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Categoría</th>
    </tr>
    <?php foreach ($burger as $tableBurger): ?>
        <tr>
            <td><?= $tableBurger["id"] ?></td>
            <td><?= $tableBurger["name"] ?></td>
            <td><?= $tableBurger["description"] ?></td>
            <td><?= $tableBurger["price"] ?></td>
            <td><img src="Imagenes/<?= $tableBurger["image"] ?>" style="width: 100px" ></style></td>
            <td><?= $tableBurger["category"] ?></td>
            <td><a href="index.php?action=edit&id=<?= $tableBurger['id']?>">Editar</a>
            <a href="index.php?action=delete&id=<?= $tableBurger['id'] ?>" onclick="return confirm('Estás seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
</table>
























