<?php

namespace App\DAO;

use PDO;

abstract class DAO extends PDO
{
   protected static $conexao = null;

   public function __construct()
   {
      $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['database'];

      if(self::$conexao == null) {
         self::$conexao = new PDO(
            $dsn, 
            $_ENV['db']['user'],
            $_ENV['db']['pswd'],
            [
               PDO::ATTR_PERSISTENT => true, //Conexão persistente com o BD
               PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
               PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4' //Permite emojis no BD
            ]
         );
      }
      
   }

}