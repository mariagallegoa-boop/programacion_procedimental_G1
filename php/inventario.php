<?php
require("conexion.php");
require("alert.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoria_producto = $_POST['categoria'];
    $codigo_producto = $_POST['codigo_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $cantidad_producto = $_POST['cantidad_productos'];
    $precio_unitario = $_POST['precio_unitario'];
    $proveedor_producto = $_POST['proveedor'];

    // Insertar en la base de datos
    $sql = "INSERT INTO inventario(
                categoria_producto, 
                codigo_producto, 
                nombre_producto, 
                descripcion_producto, 
                cantidad_producto, 
                precio_unitario, 
                proveedor_producto
            ) 
            VALUES (
                '$categoria_producto', 
                '$codigo_producto', 
                '$nombre_producto',
                '$descripcion_producto', 
                '$cantidad_producto', 
                '$precio_unitario', 
                '$proveedor_producto'
             )";

    if ($conn->query($sql) === TRUE) {
        alerta("success", "Información Guardada Correctamente", "../index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();




// HTML
// Etiqueta Form dentro los HTML action="" method ="post"
// Inputs del html deben tener el atributo name="" 
// Boton de tipo submit para enviar el formulario

// PHP 
// Ubicacion de la Carpeta del proyecto C/xampp/htdocs/Restaurante
// Abre el navegador y escribe localhost/Restaurante
// Inicia el servidor de Xampp con Apache y mysql
