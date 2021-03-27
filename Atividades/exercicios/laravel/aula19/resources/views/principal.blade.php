<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Controle de Produtos</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-inverse">

            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{route('produtos.index')}}" >Produtos</a></li>
            </ul>
        </nav>

        <!--Conteúdo da página//-->
        @yield('conteudo')
    </div>
</body>
</html>
