@extends('principal')

@section('conteudo')

<div class="jumbotron text-center" style="padding: 30px;">
    <h1>Produtos</h1>
  </div>

      <div class="container p-3 badge-secondary text-light">
        {{$dados}}
</div>

</body>
</html>
@endsection
