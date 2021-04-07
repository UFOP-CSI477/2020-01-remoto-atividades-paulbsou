<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>JuStella Fotografia</title>
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <a class="navbar-brand logo" href="{{route('cliente.inicio')}}"><img src="{{asset('imagens/LogoJuStella1.png')}}" alt="Logomarca JuStella" width="100">
        </a>

      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{route('cliente.inicio')}}">Início</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('portfolio.inicio')}}">Portfólio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('produtos.show')}}">Loja</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('cliente.inicio')}}#formcliente">Fale Conosco</a></li>


    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Área Restrita') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Faça seu cadastro') }}</a>
            </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <!------------------------------------------------------------------------------>
        @if(Auth::check())
            @if(Auth::user()->id==1)
                <a class="dropdown-item" href="{{ route('produtos.index') }}">Cadastro de Produto</a>
                <a class="dropdown-item" href="{{ route('cliente.show') }}">Formulário de Contato</a>
                <a class="dropdown-item" href="{{ route('pedidos.show') }}">Relatório de Compras</a>
            @endif
        @endif



        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        
                    </form>
                </div>
            </li>
        @endguest

  </nav>

  @if(session('mensagem'))
            <div class="alert allert-success">
                {{session('mensagem')}}
            </div>
        @endif

  @yield('conteudo')

    </div>
</body>
</html>
