<?php


class connection {

     private static $connection = null;
     private $maConnection=null;

     private function __construct() {
        $maConnection = new PDO('mysql:host=devbdd.iutmetz.univ-lorraine.fr;dbname=cazzoli2u_LP_PHP', 'cazzoli2u_appli', 'Ch0up3t3');
     }

     public static function getInstance() {

       if(is_null(self::$connection)) {
         self::$connection = new connection();
       }

       return self::$connection;
     }
  }