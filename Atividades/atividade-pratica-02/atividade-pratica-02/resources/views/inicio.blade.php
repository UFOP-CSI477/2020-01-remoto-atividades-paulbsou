@extends('principal')
@section('conteudo')

    <div class="container" style="padding:30px">
        <div class="row">
            <div class="col-lg" style="text-center">
                <div class="text-center">
                    <a href="{{route('index')}}"><img src="{{asset('imagens/Suporte.png')}}" alt="Suporte" width="40%"></a>
                </div>
            </div>

            <div class="col-lg" style="text-center">
                <div class="text-center">
                    <a href="{{route('Administrativo')}}"><img src="{{asset('imagens/Administrativo.png')}}" alt="Administrativo"  width="40%"></a>

                </div>
            </div>
        </div>
    </div>

@endsection

