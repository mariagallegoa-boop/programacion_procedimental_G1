<?php
require("conexion.php");
require("alert.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['documento_identidad'];
    $telefono = $_POST['telefono'];
    $correo_electronico = $_POST['correo_electronico'];
    $genero = $_POST['genero'];
    $cargo = $_POST['cargo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $contrasena = $_POST['contrasena'];

    // Insertar en la base de datos
    $sql = "INSERT INTO usuarios(
                nombre, 
                apellido, 
                tipo_documento, 
                numero_documento, 
                telefono, 
                correo_electronico, 
                genero, 
                cargo, 
                fecha_nacimiento, 
                contrasena
            ) 
            VALUES (
                '$nombre', 
                '$apellido', 
                '$tipo_documento', 
                '$numero_documento', 
                '$telefono', 
                '$correo_electronico', 
                '$genero', 
                '$cargo', 
                '$fecha_nacimiento', 
                '$contrasena'
             )";

    if ($conn->query($sql) === TRUE) {
        alerta("success", "Información Guardada Correctamente", "../index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



}
?>