@extends('backoffice.layouts.basico')

@section('conteudo')

<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3>Editar Destaque</h3>
            {{ var_dump($id) }}
            <br>
            <form action="{{ route('destaques.update', ['destaque' => $id]) }}" method="POST">
                @csrf
                @method('PUT')
                <select name="id_livro">
                    <option value="0">---</option>
                    @foreach($livros as $l)
                        <option value="{{ $l->id }}">{{ $l->titulo }}</option>
                    @endforeach
                </select>
                <br><br>
                <label for="">Observação:</label>
                <br>
                <input type="text" name="observacao" value="{{ $home->{'observacao_'.$id} }}">
                <br><br>
                <input type="submit" value="Editar">
            </form>
            <br>

            <p style="color: white; font-size: 22px;">{{ $msg }}</p>

            <br>
            <a href="{{ route('destaques.index') }}">
                <button>Voltar</button>
            </a>
        </div>
    </div>
    
</main>

@endsection