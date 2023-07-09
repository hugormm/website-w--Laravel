@extends('backoffice.layouts.basico')

@section('conteudo')

<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3> Contactos</h3>
            <br>
            <form action="{{ route('contactos.update', ['contacto' => $contactos])}}" method="POST">
                @csrf
                @method('PUT')
                <label for="">Morada</label>
                <br>
                <input type="text" name="morada" value="{{ $contactos->morada }}">
                <br><br>
                <label for="">Telefone</label>
                <br>
                <input type="text" name="telefone" value="{{ $contactos->telefone }}">
                <br><br>
                <label for="">E-mail</label>
                <br>
                <input type="text" name="email" value="{{ $contactos->email }}">
                <br><br>
                <label for="">Horario</label>
                <br>
                <input type="text" name="horario" value="{{ $contactos->horario }}">
                <br><br>
                <input type="submit" value="Editar Contactos">
            </form>
            <br>
            <p style="color: white; font-size: 22px;">{{ $msg }}</p>
        </div>
    </div>
    
</main>

@endsection