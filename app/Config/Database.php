<?php namespace App\Config;
use PDO;
    class Database {

        protected static $host = 'localhost';
        protected static $dbName = 'sado';
        protected static $user = 'root';
        protected static $password = '';

        protected static function connect() {
      
          $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName, self::$user, self::$password);;
          $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $pdo;
        }
      
        public function query($query, $params = array()) {
          $stmt = self::connect()->prepare($query);
          $stmt->execute($params);
          $data = $stmt->fetchAll();
          return $data;
        }
      
      }
?>