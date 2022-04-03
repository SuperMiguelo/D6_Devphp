<?php
namespace App;

class Animal
{
    const TYPE = 'Animal';
    protected static $nbrpates = 'Inconnu';
    protected static $env = 'Inconnu';

    public function __construct()
    {
        echo 'Je suis un '. static::TYPE;
    }

    public static function getTYPE()
    {
        return static::TYPE;
    }

    public static function getNBRPATES()
    {
        return static::$nbrpates;
    }

    public static function getENV()
    {
        return 'Mon environnement est la '. static::$env;
    }

    public function getMyType($type)
    {
        return $type;
    }
}