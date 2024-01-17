<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>

<body>
    @extends('layout');
    @section('content')

    <div class="container">
        <div class="card-header">
            <h1 class="mt-4 mb-4">Lista de Livros</h1>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Detalhes</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                <tr>
                    <td>{{ $livro->nome }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->quantidade }}</td>
                    <td><a href="{{ route('livros.show', ['id' => $livro->id]) }}" class="btn btn-info">Detalhes</a></td>

                    <td><a href="{{ route('livros.edit', ['id' => $livro->id]) }}" class="btn btn-warning">Editar</a></td>

                    <td>
                        <form action="{{ route('livros.destroy', ['id' => $livro->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        
        <a href="{{ route('livros.create')}}" class="mt-4 btn btn-secondary">Inserir livro</a>
    </div>
</body>

</html>
