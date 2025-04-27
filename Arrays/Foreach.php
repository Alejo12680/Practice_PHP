<!-- Estructura de repetición de los arrays, el "as" es como vamos a llamar al iterador, sirve para recorrerlos de manera practica, funciona para tanto arrays indexados como los asociativos, con los arrays asociativos podemos hacer que tambien nos traiga la clave y la llave -->

<?php
// Declaración de un array indexado
$nombres = ["Juan", "Pedro", "Maria", "Jose", "Luis"];

// Foreach para recorrer el array indexado
foreach ($nombres as $nombre) {
    echo $nombre . "<br>";
}

// Declaración de un array asociativo
$edades = [
    "Juan" => 25,
    "Pedro" => 30,
    "Maria" => 22,
    "Jose" => 28,
    "Luis" => 35
];

// Foreach para recorrer el array asociativo
foreach ($edades as $nombre => $edad) {
    echo "$nombre tiene $edad años<br>";
}
