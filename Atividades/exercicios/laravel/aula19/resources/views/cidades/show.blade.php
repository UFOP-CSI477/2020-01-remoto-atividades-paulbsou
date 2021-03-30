<div class="jumbotron text-center" style="padding: 30px;">
        <h1>Informações das Cidades</h1>
</div>

@extends ('principal')


@section('conteudo')
<div class="container p-3 badge-secondary text-light"><p>Id: {{ $cidade->id }}</p>
<p>Nome: {{ $cidade->nome }}</p>
<p>Estado: {{ $cidade->estado->nome }}</p>

<a href="{{route('cidades.edit', $cidade->id)}}">Editar</a>
<a href="{{ route('cidades.index') }}">Voltar</a>

<form name="frmDelete"
      action="{{route('cidades.destroy', $cidade->id)}}"
      method="post"
      onsubmit="return confirm('Confirma exclusão da cidade?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

</form>
@endsection
