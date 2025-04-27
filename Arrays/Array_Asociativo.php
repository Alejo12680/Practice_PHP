<!-- Los array asociativos se acceden por medio de key una llave y ese key se especifica en el array, son muy parecidos a los diccionarios de Python o un Objeto de javascript, pero en realidad son arrays. El simbolo "=>" es para asignar el valor -->

<?php
// Array Associativo
$personas = [
    "nombre" => "Juan",
    "apellido" => "Pérez",
    "edad" => 30,
    "ciudad" => "Madrid"
];

// Acceder a los valores del array asociativo
echo "Nombre: " . $personas["nombre"] . "<br>";

// Agregar un nuevo elemento al array asociativo
$personas["profesion"] = "Ingeniero";

// Imprimir el valor del nuevo array asociativo
echo "Profesión: " . $personas["profesion"] . "<br>";
