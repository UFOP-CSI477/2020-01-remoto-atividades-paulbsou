<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
  
<div class="container" style="padding:10px">
  <table  id="tabela" class="table table-hover table-striped table-bordered table-sm table-light ">

    <thead>
        <tr class="thead-dark">
            <th>Cód. Identificador</th>
            <th>Nome</th>
            <th>Unid. de Medida</th>
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
  </div>
</table>
    
  <div class="btn btn-secondary btn-lg" >
  <a href="/dados/produtosViewInsert.php">Inserir</a>
  </div>
</body>
</html>