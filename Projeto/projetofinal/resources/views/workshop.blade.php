<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="stylesheet" href="{{asset('css/loja-interno.css')}}">
</head>
</html>

@extends ('principal')

@section('conteudo')
<div class="caption">
    <div class="container">
      <div class="row">
        <div class="col" style="padding:50px">
            <img src="{{asset('imagens/Workshops.jpg')}}" width="110%" alt="Workshops">
        </div>


        <div class="col" style="padding:40px">
            <h2 class="">WORKSHOPS</h2>
            <h4 class="">R$ 650,00</h4>


            <button type="button" class="btn btn-lg btn-dark" data-toggle="modal" data-target="#myModal"><img src="https://raw.githubusercontent.com/twbs/icons/28f3e5fe409f85e78262e7a8432e7caa99520f3a/icons/cart-fill.svg" alt="cartcompras"> Comprar</button>


        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">


            <div class="modal-header">
            <h1 class="modal-title">Adicione suas informações</h1>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>


            <div class="modal-body">
            <p class>Adicione suas informações e receba as instruções de pagamento do seu pedido em seu email.</p>

            <form action="{{route('cliente.store')}}" id="formcliente" method="POST">
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
                    <label for="contato" id="labelContato"> <b>Contato:</b> </label>
                    <input type="text" name="contato" id="contato" class="form-control" required>
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

            <!-- <a href="#" class="btn btn-lg btn-dark" style="padding-left: 30px; padding-right: 30px;"><img src="https://raw.githubusercontent.com/twbs/icons/28f3e5fe409f85e78262e7a8432e7caa99520f3a/icons/cart-fill.svg" alt="cartcompras"> Comprar
           </a> -->
           <a class="btn btn-dark btn-lg" href="{{route('loja.inicio')}}"><img src="https://raw.githubusercontent.com/twbs/icons/28f3e5fe409f85e78262e7a8432e7caa99520f3a/icons/arrow-left.svg" alt="voltar"> Voltar</a>



           <br><br>

            <p class=""> Serão 05 encontros para conteúdos Teóricos, Provocações e Desafios Fotográficos a cada semana. <br> Desafios e discussões semanais que vão te provocar sensações e questionamentos sobre tudo que julgo essencial à um grande retratista.<br> Trocas entre profissionais que nos ajudam tanto a observar nossa própria produção quanto a entender como publicá-la da melhor maneira, já que teremos feedbacks instantâneos. <br> Vamos abraçar essa experiência de uma maneira individual mas também coletiva.
            Sem número de likes e sim percepções reais sobre a nossa expressão.<br> Vagas limitadas e custo menor do que um workshop presencial. &#128521
        </div>
      </div>
</div>
@endsection
