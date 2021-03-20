<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cidades, Estados e Produtos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
  
<div class="container" style="padding:10px">
  <table  id="tabela" class="table table-hover table-striped table-bordered table-sm table-light ">

  <h1>Estados</h1>
    <thead>
        <tr class="thead-dark">
            <th>Cód. Identificador</th>
            <th>Nome</th>
            <th>Sigla</th>
        </tr>
    </thead>

  <tbody>
    <?php
      while ($e = $estados->fetch()) {
        echo "<tr>" .
        "<td>" . $e["id"] . "</td> "
        . "<td>" . $e["nome"] . "</td> "
        . "<td>" . $e["sigla"] . "</td> "
        . "</tr>";
      }
      ?>
    </tbody>
</table>



<h1>Produtos</h1>
<table  id="tabela" class="table table-hover table-striped table-bordered table-sm table-light ">
    <thead>
        <tr class="thead-dark">
            <th>Cód. Identificador</th>
            <th>Nome</th>
            <th>Unidade de Medida</th>
        </tr>
    </thead>

  <tbody>
    <?php
      while ($e = $produtos->fetch()) {
        echo "<tr>" .
        "<td>" . $e["id"] . "</td> "
        . "<td>" . $e["nome"] . "</td> "
        . "<td>" . $e["um"] . "</td> "
        . "</tr>";
        }
        ?>
    </tbody>
</table>
  </div>
</body>
</html>