<?php 
namespace controllers;

use models\Contactos;

class Home{
private $contactosTable;
   public function __construct (Contactos $contactosTable) {
       $this->contactosTable = $contactosTable;

   }

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
    public function contactos(){
        return[
            'title' => 'Contactos',
            'template' => 'client/contactos.html.php',
   
        ]; 
    }

    public function saveContactos(){
        $dataContactos=array(
            'nombre'=> $_POST['nombre'],
            'apellido'=> $_POST['apellido'],
            'email'=> $_POST['email'],
            'telefono'=> $_POST['telefono'],
            'direccion' => $_POST['direccion'],
            'descripcion' => $_POST['descripcion']
        );
    
        $this->contactosTable->insert($dataContactos);
        return[
            'title' => 'Contactos',
            'template' => 'client/contactos.html.php',
            'variables' =>[
                'correcto' => "Se ingreso correctamente esos datos"
            ]
   
        ]; 
    }

    






























    public function listContactos(){
        $dataContactos= $this->contactosTable->select();
        return [
            'title' => 'Lista de Contactos',
            'template' => 'admin/list/contactos.html.php',
            'administrador'=>true,
            'variables' => [
                'contactos' => $dataContactos
            ]
        ];
    }
}