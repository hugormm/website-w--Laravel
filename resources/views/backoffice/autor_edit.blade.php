@extends('backoffice.layouts.basico')

@section('conteudo')

    <main class="container-fluid d-flex flex-column align-items-center gap-4">
        <div class="row w-75">
            <div class="col-12 box mt-3 p-4 text-center">
                <h3>Editar Autor</h3>
                <br>
                <form action="{{ route('autor.update', ['autor' => $autor]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="">Link da foto do Autor: </label>
                    <br>
                    <input type="text" name="foto" value="{{ $autor->foto }}">
                    <a href="tiny/tinyfilemanager.php" target="_blank">
                        <img src="{{ asset('SVG/file.svg') }}" class="file_manager" alt="">
                    </a>
                    <br><br>
                    <label for="">Texto sobre o Autor:</label>
                    <br>
                    <textarea name="texto" id="editor" cols="30" rows="10">{{ $autor->texto }}</textarea>
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
                <a href="{{ route('autor.index') }}">
                    <button>Voltar</button>
                </a>
            </div>
        </div>
        
    </main>

@endsection