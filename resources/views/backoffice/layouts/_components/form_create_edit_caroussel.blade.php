@if(isset($caroussel->id))
<form action="{{ route('caroussel.update', ['caroussel' => $caroussel->id]) }}" method="POST">
    {{ var_dump($caroussel->id) }}
    @csrf
    @method('PUT')
@else
    <form action="{{ route('caroussel.store') }}" method="POST">
    @csrf
@endif
    <label for="">Link da imagem desktop do Banner:</label>
    <br>
    <input type="text" name="imagem" value="{{ isset($caroussel->imagem) ? $caroussel->imagem : '' }}">
    <a href="tiny/tinyfilemanager.php" target="_blank">
        <img src="{{ asset('SVG/file.svg') }}" class="file_manager" alt="">
    </a>
    <br><br>
    <label for="">Link da imagem mobile do Banner:</label>
    <br>
    <input type="text" name="imagem_mobile" value="{{ isset($caroussel->imagem_mobile) ? $caroussel->imagem_mobile : '' }}">
    <a href="tiny/tinyfilemanager.php" target="_blank">
        <img src="{{ asset('SVG/file.svg') }}" class="file_manager" alt="">
    </a>
    <br><br>
    <label for="">Titulo do Banner</label>
    <br>
    <input type="text" name="titulo" value="{{ isset($caroussel->titulo) ? $caroussel->titulo : '' }}">
    <br><br>
    <label for="">Subtitulo do Banner:</label>
    <br>
    <textarea name="texto" cols="80" rows="10">{{isset($caroussel->texto) ? $caroussel->texto : '' }}"</textarea>
    <br><br>
    <label for="">Tag</label>
    <br>
    <input type="text" name="tag" value="{{ isset($caroussel->tag) ? $caroussel->tag : '' }}">
    <br><br>
    <label for="">Link do Saber Mais:</label>
    <br>
    <input type="text" name="saber_mais" value="{{ isset($caroussel->saber_mais) ? $caroussel->saber_mais : '' }}">
    <br><br>
    <input type="submit" value="{{ (Request::is('backoffice/caroussel/create')) ? "Criar" : "Editar" }}">
</form>