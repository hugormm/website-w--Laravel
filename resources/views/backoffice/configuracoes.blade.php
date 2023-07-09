@extends('backoffice.layouts.basico')

@section('conteudo')

<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3>Configurações</h3>
            <br>
            <form action="{{ route('configuracoes.update', ['configuraco' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="">Senha actual:</label>
                <br>
                <input type="text" name="senha_actual" style="width: 20%;">
                <br><br>
                <label for="">Nova senha: </label>
                <br>
                <input type="text" name="nova_senha" style="width: 20%;">
                <br><br>
                <input type="submit" value="Editar Configurações">
            </form>
            <br>
            <p style="color: red; font-size: 22px;"">{{ $msg }}</p>
        </div>
    </div>
    
</main>

@endsection