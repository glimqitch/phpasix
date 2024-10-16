<?php

//Fitxer per a crear el contenidor de dependeices per gestionar
//i accedir a les dependencies de l'aplicacio de forma centralitzada
namespace Core;

use Exception;
class App {
    //creem variable per el contenidor de dependencies
    private static $container;

    public static function bind($key, $value)
    {
        static::$container[$key] = $value;
    }
    public static function get($key)
    {
        if(!array_key_exists($key, static::$container))
        {
            throw new Exception("No key '{$key}' is bound in container'");

        }
    }
}
?>