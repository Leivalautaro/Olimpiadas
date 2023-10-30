<?php

if (!empty($_POST["enviar1"])) {
    if (empty($_POST["usuario"]) and empty($_POST["contraseña"])) {
        echo "Los campos estan vacios";
    } else {
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];
        $sql=$conexion->query("select * from register where usuario='$usuario' and contraseña='$contraseña'");
        if ($datos=$sql->fetch_object()) {
           header ('location: register.php');
        } else {
           echo "acceso denegado";
        }
        
    }

}


?>