<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Livros</title>
</head>

<body>
    @extends('layout')
    @section('content')

    <div class="container">
        <div class="card-header">
            <h1 class="mt-4 mb-4">Cadastro de Livros</h1>
        </div>

        <form action="{{route('livros.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nome" class="form-label">Autor:</label>
                <input type="text" name="autor" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nome" class="form-label">Quantidade:</label>
                <input type="text" name="quantidade" class="form-control">
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

        </form>
    </div>
    @endsection
</body>

</html>