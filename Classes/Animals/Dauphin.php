<?php
namespace Animals;

use App\Animal;

class Dauphin extends Animal
{
    const TYPE = 'Dauphin';
    protected static $nbrpates = 0;
    protected static $env = 'Mer';

    public static function getNBRPATES()
    {
        return "Je n'ai pas de pates, mais des nageoirs";
    }
}