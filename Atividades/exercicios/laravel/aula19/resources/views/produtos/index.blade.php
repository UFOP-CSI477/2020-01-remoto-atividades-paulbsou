    <div class="jumbotron text-center" style="padding: 30px;">
        <h1>Controle de Produtos</h1>
    </div>


    @extends ('principal')

    @section('conteudo')

    <table class="table table-bordered table-hover table-light">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Unid. de Medida</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produtos as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
                <td>{{$p->um}}</td>
                <td><a href="{{route('produtos.show', $p->id)}}">Exibir</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
    <a class="btn btn-dark btn-lg" style="padding:15px; text-center" href ="{{route('produtos.create')}}">Cadastrar</a>
    </div>
    @endsection
