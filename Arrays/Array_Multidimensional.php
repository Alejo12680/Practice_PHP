<!-- Los array multidimensional es la combinación de los dos arrays empieza con el inexado y dentro de el esta los arrays asociativos, los cuales para acceder a ellos hay que acceder primero al inexado -->

<?php
$personas = [
  [
    'nombre' => 'Juan',
    'edad' => 25,
    'ciudad' => 'Madrid'
  ],
  [
    'nombre' => 'Ana',
    'edad' => 30,
    'ciudad' => 'Barcelona'
  ],
  [
    'nombre' => 'Luis',
    'edad' => 28,
    'ciudad' => 'Valencia'
  ]
];

// Acceder a los valores de un array multidimensional
echo "Nombre: " . $personas[0]['nombre'] . "<br>"; // Juan
echo "Edad: " . $personas[1]['edad'] . "<br>"; // 30
echo "Ciudad: " . $personas[2]['ciudad'] . "<br>"; // Valencia

// Recorrer un array multidimensional
foreach ($personas as $persona) {
  foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
  }
}