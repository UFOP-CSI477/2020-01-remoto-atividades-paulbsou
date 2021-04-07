<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="stylesheet" href="{{asset('css/loja-interno.css')}}">
</head>
</html>

@extends ('principal')

@section('conteudo')

<div class="caption">
    

            <div class="container p-3  text-dark">
            <h1 class>Adicione suas informações</h1>
            <p class="text-center">Adicione suas informações e receba as instruções de pagamento do seu pedido em seu email.</p>
            <form action="{{route('pedido.store')}}" id="formloja" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome" id="labelNome"><b>Nome</b> </label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="cpf" id="labelMensagem"> <b>CPF:</b> </label>
                    <input type="text" name="cpf" id="cpf" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email" id="labelEmail"><b> E-mail:</b> </label><br>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="telefone" id="labelTelefone"> <b>Contato:</b> </label>
                    <input type="text" name="telefone" id="telefone" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="produto_id">Produto</label>
                    <select name="produto_id" id="produto_id" class="form-control">

                    </select>
                </div>

                <div class="text-center">
                    <input type="submit" value="Enviar" class="btn btn-lg btn-dark ">
                    <input type="reset" value="Limpar" class="btn btn-lg btn-dark ">
                </div>
                </form>
            </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

@endsection
