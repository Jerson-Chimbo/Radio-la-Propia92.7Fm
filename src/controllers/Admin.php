<?php
namespace controllers;

use models\Login;

class Admin{
    private $loginTable;

    public function  __construct(
        Login $loginTable
    )
    {
     $this->loginTable= $loginTable;   
    }

    public function login(){
        $contra = password_hash('12345',PASSWORD_DEFAULT);
        $datos = [
            'cedula' => '0123456789',
            'clave' => $contra
        ];
        // $this->loginTable->insert($datos);
        return [
            'title' => 'Inicie Session',
            'template' => 'admin/login_admin.html.php',
            'administrador' => true
        ];
    }

    public function addNoticias(){
        return [
            'title' => 'Inicie Session',
            'template' => 'admin/addNoticias.html.php',
            'administrador' => true
        ];
    }

    public function saveNoticias(){
        $noticias = file_get_contents('./models/noticias/noticias.json');
        $array = json_decode($noticias,true)['noticias'];

        foreach($array as $key => $noticia){
            var_dump($noticia);
        }
    }
}
