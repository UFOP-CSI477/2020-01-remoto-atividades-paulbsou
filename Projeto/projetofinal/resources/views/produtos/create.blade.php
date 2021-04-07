@extends ('principal')

@section('conteudo')

<form action="{{route('produtos.store')}}" method="post">

@csrf

<div class="container p-3  text-dark">


        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required>
        </div>


        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao">
        </div>

        <div class="form-group">
            <label for="condicao">Condição</label>
            <input type="text" class="form-control" name="condicao" id="condicao">
        </div>

        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" name="valor" id="valor">
        </div>


        <div class="text-right">
            <input type="submit" value="Cadastrar" class="btn btn-secondary">
            <input type="reset" value="Limpar" class="btn btn-secondary">
            <a class="btn btn-secondary" href="{{ route('produtos.index') }}">Voltar</a>
        </div>

    </div>
</div>
</form>



    @endsection('conteudo')
