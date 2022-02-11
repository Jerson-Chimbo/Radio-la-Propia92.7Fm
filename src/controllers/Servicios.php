<?php 
namespace controllers;


class Servicios{


    public function listServicios(){
        $noticias = file_get_contents('./models/servicios/servicios.json');
        $array = json_decode($noticias,true)['servicios'];

        return[
            'title' => 'Radio La Propia 92.7 FM',
            'template' => 'client/servicios.html.php',
            'variables' =>[
                'servicios' => $array
            ]
            ];


    }
}