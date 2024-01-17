<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    @extends('layout')
    @section('content')

    <div class="container">
        <div class="card-header">
            <h1 class="mt-4 mb-4">Editar Livro</h1>
        </div>
       
        <form action="{{route('livros.update', ['id'=>$livro->id])}}" method="POST">
            @csrf
            @method('PUT')
            
            <div>
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{$livro->nome}}">
            </div>

            <div>
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" name="autor" class="form-control" value="{{$livro->autor}}">
            </div>

            <div>
                <label for="quantidade" class="form-label">Quantidade:</label>
                <input type="text" name="quantidade" class="form-control" value="{{$livro->quantidade}}">
            </div>

            <button type="submit" class=" mb-4 mt-4 btn btn-primary">Atualizar</button>
        </form>

        <a href="{{route('livros.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
    @endsection
</body>
</html>