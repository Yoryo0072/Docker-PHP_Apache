<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos PHP</title>
</head>

<body>
    <?php
    /* echo es una construcción del lenguaje (no es una función) que nos permite mostrar cadenas de texto
    y el contenido de las variables. */
    $numero = 20;

    echo "El contenido de la variable numero es: $numero <br>";

    /* var_dump es una función nos permite mostrar el contenido de una variable. Esta función muestra el tipo de
    dato y el valor de la variable. */
    $nombre = "Pepe";
    $edad = 30;
    $nota = 7.5;

    var_dump($nombre);
    echo "<br>";
    var_dump($edad);
    echo "<br>";
    var_dump($nota);
    echo "<br>";

    // print_r es una función que nos permite mostrar el contenido de una variable de una forma legible.
    $lista = array("Pepe", "María", "Juan");

    print_r($lista);
    ?>
</body>

</html>