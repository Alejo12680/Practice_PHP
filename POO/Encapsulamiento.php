<!-- El encapsulamiento es un paradigma que consiste en restingir el acceso a propiedades y a metodos, El encapsulamiento es una forma de proteger los datos y la logica de una clase, para que no puedan ser accedidos directamente desde fuera de la clase -->

<?php

declare(strict_types=1);
// Public: Acceso desde cualquier parte del código
// Protected: Acceso solo desde la clase misma y sus subclases que lo heredadan
// Private: Acceso solo desde la clase misma
// En este ejemplo, las propiedades $nombre y $edad son privadas, lo que significa que no se pueden acceder directamente desde fuera de la clase. En su lugar, se utilizan métodos públicos para acceder a ellas.


class Persona
{
  // Propiedades privadas
  private string $nombre;
  private int $edad;

  // Constructor
  public function __construct(string $nombre, int $edad)
  {
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

  // Metodos de acceso a las propiedades privadas getters y setters
  // Método público para acceder al nombre
  public function getNombre(): string
  {
    return $this->nombre;
  }

  // Método público para acceder a la edad
  private function getEdad(): int
  {
    return $this->edad;
  }

  // Método público para saludar
  public function saludar(): string
  {
    return "Hola, soy " . $this->getNombre() . " y tengo " . $this->getEdad() . " años.";
  }
}


// Instanciando la clase Persona
$persona = new Persona("Juan", 30);
echo $persona->saludar(); // Salida: Hola, soy Juan y tengo 30 años.
// echo $persona->nombre = 4545664;  //No deberia acceder a la propiedad directamente, ya que es privada y su valor es un int y deberia ser un string
// echo $persona->edad; No deberia acceder a la propiedad directamente, ya que es privada
echo $persona->getNombre(); // Salida: Juan
// echo $persona->getEdad(); // Error: No puede acceder porque es una propiedad private 