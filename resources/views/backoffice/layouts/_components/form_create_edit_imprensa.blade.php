@if(isset($imprensa->id))
<form action="{{ route('imprensa.update', ['imprensa' => $imprensa->id]) }}" method="POST">
    @csrf
    @method('PUT')
@else
    <form action="{{ route('imprensa.store') }}" method="POST">
    @csrf
@endif
    <label for="">Link da imagem da publicação:</label>
    <br>
    <input type="text" name="imagem" value="{{ isset($imprensa->imagem) ? $imprensa->imagem : '' }}">
    <a href="tiny/tinyfilemanager.php" target="_blank">
        <img src="{{ asset('SVG/file.svg') }}" class="file_manager" alt="">
    </a>
    <br><br>
    <label for="">Titulo da publicação:</label>
    <br>
    <input type="text" name="titulo" value="{{isset($imprensa->titulo) ? $imprensa->titulo : '' }}">
    <br><br>
    <label for="">Texto da publicação:</label>
    <br>
    <textarea name="texto" id="editor" cols="30" rows="10">{{ isset($imprensa->texto) ? $imprensa->texto : '' }}</textarea>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <br><br>
    <label for="">Data da publicação:</label>
    <br><br>
    <input type="submit" value="{{ (Request::is('backoffice/imprensa/create')) ? "Criar" : "Editar" }}">
</form>