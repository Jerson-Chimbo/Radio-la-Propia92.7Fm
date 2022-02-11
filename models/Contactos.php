<?php

namespace models;

class Contactos extends DatabaseTable{
    public $codigo;
    public $nombre;
    public $apellido;
    public $email;
    public $telefono;
    public $direccion;
    public $descripcion;

    public function __construct()
    {
        parent::__construct('contactos','codigo','\models\Contactos',['contactos','codigo']);
    }
}