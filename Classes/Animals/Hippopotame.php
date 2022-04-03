<?php
namespace Animals;

use App\Animal;

class Hippopotame extends Animal
{
    const TYPE = 'Hippopotame';
    protected static $nbrpates = 4;
    protected static $env = 'savane';

    public function __construct()
    {
        echo "Je suis l'animal ". static::TYPE ." <br>";
    }  

    public static function getENV()
    {
        return 'Mon environnement est la '. static::$env . 'mais je sais aussi nager';
    }
}