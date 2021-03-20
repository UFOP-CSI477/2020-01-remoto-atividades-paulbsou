<?php

    namespace App\Database;

    interface AdapterInterface{

      public function open();
      public function close();
      public function getCidades();
      public function getEstados();
      public function getProdutos();
    }

