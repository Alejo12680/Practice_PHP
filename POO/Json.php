<!-- El Json es un mensajero de todos los lenguajes en el cual, su deber es transmitir los datos en forma de que los entienda -->

<?php

class Beer
{
  public string $name;
  public string $brand;
  public float $alchol;
  public bool $isStrong;

  public function __construct(string $name, string $brand, float $alchol, bool $isStrong)
  {
    $this->name = $name;
    $this->brand = $brand;
    $this->alchol = $alchol;
    $this->isStrong = $isStrong;
  }
}

$beer = new Beer("Corona", "Grupo Modelo", 4.5, false);

// Transformacion en Json; json_encode es un metodo que transforma un objeto en un string json
$beerJson = json_encode($beer);

// ahora tengo un string json
$jsonBeer = '{"name":"Corona","brand":"Grupo Modelo","alchol":4.5,"isStrong":false}';

// Transformacion de un string json a un objeto php; json_decode es un metodo que transforma un string json en un objeto php
$beerObject = json_decode($jsonBeer);

print_r($beerObject); // a pesar de que es un string json, se comporta como un objeto es un stdClass un objeto dinamico.

// Ya como es un objeto ya puedo acceder a sus propiedades
echo $beerObject->name; // Corona

// Tambien se puede convertir un array a json
$beerArray = [
  "name" => "Colombiana",
  "brand" => "Grupo Modelo",
  "alchol" => 4.5,
  "isStrong" => false
];

// Transformacion de un array a un string json
$newBeerArrayJson = json_encode($beerArray);

// Tambien puedo convertir un objeto a un array, con el segundo parametro en true, le digo que lo convierta a un array asociativo
$beerArray = json_decode($jsonBeer, true); // el segundo parametro es true para que lo convierta a un array asociativo

echo $beerArray["name"]; // Colombiana
