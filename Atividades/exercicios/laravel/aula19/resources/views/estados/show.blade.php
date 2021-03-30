<div class="jumbotron text-center" style="padding: 30px;">
        <h1>Informações do Estados</h1>
</div>

@extends ('principal')


@section('conteudo')
<div class="container p-3 badge-secondary text-light">
<p>ID: {{$estado->id}}</p>
<p>Nome: {{$estado->nome}}</p>
<p>sigla: {{$estado->sigla}}</p>
</div>

<div class="text-center" style="padding:20px;">
<a class="btn btn-dark btn-lg" href="{{route('estados.edit', $estado->id)}}">Editar</a>

<a class="btn btn-dark btn-lg" href="{{route('estados.index')}}">Voltar</a>

<form name="frmDelete" action="{{route('estados.destroy', $estado->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão do estado?');">

@csrf
@method('DELETE')

<input type="submit" value="Excluir">
</form>


@endsection
