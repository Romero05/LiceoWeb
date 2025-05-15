<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="guardar_solicitud.php" method="POST">
        <h2>¡Queremos escucharte!</h2>
        <p>¡Para todas tus consultas y sugerencias, no dudes en contactarnos, responderemos a tu solicitud tan pronto como sea posible.</p>
        <input type="text" name="nombre" placeholder="Su nombre" required></input>
        <input type="email" name="email" placeholder="Email" required></input>
        <input type="text" name="telefono" placeholder="Telefono" required></input>
        <input type="text" name="ciudad" placeholder="Ciudad" required></input>
        <input type="mensaje" name="mensaje" placeholder="Por favor escriba mas detalles sobre su solicitud" required></input>
        <button type="submit">Enviar</button>
</body>
</html>