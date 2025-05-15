<?php
// conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "tienda");
// verificar la conexion
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// capturar datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$mensaje = $_POST['mensaje'];

// Insertar datps en la tabla de datos
$sql = "INSERT INTO solicitud (nombre, email, telefono, ciudad, mensaje) VALUES ('$nombre', '$email', '$telefono', '$ciudad', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Contacto enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>