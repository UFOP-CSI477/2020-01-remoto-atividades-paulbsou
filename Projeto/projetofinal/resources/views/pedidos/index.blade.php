@extends('principal')

@section('conteudo')

<div class="caption">
    <div class="grid-container">
        <div class="finalizacompra" style="width: 700px;">

            <form action="{{route('pedidos.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome" id="labelNome"><b>Nome</b> </label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
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
                    <label for="telefone" id="labelTelefone"> <b>Contato:</b> </label>
                    <input type="text" name="telefone" id="telefone" class="form-control" required>
                </div>

                <div class="form-group">
                <label for="produto_id">Produto</label>
                    <select name="produto_id" id="produto_id" class="form-control">
                        @foreach($produto as $p)
                        <option value="{{$p->id}}">{{$p->nome}}</option>
                        @endforeach
                    </select>

        </div>

                <div class="text-center">
                    <input type="submit" value="Enviar" class="btn btn-lg btn-dark ">
                    <input type="reset" value="Limpar" class="btn btn-lg btn-dark ">
                </div>
                </form>
        </div>
    </div>


@endsection
