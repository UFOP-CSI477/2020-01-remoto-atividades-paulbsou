@extends('principal')

@section('conteudo')


<table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Whatsapp</th>
                <th>Mensagem</th>
            </tr>
        </thead>
        <tbody>

            <tr>
            @foreach($cliente as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->nome}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->whatsapp}}</td>
                <td>{{$c->mensagem}}</td>
                <td><a href="{{route('cliente.show', $c->id)}}">Exibir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>


    @endsection
