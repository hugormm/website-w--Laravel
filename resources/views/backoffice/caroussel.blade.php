@extends('backoffice.layouts.basico')

@section('conteudo')

<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3>Caroussel</h3>
            <br>
            <table class="w-100">
                <tr>
                    <th>Imagem Desktop</th>
                    <th>Imagem Mobile</th>
                    <th>Titulo</th>
                    <th>Texto</th>
                    <th>Data Actualizacao</th>
                    <th>Accoes</th>
                </tr>
                @foreach($cabecalho as $c)
                    <tr>
                        <td><img class="imagem" src="{{ asset($c->imagem) }}" alt=""></td>
                        <td><img class="imagem" src="{{ asset($c->imagem_mobile) }}" alt=""></td>
                        <td>{{ $c->titulo }}</td>
                        <td>{{ $c->texto }}</td>
                        <td>{{ $c->updated_at }}</td>
                        <td>
                            <a href="{{ route('caroussel.edit', ['caroussel' => $c->id]) }}">
                                <button>Editar</button>
                            </a>
                            <br>
                            <form action="{{ route('caroussel.destroy', ['caroussel' => $c->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="APAGAR">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <br>
            <a href="{{ route('caroussel.create') }}">
                <button>Criar Novo Banner</button>
            </a>
        </div>
    </div>
</main>

@endsection