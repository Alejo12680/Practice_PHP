<!-- Estrcutura de Datos arrays es de tipo indexado, esto quiere decir que si yo quiero acceder a uno al valor que se encuentra dentro del array se coloca un número en el cual empiza a contar desde el "0" -->

<?php

// Array indexado
$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

// Para acceder a un valor dentro del array se coloca el nombre del array y entre corchetes el número que corresponde al valor que quiero acceder
echo $meses[0]; // Enero

// Para agregar un valor al array se utiliza el operador [] para agregar un nuevo valor al final del array
$meses[] = "Nuevo mes"; // Agrega "Nuevo mes" al final del array
