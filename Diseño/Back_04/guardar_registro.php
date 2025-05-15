<?php
// conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "tasa_vehicular");
// verificar la conexion
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// capturar datos del formulario
$Placa = $_POST['Placa'];
$Marca = $_POST['Marca'];
$Modelo = $_POST['Modelo'];
$Año = $_POST['Año'];
$Color = $_POST['Color'];
$Nombre_propietario = $_POST['Nombre_propietario'];
$Telefono_contacto = $_POST['Telefono_contacto'];

// Insertar datos en la tabla de datos
$sql = "INSERT INTO registro (Placa, Marca, Modelo, Año, Color, Nombre_propietario, Telefono_contacto) VALUES ('$Placa', '$Marca', '$Modelo', '$Año', '$Color', '$Nombre_propietario', '$Telefono_contacto')";

if ($conexion->query($sql) === TRUE) {
    echo "Contacto enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>