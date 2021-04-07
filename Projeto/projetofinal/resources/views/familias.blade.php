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
        <section id="slidesfamilias">
        <ul class="slide">

        <li>
            <input type="radio" id="familia2" name="familia" checked>
            <label for="familia2"></label>
            <img src=" {{asset('imagens/RetratosFamilia/familia(2).jpg')}}" />
        </li>

        <li>
            <input type="radio" id="familia3" name="familia" checked>
            <label for="familia3"></label>
            <img src="{{asset('imagens/RetratosFamilia/familia(3).jpg')}}" />
        </li>

        <li>
            <input type="radio" id="familia4" name="familia" checked>
            <label for="familia4"></label>
            <img src="{{asset('imagens/RetratosFamilia/familia(4).jpg')}}" />
        </li>

        <li>
            <input type="radio" id="familia5" name="familia" checked>
            <label for="familia5"></label>
            <img src="{{asset('imagens/RetratosFamilia/familia(5).jpg')}}" />
        </li>

        <li>
            <input type="radio" id="familia6" name="familia" checked>
            <label for="familia6"></label>
            <img src="{{asset('imagens/RetratosFamilia/familia(6).jpg')}}" />
        </li>
        </ul>

        </section>
    </div>
@endsection
