<?php 
namespace controllers;

class Home{


    public function home(){
        $datos_json = file_get_contents('./models/noticias/noticias.json');
        $array_datos = json_decode($datos_json,true)["noticias"];

        return[
            'title' => 'Radio La Propia 92.7 FM',
            'template' => 'client/home.html.php',
            'variables' =>[
                'noticias' => $array_datos
            ]
        ];
    }
    public function quienesSomos(){
        $datos = file_get_contents('./models/servicios/direccion_imgs.json');
        $array = json_decode($datos,true)['imgs'];
        return[
            'title' => 'Quienes Somos',
            'template' => 'client/quienesSomos.html.php',
            'variables' => [
                'fotos' => $array
            ]
            
        ]; 
    }
    public function programacion(){
        return[
            'title' => 'Programacion',
            'template' => 'client/programacion.html.php',
   
        ]; 
    }
    public function contactos(){
        return[
            'title' => 'Contactos',
            'template' => 'client/contactos.html.php',
   
        ]; 
    }

    






























    public function listContactos(){

        return [
            'title' => 'Lista de Contactos',
            'template' => 'admin/list/contactos.html.php',
            'variables' => [
                'contactos' => ''
            ]
        ];
    }
}