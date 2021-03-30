<div class="jumbotron text-center" style="padding: 30px;">
    <h1>Relatório de Compras</h1>
</div>

@extends('principal')

@section('conteudo')



      <div class="text-center" style="padding:25px;">

        <a href="{{route('compras.index', 'cliente = cliente')}}" type="button" class="btn btn-lg btn-dark ">Compras por Cliente</a>

        <a href="{{route('compras.index', 'data')}}" type="button" class="btn btn-lg btn-dark ">Compras por Data</a>

        <a href="{{route('compras.index', 'produto')}}" type="button" class="btn btn-lg btn-dark ">Compras por Produto</a>
    </div>
</div>

</body>
</html>
@endsection
