@extends('principal')

@section('conteudo')


    <form action="{{ route('pedidos.store') }}" method="post">

        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="form-group">
            <label for="cpf" id="labelMensagem"> <b>CPF:</b> </label>
            <input type="text" name="cpf" id="cpf" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email" id="labelEmail"><b> E-mail:</b> </label><br>
            <input type="text" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="contato" id="labelContato"> <b>Contato:</b> </label>
            <input type="text" name="contato" id="contato" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="produto_id">Produto</label>
            <select name="produto_id" id="produto_id" class="form-control">
            @foreach($produto as $p)
                <option value="{{$p->id}}">{{$p->nome}}</option>
            @endforeach
            </select>
        </div>

        <div class="text-right">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>



    </form>

    <a href="{{ route('pedidos.index') }}">Voltar</a>

@endsection('conteudo')
