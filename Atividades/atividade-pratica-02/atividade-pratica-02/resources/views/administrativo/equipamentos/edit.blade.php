@extends('principal')
@section('conteudo')

<form action="{{ route('equipamentos.update', $equipamentos->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="container p-3  text-dark">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{ $equipamentos->nome }}">
        </div>

        <div class="text-right">
            <input type="submit" value="Atualizar" class="btn btn-secondary">
            <input type="reset" value="Limpar" class="btn btn-danger">
            <a class="btn btn-secondary btn-md" href="{{ route('equipamentos.create') }}">Voltar</a>
        </div>
    </div>

</form>

@endsection
