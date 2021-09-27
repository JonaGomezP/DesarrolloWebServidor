<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera batería de ejercicios</title>
</head>
<body>
    <?php
    //Ejercicio 1
    echo "<b>Ejercicio 1<br></b>";
    echo "Hola mundo<br>";

    //Ejercicio 2
    echo "<b>Ejercicio 2<br></b>";
    $variableString="Soy una variable<br>";
    echo $variableString;

    //Ejercicio 3
    echo "<b>Ejercicio 3<br></b>";
    $variableInt=1;
    $variableFloat=1.5;
    $variableString="He cambiado, jeje";
    echo var_dump($variableInt)."<br>";
    echo var_dump($variableFloat)."<br>";
    echo var_dump($variableString)."<br>";

    echo "<b>Ejercicio 4<br></b>";
    $variableBoolean=true;
    $variableNull=null;
    echo var_dump($variableBoolean)."<br>";
    echo var_dump($variableNull)."<br>";

    echo "<b>Ejercicio 5<br></b>";
    $primerInt=10;
    $segundoInt=5;
    echo "10 + 5 =". $primerInt + $segundoInt."<br>";
    echo "10 - 5 =". $primerInt - $segundoInt."<br>";
    echo "10 x 5 =". $primerInt * $segundoInt."<br>";
    echo "10 / 5 =". $primerInt / $segundoInt."<br>";
    echo "El resto de 10 / 5 es ".$primerInt%$segundoInt."<br>";
    echo "10 elevado a 5 es ". pow($primerInt,$segundoInt)."<br>";

    echo "<b>Ejercicio 6<br></b>";
    $primerString="Me llamo";
    $segundoString=" Jonatan";
    echo $primerString.$segundoString."<br>";

    echo "<b>Ejercicio 7<br></b>";
    $primerString="2";
    echo var_dump($primerString)."<br>";
    echo var_dump($primerString*2)."<br>";
    echo var_dump($primerString*1.3)."<br>";
    echo var_dump($primerString*"12 manzanas")."<br>";




    ?>
</body>
</html>