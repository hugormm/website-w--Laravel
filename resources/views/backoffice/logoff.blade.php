@extends('backoffice.layouts.basico')

@section('conteudo')

    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row box mt-3 w-75 p-4 text-center">
            <div class="col">
                <h5>Sessão Terminada</h5>
                <a href="{{ route('site.home') }}">
                    <button>Voltar ao Site</button> 
                </a>
            </div>
        </div>
    </main>

@endsection