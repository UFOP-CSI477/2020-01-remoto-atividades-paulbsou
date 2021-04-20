@extends ('principal')
@section('conteudo')

    <form action="{{route('equipamentos.store')}}" method="post">

    @csrf
    <div class="container p-3  text-dark">
        <div class="form-group">
            <label for="nome">Nome do Equipamento</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="text-right">
            <input type="submit" value="Cadastrar" class="btn btn-secondary">
            <input type="reset" value="Limpar" class="btn btn-danger">
            <a class="btn btn-secondary btn-md" href="{{ route('Administrativo') }}">Voltar</a>
        </div>
    </div>
    </form>
@endsection('conteudo')
