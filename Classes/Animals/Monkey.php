<?php 

namespace Animals;

use App\Animal;

class Monkey extends Animal
{
    const TYPE = 'Monkey';
    protected static $nom = 'harambe';
    protected static $env = 'Forest';

    public static function getENV(){
        return static::$env;
    }
    
}