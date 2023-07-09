@extends('backoffice.layouts.basico')

@section('conteudo')

<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3>Redes Sociais</h3>
            <br>
                @foreach($redes as $rede)
                    <p>{{ $rede->nome }}</p>
                    <br>
                    <p>{{ $rede->link }}</p>
                    <br><br>
                    <a href="{{ route('redes.edit', ['rede' => $rede->id]) }}">
                        <button>Editar</button>
                    </a>
                @endforeach
            <br>
            
        </div>
    </div>
    
</main>

@endsection