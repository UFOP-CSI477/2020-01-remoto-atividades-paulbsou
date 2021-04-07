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
        <section id="slideretratos">
            <ul class="slide">
            <li>
                <input type="radio" id="retrato1" name="retrato" checked>
                <label for="retrato1"></label>
                <img src="{{asset('imagens/Retratos/Retrato(6).jpg')}}" />
            </li>

            <li>
                <input type="radio" id="retrato2" name="retrato" checked>
                <label for="retrato2"></label>
                <img src="{{asset('imagens/Retratos/Retrato(1).jpg')}}" />
            </li>

            <li>
                <input type="radio" id="retrato3" name="retrato" checked>
                <label for="retrato3"></label>
                <img src="{{asset('imagens/Retratos/Retrato(3).jpg')}}" />
            </li>

            <li>
                <input type="radio" id="retrato4" name="retrato" checked>
                <label for="retrato4"></label>
                <img src="{{asset('imagens/Retratos/Retrato(4).jpg')}}" />
            </li>

            <li>
                <input type="radio" id="retrato5" name="retrato" checked>
                <label for="retrato5"></label>
                <img src="{{asset('imagens/Retratos/Retrato(5).jpg')}}" />
            </li>

            <li>
                <input type="radio" id="retrato6" name="retrato" checked>
                <label for="retrato6"></label>
                <img src="{{asset('imagens/Retratos/Retrato(2).jpg')}}" />
            </li>
            </ul>
        </section>
    </div>

@endsection
