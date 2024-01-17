<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
</head>
<body>
    @extends('layout')
    @section('content')
    <div class="container">
        <div class="card-header">
            <h1 class="mb-4 mt-4">Detalhes do livro</h1>
        </div>

        <div class="mb-4">
            <label class="form-label">Nome:</label>
            <p class="form-control-static">{{$livro->nome}}</p>
        </div>
        
        <div class="mb-4">
            <label class="form-label">Autor:</label>
            <p class="form-control-static">{{$livro->autor}}</p>
        </div>
        
        <div class="mb-4">
            <label>Quantidade:</label>
            <p>{{$livro->quantidade}}</p>
        </div>

        <a href="{{route('livros.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
    @endsection
</body>
</html>