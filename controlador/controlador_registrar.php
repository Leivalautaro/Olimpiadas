<?php 
if (!empty($_POST["enviar"])) {
    if (empty($_POST["nombre"])or empty($_POST["apellido"])or empty($_POST["telefono"])or empty($_POST["correo"]) or empty($_POST["usuario"]) or empty($_POST["contraseña"])) {
        echo "Uno de los campos esta vacio";
    } else {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $telefono=$_POST ["telefono"];
        $correo=$_POST ["correo"];
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];
        $sql=$conexion->query(" insert into register(nombre,apellido,telefono,correo,usuario,contraseña)values ('$nombre','$apellido','$telefono','$correo','$usuario','$contraseña')");
        if ($sql==1) {
            echo "Usuario Creado Correctamente";
        } else {
            echo "Error al crear el Usuario";
        }
        
    }
    
}

?>