@extends('backoffice.layouts.basico')

@section('conteudo')

<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3>Home</h3>
            <br>
            <img class="imagem_autor" src="{{ asset($home->imagem) }}" alt="">
            <br><br>
            <p>{{ $home->texto }}</p>
            <a href="{{ route('home.edit', ['home' => $home]) }}">
                <button>Editar</button>
            </a>
        </div>
    </div>  
</main>

@endsection