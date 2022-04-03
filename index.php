<?php

// require 'Classes/Autoloader.php';
// App\Autoloader::register();

require_once 'vendor/autoload.php';

$animal = new App\Animal();
echo '<br>';
$lion = new Animals\Lion();
$monkey = new Animals\Monkey();

var_dump($animal::getTYPE());
var_dump($lion::getTYPE());
var_dump($lion::getNBRPATES());
var_dump($animal->getMyType(App\Animal::TYPE), Animals\Lion::TYPE);
var_dump($animal->getMyType(Animals\Dauphin::TYPE));

var_dump(App\Animal::getENV(), Animals\Lion::getENV(), Animals\Dauphin::getENV());
var_dump(Animals\Dauphin::getTYPE());
var_dump(App\Animal::getNBRPATES());
