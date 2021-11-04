<?php

class DepartamentController 
{
    private $model;

    public function __construct()
    {
        spl_autoload_unregister('autoloadController');
        spl_autoload_register('autoloadModel');

        $model = 'Model';
        $this->model = new $model;

        
    }

    public function add()
    {
        echo 'Departament add';
    }

    public function edit()
    {
        echo 'Departament edit';
    }

    public function delete()
    {
        echo 'Departament delete';
    }

    public function list()
    {
        echo 'Departament list';
    }
}