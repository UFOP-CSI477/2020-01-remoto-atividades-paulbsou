@extends ('principal')

@section('conteudo')

<div class="container p-3  text-light">

<table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Produto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedido as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
                <td>{{$p->email}}</td>
                <td>{{$p->cpf}}</td>
                <td>{{$p->telefone}}</td>
                <td>{{ $p->produto->nome}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection('conteudo')
