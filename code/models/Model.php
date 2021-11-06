<?php

class Model
{
    const HOST = 'db';
    const PORT = '3306';
    const DB_NAME = 'crud';
    const USER = 'root';
    const PASSWORD = '123456';

    private $connection;

    public function __construct()
    {
        spl_autoload_unregister('autoloadModel');

        $this->connection = new PDO(
            'mysql:host='.self::HOST.';port='.self::PORT.';dbname='.self::DB_NAME, 
            self::USER, 
            self::PASSWORD);
    }

    public function add()
    {

    }
}