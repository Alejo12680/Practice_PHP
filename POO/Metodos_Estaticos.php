<!-- Los metodos estaticos solo pertenecen a la clase y no al objeto, es decir cuando se crea una propiedad o metodo static, no se necesita traer un objeto para invocarlo, para acceder a ella se utiliza la palabra self:: nombre de la propiedad, son utiles para tener funcionalidades compartidas o globales  -->

<?php
class Persona{
    public static $nombre = "Juan";
    public static $edad;

    public static function mostrarNombre(){
        return self::$nombre;
    }

    public static function mostrarEdad(){
        return self::$edad++;
    }
}

// Accediendo a la propiedad estaticas
echo Persona::$nombre; // <Juan>
echo Persona::$edad; // <0>

// Accediendo a los metodos estaticos
echo Persona::mostrarNombre(); // <Juan>
echo Persona::mostrarEdad(); // <0>

