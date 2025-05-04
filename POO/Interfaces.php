<!-- Es un contrato muy parecido a las clases abstractas, solo que no tiene métodos que son implementados ni tampoco tiene propiedades, la interfas solo tiene métodos por implemntar, como es un contrato tienes que cumplir con los métodos que te indican, sirve en la arquitectura de software, para que clases que utilizan objetos internamente utilicen interfaces para que facilmente puedan cambiar un tipo de clases por otro tipo de clase sin necesidad de mover internamente las clases -->

<?php
// Definimos la interfaz
interface EnviarInterface {
  // Obligo a tenga un metodo para la clase que implemente la interfaz
    public function enviar(string $mensaje); 
}

interface SaveInterface {
  // Obligo a tenga un metodo para la clase que implemente la interfaz
    public function save(); 
}

// Definimos la clase que implementa la interfaz, una clse puede implementar varias interfaces, la herencia no puedes heredar de varias clases.
class Document implements EnviarInterface, SaveInterface {
    public function enviar(string $mensaje) {
        echo "Enviando la venta: $mensaje\n";
    }

    public function save() {
        echo "Guardando la venta en la nube\n";
    }
}

// Definimos otra clase que implementa una sola interfaz, esta clase esta de cierto modo relacionada a la clase Document, si hay una funcion que implementa la interfaz SaveInterface, puede utilizar tanto la clase Document como la clase Cotizacion, ya que ambas implementan la misma interfaz.
class Cotizacion implements SaveInterface {
    public function save() {
        echo "Guardando la ccotizacion en la nube\n";
    }
}

// Creamos una clase que internamente utilice una interfaz, esto hace parte de las buenas practicas de la programacion orientada a objetos, ya que si en un futuro quieres cambiar la clase que implementa la interfaz, solo tienes que cambiar la clase y no el resto del codigo.
class SaveProceso {
    private SaveInterface $saveInterface;

    public function __construct(SaveInterface $saveInterface) {
        $this->saveInterface = $saveInterface;
    }

    // Vamos a ejecutar internamente el metodo save de la clase que implementa la interfaz SaveInterface, en este caso la clase Document o Cotizacion, implemento el metodo save de la interfaz SaveInterface, por el contrato que se tiene.
    public function keep() {
        $this->saveInterface->save();
    }
}

// Creacion de objetos
$cotizacion = new Cotizacion(); 
$document = new Document();
$saveProceso = new SaveProceso( $cotizacion); // Cambiamos la clase que implementa la interfaz SaveInterface, sin necesidad de cambiar el resto del codigo. Tambien me puede servir para la clase Document, ya que ambas implementan la misma interfaz.

$saveProceso->keep(); // Guardando la cotizacion en la nube