<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table border = 1px>";
        foreach($nueva_lista as $elemento){
            if($elemento["telefono"]!=""){
            echo "<tr>";
            echo "<td>{$elemento["id"]}</td><td>{$elemento["localidad"]}</td><td>{$elemento["nombre"]}</td><td>{$elemento["telefono"]}</td>";
            echo "</tr>";
            }
        }
        echo "</table>";
        echo "<br>Se han descartado $contador_descarte casas por datos nulos";
    ?>
</body>
</html>