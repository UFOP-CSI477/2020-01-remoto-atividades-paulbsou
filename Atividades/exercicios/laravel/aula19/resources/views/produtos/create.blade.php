@extends ('principal')

@section('conteudo')

    <form action="{{route('produtos.store')}}" method="post">

    @csrf

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input required type="text" name="nome" id="nome" placeholder="Nome do produto" value="" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="um">Unidade de Medida:</label>
        <input required type="text" name="um" id="um" placeholder="Ex. Kg, Lt, Pç, Un" class="form-control">
    </div>


    <div class="text-center">
        <input type="submit" value="Cadastrar" class="btn btn-dark btn-lg">
        <input type="reset" value="Limpar" class="btn btn-dark btn-lg">
    </div>

    </form>

@endsection
