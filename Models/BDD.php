<?php

namespace Models\BDD;

class BDD
{
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    Const DBNAME = 'renduphp';
    const PORT = '3600';

    public $pdo;    

    public function connect()
    {   
        $this->pdo = new PDO('mysql:host='. self::HOST .';dbname='. self::DBNAME, self::USER, self::PASS);
    }
}