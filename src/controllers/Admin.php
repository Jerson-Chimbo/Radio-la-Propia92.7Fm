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
        $array = json_decode($noticias,true);
        $patch = './public/asset/img/';
        $nombreArchivo= $_FILES['imagen']['name'];
        $nombreGuardar = $patch.$nombreArchivo;
        $archivoTemporal = $_FILES['imagen']['tmp_name'];
        $array['noticias'][] = [
            'title' => $_POST['titulo'],
            'img' => ltrim($nombreGuardar,'./'),
            'descripcion' => $_POST['descripcion']
        ];
        move_uploaded_file($archivoTemporal,$nombreGuardar);
        file_put_contents('./models/noticias/noticias.json',json_encode($array));
        return [
            'title' => 'Inicie Session',
            'template' => 'admin/addNoticias.html.php',
            'administrador' => true,
            'variables' => [
                'correcto' => 'Se ingreso correctamente la noticia'
            ]
        ];

    }
}
