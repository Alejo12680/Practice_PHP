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

