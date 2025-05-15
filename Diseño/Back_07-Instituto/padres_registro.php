<?php
// conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "Liceo_Militar_Honduras");
// verificar la conexion
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// capturar datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$nombre_alumno = $_POST['nombre_alumno'];

// Insertar datps en la tabla de datos
$sql = "INSERT INTO padres (nombre, telefono, nombre_alumno) VALUES ('$nombre', '$telefono', '$nombre_alumno')";

if ($conexion->query($sql) === TRUE) {
    echo "Contacto enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>