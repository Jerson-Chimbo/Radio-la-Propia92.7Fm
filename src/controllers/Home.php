<?php 
namespace controllers;

class Home{


    public function home(){
        return[
            'title' => 'Radio La Propia 92.7 FM',
            'template' => 'client/home.html.php'
        ];
    }
}