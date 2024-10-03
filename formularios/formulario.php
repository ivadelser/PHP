<?php
    if (isset($_POST["aficiones"])){
        $aficiones_seleccionadas = $_POST["aficiones"];
    }
    if (isset($_POST["menu"])){
        $menu_seleccionados = $_POST["menu"];
    }
    $new_aficiones = implode(", ", $aficiones_seleccionadas);
    $new_menu = implode(", ", $menu_seleccionados);
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $url = $_POST["url"];
    $sexo = $_POST["sexo"];
    $convivientes = $_POST["convivientes"];
    include "header.php";
?>
<body>
    <?php
        echo "<table class='table table-striped' >";
            echo "<tr><td>Nombre</td><td>Apellidos</td><td>Email</td><td>URL página personal</td><td>Sexo</td><td>Número de convivientes</td><td>Aficiones</td><td>Menú favoritos</td></tr>";
            echo "<tr><td>{$nombre}</td><td>{$apellidos}</td><td>{$email}</td><td>{$url}</td><td>{$sexo}</td><td>{$convivientes}</td><td>{$new_aficiones}</td><td>{$new_menu}</td></tr>";
        echo "</table>";
    ?>
</body>
</html>