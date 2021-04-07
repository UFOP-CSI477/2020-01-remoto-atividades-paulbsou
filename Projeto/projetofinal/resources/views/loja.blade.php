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
        <div class="col" style="padding:30px">

            @foreach($produto as $p)
            <h2>{{$p->nome}}</h2>
            <h2>{{$p->descricao}}</h2>
            <h4>{{$p->valor}}</h4>
            <a class="btn btn-lg btn-dark" href="{{route('produtos.ensaios')}}"><img src="https://raw.githubusercontent.com/twbs/icons/28f3e5fe409f85e78262e7a8432e7caa99520f3a/icons/cart-fill.svg" alt="cartcompras">  Comprar  </a><br><br>
            <hr>
             @endforeach
        </div>
        </div>
      </div>
    </div>

@endsection('conteudo')


