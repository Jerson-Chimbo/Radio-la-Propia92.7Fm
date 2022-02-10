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
        return[
            'title' => 'Quienes Somos',
            'template' => 'client/quienesSomos.html.php',
            
        ]; 
    }
    public function programacion(){
        return[
            'title' => 'Programacion',
            'template' => 'client/programacion.html.php',
   
        ]; 
    }

    
}