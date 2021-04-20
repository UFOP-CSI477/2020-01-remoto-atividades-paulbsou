@extends('principal')
@section('conteudo')

<div class="container" style="padding:30px">
    <h4 class="text-center">Área Administrativa</h4>
    <p class="text-center">Nesta área é possível implementar todas as operações para os equipamentos, para as manututenções. <br>
    Visualizar relatórios de usuários e de manutenções.</p>
    <hr>


    <div class="row">
        <div class="col-lg" style="text-center">
            <div class="text-center">
                <a href="{{route('equipamentos.index')}}"><img src="{{asset('imagens/Equipamentos.png')}}" alt="Equipamentos" width="40%"></a>
            </div>
        </div>

        <div class="col-lg" style="text-center">
            <div class="text-center">
                <a href="{{route('registros.create')}}"><img src="{{asset('imagens/Manutencoes.png')}}" alt="Manutencoes"  width="40%"></a>
            </div>
        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-lg" style="text-center">
            <div class="text-center">
                <a href="{{route('usuarios.index')}}"><img src="{{asset('imagens/RelatorioUsers.png')}}" alt="Relatório de Usuários" width="40%"></a>
            </div>
        </div>

        <div class="col-lg" style="text-center">
            <div class="text-center">
                <a href="{{route('registros.index')}}"><img src="{{asset('imagens/RelatorioManut.png')}}" alt="Relatório de Manutenção"  width="40%"></a>
            </div>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <a class="btn btn-dark btn-sm" style="text-center" href ="{{route('inicio')}}">Voltar</a>
    </div>

@endsection('conteudo')
