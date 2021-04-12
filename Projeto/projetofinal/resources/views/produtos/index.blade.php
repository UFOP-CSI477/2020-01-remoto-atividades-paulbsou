@extends('principal')

@section('conteudo')


    <div class="text-center"><br>
        <a class="btn btn-secondary btn-sm" href="{{ route('cliente.inicio') }}">Voltar</a>
        <a class="btn btn-secondary btn-sm" style="text-center" href ="{{route('produtos.create')}}">Cadastrar</a>
    </div>

<div class="container p-3  text-light">
<table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Condição</th>
                <th>Valor</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produto as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
                <td>{{$p->descricao}}</td>
                <td>{{$p->condicao}}</td>
                <td>{{$p->valor}}</td>
                <td><a class="btn btn-secondary btn-sm" href="{{route('produtos.edit', $p->id)}}">Editar</a></td>
               <td> <form name="frmDelete" action="{{route('produtos.destroy', $p->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão do produto?');">

                @csrf
                @method('DELETE')

                <input type="submit" class="btn btn-secondary btn-sm" value="Excluir">
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endsection('conteudo')
