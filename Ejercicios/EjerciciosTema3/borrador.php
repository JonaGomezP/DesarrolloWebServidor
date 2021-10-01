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
    //OPCION 1
    print_r("<b>Ejercicio 1</b></br>");
    if (strtolower($ent1) == 'true' && strtolower($ent3) == 'true') {
        print_r("Verdadero");
    } else {
        print_r("Falso");
    }
    print_r("</br>");


    //OPCION 2
    /*
    function str_to_bool($ent)
    {
        $Bool = array(
            "true" => true,
            "false" => false
        );


        return $Bool[$ent];
    }

    function str_to_bool2($ent)
    {

        return array(
            "true" => true,
            "false" => false
        )[$ent];
    }

    $b = str_to_bool($ent2);
    */


    //Ejercicio 2
    print_r("<b>Ejercicio 2</b></br>");
    if(is_numeric($ent1)){
        if ($ent1 > 100) {
            print_r($ent1 . " es mayor que 100</br>");
        } elseif ($ent1 >= 50 && $ent1 <= 100) {
            print_r($ent1 . " está entre 50 y 100</br>");
        } elseif ($ent1 >= 25 && $ent1 < 50) {
            print_r($ent1 . " está entre 25 y 50</br>");
        } else {
            print_r($ent1 . " es menor de 25</br>");
        }
    }
     else {
        print_r("No es un número</br>");
    }

    //Ejercicio 3

    print_r("<b>Ejercicio 3</b></br>");

    echo "Opción a)</br>";
    switch (strtolower($ent1)) {
        case 'perro':
        case 'gato':
        case 'loro':
            echo "Es un ".$ent1."</br>";
            break;
        default:
        echo "Es un mutante</br>";
    }

    echo "Opción b)</br>";
    if (strtolower($ent1) == "perro") {
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
            print 'Es un perro</br>';
            break;
        case 'gato':
            print 'Es un gato</br>';
            break;
        case 'loro':
            print 'Es un loro</br>';
            break;
        default:
            print 'Es un  mutante</br>';
            break;
    }

    //Ejercicio 5
    print_r("<b>Ejercicio 5</b></br>");

    if (is_numeric($ent1) && is_numeric($ent3)) {
        if ($ent2 == 'v1') {
            $resultado = $ent1 + $ent3;
            print $resultado."</br>";
        } elseif ($ent2 == 'v2') {
            $resultado = $ent1 - $ent3;
            print $resultado."</br>";
        } elseif ($ent2 == 'v3') {
            $resultado = $ent1 * $ent3;
            print $resultado."</br>";
        } else {
            $resultado = $ent1 / $ent3;
            print $resultado."</br>";
        }
    } else {
        print 'No son números</br>';
    }

    //Ejercicio 6
    print_r("<b>Ejercicio 6</b></br>");

    $dat1 = $_GET['dato1'];
    $dat2 = $_GET['dato2'];
    $dat3 = $_GET['dato3'];
    switch ($dat2) {
        case 'v1':
            if (($dat1 == "true" && $dat3 == "true") || ($dat1 == "false" && $dat3 == "false")) {
                echo "verdadero";
            } else {
                echo "falso";
            }
            break;

        case 'v2':
            if ($dat1 == "true" || $dat3 == "true") {
                echo "verdadero";
            } else {
                echo "falso";
            }
            break;

        case 'v3':
            if (($dat1 == "true" && $dat3 == "true") || ($dat1 == "false" && $dat3 == "false")) {
                echo "false";
            } else {
                echo "true";
            }
            break;

        default:
            if ($dat1 == "true") {
                echo $dat1 . " cambiado es false";
            } else if ($dat1 == "false") {
                echo $dat1 . " cambiado es true";
            }
            echo "<br>";

            if ($dat3 == "true") {
                echo $dat3 . " cambiado es false";
            } else if ($dat3 == "false") {
                echo $dat3 . " cambiado es true";
            }
            break;
    }
    echo "<br>";

    print_r("<b>Ejercicio 7</b></br>");

    $arrayString = explode(' ',$ent1);

    echo "Opcion a)</br>";
    for ($i=0; $i < sizeof($arrayString) ; $i++) { 
        echo ($arrayString[$i]."</br>");
    }
    
    echo "Opcion b)</br>";
    foreach ($arrayString as $value) {
        echo ($value."</br>");
    }

    ?>

</body>

</html>