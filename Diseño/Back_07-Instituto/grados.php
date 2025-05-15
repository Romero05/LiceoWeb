<?php
// conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "Liceo_Militar_Honduras");
// verificar la conexion
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// capturar datos del formulario
$nombre_alumno = $_POST['nombre_alumno'];
$grado = $_POST['grado'];
$materia = $_POST['materia'];
$profesor = $_POST['profesor'];

// Insertar datps en la tabla de datos
$sql = "INSERT INTO grados (nombre_alumno, grado, materia, profesor) VALUES ('$nombre_alumno', '$grado', '$materia', '$profesor')";

if ($conexion->query($sql) === TRUE) {
    echo "Contacto enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>