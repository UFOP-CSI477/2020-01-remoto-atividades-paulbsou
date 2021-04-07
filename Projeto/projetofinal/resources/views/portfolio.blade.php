@extends ('principal')

@section('conteudo')

<div class="caption">
  <section id="imginicio">
    <a href="{{route('portfolio.retratos')}}"><img src="{{asset('imagens/Retrato.jpg')}}" alt="Retrato" style="width:20%"> </a>
    <a href="{{route('portfolio.familias')}}"><img src="{{asset('imagens/Familia.jpg')}}" alt="Familia" style="width:20%"> </a>
    <a href="{{route('portfolio.casais')}}"><img src="{{asset('imagens/Casais.jpg')}}" alt="Casais" style="width:20%"> </a>
  </section>
  </div>

  <div class="caption">
    <a class="btn btn-dark btn-lg" href="{{route('cliente.inicio')}}">Voltar</a>
  </div>

@endsection
