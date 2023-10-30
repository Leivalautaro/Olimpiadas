<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
    <div class="formulario">
    <form action="" method="POST">
    <?php 
    include 'conexion/conexion.php';
    include 'controlador/controlador_registrar.php';

    ?>
    <h4>Nombre</h4>
    <input type="text" name="nombre">

    <h4>apellido</h4>
    <input type="text" name="apellido">

    <h4>Telefono</h4>
    <input type="number" name="telefono">

    <h4>correo</h4>
    <input type="email" name="correo">

    <h4>Usuario</h4>
    <input type="text" name="usuario">

    <h4>Contraseña</h4>
    <input type="password" name="contraseña">

    <input type="submit" name="enviar">

    </form>
    </div>
    <li class="boton" href="evento.php" ><a class="botoncodigo" href="evento.php">CODIGO AZUL</a></li>
    <li class="boton" href="registros.php"><a class="botoncodigo" href="registros.php">Tabla de emergencias</a></li>
</body>
</html>