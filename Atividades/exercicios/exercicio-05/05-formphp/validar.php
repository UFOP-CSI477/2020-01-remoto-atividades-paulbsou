<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário POST - PHP </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

<div class="jumbotron text-center" style="padding: 20px;">
    <h1>Resumo dos dados cadastrais:</h1>
  </div>

<?php
      $nome = $_POST['nome'];
      $endereco = $_POST['endereco'];
      $rg = $_POST['rg'];
      $cpf = $_POST['cpf'];
      $nascimento = $_POST['nascimento'];
      $nacionalidade = $_POST['nacionalidade'];
      $estadocivil = $_POST['estadocivil'];
      $telefone = $_POST['telefone'];
      $email = $_POST['email'];

      if ($estadocivil === 'solteiro') {
        $estadocivil = "Solteiro";
      } else if ($estadocivil === 'casado') {
        $estadocivil = "Casado";
      }else if ($estadocivil === 'divorciado') {
        $estadocivil = "Divorciado";
      }else if ($estadocivil === 'viuvo') {
        $estadocivil = "Viúvo";
      }else if ($estadocivil === 'semresposta'){
        $estadocivil = "Prefiro não informar";
      }
    ?>

    <div class="container p-3 text-dark" style="font-size:20px ">

        <?php
        echo "Nome: $nome <br/>
        Endereço: $endereco <br/>
        RG: $rg <br/>
        CPF: $cpf <br/>
        Data de Nascimento: $nascimento <br/>
        Nacionalidade: $nacionalidade <br/>
        Estado Civil: $estadocivil <br/>
        Telefone: $telefone <br/>
        E-mail: $email <br/>";
  ?>

    <div class="text-center">
        <a href="index.php" class="btn btn-dark btn-lg text-center">Voltar</a>
    </div>


</body>
</html>


