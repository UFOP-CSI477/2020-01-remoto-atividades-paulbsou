<div class="jumbotron text-center" style="padding: 30px;">
        <h1>Estados</h1>
    </div>


@extends('principal')

@section('conteudo')

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sigla</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estados as $e)
            <tr>
                <td>{{$e->id}}</td>
                <td>{{$e->nome}}</td>
                <td>{{$e->sigla}}</td>
                <td><a href="{{route('estados.show', $e->id)}}">Exibir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
    <a class="btn btn-dark btn-lg" style="padding:15px; text-center" href ="{{route('estados.create')}}">Cadastrar</a>
    </div>

@endsection
