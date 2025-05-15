<?php
// conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "Liceo_Militar_Honduras");
// verificar la conexion
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// capturar datos del formulario
$nombre = $_POST['nombre'];
$id = $_POST['id'];
$edad = $_POST['edad'];
$servicio = $_POST['servicio'];
$telefono = $_POST['telefono'];

// Insertar datps en la tabla de datos
$sql = "INSERT INTO personal_servicio (nombre, id, edad, servicios, telefono) VALUES ('$nombre', '$id', '$edad', '$servicio', '$telefono')";

if ($conexion->query($sql) === TRUE) {
    echo "Contacto enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>