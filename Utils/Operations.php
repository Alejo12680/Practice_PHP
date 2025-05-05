<!-- Los namespace le da un nombre a la clase para que este agrupada, junto con otras clases y esto para evitar que se colicionen las clases con el mismo nombre, nos da la cualidad de empaquetar las clases -->

<?php
// Los namespace llevan el nombre de la carpeta donde se encuentra la clase, y el nombre de la clase, separados por una barra invertida
namespace Utils;

// Definimos la clase Operations, podemos tener varias clases dentro de un mismo namespace, pero no podemos tener dos clases con el mismo nombre dentro del mismo namespace.
class Operations {

  public function sum($a, $b) {
    return $a + $b;
  }
}
