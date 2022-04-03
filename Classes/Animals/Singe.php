<?php
namespace Animals;

use App\Animal;

class Monkey extends Animal
{
    const TYPE = 'Singe';
    protected static $nbrpates = 4;
    protected static $env = 'Jungle';

    public function __construct()
    {
        echo "Je suis l'animal ". static::TYPE ." <br>";
    }  

    public static function getENV()
    {
        return 'Mon environnement est la '. static::$env . ' et je grimpe aux arbres';
    }

    public static function getNBRPATES()
    {
        return "Je n'ai pas de pates, mais des nageoirs";
    }
}