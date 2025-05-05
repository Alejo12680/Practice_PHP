<!-- Los namespace le da un nombre a la clase para que este agrupada, junto con otras clases y esto para evitar que se colicionen las clases con el mismo nombre, nos da la cualidad de empaquetar las clases -->

<?php

// colocamos la ruta donde se encuentra la clase Operations, y la clase que queremos usar.
require 'Utils/Operations.php';

// Definimos el namespace de la clase que estamos usando, y la clase que queremos usar con el use y la ruta donde se encuentra la clase.
use Utils\Operations;

// Podemos hacer uso de la clase Operations, sin necesidad de colocar el namespace completo, solo el nombre de la clase. Ya que ya lo hemos definido antes con el use.
$op = new Operations();

echo $op->sum(2, 3); // 5