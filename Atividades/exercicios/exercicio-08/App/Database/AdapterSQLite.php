<?php

    namespace App\Database;
    use PDO;

    class AdapterSQLite implements AdapterInterface{
      
      private $connection = null;

      public function open() {
        $dbfile = __DIR__ . "/database.sqlite";
        $dbuser = "";
        $dbpassword = "";
        $dbhost = "";
    
        $strConnection = "sqlite:" . $dbfile;

        $this->connection = new PDO($strConnection, $dbuser, $dbpassword);
      }

      public function close(){

      }

      public function getCidades(){        
        return $this->connection->query("SELECT * FROM cidades");
      }

      public function getEstados(){
        return $this->connection->query("SELECT * FROM estados");
      }

      public function getProdutos(){
        return $this->connection->query("SELECT * FROM produtos");
      }
    }