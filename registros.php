<?php
    include 'database.php';

    $sql = "SELECT * FROM registro_eventos";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $eventos = $stmt->fetchAll();

    if (count($eventos) > 0) {
        echo '<table border="1">';
        echo '<tr><th>Codigo</th><th>Fecha</th><th>DNI</th> <th>Detalles</th> </tr>';
        foreach ($eventos as $evento) {
            echo '<tr>';
            echo '<td>' . $evento['ID_Evento'] . '</td>';
            echo '<td>' . $evento['Tipo_Evento'] . '</td>';
            echo '<td>' . $evento['Fecha_Hora_Evento'] . '</td>';
            echo '<td>' . $evento['ID_Paciente'] . '</td>';

            echo '</tr>';

        }
        echo '</table>';
    } else {
        echo "No se encontraron eventos registrados.";
    }

    $conn = null;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="register.php">Volver al inicio</a>
</body>
</html>