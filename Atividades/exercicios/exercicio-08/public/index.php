<?php

require '../vendor/autoload.php';

use App\Models\Cidade;
use App\Models\Estado;
use App\Models\Produto;
use App\Database\Connection;
use App\Database\AdapterSQLite;

$connection = new Connection(new AdapterSQLite());

$connection->getAdapter()->open();
// $connection->getAdapter()->close();
$cidades = $connection->getAdapter()->getCidades();
$estados = $connection->getAdapter()->getEstados();
$produtos = $connection->getAdapter()->getProdutos();

require '../View.php';
