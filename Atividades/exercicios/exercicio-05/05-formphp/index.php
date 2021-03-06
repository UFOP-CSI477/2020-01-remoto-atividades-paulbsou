<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro de Usuário</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <script src="./04-validacao-form.js"></script>
</head>

<body>
  <div class="jumbotron text-center" style="padding: 20px;">
    <h1>Cadastro de Pessoas:</h1>
  </div>

  <div class="container p-2 border-light" style="padding: 15px;">

  <form action="validar.php" method="POST">

    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" placeholder="Nome completo" class="form-control" value="" required>
    </div>

    <div class="form-group">
      <label for="endereco">Endereço:</label>
      <input type="text" name="endereco" id="endereco" placeholder="Endereço completo" class="form-control">
    </div>

    <p><em>Dados pessoais:</em></p>

    <div class="form-group">
      <label for="rg">RG:</label>
      <input type="text" name="rg" id="rg" placeholder="  -  .   .   " maxlength="10" class="form-control">
    </div>

    <div class="form-group">
      <label for="cpf">CPF:</label>
      <input type="text" name="cpf" id="cpf" placeholder="   .   .   -  " maxlength="11" class="form-control">
    </div>


    <div class="form-group">
      <label for="nascimento">Data de nascimento: </label>
      <input type="date" name="nascimento" id="nascimento" class="form-control">
    </div>

    <div class="form-group">
      <label for="nacionalidade">Nacionalidade:</label>
      <input type="text" name="nacionalidade" id="nacionalidade" placeholder="País de origem" class="form-control">
    </div>

    <label for="estadocivil">Estado Civil:</label>

    <div class="form-group">
    <div>
      <label for=" solteiro">Solteiro</label>
      <input type="radio" name="estadocivil" id="solteiro" value="solteiro">
    </div>

    <div>
      <label for=" casado">Casado</label>
      <input type="radio" name="estadocivil" id="casado" value="casado">
    </div>

    <div>
      <label for=" divorciado">Divorciado</label>
      <input type="radio" name="estadocivil" id="divorciado" value="divorciado">
    </div>

    <div>
      <label for="viuvo">Viúvo</label>
      <input type="radio" name="estadocivil" id="viuvo" value="viuvo">
    </div>

    <div>
      <label for="semresposta">Prefiro não informar.</label>
      <input type="radio" name="estadocivil" id="semresposta" value="semresposta">
    </div>
    </div>

    <p><em>Dados para contato:</em></p>
    <div class="form-group">
      <label for="telefone">Telefone</label>
      <input type="tel" name="telefone" id="telefone" placeholder="(  )" maxlength="11" class="form-control">
    </div>

    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email" placeholder="E-mail:" class="form-control" required>
    </div>

    <div>
      <input type="submit" class="btn btn-secondary btn-lg" value="Cadastrar" name="btnCadastrar">

      <input type="reset" class="btn btn-danger btn-lg" value="Limpar" name="btnLimpar">
    </div>
  </div>
  </div>
  </form>
</body>

</html>