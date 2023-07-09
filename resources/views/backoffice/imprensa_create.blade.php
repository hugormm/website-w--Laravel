@extends('backoffice.layouts.basico')

@section('conteudo')

<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3>Criar Publicacao</h3>
            <br>
            @component('backoffice.layouts._components.form_create_edit_imprensa', ['imprensa' => $imprensa])
            @endcomponent
            <br>
            <p style="color: white; font-size: 22px;">{{ $msg }}</p>
            <br>
            <a href="{{ route('imprensa.index')}}">
                <button>Voltar</button>
            </a>
        </div>
    </div>
</main>

@endsection