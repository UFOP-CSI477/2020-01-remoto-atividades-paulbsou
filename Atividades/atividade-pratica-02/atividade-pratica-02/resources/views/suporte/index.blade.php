@extends('principal')
@section('conteudo')

<div class="container" style="padding:30px">
    <h4 class="text-center">Área Geral - Suporte</h4>
    <p class="text-center">Área para visualização de equipamentos e manutenções cadastradas</p>
    <hr>


    <div class="row">
        <div class="col-lg" style="text-center">
            <div class="text-center">
                <a href="{{route('relatorioEquipamentos.index')}}"><img src="{{asset('imagens/Equipamentos.png')}}" alt="Equipamentos" width="40%"></a>
            </div>
        </div>

        <div class="col-lg" style="text-center">
            <div class="text-center">
                <a href="{{route('relatorioManutencao.index')}}"><img src="{{asset('imagens/Manutencoes.png')}}" alt="Manutencoes"  width="40%"></a>
            </div>
        </div>
    </div>


    <hr>
    <div class="text-center">
        <a class="btn btn-dark btn-sm" style="text-center" href ="{{route('inicio')}}">Voltar</a>
    </div>

@endsection('conteudo')
