@extends('backoffice.layouts.basico')

@section('conteudo')

<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3>Livros</h3>
            <br>
            <table class="w-100">
                <tr>
                    <th>Imagem</th>
                    <th>Titulo</th>
                    <th>Texto</th>
                    <th>Data Actualização</th>
                    <th>Acções</th>
                </tr>
                @foreach($livros as $l)
                    <tr>
                        <td><img class="imagem" src="{{ asset($l->imagem) }}" alt=""></td>
                        <td>{{ $l->titulo }}</td>
                        <td>{{ substr($l->texto, 0, 100) }}...</td>
                        <td>{{ $l->updated_at }}</td>
                        <td>
                            <a href="{{ route('livros.edit', ['livro' => $l->id]) }}">
                                <button>Editar</button>
                            </a>
                            <br>
                            <form action="{{ route('livros.destroy', ['livro' => $l->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="APAGAR">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <br><br>
            <a href="{{ route('livros.create') }}">
                <button>Criar Novo Livro</button>
            </a>
        </div>
    </div>
    
</main>

@endsection