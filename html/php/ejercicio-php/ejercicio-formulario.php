<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>

<body>
    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . $numero * $i . "<br>";
        }
        echo '<a href="ejercicio-formulario.php">Retornar Formulario';
    } else {
        echo
        '<form method="POST">
            <div>
                <label for="numero">Ingrese un numero:</label>
                <input type="number" id="numero" name="numero">
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>';
    }
    ?>
</body>

</html>