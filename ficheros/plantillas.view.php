<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantillas</title>
</head>
<body>
    <?php
        echo "<table border = 1px>";
        foreach($nueva_lista as $elemento){
            if($elemento["Equipo"] == "Atlético de Madrid"){
                echo "<tr>";
                echo "<td>{$elemento["Dorsal"]}</td><td>{$elemento["Nombre"]}</td><td>{$elemento["Apellidos"]}</td><td>{$elemento["Posicion"]}</td><td>{$elemento["Equipo"]}</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
    ?>
    </table>
</body>
</html>