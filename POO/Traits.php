<!-- Traits soluciona la problematica que una clase no puede heredar de muchas clases, a veces necesitamos funcionalidades que estan en otras clases y no se puede hacer, los Traits solventan estas problematica. Esto es muy utilizado como laravel los traits son utilez para los LOGs -->

<?php
// Definimos un trait con la palabra clave 'trait' al inicio, puede tener propiedades y metodos
trait EmailSender
{
  public function sendEmail()
  {
    echo "Se envia un correo electronico<br>";
  }
}

trait DataBase
{
  public function guardar()
  {
    echo "Se guardo en la base de datos<br>";
  }
}

trait Log
{
  protected function log(string $message, string $filename){
    // Quiero saber si no existe el archivo con file_exists
    if(!file_exists($filename)){
      // Si no existe el archivo lo creamos vacio
      file_put_contents($filename, "");
    }

    // Obtener el contenido del archivo
    $current = file_get_contents($filename);
    // Agregar el nuevo mensaje al contenido existente, concatenando el mensaje con un salto de linea
    $current .= date("Y-m-d H:i:s")." - " . $message . "\n";
    file_put_contents($filename, $current);
  }
  
}

// Definimos una clase que utiliza el trait con la palabra clave 'use'
class Invoice
{
  use EmailSender, DataBase, Log; // Especificamos los traits que queremos usar

  public function createInvoice()
  {
    // Lógica para crear una factura
    echo "Factura creada<br>";
    // Llamamos al método log del trait Log
    $this->log("Factura creada", "factura.txt");
  }
}

// creamos un objeto de la clase Invoice
$invoice = new Invoice();
$invoice->sendEmail(); // Llamamos al metodo del trait
$invoice->guardar(); // Llamamos al metodo del trait
$invoice->createInvoice(); // Se crea el metodo del log

// Los traits nos permite tener funcionalidades que podemos usar en diferentes clases sin necesidad de heredar de una clase padre, es como una herencia multiple, pero no es una herencia multiple, es un trait que se puede usar en diferentes clases.