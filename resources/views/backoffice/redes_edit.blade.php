@extends('backoffice.layouts.basico')

@section('conteudo')

<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3>Redes Sociais</h3>
            <br>
            <form action="{{ route('redes.update', ['rede' => $rede->id]) }}" method="POST">
                @csrf
                @method('PUT')
                    <label for="">{{ $rede->nome }}</label>
                    <br>
                    <input type="text" name="link" value="{{ $rede->link }}">
                    <br><br>
                <input type="submit" value="Editar Rede Social">
            </form>
            <br>
            <p style="color: white; font-size: 22px;">{{ $msg }}</p>
        </div>
    </div>
    
</main>

@endsection