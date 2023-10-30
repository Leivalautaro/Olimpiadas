<?php 
if (!empty($_POST["enviar2"])) {
    if (empty($_POST["dni"])or empty($_POST["telefono"]) or empty($_POST["gruposanguineo"]) or empty($_POST["enfermedad"])) {
        echo "Uno de los campos esta vacio";
    } else {
        $dni=$_POST["dni"];
        $telefono=$_POST["telefono"];
        $gruposanguineo=$_POST["gruposanguineo"];
        $enfermedad=$_POST["enfermedad"];
        $sql=$conexion->query(" insert into paciente (dni,telefono,gruposanguineo,enfermdad)values ('$dni',' $telefono','$gruposanguineo','$enfermedad')");
        if ($sql==1) {
            echo "Paciente Registrado Correctamente";
            
        } else {
            echo "Error al Registrar el Paciente";
        }
        
    }
    
}

?>