@extends ('principal')

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique o seu e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviado para o seu e-mail.') }}
                        </div>
                    @endif

                    {{ __('Verifique se recebeu um link de verificação em seu e-mail.') }}
                    {{ __('Se não tiver recebido o e-mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui para solicitar novamente.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
