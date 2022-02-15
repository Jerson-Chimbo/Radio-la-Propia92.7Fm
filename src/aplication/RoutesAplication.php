<?php 
namespace aplication;

use controllers\Admin;
use controllers\Home;
use controllers\Login;
use controllers\Servicios;
use frame\Autentification;
use frame\Routes;
use models\Contactos;
use models\Login as ModelsLogin;

class RoutesAplication implements  Routes {

    
    private $autentificaction;
    private $loginModesl;
    private $contactosTable;

    public function __construct()
    {   $this->loginModesl = new ModelsLogin;
        $this->autentificaction= new Autentification($this->loginModesl,'cedula','clave');
        $this->contactosTable = new Contactos();

    }

    function getRoutesAplication(): array
    {
        $homeController = new Home($this->contactosTable);
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
                'login' => true
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
                'login' => true
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
                'login' => true
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
                'login' => true
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
            'rendicion/cuentas' => [
                'GET' => [
                    'controller' => $homeController,
                    'action' => 'rendicioncuentas'
                ],
            ],

            'contactos' => [
                'GET' => [
                    'controller' => $homeController,
                    'action' => 'contactos'
                ],
                'POST' => [
                    'controller' => $homeController,
                    'action'     => 'saveContactos'
                ]
            ],
            'admin/lista/servicios'=>[
                'GET' => [
                    'controller' => $adminController,
                    'action' => 'listServicios'
                ],
                'POST' => [
                    'controller' => $adminController,
                    'action' => 'deleteServicios'
                ],
                'login' => true
            ],
            'admin/edit/servicios'=>[
                'GET' => [
                    'controller' => $adminController,
                    'action' => 'editServicios'
                ],
                'POST' => [
                    'controller' => $adminController,
                    'action' => 'saveEditServicios'
                ],
                'login' => true
            ],

            'admin/add/galeria' => [
                'GET' => [
                    'controller' => $adminController,
                    'action' => 'addGaleria'
                ],
                'POST' => [
                    'controller' => $adminController,
                    'action' => 'saveGaleria'
                ],
                'login' => true
            ],

            


            'salir' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'logOut'
                ],
            ],













            'admin/list-contactos' => [
                'GET' => [
                    'controller' => $homeController,
                    'action' => 'listContactos'
                ],
                'login' => true
            ],

            
       ];
    }


    public function getAutentification(): Autentification
    {
       
        return $this->autentificaction;
    }

    
}