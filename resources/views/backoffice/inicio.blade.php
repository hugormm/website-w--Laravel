@extends('backoffice.layouts.basico')

@section('conteudo')

<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3> BEM VINDO(A) {{ strtoupper($_SESSION["nome"]) }}</h3>
            <br>
            <h5>Ultimo acesso: ({{ $ultimo_acesso }})</h5>
        </div>
    </div>
    
</main>

@endsection