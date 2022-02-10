<?php 
namespace aplication;

use controllers\Admin;
use controllers\Home;
use controllers\Login;
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
            'salir' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'logOut'
                ],
            ]
       ];
    }

    public function getAutentification(): Autentification
    {
       
        return $this->autentificaction;
    }

    
}