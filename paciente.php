<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Paciente</title>
</head>
<body>
<header>
        <nav>
            <ul>
                <li>
                <a href="index.html">Volver</a>
                </li>
            </ul>
        </nav>
    </header>
    <form action="" method="POST">
    <?php
    include ('conexion/conexion.php');
    include ('controlador/controlador_paciente.php');
    
    ?>
    <h4>dni</h4>
    <input type="number" name="dni">
    <h4>telefono</h4>
    <input type="number" name="telefono">
    <h4>Grupo Sanguineo</h4>
    <input type="text" name="gruposanguineo">
    <h4>enfermedad</h4>
    <input type="text" name="enfermedad">

    <input type="submit" name="enviar2">

    </form>
</body>
</html>