<?php
// conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "tabla_agenda");
// verificar la conexion
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// capturar datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$genero = $_POST['genero'];
$direccion = $_POST['direccion'];

// Insertar datps en la tabla de datos
$sql = "INSERT INTO clientes (id, nombre, apellido, telefono, correo, genero, direccion) VALUES ( '$id','$nombre', '$apellido', '$telefono', '$correo', '$genero', '$direccion')";

if ($conexion->query($sql) === TRUE) {
    echo "Contacto enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>