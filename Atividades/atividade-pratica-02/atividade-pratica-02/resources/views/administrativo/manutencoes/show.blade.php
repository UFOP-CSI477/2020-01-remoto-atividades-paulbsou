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
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $r)
            <tr>
                <td>{{$r->dataLimite}}</td>
                <td>{{ $r->equipamento->nome}}</td>
                <td>{{ $r->user->name}}</td>
                <td>
                <?php
                    if ($r->tipo == '1') {
                        $tipo = "1 - Preventiva";
                    } else if ($r->tipo == '2') {
                        $tipo = "2 - Corretiva";
                    } else if ($r->tipo == '3') {
                        $tipo = "3 - Urgente";
                    } else {
                        $tipo = "Favor verificar o tipo de manutenção!";
                    }
                ?>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
        <a class="btn btn-dark btn-sm" style="text-center" href ="{{route('Administrativo')}}">Voltar</a>
    </div>
</div>

@endsection
