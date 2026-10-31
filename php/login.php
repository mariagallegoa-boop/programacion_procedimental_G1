<?php
require("conexion.php");
require("alert.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['documento_identidad'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM usuarios 
            WHERE tipo_documento = '$tipo_documento' AND
                numero_documento = '$numero_documento' AND
                contrasena = '$contrasena'";
            
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        alerta("success", "Inicio de sesión exitoso.", "edit_user.php");
        $_SESSION['numero_documento'] = $numero_documento;        
    } 
    else {
        alerta("error", "Usuario o contraseña incorrectos.", "../modulos/login.html");
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>