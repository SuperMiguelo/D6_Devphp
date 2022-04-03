<?php
namespace Animals;

use App\Animal;

class Panda extends Animal
{
    const TYPE = 'Panda';
    protected static $nbrpates = 4;
    protected static $env = 'montagne';

    public function __construct()
    {
        echo "Je suis l'animal ". static::TYPE ." <br>";
    }  

    public static function getENV()
    {
        return 'Mon environnement est la '. static::$env . '.';
    }
}