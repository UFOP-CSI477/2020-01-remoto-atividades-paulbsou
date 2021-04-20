@extends('principal')
@section('conteudo')


<div class="container p-3  text-dark">
    <h4 class="text-center">Usuários Cadastrados</h4>
    <hr>

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nº de Identificação</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
            <tr>
                <td>{{ $u->id }} </td>
                <td>{{ $u->name }} </td>
                <td>{{ $u->email }} </td>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
        <a class="btn btn-secondary btn-sm" style="text-center" href ="{{route('Administrativo')}}">Voltar</a>
    </div>
</div>

@endsection
