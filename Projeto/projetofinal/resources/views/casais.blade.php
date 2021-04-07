<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="stylesheet" href="{{asset('css/portfolio-interno.css')}}">
</head>
</html>


@extends ('principal')

@section('conteudo')


    <div class="caption" style="padding:15px;">
        <a class="btn btn-dark btn-lg" href="{{route('portfolio.inicio')}}">Voltar</a>
    </div>

  <div>
  <section id="slidescasais">
      <ul class="slide">
        <li>
          <input type="radio" id="casais1" name="casais" checked>
          <label for="casais1"></label>
          <img src="{{asset('imagens/RetratosCasais/GiseldaDaniel1.jpg')}}" />
        </li>

        <li>
          <input type="radio" id="casais2" name="casais" checked>
          <label for="casais2"></label>
          <img src="{{asset('imagens/RetratosCasais/GiseldaDaniel4.jpg')}}" />
        </li>
        <li>
          <input type="radio" id="casais3" name="casais" checked>
          <label for="casais3"></label>
          <img src="{{asset('imagens/RetratosCasais/AdrianoLuiz1.jpg')}}" />
        </li>
        <li>
          <input type="radio" id="casais4" name="casais" checked>
          <label for="casais4"></label>
          <img src="{{asset('imagens/RetratosCasais/AdrianoLuiz2.jpg')}}" />
        </li>
        <li>
          <input type="radio" id="casais5" name="casais" checked>
          <label for="casais5"></label>
          <img src="{{asset('imagens/RetratosCasais/RaissaHonorio1.jpg')}}" />
        </li>
        <li>
          <input type="radio" id="casais6" name="casais" checked>
          <label for="casais6"></label>
          <img src="{{asset('imagens/RetratosCasais/RaissaHonorio2.jpg')}}" />
        </li>
      </ul>
      </section>
  </div>


@endsection
