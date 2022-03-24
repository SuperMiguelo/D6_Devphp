<?php

namespace Models\BDD;

class BDD
{
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '0000';
    Const DBNAME = 'itakademy';
    const PORT = '3600';

    public $pdo;

    public function __construct()
    {
        
    }

    public function connect()
    {   
        $this->pdo = new PDO('mysql:host='. self::HOST .';dbname='. self::DBNAME, self::USER, self::PASS);
    }
}