<?php

class Model
{
    private $connection;

    public function __construct()
    {
        spl_autoload_unregister('autoloadModel');
        $this->host = getenv('DB_HOST');
        $this->dbname = getenv('DB_NAME');
        $this->charset = getenv('CHARSET');
        $this->user = getenv('USER');
        $this->password = getenv('PASSWORD');

        $this->connection = new mysqli("localhost", "root", "123456", "crud");
    }

    public function add()
    {

    }
}