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
  <?php

    require 'connection.php';

    $nome = $_POST['nome'];
    $um = $_POST['um'];

    if(empty($nome) || empty($um)){
      echo '<div><a href="produtosViewInsert.php">Voltar</a></div>';
      die('Por favor, informe os dados corretamente!');
    }
    try{

      $connection->beginTransaction();
      
      $stmt = $connection->prepare("INSERT INTO produtos (nome, um) VALUES (:nome,:um)");

      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':um',$um);

      $stmt->execute();

      $connection->commit();

      header('Location: index.php');
      exit();
    }catch(Exception $e){
      $connection->rollBack();
      die("Erro ao inserir dados: ". $e->getMessage());
    }
?>

</body>
</html>

