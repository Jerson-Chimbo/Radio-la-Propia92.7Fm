<?php

namespace controllers;

use frame\Autentification;
use models\Login as ModelsLogin;

class Login{
    private $loginTable;
    private $autentifiaction;

    public function __construct(
        ModelsLogin $loginTable,
        Autentification $autentifiaction
    )
    {
        $this->loginTable= $loginTable;
        $this->autentifiaction= $autentifiaction;
    }


    public function loadLogin(){
        $user = $this->autentifiaction->startSession($_POST['cedula'],$_POST['password']);

        if($user){
            header('location: /admin/add/noticias');
        }else{
            return [
                'title' => 'Inicie Session',
                'template' => 'admin/addNoticias.html.php',
                'administrador' => true,
                'variables' => [
                    'error' => 'Error argumentos invalidos'
                ]
            ];
        }
    }
}