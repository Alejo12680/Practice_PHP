<!-- EL tipado al igual que en java, se aplica en todo, php es flexible, con un tipado debil, para que sea un tipado estricto se debe colocar "declare(strict_types=1);" -->

<?php

declare(strict_types=1); // Para que el tipado sea estricto, se debe colocar al inicio del archivo

class Tipado
{

  public array $array; // Se define el tipo de dato que se espera en la variable, en este caso un array
  public string $string; // Se define el tipo de dato que se espera en la variable, en este caso un string
  public int $int; // Se define el tipo de dato que se espera en la variable, en este caso un int

  // constructor para inicializar las variables tipado
  public function __construct(array $array, string $string, int $int)
  {
    $this->array = $array;
    $this->string = $string;
    $this->int = $int;
  }

  public function suma(int $a, int $b): int // El tipo de dato que se espera como resultado de la funcion
  {
    return $a + $b;
  }

  public function sumaFloat(float $a, float $b): float // El tipo de dato que se espera como resultado de la funcion
  {
    return $a + $b;
  }

  public function sumaString(string $a, string $b): string // El tipo de dato que se espera como resultado de la funcion
  {
    return $a . $b;
  }
}

// Se crea un objeto de la clase Tipado, se le pasan los valores a las variables tipadas
$tipado = new Tipado([1, 2, 3], "Hola", 5);
// Se imprime el objeto tipado
var_dump($tipado);  // Se imprime el objeto tipado
// Se imprime el resultado de la suma de dos numeros <enteros>  
echo $tipado->suma(5, 10) . "<br>"; // Se imprime el resultado de la suma de dos numeros <enteros>
// Se imprime el resultado de la suma de dos numeros <cadenas>
echo $tipado->sumaString("Hola", " Mundo") . "<br>"; // Se imprime el resultado de la suma de dos numeros <cadenas>

// En php 8 se pueden usar los tipos de datos union, es decir, se puede pasar un tipo de dato u otro, pero no se recomienda ya que no es tipado estricto

class TipadoUnion
{
  public function suma(int|float $a, int|float $b): int|float // El tipo de dato que se espera como resultado de la funcion
  {
    return $a + $b;
  }
}

// Se crea un objeto de la clase TipadoUnion, se le pasan los valores a las variables tipadas
$tipadoUnion = new TipadoUnion();
// Se imprime el resultado de la suma de dos numeros <enteros>
echo $tipadoUnion->suma(5, 10) . "<br>"; // Se imprime el resultado de la suma de dos numeros <enteros>
// Se imprime el resultado de la suma de dos numeros <decimales>
echo $tipadoUnion->suma(5.5, 10.5) . "<br>"; // Se imprime el resultado de la suma de dos numeros <decimales>
// Se imprime el resultado de la suma de dos numeros <enteros> y <decimales>
echo $tipadoUnion->suma(5, 10.5) . "<br>"; // Se imprime el resultado de la suma de dos numeros <enteros> y <decimales>

// Como nota null tambien es un tipo de dato, pero no se recomienda usarlo ya que no es tipado estricto, se recomienda usar el operador de coalescencia nula ?? para evitar errores en el tipado ejemplo:
$a = null;
$b = 5;
$c = $a ?? $b; // $c = 5, si $a es null se le asigna el valor de $b, si no es null se le asigna el valor de $a
