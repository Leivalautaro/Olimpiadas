<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Iniciar Sesion</title>
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
    include 'conexion/conexion.php';
    include 'controlador/controlador_sesion.php';  
    ?>
        <h4>Usuario</h4>
        <input type="text" name="usuario">
        <h4>Contrseña</h4>
        <input type="password" name="contraseña">

        <input type="submit" name="enviar1">
        
    </form>
</body>
</html> 