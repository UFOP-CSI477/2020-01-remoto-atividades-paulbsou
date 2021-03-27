    @extends ('principal')

    @section('conteudo')
    <div class="jumbotron text-center" style="padding: 30px;">
    <h1>Controle de Produtos</h1>
  </div>

    <table class="table table-bordered table-hover table-light">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Unid. de Medida</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produtos as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
                <td>{{$p->um}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection
