@extends('principal')

@section('conteudo')
<div class="container" style="padding:30px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Controle de Acesso') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você está logado!') }}
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="text-center">
        <a class="btn btn-dark btn-sm" style="text-center" href ="{{route('Administrativo')}}">Voltar</a>
    </div>
</div>
@endsection
