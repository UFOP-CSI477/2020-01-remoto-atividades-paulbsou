@extends('principal')
@section('conteudo')


<div class="container p-3  text-dark">
    <h4 class="text-center text-dark">Manutenções Cadastradas</h4>
    <hr>
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Data limite</th>
                <th>Equipamento</th>
                <th>Usuário Responsável</th>
                <th>Tipo de Manutenção</th>
                <th>Descrição</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
        @foreach($registros as $r)
            <tr>
                <td>{{$r->datalimite}}</td>
                <td>{{$r->equipamento_id}}</td>
                <td>{{ $r->user->name}}</td>
                <td>{{$r->tipo}}</td>
                <td>{{$r->descricao}}</td>
                <td><a class="btn btn-secondary btn-sm" href="{{route('registros.edit', $r->id)}}">Editar</a></td>
                    <td> <form name="frmDelete" action="{{route('registros.destroy', $r->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão da manutenção?');">

                        @csrf
                        @method('DELETE')

                        <input type="submit" class="btn btn-secondary btn-sm" value="Excluir">
                        </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p>Obs: Tipos de Manutenção: 1 - Preventiva ; 2 - Corretiva; 3 - Urgente </p>
    <div class="text-center">
        <a class="btn btn-dark btn-sm" style="text-center" href ="{{route('inicio')}}">Voltar</a>
    </div>
</div>

@endsection
