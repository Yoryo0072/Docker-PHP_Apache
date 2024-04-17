<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.15 - 2</title>
</head>

<body>
    <h1>Información del servidor</h1>
    <ul>
        <li>Dirección IP del servidor: <?php echo $_SERVER['SERVER_ADDR']; ?></li>
        <li>Nombre del host del servidor: <?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li>Software del servidor: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
        <li>User Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
        <li>Dirección IP del cliente: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    </ul>
</body>

</html>