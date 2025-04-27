<!-- Programacion orienta a objetos, una clase permite crear objetos, los objetos tiene propiedades y metodos -->

<?php

// La clase es el molde para crear objetos
class Persona {
    // Propiedades (atributos)
    public $nombre;
    public $edad;
    public $date;
}

// Crear un objeto de la clase Persona
$persona1 = new Persona();
echo gettype($persona1) . "<br>"; // Imprime el tipo de dato del objeto

// Acceder a las propiedades del objeto
$persona1->nombre = "Juan";
$persona1->edad = 30;
$persona1->date = date("Y-m-d H:i:s"); // Fecha y hora actual



// Otro objeto con propiedades diferentes y metodos diferentes, un metodo es un comportamiento dentro de la clase
class Sale {
    // Propiedades (atributos)
    public $producto;
    public $precio;

    // Metodo (funcion dentro de la clase)
    public function createInvoice() {
        return "Factura creada para el producto: " . $this->producto . " con precio: " . $this->precio;
    }
}

// Crear un objeto de la clase Sale
$sale = new Sale();
$sale->producto = "Laptop";
$sale->precio = 1500;
// podemos acceder a las propiedades y metodos de la clase Sale
echo $sale->createInvoice() . "<br>"; // Imprime la factura creada para el producto y precio

