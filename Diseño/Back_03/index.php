<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="guardar_clientes.php" method= "POST">
        <h2>Clientes</h2>
        <input type="text" name="id" placeholder="Ingresa tu ID" required>
        <input type="text" name="nombre" placeholder="Coloca tu Nombre" required>
        <input type="text" name="apellido" placeholder="Coloca tu Apellido" required>
        <input type="text" name="telefono" placeholder="Coloca tu telefono" required>
        <input type="text" name="correo" placeholder="Coloca tu correo" required>
        <input type="text" name="genero" placeholder="Coloca tu genero" required>
        <input type="text" name="direccion" placeholder="Coloca tu direccion" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>