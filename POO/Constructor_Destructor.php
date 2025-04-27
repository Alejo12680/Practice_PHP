<!-- Los constructores son tipo de metodo especial que tienen las clases se ejecuta en el punto cuando hacemos un new y la clase, el constructor obliga a que cuando se crea un objeto, este lleve las propiedades necesarias y no existen no puedo crear ese objetom el destructor, esto se activa al momento que se acaba el script o cuando se remplaza tu variable por otro objeto o si el objeto esta en una función y esta función termina -->

<?php
class Persona {
    public $nombre;
    public $edad;

    // Constructor no se puede sobrecargar como en Java y no se pueden crear dos constructores
    public function __construct($nombre, $edad) {
      // signa "->" asigna el valor a la propiedad de la clase
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Destructor se invoca en automatico al final del script o cuando se destruye el objeto, el no retorna nada y no lleva parametros, se utiliza para liberar recursos, cerrar conexiones a bases de datos, etc.
    public function __destruct() {
        echo "El objeto de la clase Persona ha sido destruido.";
    }
}

// Crear un objeto de la clase Persona
$persona1 = new Persona("Juan", 30);
echo "Nombre: " . $persona1->nombre . "<br>";