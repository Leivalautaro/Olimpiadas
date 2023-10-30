<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro de Eventos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="procesar_registro.php" method="post">
    <label for="id_paciente">DNI:</label>
        <input type="number" id="id_paciente" name="ID_Paciente" required>
        <input type="submit" value="Registrar Evento">
    </form>
    <a href="register.php">Volver al inicio</a>
</body>
</html>