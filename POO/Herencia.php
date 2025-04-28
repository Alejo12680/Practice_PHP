<!-- Esto permite reutilizar código, ya que reutiliza codigo que ya esta hecho por el padre, como todos los metodos y propiedades del padre -->

<?php

class Persona {
    public string $nombre;
    public int $edad;

    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() : string {
        return "Hola, soy " . $this->nombre . " y tengo " . $this->edad . " años.";
    }
}

// Para heredar de una clase, se usa la palabra reservada "extends"
class Estudiante extends Persona {
    public string $carrera;

    public function __construct(string $nombre, int $edad, string $carrera) {
        // Con parent:: hace el llamado al constructor de la clase padre
        parent::__construct($nombre, $edad); 
        $this->carrera = $carrera;
    }

    public function estudiar(): string {
        return "Estoy estudiando " . $this->carrera . ".";
    }
}

// Instanciando la clase Estudiante
$estudiante = new Estudiante("Juan", 20, "Ingeniería en Sistemas");
echo $estudiante->saludar(); // Salida: Hola, soy Juan y tengo 20 años.
echo $estudiante->estudiar(); // Salida: Estoy estudiando Ingeniería en Sistemas.
echo $estudiante->nombre; // Salida: Juan
echo $estudiante->edad; // Salida: 20
echo $estudiante->carrera; // Salida: Ingeniería en Sistemas

