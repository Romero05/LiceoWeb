<?php
// conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "Liceo_Militar_Honduras");
// verificar la conexion
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// capturar datos del formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$grado = $_POST['grado'];
$email = $_POST['email'];

// Insertar datps en la tabla de datos
$sql = "INSERT INTO estudiantes (nombre, edad, grado, email) VALUES ('$nombre', '$edad', '$grado', '$email')";

if ($conexion->query($sql) === TRUE) {
    echo "Contacto enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>