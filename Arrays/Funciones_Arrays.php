<!-- Funciones del array que resiven un array y hacen alguna operación  -->

<?php

// Declaración de un array, funcion que recibe un array y devuelve el número de elementos del array
$cervezas = array("Cerveza1", "Cerveza2", "Cerveza3", "Cerveza4", "Cerveza5", "Cerveza6", "Cerveza7", "Cerveza8", "Cerveza9", "Cerveza10");

// funcion de contar elementos de un array
echo count($cervezas) . "<br>"; // 10 elementos

// Para ver el contenido de un array se utiliza la función print_r() o var_dump() o var_export()
print_r($cervezas); // imprime el array completo
var_dump($cervezas); // imprime el array completo con el tipo de dato y el tamaño de cada <elemento>
var_export($cervezas); // imprime el array completo con el tipo de dato y el tamaño de cada <elemento> y el valor de cada elemento

// También se puede utilizar la función implode() para convertir un array en una cadena de texto
$cervezas_string = implode(", ", $cervezas); // convierte el array en una cadena de texto separada por comas
echo $cervezas_string . "<br>"; // Cerveza1, Cerveza2, Cerveza3, Cerveza4, Cerveza5, Cerveza6, Cerveza7, Cerveza8, Cerveza9, Cerveza10

// También se puede utilizar la función explode() para convertir una cadena de texto en un <array>
$cervezas_array = explode(", ", $cervezas_string); // convierte la cadena de texto en un array separada por comas
echo "<br>";// Cerveza1, Cerveza2, Cerveza3, Cerveza4, Cerveza5, Cerveza6, Cerveza7, Cerveza8, Cerveza9, Cerveza10

// También se puede utilizar la función array_push() para añadir un elemento al final de un array
array_push($cervezas, "Cerveza11"); // añade un elemento al final del array

// Tabien se puede utilizar la función array_pop() para eliminar el último elemento de un array, pero tambien se puede utilizar la función unset() para eliminar un elemento de un array, tambien se puede guardar el valor eliminado en una variable
array_pop($cervezas); // elimina el último elemento del array
$cerveza_eliminada = array_pop($cervezas); // elimina el último elemento del array y lo guarda en una variable
unset($cervezas[0]); // elimina el primer elemento del array

// También se puede utilizar la función array_shift() para eliminar el primer elemento de un array, pero tambien se puede utilizar la función unset() para eliminar un elemento de un array, tambien se puede guardar el valor eliminado en una variable
array_shift($cervezas); // elimina el primer elemento del array
$cerveza_eliminada = array_shift($cervezas); // elimina el primer elemento del array y lo guarda en una variable
unset($cervezas[0]); // elimina el primer elemento del array

// También se puede utilizar la función array_unshift() para añadir un elemento al principio de un array
array_unshift($cervezas, "Cerveza0"); // añade un elemento al principio del array

// Tambien se puede utilizar in_array() para comprobar si un elemento existe en un array
$existe = in_array("Cerveza1", $cervezas); // devuelve true si el elemento existe en el array, false si no existe
echo $existe . "<br>"; // 1 si existe, "" si no existe

// También se puede utilizar la función array_search() para buscar un elemento en un array y devolver su índice
$indice = array_search("Cerveza1", $cervezas); // devuelve el índice del elemento en el array, false si no existe

// Tambien se puede utilizar array_merge() para unir dos arrays
$cervezas2 = array("Cerveza12", "Cerveza13", "Cerveza14", "Cerveza15", "Cerveza16", "Cerveza17", "Cerveza18", "Cerveza19", "Cerveza20"); // array de cervezas 2
$cervezas_unidas = array_merge($cervezas, $cervezas2); // une los dos arrays

// También se puede utilizar la función array_slice() para obtener una parte de un array
$cervezas_slice = array_slice($cervezas, 0, 5); // obtiene los primeros 5 elementos del array
$cervezas_slice2 = array_slice($cervezas, 5); // obtiene los elementos del array desde el índice 5 hasta el final del array






