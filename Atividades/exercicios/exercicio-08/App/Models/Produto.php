<?php

  namespace App\Models;

    class Estado implements ModelInterface {
      private $id, $nome, $um;


      public function __construct($id, $nome, $um){
        $this->id = $id;
        $this->nome = $nome;
        $this->um = $um;
      }

      public function __destruct(){

      }
  
      public function getAll(){
  
      }
  
      public function get($id){
          
      }

    }