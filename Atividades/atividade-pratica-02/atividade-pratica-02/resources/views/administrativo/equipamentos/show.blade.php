@extends('principal')
@section('conteudo')


<div class="container p-3  text-dark">

    <h4 class="text-center">Lista de Equipamentos Cadastrados</h4>
    <hr>

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Equipamento</th>
                <th>Data de cadastro</th>
                <th>Data de Atualização</th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipamentos as $e)
            <tr>
                <td>{{$e->nome}}</td>
                <td>{{$e->created_at}}</td>
                <td><a class="btn btn-secondary btn-sm" href="{{route('equipamentos.edit', $e->id)}}">Editar</a></td>
               <td> <form name="frmDelete" action="{{route('equipamentos.destroy', $e->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão do equipamento?');">

                @csrf
                @method('DELETE')

                <input type="submit" class="btn btn-secondary btn-sm" value="Excluir">
                </form></td>
            </tr>
            @endforeach

        </tbody>
    </table>


</div>

@endsection
