@extends ('principal')
@section('conteudo')

    <form action="{{route('registros.store')}}" method="post">

    @csrf
    <div class="container p-3  text-dark">
        <div class="form-group">
            <label for="equipamento_id">Equipamento</label>
                <select class="form-control" id="equipamento_id" name="equipamento_id" required >
                <option value="">Selecione</option>
                @foreach($equipamentos as $e)
                <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="user_id">Usuário Responsável</label>
                <select class="form-control" id="user_id" name="user_id" required >
                <option value="">Selecione</option>
                @foreach($users as $u)
                <option value="{{$u->id}}">{{$u->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
                <input name="descricao" id="descricao" placeholder="Informe o problema do equipamento, uma descrição do problema " class="form-control">
        </div>

        <div class="form-group">
            <label for="datalimite">Data Limite</label>
            <input type="date" name="datalimite" id="datalimite" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="tipo">Tipos de manutenção</label>
            <select  class="form-control" id="tipo" name="tipo">
                <option value="">Selecione</option>
                <option value="1"> 1 - Preventiva</option>
                <option value="2"> 2 - Corretiva</option>
                <option value="3"> 3 - Urgente</option>
            </select>
        </div>



        <div class="text-right">
            <a class="btn btn-secondary btn-md" style="text-center" href ="{{route('registros.index')}}">Visualizar as manutenções cadastradas</a>
            <input type="submit" value="Cadastrar" class="btn btn-secondary">
            <input type="reset" value="Limpar" class="btn btn-danger">
            <a class="btn btn-secondary btn-md" href="{{ route('Administrativo') }}">Voltar</a>
        </div>
    </div>
    </form>
@endsection('conteudo')
