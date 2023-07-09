@extends('backoffice.layouts.basico')

@section('conteudo')

<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3>Editar Home</h3>
            <br>
            <form action="{{ route('home.update', ['home' => $home]) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="">Link da foto da pagina Home: </label>
                <br>
                <input type="text" name="imagem" value="{{ $home->imagem }}">
                <a href="tiny/tinyfilemanager.php" target="_blank">
                    <img src="{{ asset('SVG/file.svg') }}" class="file_manager" alt="">
                </a>
                <br><br>
                <label for="">Texto sobre os ultimos livros:</label>
                <br>
                <textarea name="texto" id="editor" cols="30" rows="10">{{ $home->texto }}</textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                <br><br>
                <input type="submit" value="Editar">
            </form>
            <br>
            <p style="color: white; font-size: 22px;">{{ $msg }}</p>
            <br>
            <a href="{{ route('home.index') }}">
                <button>Voltar</button>
            </a>
        </div>
    </div>
    
</main>

@endsection