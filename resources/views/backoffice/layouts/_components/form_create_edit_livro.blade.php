@if(isset($livro->id))
<form action="{{ route('livros.update', ['livro' => $livro->id]) }}" method="POST">
    @csrf
    @method('PUT')
@else
    <form action="{{ route('livros.store') }}" method="POST">
    @csrf
@endif
    <label for="">Link da imagem do Livro:</label>
    <br>
    <input type="text" name="imagem" value="{{ isset($livro->imagem) ? $livro->imagem : '' }}">
    <a href="tiny/tinyfilemanager.php" target="_blank">
        <img src="{{ asset('SVG/file.svg') }}" class="file_manager" alt="">
    </a>
    <br><br>
    <label for="">Titulo do Livro</label>
    <br>
    <input type="text" name="titulo" value="{{ isset($livro->titulo) ? $livro->titulo : '' }}">
    <br><br>
    <label for="">Texto do Livro:</label>
    <br>
    <textarea name="texto" id="editor" cols="30" rows="10">{{ isset($livro->texto) ? $livro->texto : '' }}</textarea>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <br><br>
    <input type="submit" value="{{ (Request::is('backoffice/livros/create')) ? "Criar" : "Editar" }}">
</form>