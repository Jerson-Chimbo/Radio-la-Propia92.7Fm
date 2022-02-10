<?php
namespace models\conection;
include __DIR__ . '/../../config.php';
class Conection{


    public static function getConection(){
        $dbConect = new \PDO('mysql:host=localhost;port=3306;dbname='.DBNAME,USER,PASSWORD);
        $dbConect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $dbConect;
    }
}