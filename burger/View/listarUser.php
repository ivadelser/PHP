<h1>Lista de Categorias</h1>
<table border="1">
    <tr>
        <th>Nombre</th>
    </tr>
    <?php foreach ($categories as $tableCategories): ?>
        <tr>
            <td><a href="index.php?action=listarProductos&id=<?= $tablecategories['id'] ?>" style="text-decoration:none; color: black;"><?= $tableCategories["name"] ?></a></td>
        </tr>
        <?php endforeach; ?>
</table>