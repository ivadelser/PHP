<h1>Lista de Items</h1>
<table border="1">
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
            </td>
        </tr>
        <?php endforeach; ?>
</table>