<?php

// require 'Classes/Autoloader.php';
// App\Autoloader::register();

require_once 'vendor/autoload.php';

$animal = new App\Animal();
echo '<br>';
$chien = new Animals\Chien();

var_dump($animal::getTYPE());
var_dump($chien::getTYPE());
var_dump($chien::getNBRPATES());
var_dump($animal->getMyType(App\Animal::TYPE), Animals\Chien::TYPE);
var_dump($animal->getMyType(Animals\Dauphin::TYPE));

var_dump(App\Animal::getENV(), Animals\Chien::getENV(), Animals\Dauphin::getENV());
var_dump(Animals\Dauphin::getTYPE());
var_dump(App\Animal::getNBRPATES());