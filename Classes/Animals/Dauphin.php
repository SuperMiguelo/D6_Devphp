<?php
namespace Animals;

use App\Animal;

class Dauphin extends Animal
{
    const TYPE = 'Dauphin';
    protected static $nbrpates = 0;
    protected static $env = 'mer';

    public function __construct()
    {
        echo "Je suis l'animal ". static::TYPE ." <br>";
    }  

    public static function getENV()
    {
        return 'Mon environnement est la '. static::$env . ' mais je sais aussi nager.';
    }

    public static function getNBRPATES()
    {
        return "Je n'ai pas de pates, mais des nageoirs";
    }
}