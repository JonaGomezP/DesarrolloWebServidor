<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicios tema 3</title>
</head>

<body>

    <?php

    $ent1 = $_GET['entrada1'];
    $ent2 = $_GET['entrada2'];
    $ent3 = $_GET['entrada3'];

    /*   TU CÓDIGO   */

    //Ejercicio 1
    print_r("<b>Ejercicio 1</b></br>");
    if ($ent1 >= 'true' && $ent3 >= 'true') {
        print_r("Verdadero");
    } else {
        print_r("Falso");
    }
    print_r("</br>");

    //Ejercicio 2
    print_r("<b>Ejercicio 2</b></br>");
    if ($ent1 > 100) {
        print_r($ent1 . " es mayor que 100</br>");
    } elseif ($ent1 >= 50 && $ent1 <= 100) {
        print_r($ent1 . " está entre 50 y 100</br>");
    } elseif ($ent1 >= 25 && $ent1 < 50) {
        print_r($ent1 . " está entre 25 y 50</br>");
    } else {
        print_r($ent1 . " es menor de 25</br>");
    }

    //Ejercicio 3
    print_r("<b>Ejercicio 3</b></br>");
    if (strtolower($ent1) == 'perro') {
        print 'Es un perro</br>';
    } elseif (strtolower($ent1) == 'gato') {
        print 'Es un gato</br>';
    } elseif (strtolower($ent1) == 'loro') {
        print 'Es un loro</br>';
    } else {
        print 'Es un mutante</br>';
    }

    //Ejercicio 4
    print_r("<b>Ejercicio 4</b></br>");

    switch ($ent1) {
        case 'perro':
            print 'Es un perro';
            break;
        case 'gato':
            print 'Es un gato';
            break;
        case 'loro':
            print 'Es un loro';
            break;
        default:
            print 'Es un  mutante';
            break;
    }

    //Ejercicio 5
    print_r("<b>Ejercicio 5</b></br>");

    if (is_numeric($ent1)&&is_numeric($ent3)) {
        if ($ent2 == 'v1') {
            $resultado = $ent1 + $ent3;
            print $resultado;
        }elseif ($ent2 == 'v2') {
            $resultado = $ent1 - $ent3;
            print $resultado;
        }elseif ($ent2 == 'v3') {
            $resultado = $ent1 * $ent3;
            print $resultado;
        } else {
            $resultado = $ent1 / $ent3;
            print $resultado;
        }
    } else {
        print 'No son números';
    }
    ?>

</body>

</html>