<?php 
namespace models;

class Login extends DatabaseTable{
    public $cedula;
    public $clave;

    public function __construct()
    {
        parent::__construct('login','cedula','\models\Login',['login','cedula']);
    }
}