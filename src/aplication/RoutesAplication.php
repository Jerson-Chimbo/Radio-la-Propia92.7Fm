<?php 
namespace aplication;

use controllers\Home;
use frame\Autentification;
use frame\Routes;

class RoutesAplication implements  Routes {

    
    private $autentificaction;
    

    public function __construct()
    {
        
    }

    function getRoutesAplication(): array
    {
        $homeController = new Home;
       return [
           '' => [
               'GET' => [
                   'controller' => $homeController,
                   'action' => 'home'
               ]
           ]
       ];
    }

    public function getAutentification(): Autentification
    {
       
        return $this->autentificaction;
    }

    
}