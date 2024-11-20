<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href=""
">
</head>

<body>
    <p>Jose Luis <b>Bernedo </b> Laura v2</p>

    <!-- Etiquetas PHP -->
    <?php
    echo "Imprimiendo de php </br>";
    $dato_1 = 1;
    $dato_2 = 100;

    echo "El resultado es: " . $dato_1 + $dato_2 . "</br>";
    echo "Incremento: " . $dato_1 + 1;

    if ($dato_2 == 2) {
        echo "No es igual" . "</br>";
    } else if ($dato_2 === 100) {
        echo "Si es igual" . "</br>";
    }

    /* declarar 7 tipos de datos */
    /* Jose Luis Bernedo Laura */
    $cadena = "Hola";
    $int = 10;
    $decimal = 6.5;
    $booleano = false;
    $nulo = null;
    $arreglo = array(1, 5, 10, 15, 25);
    $objeto = new stdClass();
    $objeto->nombre = "Jose Luis";
    $emojis = ["✔", "😜", "👀", "🤔"];

    $array = array("1", "2", "3", "4", "5", "6");


    /* Jose Luis Bernedo Laura */
    foreach ($emojis as $valor) {
        echo $valor . "<br>";
    };

    for ($i = 1; $i <= 12; $i++) {

        echo "Tabla del $i:<br>";
        for ($j = 1; $j <= 12; $j++) {

            echo "$i × $j = " . ($i * $j) . "<br>";
        }
        echo "<br>";
    }





    ?>
</body>
</body>

</html>