<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserir produtos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="./validacaoform.js"></script>
</head>
<body>
  <div class="jumbotron text-center" style="padding: 20px;">
      <h1>Cadastro de Produtos:</h1>
  </div>
  <div class="container p-2 border-light" style="padding: 15px;">
  <form action="produtosControllerInsert.php" method="post">

  <div class=form-group>
        <div class="row">
        <div class="col-5">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" placeholder="Informe nome/descrição do produto." class="form-control">
    </div>

    <div class="col-5">
      <label for="um">Unidade de medida</label>
      <input type="text" name="um" id="um" placeholder="Informe unidade de medida. Ex: Peça-Pç, Quilo-Kg, Litro-Lt" class="form-control">
    </div>
  
    <div class="col-2">
    <input type="submit" class="btn btn-secondary btn-lg" value="Inserir" onclick="cadastrar()">
    </div>
  </div>
  </form>

</body>
</html>

