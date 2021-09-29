<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios para practicar</title>
</head>
<body>
    
</body>
</html>
<pre>
<?php
// Función Slice
$entrada = array("jona", "nacho", "adri", "rober", "migue");
$salida = array_slice($entrada, 2);      // devuelve "c", "d", y "e"
echo var_dump ($salida)."<br>";
$salida = array_slice($entrada, -4, 2);  // devuelve "d"
var_dump ($salida)."<br>";
echo "<br>";
$salida = array_slice($entrada, 2, -1);   // devuelve "a", "b", y "c"
var_dump ($salida)."<br>";

//Matrices
$matriz = array(
    array("jona"),array("nacho"),array("adri")
);
print_r ($matriz);

$segundaMatriz = array(
    "datospersonales"=>array(
        "nombre"=>"jona",
        "apellido"=>"837374R",
    ),
    "direccion" =>array(
        "calle"=>"realenga de san luis",
        "portal"=>"5",
    )
);
echo $segundaMatriz["datospersonales"]["nombre"];
print_r ($segundaMatriz["direccion"]["calle"]);


?>
</pre>
