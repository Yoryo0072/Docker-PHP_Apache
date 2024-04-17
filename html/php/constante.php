<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constante PHP</title>
</head>
<body>
    <?php
    /* Las constantes no pueden modificar su valor durante la ejecución del script. El nombre de la constante no
    tiene que ir precedido por el símbolo del dólar y es sensible a mayúsculas y minúsculas. Por convención, las
    constantes siempre se declaran en mayúsculas. */

    // Ejemplo de una constante numérica de tipo real
    define("PI", 3.141592);

    // Ejemplo de una constante de tipo string
    define("CONSTANTE","Hola mundo");
    ?>
</body>
</html>