@extends('principal')

@section('conteudo')


<!-- <form action="{{route('produtos.store')}}" method="post">

    @csrf

    <div class="container p-3  text-dark">


            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" required>
            </div>


            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao">
            </div>

            <div class="form-group">
                <label for="condicao">Condição</label>
                <input type="text" class="form-control" name="condicao" id="condicao">
            </div>

            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="text" class="form-control" name="valor" id="valor">
            </div>


            <div class="text-right">
                <input type="submit" value="Cadastrar" class="btn btn-secondary">
                <input type="reset" value="Limpar" class="btn btn-secondary">
            </div>

        </div>
    </div>
    </form> -->

    <!-- <div class="text-center">
    <a class="btn btn-secondary btn-sm" href="{{ route('cliente.inicio') }}">Voltar</a> -->
    <!-- <a class="btn btn-secondary btn-sm" href="{{ route('produtos.show') }}"> Exibir produtos cadastrados</a>
    <a class="btn btn-secondary btn-sm" href="{{route('produtos.edit')}}">Editar</a>
    <form name="frmDelete" action="{{route('produtos.destroy')}}" method="post" onsubmit="return confirm('Confirma a exclusão do produto?');">

                @csrf
                @method('DELETE')

                <input type="submit" class="btn btn-secondary btn-sm" value="Excluir">
                </form>
    </div> -->


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
