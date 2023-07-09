@extends('backoffice.layouts.basico')

@section('conteudo')

    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Autor</h3>
                <br>
                <img class="imagem_autor" src="{{ asset($autor->foto) }}" alt="">
                <br><br>
                <p>{{ $autor->texto }}</p>
                <a href="{{ route('autor.edit', ['autor' => $autor]) }}">
                    <button>Editar</button>
                </a>
            </div>
        </div>  
    </main>

@endsection