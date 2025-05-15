<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasa Vehicular</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="guardar_registro.php" method= "POST">
        <h2>Formulario de Registro Vehicular</h2>
        <label for="">Placa:</label><input type="text" name="Placa" required></input>
        <label for="">Marca:</label><input type="text" name="Marca" required></input>
        <label for="">Modelo:</label><input type="text" name="Modelo" required></input>
        <label for="">Año:</label><input type="text" name="Año" required></input>
        <label for="">Color:</label><input type="text" name="Color" required></input>
        <label for="">Nombre de Propetario:</label><input type="text" name="Nombre_propietario" required></input>
        <label for="">Telefono de Contacto:</label><input type="text" name="Telefono_contacto" required></input>
        <button type="submit">Registrar Vehiculo</button>
    </form>
</body>
</html>