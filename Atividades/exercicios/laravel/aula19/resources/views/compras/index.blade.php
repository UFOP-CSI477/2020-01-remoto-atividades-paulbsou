<div class="jumbotron text-center" style="padding: 30px;">
        <h1>Controle de Compras</h1>
    </div>

@extends ('principal')

@section('conteudo')

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>

        @foreach($produtos as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
                <td>{{$p->um}}</td>
                <td><a href="{{route('produtos.show', $p->id)}}">Visualizar</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

@endsection
