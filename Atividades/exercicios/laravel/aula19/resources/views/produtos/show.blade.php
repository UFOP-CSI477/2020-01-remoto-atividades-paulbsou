<div class="jumbotron text-center" style="padding: 30px;">
        <h1>Informações do Produtos</h1>
</div>

@extends ('principal')

@section('conteudo')

<div class="container p-3 badge-secondary text-light">
<p>ID: {{$produto->id}}</p>
<p>Nome: {{$produto->nome}}</p>
<p>Unid. de Medida: {{$produto->sigla}}</p>
</div>

<div class="text-center" style="padding:20px;">

<a class="btn btn-dark btn-lg" href="{{route('produtos.edit', $produto->id)}}">Editar</a>

<a class="btn btn-dark btn-lg" href="{{route('produtos.index')}}">Voltar</a>

<form name="frmDelete" action="{{route('produtos.destroy', $produto->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão do produto?');">
</div>

@csrf
@method('DELETE')

<input type="submit" value="Excluir">
</form>


@endsection
