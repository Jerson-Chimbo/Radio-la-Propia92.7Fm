<?php 
namespace aplication;

use controllers\Admin;
use controllers\Home;
use controllers\Login;
use controllers\Servicios;
use frame\Autentification;
use frame\Routes;
use models\Login as ModelsLogin;

class RoutesAplication implements  Routes {

    
    private $autentificaction;
    private $loginModesl;

    public function __construct()
    {   $this->loginModesl = new ModelsLogin;
        $this->autentificaction= new Autentification($this->loginModesl,'cedula','clave');

    }

    function getRoutesAplication(): array
    {
        $homeController = new Home;
        $adminController = new Admin($this->loginModesl);
        $loginController = new Login($this->loginModesl,$this->autentificaction);
        $serviciosController = new Servicios;

       return [
           '' => [
               'GET' => [
                   'controller' => $homeController,
                   'action' => 'home'
               ]
               ],
            'admin' => [
                'GET' => [
                    'controller' => $adminController,
                    'action' => 'login'
                ],
                'POST' => [
                    'controller' => $loginController,
                    'action' => 'loadLogin'
                ],
                ],
            'admin/add/noticias' => [
                'GET' => [
                    'controller' => $adminController,
                    'action' => 'addNoticias'
                ],
                'POST' => [
                    'controller' => $adminController,
                    'action' => 'saveNoticias'
                ],
                //'login' => true
            ],
            'admin/list/noticias' => [
                'GET' => [
                    'controller' => $adminController,
                    'action' => 'listNoticias'
                ],
                'POST' => [
                    'controller' => $adminController,
                    'action' => 'deleteNoticias'
                ],
            ],
            'admin/edit/noticias'=> [
                'GET' => [
                    'controller' => $adminController,
                    'action' => 'editNoticias'
                ],
                'POST' => [
                    'controller' => $adminController,
                    'action' => 'saveEditNoticias'
                ],
            ],
            'admin/add/servicios' => [
                'GET' => [
                    'controller' => $adminController,
                    'action' => 'addServicios'
                ],
                'POST' => [
                    'controller' => $adminController,
                    'action' => 'saveServicios'
                ],
            ],
            'servicios' => [
                'GET' => [
                    'controller' => $serviciosController,
                    'action' => 'listServicios'
                ],
            ],
            'quienes-somos' => [
                'GET' => [
                    'controller' => $homeController,
                    'action' => 'quienesSomos'
                ],
            ],
            'programacion' => [
                'GET' => [
                    'controller' => $homeController,
                    'action' => 'programacion'
                ],
            ],
            'contactos' => [
                'GET' => [
                    'controller' => $homeController,
                    'action' => 'contactos'
                ],
            ],
            'salir' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'logOut'
                ],
            ],
            
       ];
    }


    public function getAutentification(): Autentification
    {
       
        return $this->autentificaction;
    }

    
}