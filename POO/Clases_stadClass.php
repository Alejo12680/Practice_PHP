<!-- Se pueden crear objetos de manera dinamica, objetos que no necesitan de una clase para ser creados, estos se crean con la clase estandar stda, nos da la oportunidad de crear elementos dinamicos de manera muy rapida -->

<?php
// Objeto con la clase estandar stdClass, permite crear elementos sin que existan
$persona = new stdClass(); // Se crea un objeto de la clase estandar stdClass
$persona->nombre = "Juan"; // Se le asigna un valor a la propiedad nombre
$persona->edad = 25; // Se le asigna un valor a la propiedad edad

echo gettype($persona); // Imprime el tipo de dato del objeto, en este caso es un objeto

// Tambien lo puedo modificar
$persona->nombre = "Pedro"; // Se le asigna un nuevo valor a la propiedad nombre
$persona->edad = 30; // Se le asigna un nuevo valor a la propiedad edad

// **********************************************************************************************************
// Vamos castear stbclass en un arrays a objetos dinamicos.
$array = (array)$persona; // Convierte el objeto en un array
echo gettype($array); // Imprime el tipo de dato del array, en este caso es un array
echo $array['nombre']; // Imprime el valor de la propiedad nombre del array, en este caso es "Pedro"

// Creacion de un array y luego convertirlo en un objeto
$arrayLocation = [
  "address" => "Calle mal 123",
  "city" => "Madrid"
];

// Se castea el array a un objeto, se convierte el array en un objeto
$objLocation = (object)$arrayLocation; // Convierte el array en un objeto
echo $objLocation->address; // Imprime el valor de la propiedad address del objeto, en este caso es "Calle mal 123"
echo $objLocation->city; // Imprime el valor de la propiedad city del objeto, en este caso es "Madrid"
print_r($objLocation); // Imprime un stdClass Object con las propiedades address y city

