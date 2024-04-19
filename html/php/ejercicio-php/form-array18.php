<?php
function esPrimo($numero)
{
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

function noRepetido($numero, &$lista_primo)
{
    if (!in_array($numero, $lista_primo) && esPrimo($numero)) {
        $lista_primo[] = $numero;
    }
}

function generarPrimos($cantidad)
{
    $cont = 0;
    $lista_primo = array();
    do {
        $num_rand = rand(0, 100);
        noRepetido($num_rand, $lista_primo);
        $cont = count($lista_primo);
    } while ($cont < $cantidad);

    foreach ($lista_primo as $key => $value) {
        echo "P[" . $key . "] " . $value . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        generarPrimos($numero);
        echo '<a href="form-array18.php">Retornar Formulario';
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