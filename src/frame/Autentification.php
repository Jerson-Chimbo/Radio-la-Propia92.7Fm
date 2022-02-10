<?php

namespace frame;
use models\Login;

class Autentification{
    private $loginTable;
    private $ci;
    private $clave;

    public function __construct(
        Login $loginTable,
        string $ci,
        string $clave
    )
    {
        $this->loginTable= $loginTable;
        $this->ci=$ci;
        $this->clave= $clave;
        session_start();
    }

    public function startSession(string $ci, string $clave): bool
    {

        $employe = $this->loginTable->selectFromColumn($this->ci,$ci);
        if($employe && password_verify($clave, $employe[0]->{$this->clave}) ){
            session_regenerate_id();
            $_SESSION['admin'] = $ci;
            $_SESSION['password'] = $employe[0]->{$this->clave};

            return true;
        }else{
            return false;
        }

    }

    public function validationAll(){

        if(empty($_SESSION['admin'])){
            return false;
        }
        
        $result = $this->loginTable->selectFromColumn('cedula', $_SESSION['admin'])[0];

        
        if($result->{$this->clave} == $_SESSION['password']){
            return true;
        }else{
            return false;
        }
    }

    public function getUser(){

        if($this->validationAll()){
            return $this->loginTable->selectFromColumn('cedula', $_SESSION['admin'])[0];
        }else{
            return false;
        }
        
    }

}