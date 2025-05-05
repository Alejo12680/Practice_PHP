<!-- El polimorfirmos se va dividir en dos clases; la primera en sobrescritura de métodos y la segunda polimorfirmo interfaces. El polimorfismo es la capacidad de cambiar el comportamiento de los métodos dependiendo el contexto -->

<?php
class Descuento {
  protected $descuento = 0;

  public function __construct($descuento) {
    $this->descuento = $descuento;
  }

  public function getcalcularDescuento($precio) {
    // Método para calcular el descuento
    echo "Se aplica un descuento <br>";
    return $precio * $this->descuento;
  }
}

class DescuentoEspecial extends Descuento {

  const DESCUENTO_ESPECIAL = 2;

  public function getcalcularDescuento($precio) {
    // Sobrescribimos el método para aplicar un descuento especial
    echo "Se aplica un descuento especial <br>";
    return $precio * $this->descuento * self::DESCUENTO_ESPECIAL;
  }
}

// Implementacion del objeto
$descuento = new DescuentoEspecial(0.1);
// Se ejecuta el método de la clase hija porque sobrescribimos el método del padre
$descuentoCantidad = $descuento->getcalcularDescuento(100); 
echo "Descuento: $descuentoCantidad <br>";


// Polimorfismo interfaces, el polimorfismo es la forma facil de sustituir el comportamiento, como la abstraccion que se hace ya que es una accion que se hace más no como se hace.

interface GetInfo {
  public function getInformacion(): string;
}

class Address implements GetInfo {

  protected $address;
  public function __construct($address) {
    $this->address = $address;
  }

  // Cumplo con el contrato de la interfaz
  public function getInformacion(): string {
    return $this->address;
  }
}

class WebSite implements GetInfo {
  protected $url;
  public function __construct($url) {
    $this->url = $url;
  }

  // Cumplo con el contrato de la interfaz
  public function getInformacion(): string {
    // file_get_contents es una funcion de PHP que obtiene el contenido de un archivo y lo combierte en una cadena de texto, cuando se le pasa una URL obtiene el contenido de la pagina web y se veria el sitio web.
    return file_get_contents($this->url);
  }
}

// Funcion fuera de la clase que instancia la interfaz
function printInfo(GetInfo $site) {
  echo $site->getInformacion() . "<br>";
}

// Crear un objeto de la clase Address
$address = new Address("Calle 123, Ciudad, País");
$webSite = new WebSite("https://www.google.com/");
printInfo($address); // Imprime la dirección
printInfo($webSite); // Imprime el contenido de la página web

