@extends('principal')

@section('conteudo')

<form action="{{ route('produtos.update', $produto->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="container p-3  text-dark">
    <div class="form-group">

        <label for="nome">Nome do produto:</label>
        <input name="nome" id="nome" value="{{ $produto->nome }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input name="descricao" id="descricao" value="{{ $produto->descricao }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="valor">Valor (R$):</label>
        <input type="number" step="any" min="0" name="valor" id="valor" value="{{ $produto->valor }}"class="form-control" required>
    </div>

    <div class="form-group">
        <label for="condicao">Condição</label>
        <input name="condicao" id="condicao" value="{{ $produto->condicao }}"class="form-control" required>

        </div>

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-secondary">
        <input type="reset" value="Limpar" class="btn btn-secondary">
    </div>

</form>

@endsection
