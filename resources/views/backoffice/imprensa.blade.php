@extends('backoffice.layouts.basico')

@section('conteudo')

 <main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3>Imprensa</h3>
            <br>
            <table class="w-100">
                <tr>
                    <th>Imagem</th>
                    <th>Titulo</th>
                    <th>Texto</th>
                    <th>Data Publicação</th>
                    <th>Acções</th>
                </tr>
                @foreach($imprensa as $i)
                    <tr>
                        <td><img class="imagem" src="{{ asset($i->imagem) }}" alt=""></td>
                        <td>{{ $i->titulo }}</td>
                        <td>{{ $i->texto }}</td>
                        <td>{{ $i->created_at }}</td>
                        <td>
                            <a href="{{ route('imprensa.edit', ['imprensa' => $i->id]) }}">
                                <button>Editar</button>
                            </a>
                            <br>
                            <form action="{{ route('imprensa.destroy', ['imprensa' => $i->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="APAGAR">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <br>
            <a href="{{ route('imprensa.create') }}">
                <button>Criar Nova Postagem</button>
            </a>
        </div>
    </div>
</main>

@endsection