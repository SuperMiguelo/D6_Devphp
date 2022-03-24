<?php
namespace Animals;

use App\Animal;

class Chien extends Animal
{
    const TYPE = 'Chien';
    protected static $nbrpates = 4;
    protected static $env = 'Terre';

    public function __construct()
    {
        echo "Je suis l'animal ". static::TYPE ." <br>";
    }  

    public static function getENV()
    {
        return 'Mon environnement est : '. static::$env . ' mais je sais aussi nager.';
    }
}