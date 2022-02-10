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
            'title' => 'Agregue una Noticia',
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
            'title' => 'Agregue una Noticia',
            'template' => 'admin/addNoticias.html.php',
            'administrador' => true,
            'variables' => [
                'correcto' => 'Se ingreso correctamente la noticia'
            ]
        ];

    }

    public function listNoticias(){
        $noticias = file_get_contents('./models/noticias/noticias.json');
        $array = json_decode($noticias,true)['noticias'];
        return [
            'title' => 'Lista de Noticias',
            'template' => 'admin/listNoticias.html.php',
            'administrador' => true,
            'variables' => [
                'noticias' => $array
            ]
        ];
    }
    public function editNoticias(){
        
        if(isset($_GET['title'])){
            $noticias = file_get_contents('./models/noticias/noticias.json');
            $array = json_decode($noticias,true);
            $res =[];
            foreach($array['noticias'] as  $value){

               foreach($value as $key => $noticia){
                  if($key == 'title' && $_GET['title'] == $noticia){
                     $res = $value;
                  }
               }

            }

            return [
                    'title' => 'Editar Noticias',
                    'template' => 'admin/editNoticias.html.php',
                    'administrador' => true,
                    'variables' => [
                        'noticia' => $res
                    ]
                ];
        }
    }

    public function saveEditNoticias(){
        $noticias = file_get_contents('./models/noticias/noticias.json');
        $array = json_decode($noticias,true);
        foreach($array['noticias'] as $index => $value){
           foreach($value as $key => $noticia){
              if($key == 'title' && $_POST['idT'] == $noticia){
                 $array['noticias'][$index]['title'] = $_POST['titulo'];
                 $array['noticias'][$index]['descripcion'] = $_POST['descripcion'];
              }
           }

        }
        file_put_contents('./models/noticias/noticias.json',json_encode($array));

        header('location:/admin/list/noticias');
    }
    
    public function deleteNoticias(){
        $noticias = file_get_contents('./models/noticias/noticias.json');
        $array = json_decode($noticias,true);
        foreach($array['noticias'] as $index => $value){
           foreach($value as $key => $noticia){
              if($key == 'title' && $_POST['title'] == $noticia){
                unset($array['noticias'][$index]);
                
              }
           }

        }
        file_put_contents('./models/noticias/noticias.json',json_encode($array));
        header('location:/admin/list/noticias');
    }
}
