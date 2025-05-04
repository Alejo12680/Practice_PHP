<!-- Son clases que son como un moldes, pero no se puden crear objetos con estas clases, llevan metodos y propiedades, solo se pueden heredar y la clase que hereda lleva obligatoriamente estos metodos y propiedades. Se utilizan para cosas que logicamente no van a cambiar, como un producto siempre va llevar un precio y un nombre. Se genera con la plabra "abstract" -->

<?php
// Definimos una clase abstracta llamada Producto, Esta clase no se puede instanciar directamente, solo se puede heredar y siempre van a compartir el mismo comportamiento y propiedades.
abstract class Producto {
    protected $nombre;
    protected $precio;

    // Definimos un método abstracto llamado calcularPrecio, que no tiene implementación en la clase base y debe ser implementado en las clases derivadas y no tiene un funcionamiento especifico.
    abstract public function calcularPrecio(): float;

    // Definimos un método para obtener el nombre del producto con un funcionamiento.
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getPrecio(): float {
        return $this->precio;
    }
}

// Solo las clases hijas pueden accder a los metodos abstractos, por eso no se puede instanciar la clase padre, solo se puede instanciar las clases hijas. Hereda con la palabra "extends".
class Cerveza extends Producto {

  // Creo una constante para el iva que no va a cambiar
    const IVA = 0.21;

    // Primero se crea un constructor en el cual resiva los atributos de la clase padre y los inicializa
    public function __construct($nombre, $precio) {

        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    // Implemento el método abstracto calcularPrecio, que calcula el precio total de la cerveza incluyendo el IVA.
    public function calcularPrecio(): float {
        return $this->precio + ($this->precio * self::IVA);
    }
}

// Creo un objeto de la clase hija ya que es una clase normal que solo hereda los atributos que recibe del padre abstracto
$cerveza = new Cerveza("Cerveza", 10.15);

// Accedemos a los filtros por medio de la clase hija, ya que la clase padre no se puede instanciar
echo "Nombre: " . $cerveza->getNombre() . "<br>";
echo "Precio: " . $cerveza->getPrecio() . "<br>";

// Las clases abstractas tambien sirven para categorizar 
function mostrarInfo(Producto $producto) {
    echo "$ ".$producto->calcularPrecio()."<br>";
}

// Llamamos a la funcion y le pasamos el objeto de la clase hija
mostrarInfo($cerveza);