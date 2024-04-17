<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo Embebido PHP-HTML</title>
</head>

<body>
    <!--El uso de estas etiquetas de apertura y cierre, nos permite embeber código PHP en documentos HTML. De modo
    que sólo el código que aparezca entre las etiquetas <?php  ?> será interpretado por el intérprete de PHP y el
    resto de etiquetas serán ignoradas. -->
    <p>Contenido escrito en HTML</p>
    <?php
    echo "Contenido escrito desde PHP";
    ?>
</body>

</html>